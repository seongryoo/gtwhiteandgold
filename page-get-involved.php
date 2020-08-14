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
      <aside role="complementary" class="col-md-3 filter-controls">
        <div class="title-pair">
          <i class="fa fa-filter"></i><h2>Filters</h2>
        </div>

        <div class="filter-set accordion expanded"
          id="taxon_type-accordion">
          <button role="button" 
            id="taxon_type-button"
            class="filter-pair"
            aria-label="Collapse activity type filters"
            aria-expanded="true"
            aria-controls="taxon_type">
            <h3>Activity type</h3>
            <i class="fa fa-angle-down arrow-icon" aria-hidden="true"></i>
          </button>
          <form id="taxon_type" class="taxon_type">
            <?php generate_tags( 'taxon_type' ); ?>
          </form>
        </div>

        <div class="filter-set accordion"
          id="taxon_time-accordion">
          <button role="button" 
            id="taxon_time-button"
            class="filter-pair"
            aria-label="Expand time commitment filters"
            aria-expanded="false"
            aria-controls="taxon_time">
            <h3>Time commitment</h3>
            <i class="fa fa-angle-down arrow-icon" aria-hidden="true"></i>
          </button>
          <form id="taxon_time" class="taxon_time">
            <?php generate_tags( 'taxon_time' ); ?>
          </form>
        </div>

        <div class="filter-set accordion"
          id="taxon_loc-accordion">
          <button role="button" 
            id="taxon_loc-button"
            class="filter-pair"
            aria-label="Expand location filters"
            aria-expanded="false"
            aria-controls="taxon_loc">
            <h3>Location</h3>
            <i class="fa fa-angle-down arrow-icon" aria-hidden="true"></i>
          </button>
          <form id="taxon_loc" class="taxon_loc">
            <?php generate_tags( 'taxon_loc' ); ?>
          </form>
        </div>
        
      </aside><!--end .filter-controls-->
        
      
      <main role="main" class="section pile col-md-9">
        <div class="cards">

            <?php generate_filter_cards(); ?>
          
        </div><!--cards-->
      </main><!--pile-->
    </div><!--row-->
  </div><!--container-->
    
  </div>

<?php get_footer(); ?>