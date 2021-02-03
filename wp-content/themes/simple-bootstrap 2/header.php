<!doctype html>  
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Martel:400,900,800,700,600,300,200' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,300,200' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Zilla+Slab:400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
</head> 	
<body <?php body_class(); ?>>
	<div id="content-wrapper">
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<!--<div class="row" id="logo-band" style="color: #FFF;text-align:center;padding: 5px;background: #31c5c7;">
					<i><b>FoxStorytelling.com</b> is being retooled<b>&mdash;Summer 2016</b></i>
				</div>-->
				<div class="container">
					<div class="navbar-header">
						<?php if (has_nav_menu("main_nav")): ?>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-responsive-collapse">
		    				<span class="sr-only"><?php _e('Navigation', 'simple-bootstrap'); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php endif ?>
						<a class="navbar-brand" title="<?php //bloginfo('description'); ?>" href="<?php echo esc_url(home_url('/')); ?>"><?php // bloginfo('name'); ?><img src="<?php bloginfo('template_url'); ?>/images/fox-mobile.png" height="inherit" width="75px" style="padding-top: 5px;" />
						</a>
						</div>
					<?php if (has_nav_menu("main_nav")): ?>					
					<div id="navbar-responsive-collapse" class="collapse navbar-collapse">
						<?php
						    simple_bootstrap_display_main_menu();
						?>
					</div>
					<?php endif ?>
				</div>
			</nav>
		</header>
		<div id="page-content">
			<div class="container" id="top-click">