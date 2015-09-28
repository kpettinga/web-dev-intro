<?php
/*
 * Index
 */ 
?>

<?php 
define('SLUG', 'home');
include_once('header.php'); ?>

<div class="row markdown-body">
	
	<div class="column small-12">

		<br/>

		<h1>Learn HTML, CSS, and JavaScript</h1>
		<h3 class="subheader">The languages of the web.</h3>
		<hr/>
		<br/>

		<h2>The Basics</h2>
		<hr/>
		<h3><a href="#">An Introduction</a></h3>
		<h3><a href="<?php echo home_url('/basic-elements/'); ?>">Basic HTML Elements</a></h3>
		<h3><a href="<?php echo home_url('/lists-and-style/'); ?>">Lists and style</a></h3>

	</div>

</div>

<?php include_once('footer.php'); ?>