<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if (in_category('illustration')){ ?>
			

</div>
<div class="container">
<div id="illustration-single" style="background: url(<?php // the_field( 'background_image' ) ?>) no-repeat center top">
   <div class="container-fluid" style="">
      <div class="row" id="fox-faq">
	   <div class="col-md-4">
		<p class="previous"><?php previous_post_link('%link','<i class="fa fa-arrow-circle-left" aria-hidden="true"></i> %title',TRUE,'') ?></p>
	   </div>
	   <div class="col-md-4">
		<button class="btn btn-primary about-foxstorytelling" type="button" data-toggle="collapse" data-target="#aboutFoxStorytelling" aria-expanded="false" aria-controls="aboutFoxStorytelling" style="text-align: center;margin: 0px auto;">
					This Illustration's Story <span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span>
		</button>
	   </div>
	   <div class="col-md-4">
			<p class="next"><?php next_post_link('%link','%title <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>',TRUE,'') ?></p>
	   </div>
	</div>
   </div>

   <?php }

   else { ?>
      <li class="previous"><?php previous_post_link('%link ','%title','','illustration') ?></li>
      <li class="alignright"><?php next_post_link('%link','%title','','illustration') ?></li>
   <?php } ?>
</div>



   <div class="row faq-open">
      <div class="col-md-8 col-md-offset-2">
	 <div class="collapse" id="aboutFoxStorytelling">
	    <div class="well" style="">
		<?php
		$content = get_the_content('Read more');
		print $content;
		?>
		<br><br>
		<a href="mailto:steve@foxstorytelling.com" class="btn btn-primary about-foxstorytelling" style="border-radius: 3px;
				background: #0FB2BA;color:#FFF;">EMAIL ME
		</a>
		<button class="btn btn-primary about-foxstorytelling" type="button" data-toggle="collapse"
				data-target="#aboutFoxStorytelling" aria-expanded="false" aria-controls="aboutFoxStorytelling"
				style="text-align: center;margin: 0px auto;">
					CLOSE <span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span>
		</button>
	    </div>
	</div>
     </div>
</div>
<div class="container-fluid">
   <div id="content" class="row">
      <div id="main" class="col-md-12" role="main">
		<img class="img-responsive" src="<?php the_field( 'background_image' ) ?>" />
		<?php  // simple_boostrap_display_post(false); ?>		
		<?php // comments_template('',true); ?>
		<?php if (get_next_post() || get_previous_post()) { ?>
		<?php } ?>
		<?php endwhile; ?>			
		<?php else : ?>
		<article id="post-not-found" class="block">
		    <p><?php _e("No posts found.", "simple-bootstrap"); ?></p>
		</article>		
		<?php endif; ?>
	</div>
   </div>
</div>
<?php get_footer(); ?>