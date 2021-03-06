<?php
class Controller {
    protected $_model,
              $_controller,
              $_action;
    
    public    $cfg,
              $view,
              $table,
              $id,
              $db,
              $userValidation;
            
              
    
    public function __construct($model="Model", $controller="Controler", $action="index") {
        // register configurations
        global $cfg;

        // set config
        $this->cfg = $cfg;
        
        // construct MVC
        $this->_controller = $controller;
       
        $this->_action = $action;
		// initialise the template class
        $this->view = new Template($controller, $action);   
		// call the function for derived class      
        $this->init();
		// start contruct models
        $this->_model = new $model($this->db);
      
        $this->_model->controller = $this;
        $this->table = $controller;
        $this->base_url = __DIR__; 
    }
    
    /**
    * Initialize the required classes and variables
    */
    protected function init(){
     /* Put your code here*/
    }
    
    /**
    * Redirect to action
    */
    public function redirectToAction($action, $controller = false, $params = array()){        
        if($controller === false){
            $controller = get_called_class();  
        }else if(is_string($controller) && class_exists($controller.'Controller')){
            $controller = $controller.'Controller';
            $controller = new $controller();
        }
        return call_user_func_array(array($controller, $action), $params);
    }
 
   /**
    * process default action view
    */
    public function defaultAction($params = null){
    	// make the default action path
		$path = MyHelpers::UrlContent("~/views/{$this->_controller}/{$this->_action}.php");		
        // if we have action name
		if(file_exists($path)){
            $this->view->viewPath = $path;
        }else{
        	$this->unknownAction();
        }
		// if we have paramaters
		if(!empty($params) && is_array($params)){
	        // assign local variables
	        foreach($params as $key=>$value){
	         $this->view->set($key, $value);   
	        }
		}
        // dispatch the result
        return $this->view();
    }
    /**
    * unknownAction
    */
    public function unknownAction($params = array()){
    	// feed 404 header to the client
        header("HTTP/1.0 404 Not Found");
		// find custom 404 page
		$path = MyHelpers::UrlContent("~/views/shared/_404.php");
		// if we have custom 404 page, then use it
		if(file_exists($path)){
			$this->view->viewPath = $path;
			return $this->view();
		}else{
			exit; //Do not do any more work in this script.	
		}
    }
    
    
    /**
    * set the variables
    */
    public function set($name,$value) {
    	// set the paramaters to the template class
        $this->view->set($name, $value);
    }

	    
    /**
    * Returns the template result
    */
    public function view(){
    	// dispatch the result of the template class
        return $this->view;
    }
}
