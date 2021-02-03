<?php get_header(); ?>
<div id="category-illustration">
	<div id="content" class="row writing" style="margin: 0px 20px;">
		<div class="col-md-12" style="margin: 0px; padding: 0px;">
			<h1 class="page-title">&bull; BLOG &bull;</h1>
			<div class="archive-summary">	
				<?php
				// load all 'category' terms for the post
					$terms = get_the_terms( get_the_ID(), 'category');
				// we will use the first term to load ACF data from
					if( !empty($terms) ) {
					$term = array_pop($terms);
					$custom_field = get_field('project_summary', $term );
				// do something with $project_summary
					}
				?>
				<?php the_field('project_summary', $term); ?>
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
			
					
			<?php else : ?>
					
			<article id="post-not-found" class="block">
				<p><?php _e("No items found.", "simple-bootstrap"); ?></p>
			</article>
			<?php simple_boostrap_page_navi(); ?>		
			<?php endif; ?>
			
	</div>
</div>
<style>nav.block{background: none !important;}</style>
<?php get_footer(); ?>