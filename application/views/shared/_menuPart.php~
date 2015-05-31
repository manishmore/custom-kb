<?php
	$pages = array();
	$pages["index"]="Home";
	$pages["blog"]="Blog";
	$pages["contact"]="Contact";
	$pages["about"]="About";	
?>
<nav>
	<ul>
		<?php foreach($pages as $link=>$title) {
				 $current = ($this->_controller==$link) ? " class='current'" : "";
				 $addr = $link == 'index' ? '' : $link;
				 $BSAE_PATH = $cfg['site']['address'];
				 echo "<li{$current}><a class='link' href='{$BSAE_PATH}/mvc/{$addr}'>{$title}</a></li>";
		      }			
		?>
	</ul>		
</nav>		
