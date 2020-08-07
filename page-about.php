<?php
/**
 * The template for displaying the About page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GT_White_and_Gold
 */

get_header(); ?>
    <div class="about">

      <div class="container">
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?> 
  	  </div>
      
    </div>

<?php get_footer(); ?>