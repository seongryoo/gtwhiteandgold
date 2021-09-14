<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GT_White_and_Gold
 */

get_header(); ?>
	<main class="page" role="main" id="content">
		
		<div class="container">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?> 
		</div>
		
    </main>

<?php get_footer(); ?>
