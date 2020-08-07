<?php
/**
 * The template for displaying all single posts
 *
 * @package GT_White_and_Gold
 */

get_header(); ?>

    <div class="post">
      <div class="content">
        <div class="container">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
              generate_opportunity( get_post() );
            ?>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  
<?php get_footer(); ?>
