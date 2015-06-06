<?php

$this->layout = '~/views/shared/_defaultLayout.php';
?>

<?php
if(isset($_GET['extjs']) && $_GET['extjs'] == true){
?>
<div class="block bgWhite">
	<div class="content"><div id='bloglist'></div></div>
</div>
<?php } else { ?>
<div class="block bgWhite">
	<div class="content">
		<img src="http://catalizt.com/wp-content/uploads/2013/07/blog-banner.jpg" width="990" alt="" />
	</div>
	<div class="content">
		<?php foreach($items as $item){ ?>
		<a href="./vendor/detail/<?php echo $item['id'];?>">
			<h1 style="font-size: 20px; font-weight: bold; margin-bottom:5px;"><?php echo $item['title']; ?></h1>
		</a>	
		<div>
			<?php echo substr($item['content'], 0, 750).' [...]'; ?>
			<span style="float:right;padding-top:10px;"><?php echo $item['last_update']; ?></span>
		</div>
		<hr style="margin: 10px 0px;">
		<?php }?>
		<span style="float:right;margin-top:20px;"><a href="/mvc/blog/create/"> New Article</a></span>
	</div>
</div><?php }
?>
