<?php
/*
Template Name: Screenwriting
*/
?>
<?php get_header(); ?>
<div id="FS-wrapper">
<div id="content" class="row">
	<div id="main" class="col-md-8" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php simple_boostrap_display_post(false); ?>
		<?php comments_template('',true); ?>
		<?php endwhile; ?>		
		<?php else : ?>
		<article id="post-not-found" class="block">
		    <p><?php _e("No pages found.", "simple-bootstrap"); ?></p>
		</article>
		<?php endif; ?>
	</div>
	<div class="col-md-4">
		<h2 style="margin-top: 60px;">REFERENCES&#42;</h2>
			<h3>Tom Bancroft</h3>
			<h4>Former Disney Supervising Animator, Director, Author, Character Designer</h4>
			<p>"Stephen Fox is one of those creators that is chock full of ideas that you want to see...[His brilliance should never be wasted only on] himself or one or two people. It should be shouted from mountain tops! </p>
			<hr>
			<h3>Andrew Bissell</h3>
			<h4>Recording & Licensing Artist at Peer Music</h4>
			<p>"I've worked with Steve Fox for several years, and each time it was nothing short of a pleasure. Always positive and optimistic, brightening the mood, all the while displaying competence and excellence at whatever job was in front of him. </p>
			<hr>
			<p style="font-size: 11px;color: #999;font-style:italic;"><sup>&#42;</sup>Due to privacy concerns, I only furnish contact information for my contacts upon request and with their permission.</p>
			<h2>Contact me...</h2>
	<?php echo do_shortcode('[ninja_form id=1]'); ?>
	</div>
</div>
</div>
<?php get_footer(); ?>