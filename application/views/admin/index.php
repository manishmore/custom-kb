<?php 
echo "ADMIN.php";
$this->layout = '~/views/shared/_defaultLayout.php';
//$this->section['head']='<script src="http://code.jquery.com/jquery-latest.min.js"></script>'; 
?>
<div class="block bgWhite">
	<div class="content">
		<img src="http://craftylilfox.com/blog/wp-content/uploads/2013/09/below-header-banner.png" width="990" alt="" />
	</div>
</div>
<div class="block bgBlack">
	<div class="content">
		<div class="col">
			<h2>Service 1</h2>
			<?php include(MyHelpers::UrlContent('~/views/shared/_text1Part.php')); ?>
		</div>
		<div class="col category">
			<h2>Service 2</h2>
			<?php include(MyHelpers::UrlContent('~/views/shared/_text1Part.php')); ?>
		</div>
		<div class="col category">
			<h2>Service 3</h2>
			<?php include(MyHelpers::UrlContent('~/views/shared/_text1Part.php')); ?>
		</div>
	</div>	
</div>

<div class="block bgWhite">
	<div class="content">
		<div class="col">
			<img src="http://ww2.servicestack.net/wp-uploads/2010/06/asp-net-mvc.png" height="220" alt="" />
		</div>
		<div class="col" style="max-width:700px;">
			<h2>News</h2>
			<?php include(MyHelpers::UrlContent('~/views/shared/_text2Part.php')); ?>
		</div>
	</div>
</div>
