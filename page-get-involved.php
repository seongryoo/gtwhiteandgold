<?php
/**
 * The template for displaying the Get Involved page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GT_White_and_Gold
 */

get_header(); ?>

  <div class="page get-involved">

  <div class="container">
    <h2>Get involved</h2>
  
    <div class="row">
      <div class="col-md-3 filter-controls">
        <div class="title-pair">
          <i class="fa fa-filter"></i><h3>Filters</h3>
        </div>

        <div class="filter-set">
          <div class="filter-pair">
            <h4>Activity type</h4>
            <i class="fa fa-angle-up"></i>
          </div>
          <form id="taxon_type" class="taxon_type">
            <?php generate_tags( 'taxon_type' ); ?>
          </form>
        </div>
        
        <div class="filter-set">
          <div class="filter-pair">
            <h4>Time commitment</h4>
            <i class="fa fa-angle-down"></i>
          </div>
          <form id="taxon_time" class="taxon_time">
            <?php generate_tags( 'taxon_time' ); ?>
          </form>
        </div>
        
        <div class="filter-set">
          <div class="filter-pair">
            <h4>Location</h4>
            <i class="fa fa-angle-up"></i>
          </div>
          <form id="taxon_loc" class="taxon_loc">
            <?php generate_tags( 'taxon_loc' ); ?>
          </form>
        </div>
      </div><!--end .filter-controls-->
        
      
      <div class="section pile col-md-9">
        <div class="cards">

            <?php generate_filter_cards(); ?>
          
        </div><!--cards-->
      </div><!--pile-->
    </div><!--row-->
  </div><!--container-->
    
  </div>

<?php get_footer(); ?>