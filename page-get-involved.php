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
          
          <div class="card">

            <div class="info">
              <div class="duration">
                <p>Semester-long</p>
              </div>
              <div class="location">
                <p>On campus</p>
              </div>
            </div>
            
            <h3>Sign up for a Serve-Learn-Sustain affiliated course</h3>
            
            <p class="desc">
              SLS Affiliated Courses span all six Colleges. These courses teach students about "creating sustainable communities" from the perspective of their specific disciplines or course topics. They align with one or more parts of SLS' approach to creating sustainable communities.
            </p>
            
            <div class="tags">
              <div class="tag"><p><i class="fa fa-book"></i>Academics</p></div>
            </div><!--tags-->
          </div><!--card-->
          <div class="card">

            <div class="info">
              <div class="duration">
                <p>Two days</p>
              </div>
              <div class="location">
                <p>Emory Conference Center Hotel, Atlanta</p>
              </div>
            </div>
            
            <h3>Table for the Global Change Program at the 2020 Georgia Climate Conference</h3>
            
            
            <div class="tags">
              <div class="tag"><p><i class="fa fa-heart"></i>Volunteering</p></div>
              <div class="tag"><p><i class="fa fa-calendar"></i>Events</p></div>
            </div><!--tags-->
          </div><!--card-->
          <div class="card">

            <div class="info">
              <div class="duration">
                <p>Semester-long</p>
              </div>
              <div class="location">
                <p>On campus</p>
              </div>
            </div>
            
            <h3>Sign up for the Carbon Reduction Challenge project course</h3>
            
            <p class="desc">
              Individual students or a team took the initiative to identify and execute a plan that reduces their employer’s carbon emissions, most often saving their employer money, over the course of their internship. Project examples from the class range from creating employee challenges to reduce their personal carbon emissions, to changes in building lighting schedules, to more capital-intensive projects such as HVAC modifications.
            </p>
            
            <div class="tags">
              <div class="tag"><p><i class="fa fa-book"></i>Academics</p></div>
            </div><!--tags-->
          </div><!--card-->
          <div class="card">

            <div class="info">
              <div class="duration">
                <p>Semester-long</p>
              </div>
              <div class="location">
                <p>On campus</p>
              </div>
            </div>
            
            <h3>Complete an SLS capstone project</h3>
            
            <p class="desc">
              Serve-Learn-Sustain supports a number of capstone projects every semester. We aim to have affiliated projects in every school and we’re eager to collaborate with project teams! If you have a particular project in mind that you’d like to discuss – or if you would like SLS to help find you a project related to its theme, “creating sustainable communities” – please make an appointment to meet with us. 
            </p>
            
            <div class="tags">
              <div class="tag"><p><i class="fa fa-book"></i>Academics</p></div>
            </div><!--tags-->
          </div><!--card-->



        </div><!--cards-->
      </div><!--pile-->
    </div><!--row-->
  </div><!--container-->
    
  </div>

<?php get_footer(); ?>