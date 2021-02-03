<?php get_header(); ?>
<div id="category-illustration">
	<div id="content" class="row writing" style="margin: 0px 20px;">
		<div class="col-md-12" style="margin: 0px; padding: 0px;">
			<h1 class="page-title" style="font-family: 'Zilla Slab','Helvetica Neue', helvetica, sans-serif;font-weight: 900;color:#CCC;font-size: 60px; font-style: italic;"> <?php wp_title(''); ?> </h1>
			<div class="archive-summary">	
				<?php
				// load all 'category' terms for the post
					$terms = get_the_terms( get_the_ID(), 'category');
				// we will use the first term to load ACF data from
					if( !empty($terms) ) {
					$term = array_pop($terms);
				// do something with $project_summary
					}
				?>
			</div>
		</div>
	</div>
	<div class="row" id="main" role="main">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div id="" class="col-md-4 blog-blocks-slf" role="">	
			<?php simple_boostrap_display_post(true); ?>
			<span class="feature-continue">
				<a class="more-story" href="<?php the_permalink(); ?>">
					CONTINUE THE STORY <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</span>	
		</div>
		<?php endwhile; ?>	
		<?php simple_boostrap_page_navi(); ?>				
		<?php else : ?>			
		<article id="post-not-found" class="block">
			<p><?php _e("No items found.", "simple-bootstrap"); ?></p>
		</article>			
		<?php endif; ?>	
	</div>
</div>
<?php get_footer(); ?>