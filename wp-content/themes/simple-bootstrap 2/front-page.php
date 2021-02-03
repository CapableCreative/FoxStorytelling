<?php
/*
Template Name: Full Width Page
*/
?>

<?php 
require_once('header-home.php')
//get_header(); ?>
<div class="hidden-sm hidden-xs">
	<div class="container-fluid" id="FS-home-nav">
		<div class="row">
			<div class="col-md-9" style="background: #000;padding-bottom: 10px;">
				<a href="#top-click" style="float:left !important;padding-top: 5px !important;padding-left:5px;">
					<img style="max-width: 110px;height:inherit;padding-left:30px;padding-top: 0px;position:fixed;z-index: 11;" class="paper-logo" src="<?php bloginfo('template_url'); ?>/images/paper-logo.png" />
				</a>
				<a href="/contact" class="fs-nav-btn hvr-fade">contact</a>
				<a href="#bookshop" class="fs-nav-btn hvr-fade fs-nav-btn-active">bookshop</a>
				<!--<a href="" class="fs-nav-btn hvr-fade" href="/shop">publisher inquiry</a>-->
				<a href="/screenwriting" class="fs-nav-btn hvr-fade">screenwriting</a>
				<a href="#stephens-journal" class="fs-nav-btn hvr-fade">blog</a>
			</div>
			<div class="col-md-3">
				<p class="paper-logo site-summary">The Creative World of <b>Stephen Fox</b></p>
			</div>
		</div>
	</div>

	
	
	<div class="container-fluid" id="home-card">
		<div class="row">
			<div class="col-md-9" id="home-main">
				<div class="row">
					<div class="col-md-4 home-card-logo">
						<a href="http://www.foxstorytelling.com">
							<img class="fs-logo-new hvr-grow" src="<?php bloginfo('template_url'); ?>/images/fs-logo-2018.png" />
						</a>
					</div>
					<div class="col-md-5 home-card-contact">
						<p>the creative world of</p>
						<h1>Stephen Fox</h1>
						<h2>screenwriter &bull; author</h2>
					</div>
					<div class="home-card-contact">
						<p><i>learn more...</i></p>
						<a href="https://www.facebook.com/foxstorytelling" target="_blank" class="hvr-shrink">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
						<a href="https://www.instagram.com/foxstorytelling" target="_blank" class="hvr-shrink">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
	<!------------------ BIO ACCORDIAN -------------------------------->					
						<a href="/about-stephen" class="hvr-shrink">
							<i class="fa fa-plus" aria-hidden="true"></i>
						</a>
	<!------------------ / BIO ACCORDIAN -------------------------------->					
					</div>
				</div>
				<div class="row fs-features">
					<div class="col-md-12" id="FS-feature">
						<?php
							$args = array( 'numberposts' => '1' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
							?>
							<div class="col-md-6 featured-thumb" style="background: url('<?php the_post_thumbnail_url($size='large'); } ?> ') center center no-repeat; background-size: cover;" >
								
							</div>
							<div class="col-md-6 featured-text">
								<div class="col-md-12 latest-article">
									Latest Article
								</div>
								<a href="<?php echo get_permalink(); ?>">
									<h1><?php
										the_title();
										?>
									</h1>
									<?php	
										the_excerpt();	
									?>
									<p class="cont-link"> continue reading >></p>
									<br>
								</a>
<!------------------------- MAILCHIMP SUBSCRIBE ---------------------------- -->								
								
								<!-- Begin Mailchimp Signup Form -->
								<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
									<style type="text/css">
										#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
										/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
										   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
									</style>
									<div id="mc_embed_signup">
										<form action="https://foxstorytelling.us3.list-manage.com/subscribe/post?u=62d3e8a0a34453db6f2e30a9c&amp;id=97eef94dcc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									    <div id="mc_embed_signup_scroll">
										<h2>Read stories in your inbox</h2>
									<div class="mc-field-group">
										<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
									</label>
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
									</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
									    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_62d3e8a0a34453db6f2e30a9c_97eef94dcc" tabindex="-1" value=""></div>
									    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
									    </div>
									</form>
									</div>
									<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
									
								
								
								
							</div>
						<?php
							wp_reset_query();
						?>
						
					</div>
				</div>
				<div class="row fs-next-screen">
					<div class="col-md-12">
						<a href="#bookshop">
							<img class="arrow-down hvr-grow" src="<?php bloginfo('template_url'); ?>/images/arrow-down.png" alt="Continue to the latest Fox Storytelling updates..." />
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 home-nav-blocks">
				<div class="col-md-12 home-nav-block home-nav-block-screenwriting">
					<a href="/screenwriting" class="hvr-fade">
						<i class="fa fa-keyboard-o" aria-hidden="true"></i>
						<h2>screenwriting</h2>
					</a>
				</div>
				<div class="col-md-12 home-nav-block home-nav-block-illustration">
					<a href="#bookshop" class="hvr-fade">
						<i class="fa fa-book" aria-hidden="true"></i>
						<h2>bookshop</h2>
					</a>
				</div>
				<div class="col-md-12 home-nav-block home-nav-block-blog">
					<a href="#stephens-journal" class="hvr-fade">
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<h2>blog</h2>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div id="bookshop"></div>
	<div class="container-fluid fs-home-products">
		<div class="row">
			<div class="col-md-12">
				<h1>BOOKSHOP PREVIEW</h1>
				<?php echo do_shortcode('[products ids="2239, 2233, 2206"]'); ?>
			</div>
		</div>
	</div>
	</div>
<div id="FS-mobile-wrapper" class="hidden-lg hidden-md">
	<nav class="navbar navbar-default navbar-fixed-top">
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
				<a class="navbar-brand" title="<?php //bloginfo('description'); ?>" href="#top-click"><?php // bloginfo('name'); ?><img src="<?php bloginfo('template_url'); ?>/images/fox-mobile.png" height="45px" width="75px" style="padding-top: 5px;" />
				</a>
			</div>
			<!--<a style="text-align:center;margin-top:15px;" class="cart-icon visible-xs visible-sm" href="/cart">
					<i class="fa fa-shopping-cart fa-lg" aria-hidden="true">
					</i>
				</a>-->
	
			<?php if (has_nav_menu("main_nav")): ?>
			<div id="navbar-responsive-collapse" class="collapse navbar-collapse">
				<?php
				    simple_bootstrap_display_main_menu();
				?>
			</div>
			<?php endif ?>
		</div>
	</nav>
	<div class="home-card-contact">
		<a href="https://www.facebook.com/foxstorytelling" target="_blank" class="hvr-shrink">
			<i class="fa fa-facebook" aria-hidden="true"></i>
		</a>
		<a href="https://www.instagram.com/foxstorytelling" target="_blank" class="hvr-shrink">
			<i class="fa fa-instagram" aria-hidden="true"></i>
		</a>
<!------------------ BIO ACCORDIAN -------------------------------->					
		<a href="/about-stephen" class="hvr-shrink">
			<i class="fa fa-plus" aria-hidden="true"></i>
		</a>
<!------------------ / BIO ACCORDIAN -------------------------------->					
	</div>
<!--<div class="row fs-mobile-features">
		<div id="FS-mobile-feature">
			<div class="col-sm-6">
				<a href="http://foxstorytelling.com/category/mermay-2018/">
					<img class="FS-mobile-feature-img img-responsive" src="http://foxstorytelling.com/wp-content/uploads/2018/05/mermay-feature.jpg" alt="MerMay 2018 by Stephen Fox" />	
				</a>
			</div>
			<div class="col-sm-6">
				<a href="http://foxstorytelling.com/category/mermay-2018/">
					<img id="FS-feature-logo" src="<?php bloginfo('template_url'); ?>/images/mermay-logo.png" alt="Current Featured Fox Storytelling Project" />					</a>
				<h1 style="color:#069;">FEATURED PROJECT</h1>
				<p id="FS-feature-copy">
				<b><i>Natural Whimsey</i> is a thoughtfully illustrated coloring book celebrating diverse natural subjects</b> including snails, butterflys, foxes, flowers, dolphins, turtles and more.<br><br>
				</p>
				<p style="text-align: center">
					<a class="fs-red-btn btn hvr-fade" style="" href="http://foxstorytelling.com/category/mermay-2018/">My MerMay Blogs</a><br>
					<a class="fs-blue-btn btn hvr-fade" style="" href="http://www.mermay.com" target="_blank">MerMay.com</a>
				</p>
			</div>
		</div>
	</div> -->
</div>
<div id="stephens-journal" class="container-fluid" style="padding-bottom: 40px;">
	<div class="row">
		<div class="col-md-12">
			<h3 class="section-heading">Journal</h3>
			<h4 style="text-align: center;padding: 0px;margin-top:-5px;letter-spacing: 4px;font-family:'Zilla Slab',sans-serif;color:#999;">"something sincere"</h4>
		</div>
	</div>
	<div id="content" class="row">
		<div id="fs-main" class="col-lg-12 home-blog-feed" role="main">
			<?php 				
				if ( have_posts() ) : while ( have_posts() ) : the_post(); 
				?>
			<article class="article-fade">
	        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<?php the_post_thumbnail(); ?>
			<?php the_excerpt(); ?>
			<?php $link = get_permalink($post->ID);?>

<a href="<?php echo $link; ?>">read more</a>
			</article>
			<?php endwhile; else: ?>
			<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
			<?php endif; ?>
		</div>	
	</div>
</div>


	
<?php 
require_once('footer-home.php')
//get_header(); ?>
