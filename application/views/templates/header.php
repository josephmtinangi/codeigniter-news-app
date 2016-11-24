<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?=$title?></title>
		<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/css/bootstrap.min.css';?>">
		<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/css/style.css';?>">
	</head>
	<body>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=base_url()?>">Alpha News</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?=site_url().'/news'?>">Browse</a></li>
					<li><a href="<?=site_url().'/news/create'?>">Post News</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?=site_url().'/pages/view/about'?>">About</a></li>
					<li><a href="<?=site_url().'/pages/view/contact'?>">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div class="well well-lg">
		
	