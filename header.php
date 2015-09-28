<?php 
/*
 * The Header
 */

include_once('includes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Intro to Web Development</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Intro to Web Development">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="<?php echo home_url('/assets/style/vendor/normalize.css'); ?>">
	<link rel="stylesheet" href="<?php echo home_url('/assets/style/vendor/foundation.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo home_url('/assets/style/vendor/prism.css'); ?>">
	<link rel="stylesheet" href="<?php echo home_url('/assets/style/vendor/octicons.css'); ?>">
	<link rel="stylesheet" href="<?php echo home_url('/assets/style/style.css'); ?>">
</head>

<body class="language-html">

<div id="page" class="">

	<header class="contain-to-grid sticky">
		<nav class="top-bar" data-topbar role="navigation">
			<ul class="title-area">
				<li class="name">
					<h1><a href="<?php echo home_url(); ?>">Intro to Web Development</a></h1>
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>

			<section class="top-bar-section">
			<!-- Right Nav Section -->
				<ul class="right">
					<li class="has-dropdown">
						<a href="#">Lessons</a>
						<ul class="dropdown">
							<li class="<?php echo menu_class('home'); ?>"><a href="<?php echo home_url(); ?>">Home</a></li>
							<li class="<?php echo menu_class('introduction'); ?>"><a href="<?php echo home_url('#'); ?>">An Introduction</a></li>
							<li class="<?php echo menu_class('basic-elements'); ?>"><a href="<?php echo home_url('/basic-elements/'); ?>">Basic HTML Elements</a></li>
							<li class="<?php echo menu_class('lists-and-style'); ?>"><a href="<?php echo home_url('/lists-and-style/'); ?>">Lists and style</a></li>
						</ul>
					</li>
				</ul>
			</section>
		</nav>
	</header>
