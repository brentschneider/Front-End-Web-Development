
<?php
/*
 Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>


<section class="row">
  <div class="small-12 columns text-center">
	<div class="leader">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<p><?php the_content(); ?></p>

	<?php endwhile; endif; ?>

    </div>
  </div>
</section>


<?php

	$args = array(
		'post_type' => 'portfolio'
	);
	$query = new WP_Query( $args );

?>



<section class="row no-max pad">
<?php if ( $query->have_posts()) : while ( $query->have_posts()) : $query->the_post(); ?>

	<div class="small-6 medium-4 large-3 columns grid-item"> 
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large');  ?></a>
	</div>


<?php endwhile; endif; wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>