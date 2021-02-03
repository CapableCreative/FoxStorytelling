<?php
/*
Template Name: Screenwriting
*/
?>
<?php get_header(); ?>
<div id="FS-wrapper">
<div id="content" class="row">
	<div id="main" class="col-md-8" role="main" style="padding: 0px 20px;">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php simple_boostrap_display_post(false); ?>
		<?php comments_template('',true); ?>
		<?php endwhile; ?>		
		<?php else : ?>
		<article id="post-not-found" class="block">
		    <p><?php _e("No pages found.", "simple-bootstrap"); ?></p>
		</article>
		<?php endif; ?>
			
		<div class="col-md-12 text-center" style="border-bottom: 1px solid #999;">
			<h2>TOP 5 LISTS</h2>
		</div>
		<div class="col-md-4">
			<h3>COMICS</h3>
			<ol>
				<li>Marvel Team Up &ndash; Red Sonja & Spider-Man</li>
				<li>New Warriors (90s)</li>
				<li>Excalibur (80s)</li>
				<li>ElfQuest</li>
				<li>ZOT!</li>
			</ol>					
		</div>
		<div class="col-md-4">
			<h3>MUSICIANS</h3>
			<ol>
				<li>Brandi Carlile</li>
				<li>Jason Isbell</li>
				<li>Avett Brothers</li>
				<li>Train</li>
				<li>Wild Feathers</li>
			</ol>			
		</div>
		<div class="col-md-4">
			<h3>TV SHOWS</h3>
			<ol>
				<li>Batman the Animated Series</li>
				<li>My Name is Earl</li>
				<li>FACE OFF</li>
				<li>The Muppet Show</li>
				<li>Star Wars the Clone Wars</li>
			</ol>							
		</div>
			
		<div class="col-md-12 text-center">
			<h2>RANDOM FUN</h2>
			<hr>
		</div>
		<div class="col-md-4">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="https://www.youtube.com/embed/iNVSM_FHtFY" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>				
		</div><!-- /row -->	
		<div class="col-md-4">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="https://www.youtube.com/embed/zDZsR7oX9To" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>				
		</div><!-- /row -->		
		<div class="col-md-4">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="https://www.youtube.com/embed/-A--8vtnRn4" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>				
		</div><!-- /row -->				
	</div>
	<div class="col-md-4">
		<h2 style="margin-top: 60px;">REFERENCES&#42;</h2>
			<h3>Tom Bancroft</h3>
			<h4>Former Disney Supervising Animator, Director, Author, Character Designer</h4>
			<p><i>"Stephen Fox is one of those creators that is chock full of ideas that you want to see...[His brilliance should never be wasted only on] himself or one or two people. It should be shouted from mountain tops!" </i></p>
			<hr>
			<h3>Andrew Bissell</h3>
			<h4>Recording & Licensing Artist at Peer Music</h4>
			<p><i>"I've worked with Steve Fox for several years, and each time it was nothing short of a pleasure. Always positive and optimistic, brightening the mood, all the while displaying competence and excellence at whatever job was in front of him."</i></p>
			<hr>
			<p style="font-size: 11px;color: #999;font-style:italic;"><sup>&#42;</sup>Due to privacy concerns, I only furnish contact information for my references upon request and with their permission.</p>
			<h2>CONTACT ME</h2>
	<?php echo do_shortcode('[ninja_form id=1]'); ?>
	</div>
</div>
</div>
<?php get_footer(); ?>