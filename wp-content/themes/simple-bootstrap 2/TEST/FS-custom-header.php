<!doctype html>  

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href='https://fonts.googleapis.com/css?family=Martel:400,900,800,700,600,300,200' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,300,200' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>        
	
<body <?php body_class(); ?>>
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
				<a class="navbar-brand" title="<?php //bloginfo('description'); ?>" href="<?php echo esc_url(home_url('/')); ?>"><?php // bloginfo('name'); ?><img src="http://foxstorytelling.com/wp-content/uploads/2017/08/FOXstorytelling-BN.jpg" height="45px" width="75px" style="padding-top: 5px;" />
				</a>
<a style="text-align:center;margin-top:15px;" class="visible-xs visible-sm" href="/cart"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></a>
			</div>
			<?php if (has_nav_menu("main_nav")): ?><a style="float:right;margin-top:15px;" class="visible-lg visible-md" href="/cart"><i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></a>
			<div id="navbar-responsive-collapse" class="collapse navbar-collapse">
				<?php simple_bootstrap_display_main_menu(); ?>
			</div>
			<?php endif ?>
		</div>
	</nav>
	<div id="content-wrapper" class="container-fluid">
		<header>
		</header>
		<div class="logo-home container-fluid">
			<div class="row" id="carousel-fox">
<!-- Custom Bootstrap Carousel - Stephen Fox mods -->
				<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
<!-- Indicators -->
					<ol class="carousel-indicators">
    					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  					</ol>
<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
    					<div class="item active">
							<img class="img-responsive home-slide" src="https://foxstorytelling.com/wp-content/uploads/2016/04/path_slide-e1461975491581.jpg" alt="The Path">
      						<div class="carousel-caption col-md-4 col-sm-4">
        						<h2 class="visible-lg">An original fairy tale for the modern era</h2>
        						<p class="visible-lg visible-md">Follow progress as the story of <i>The Path</i> takes shape from outline to sketch
        						to illustration to published work.
        						</p>
        						<a class="btn hvr-fade btn-primary" href="https://www.foxstorytelling.com/category/the-path">
        							DISCOVER <i>The Path</i>
        							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        						</a>
      						</div>
    					</div>
    					<div class="item">
      						<img class="img-responsive" src="https://foxstorytelling.com/wp-content/uploads/2016/04/nex_slide.jpg" alt="The Path">

      						<div class="carousel-caption col-md-4 col-sm-4">
        						<h2 class="visible-lg"><br><br>The World's First Redneck Super-Team</h2>
        						<p class="visible-lg visible-md">These guys aren't the same old sqare-jawed building-leapers...They're Superheroes for the Rest of Us.
        						</p>
        						<a class="btn btn-primary hvr-fade" href="https://www.foxstorytelling.com/category/nex">
        							DISCOVER <i>NEX</i>
        							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        						</a>
      						</div>
    					</div>
    					<div class="item">
      						<img src="https://foxstorytelling.com/wp-content/uploads/2016/04/lelaSlide.jpg" alt="...">
       						<div class="carousel-caption text-left col-md-4 col-sm-5">
        						<h2 class="visible-lg"><br><br>A Story About Gratitude, Love, & Sacrifice</h2>
        						<p class="visible-lg visible-md">Follow Lela as she crawls through a magical nook and discovers her world is bigger than her frustrations with her new house.<br><br>
        						</p>
        						<a class="btn btn-primary hvr-fade" href="https://foxstorytelling.com/lelas-tree/">
        							DISCOVER <i>Lela's Tree</i>
        							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        						</a>
      						</div>
    					</div>
  					</div>
<!-- Controls -->
  					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
  					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>
				</div>
<!-- SUB CAROUSEL -->
			</div>
		</div>
	</div>
<div class="container-fluid" id="fox-mailchimp" style="background: rgb(170,100,66)">
<div class="col-md-offset-2 col-md-8 text-center style="text-align:center;">
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{color:#FFF; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//foxstorytelling.us3.list-manage.com/subscribe/post?u=62d3e8a0a34453db6f2e30a9c&amp;id=97eef94dcc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll" style="text-align:center;">
	<h1 style="font-family: 'Abril Fatface', cursive;color: rgb(244,218,206);font-size:36px;">Keep up with Fox Storytelling</h1>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" style="color:#999;">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_62d3e8a0a34453db6f2e30a9c_97eef94dcc" tabindex="-1" value="" style="color: #999;"></div>
    <div class="clear" background:#000;><input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button" style="color:#FFF;background: #000;font-weight: 900;"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
</div>
</div>


<div id="home-feed-title" class="container-fluid">
Recent Blog Entries
</div>
<div class="container" id="home-feed">
<div class="row" id="main" role="main">
	<?php if (have_posts()) : ?>
 	<?php query_posts('posts_per_page=2'); ?>
	<?php while (have_posts()) : the_post(); ?>	
	<div id="" class="col-md-6 col-xs-6" role="">	
		<?php simple_boostrap_display_post(true); ?>
		<span class="feature-continue">
			<a class="more-story" href="<?php the_permalink(); ?>">
					CONTINUE THE STORY 
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
			</a>
		</span>	
	</div>	
	<?php endwhile; ?>						
	<?php else : ?>			
	<article id="post-not-found" class="">
	   <p>
	   <?php _e("No items found.", "simple-bootstrap"); ?></p>
	</article>			
	<?php endif; ?>	
</div>
</div>





<div class="container-fluid" style="margin-top:-20px;">
    <div class="row" id="fox-faq">
	<div class="col-md-4 col-md-offset-4">
	<button class="btn btn-primary about-foxstorytelling" type="button" data-toggle="collapse" data-target="#aboutFoxStorytelling" aria-expanded="false" aria-controls="aboutFoxStorytelling" style="text-align: center;margin: 0px auto;">
  					What is Fox Storytelling? <span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span>
				</button>
			</div>
			<!--<div class="col-md-4">
				<button class="btn btn-primary about-foxstorytelling" type="button" data-toggle="collapse" data-target="#aboutFoxStorytelling-2" aria-expanded="false" aria-controls="aboutFoxStorytelling" style="text-align: center;margin: 0px auto;">
  					What is Fox Storytelling? <span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span>
				</button>
			</div>
			<div class="col-md-4">
				<button class="btn btn-primary about-foxstorytelling" type="button" data-toggle="collapse" data-target="#aboutFoxStorytelling-3" aria-expanded="false" aria-controls="aboutFoxStorytelling" style="text-align: center;margin: 0px auto;">
  					What is Fox Storytelling? <span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span>
				</button>
			</div>	-->					
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="collapse" id="aboutFoxStorytelling">
  					<div class="well" style="">
    					<h3>Fox Storytelling is me, <b>Stephen Fox.</h3></b>
    					<p>I often say "storytelling is what I'm <i>best</i> at." When I say that, I'm not speaking in a competitive context; There are more skilled writers and artists to be sure. Storytelling though, is the best of me. This site offers a window into the various sorts of stories I love to share.
    					<br><br></p>
    					<a href="mailto:steve@foxstorytelling.com" class="btn btn-primary about-foxstorytelling" style="border-radius: 3px;
    					background: #0FB2BA;color:#FFF;">EMAIL ME
    					</a>
    					<button class="btn btn-primary about-foxstorytelling" type="button" data-toggle="collapse"
    						data-target="#aboutFoxStorytelling" aria-expanded="false" aria-controls="aboutFoxStorytelling"
							style="text-align: center;margin: 0px auto;">
  							CLOSE
  							<span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span>
    					</button>
  					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="collapse" id="aboutFoxStorytelling-2">
  				<div class="well" style="margin-top: 10px;border-radius: 3px;">
    				<img src="" style="border-radius: 200px;text-align:center;margin:0px auto;" />
    				<p style="font-size: 10px;">
	    			<br>Fox Storytelling is the brand of artist and writer <b>Stephen Fox.</b><br><br>
	    			I've worked developing all types of storytelling for over seventeen years and have written four 100+ page screenplays. I work consistently to create unique and engaging experiences. My illustration work has appeared in over a dozen published books and magazines and is frequently a part of the stories I tell.<br><br>
	    			</p>
    				<a href="mailto:steve@foxstorytelling.com" class="btn btn-primary about-foxstorytelling" style="border-radius: 3px;
    					background: #0FB2BA;color:#FFF;">
	    				EMAIL ME
    				</a>
    				<button class="btn btn-primary about-foxstorytelling" type="button" data-toggle="collapse"
    					data-target="#aboutFoxStorytelling-2" aria-expanded="false" aria-controls="aboutFoxStorytelling"
    					style="text-align: center;margin: 0px auto;">
  						CLOSE
  						<span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span>
    				</button>
  				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="collapse" id="aboutFoxStorytelling-3">
  				<div class="well" style="margin-top: 10px;border-radius: 3px;">
    				<img src="" style="border-radius: 200px;text-align:center;margin:0px auto;" />
    				<p style="font-size: 10px;"><br>Fox Storytelling is the brand of artist and writer <b>Stephen Fox.</b><br><br>
    					I've worked developing all types of storytelling for over seventeen years and have written four 100+ page screenplays. I work consistently to create unique and engaging experiences. My illustration work has appeared in over a dozen published books and magazines and is frequently a part of the stories I tell.<br><br>
    				</p>
    				<a href="mailto:steve@foxstorytelling.com" class="btn btn-primary about-foxstorytelling" style="border-radius: 3px;
    					background: #0FB2BA;color:#FFF;">
	    				EMAIL ME
    				</a>
    				<button class="btn btn-primary about-foxstorytelling" type="button" data-toggle="collapse"
    					data-target="#aboutFoxStorytelling-3" aria-expanded="false" aria-controls="aboutFoxStorytelling"
    					style="text-align: center;margin: 0px auto;">
						CLOSE
						<span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span>
    				</button>
  				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid visible-lg visible-md">
		<div id="front-page-feature" class="feature">
			<div class="row-eq-height" style="background: #FFF;">
				<div class="row row-eq-height" id="">
					<div class="col-md-4 col-sm-4 feature-1 ">							
						<h1>
							<a class="hvr-shrink" href="https://www.foxstorytelling.com/category/writing/">
								<i class="fa fa-keyboard-o" aria-hidden="true"></i>
								<br>WRITING
							</a>
						</h1>
						<div class="feature-content">
							<?php
								query_posts('cat=40&showposts=1');
								while (have_posts()) : the_post();
								the_post_thumbnail();
								the_excerpt();
							?>
							<span class="feature-continue"><a href="<?php the_permalink(); ?>">
							CONTINUE THE STORY <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</span>
							<?php
								endwhile;
							?>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 feature-2">
						<h1>
							<a class="hvr-shrink" href="https://foxstorytelling.com/category/blog/">
								<i class="fa fa-comment-o" aria-hidden="true"></i><br>BLOG
							</a>
						</h1>
						<div class="feature-content">
							<?php
								query_posts('cat=42&showposts=1');
								while (have_posts()) : the_post();
								the_post_thumbnail();
								the_excerpt();
							?>
							<span class="feature-continue">
								<a href="<?php the_permalink(); ?>">CONTINUE THE STORY 
									<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</a>
							</span>
							<?php
								endwhile;
							?>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 feature-3">
						<h1>
							<a class="hvr-shrink" href="https://foxstorytelling.com/category/illustration/">
								<i class="fa fa-pencil" aria-hidden="true"></i><br>ILLUSTRATION
							</a>
						</h1>
						<div class="feature-content">
							<?php
								query_posts('cat=41&showposts=1');
								while (have_posts()) : the_post();
								the_post_thumbnail();
								the_excerpt();
							?>
							<span class="feature-continue">
								<a href="<?php the_permalink(); ?>">CONTINUE THE STORY 
								<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</a>
							</span>
							<?php
								endwhile;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid visible-sm visible-xs">
		<div id="front-page-feature" class="feature">
			<div class="" style="background: #FFF;">
				<div class="row">
					<div class="col-md-4 col-sm-4 feature-1">							
						<h1>
							<a class="hvr-shrink" href="https://www.foxstorytelling.com/category/writing/">
								<i class="fa fa-keyboard-o" aria-hidden="true"></i>
								<br>WRITING
							</a>
						</h1>
						<div class="feature-content">
							<?php
								query_posts('cat=40&showposts=1');
								while (have_posts()) : the_post();
								the_post_thumbnail();
								the_excerpt(); ?>
							<span class="feature-continue"><a href="<?php the_permalink(); ?>">
								CONTINUE THE STORY <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</span>
							<?php
								endwhile;
							?>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 feature-2">
						<h1>
							<a class="hvr-shrink" href="https://foxstorytelling.com/category/blog/">
								<i class="fa fa-comment-o" aria-hidden="true"></i><br>BLOG
							</a>
						</h1>
						<div class="feature-content">
							<?php
								query_posts('cat=42&showposts=1');
								while (have_posts()) : the_post();
								the_post_thumbnail();
								the_excerpt();
							?>
							<span class="feature-continue">
								<a href="<?php the_permalink(); ?>">CONTINUE THE STORY 
									<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</a>
							</span>
							<?php
								endwhile;
							?>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 feature-3">
						<h1>
							<a class="hvr-shrink" href="https://foxstorytelling.com/category/illustration/">
								<i class="fa fa-pencil" aria-hidden="true"></i><br>ILLUSTRATION
							</a>
						</h1>
						<div class="feature-content">
							<?php
								query_posts('cat=41&showposts=1');
								while (have_posts()) : the_post();
								the_post_thumbnail();
								the_excerpt();
							?>
							<span class="feature-continue">
								<a href="<?php the_permalink(); ?>">CONTINUE THE STORY 
								<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</a>
							</span>
							<?php
								endwhile;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>				
	<div id="page-content">
		<div class="container-fluid">