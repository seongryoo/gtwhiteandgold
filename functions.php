<?php
/**
 * GT White and Gold functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link https://codex.wordpress.org/Plugin_API
 *
 * @package GT_White_and_Gold
 */

function gtwhiteandgold_setup() {
  // Load regular editor styles into the new block-based editor.
  add_theme_support( 'editor-styles' );

  // Load default block styles.
  add_theme_support( 'wp-block-styles' );

  // Add support for full and wide align images.
  add_theme_support( 'align-wide' );

  // Add support for responsive embeds.
  add_theme_support( 'responsive-embeds' );

  // // Adds RSS feed links to <head> for posts and comments.
  // add_theme_support( 'automatic-feed-links' );

  add_theme_support(
    'custom-logo',
    array(
      'flex-height' => true,
      'flex-width'  => true,
    )
  );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menu( 'primary', __( 'Header Nav', 'gtwhiteandgold' ) );

  /*
   * This theme uses a custom image size for featured images, displayed on
   * "standard" posts and pages.
   */
  add_theme_support( 'post-thumbnails' );
  // set_post_thumbnail_size( 604, 270, true );

  // Indicate widget sidebars can use selective refresh in the Customizer.
  add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'gtwhiteandgold_setup' );


/**
 * Enqueue scripts and styles for the front end.
 */
function gtwhiteandgold_scripts_styles() {
  // Loads our main stylesheet.
  wp_enqueue_style( 'gtwhiteandgold-style', get_stylesheet_uri() );

  // Loads additional stylesheets
  $stylesheets = array(
    'filter',
  );
  foreach ( $stylesheets as $slug ) {
    $style_name = 'gtwhiteandgold-' . $slug;
    $style_uri = get_template_directory_uri() . '/css/' . $slug . '.css';
    wp_enqueue_style( $style_name, $style_uri );
  }
}
add_action( 'wp_enqueue_scripts', 'gtwhiteandgold_scripts_styles' );

/**
 * Hide login error messages
 */
function hide_login_errors(){
  return 'Invalid username or password.';
}
add_filter( 'login_errors', 'hide_login_errors' );


/**
 * Remove Wordpress version number
 */
remove_action('wp_head', 'wp_generator');

/**
 * Register widget areas.
 * Source: https://stackoverflow.com/questions/23539586/wordpress-how-to-allow-header-and-footer-sections-to-be-edited
 */
function gtwhiteandgold_widgets_init() {
  register_sidebar(
    array(
      'name' => __( 'Social Menu', 'gtwhiteandgold' ),
      'id' => 'social-menu',
      'description' => __( "Appears in the 'Connect with us' menu in the footer of the site.", 'gtwhiteandgold' ),
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title' => '<span style="display: none;">',
      'after_title' => '</span>',
    )
  );
	
  register_sidebar(
    array(
      'name' => __( 'Program Info', 'gtwhiteandgold' ),
      'id' => 'program-info',
      'description' => __( "Appears in the footer of the site.", 'gtwhiteandgold' ),
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title' => '<a class="confit-name" href="/"><h5>',
      'after_title' => '</h5></a>',
    )
  );	
}
add_action( 'widgets_init', 'gtwhiteandgold_widgets_init' );

/**
 * Helper method for filter page control generation
 */
function generate_tags( $taxonomy ) {
  $args = array(
    'taxonomy' => $taxonomy,
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => false,
  );
  $act_terms = get_terms( $args );

  foreach( $act_terms as $term ) {
    $term_name = $term->name;
    $term_id = $term->term_id;
    $term_slug = $term->slug;
    $markup = '';
    $markup .= '<div class="input-pair">';
      $markup .= '<input type="checkbox" class="visually-hidden" id="' . $term_slug . '">';
      $markup .= '<label for="' . $term_slug . '"><span class="check"></span>' . $term_name . '</label>';
    $markup .= '</div>';
    echo $markup;
  }
}

/**
 * Helper method for filter card generation
 */
function generate_filter_card( $post ) {
  var_dump( $post );
  $id = $post->ID;
  $duration_desc = get_post_meta( $id, 'post_opp_meta_level' );
  $location_desc = get_post_meta( $id, 'post_opp_meta_loc' );
  $title = $post->post_title;
  $url = get_permalink( $id );
  $description = get_post_meta( $id, 'post_opp_meta_desc' );

  $type_objs = get_the_terms( $id, 'taxon_type' );
  $time_objs = get_the_terms( $id, 'taxon_time' );
  $loc_objs = get_the_terms( $id, 'taxon_loc' );

  $markup = '';
  $markup .= '<div class="card">';
    $markup .= '<div class="info">';
      $markup .= '<div class="duration">';
          //   <div class="card">

          //   <div class="info">
          //     <div class="duration">
          //       <p>Semester-long</p>
          //     </div>
          //     <div class="location">
          //       <p>On campus</p>
          //     </div>
          //   </div>
            
          //   <h3>Sign up for a Serve-Learn-Sustain affiliated course</h3>
            
          //   <p class="desc">
          //     SLS Affiliated Courses span all six Colleges. These courses teach students about "creating sustainable communities" from the perspective of their specific disciplines or course topics. They align with one or more parts of SLS' approach to creating sustainable communities.
          //   </p>
            
          //   <div class="tags">
          //     <div class="tag"><p><i class="fa fa-book"></i>Academics</p></div>
          //   </div><!--tags-->
          // </div><!--card-->
}

/**
 * Helper method for filter card querying 
 */
function generate_filter_cards() {
  //Protect against arbitrary paged values
  $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
  $args = array(
    'post_type' => 'post_opp',
    'post_status' => 'publish',
    'paged' => $paged,
    'posts_per_page' => 20,
    'meta_query' => array(
      'relation' => 'OR',
      array(
        'key' => 'post_opp_meta_will_expire',
        'value' => false,
      ),
      array(
        'key' => 'post_opp_meta_expr',
        'value' => '',
      ),
      array(
        'key' => 'post_opp_meta_expr',
        'value' => date('Y-m-d'),
        'compare' => '>',
      ),
    ),
  );
  $query = new WP_Query( $args );
  $posts = $query->posts;
  foreach( $posts as $post ) {
    generate_filter_card( $post );
  }

  $big = 999999999; // need an unlikely integer
 
  echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $query->max_num_pages
  ) );
}