<?php get_header(); ?>


<section class="row">
  <div class="small-12 columns text-center">
	<div class="leader">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<p><?php the_content(); ?></p>

<?php endwhile; else : ?>

	<p><?php _e( ' Sorry charlie..'); ?></p>

<?php endif ?>

    </div>
  </div>
</section>


<?php get_footer(); ?>