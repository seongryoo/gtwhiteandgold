<?php
/**
 * Template Name: Featured Event Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GT_White_and_Gold
 */

get_header(); ?>
	<div class="page featured-event">
		
		<div class="container">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?> 
		</div>
		
    </div>

<?php get_footer(); ?>
