<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GT_White_and_Gold
 */

?>
    <footer class="footer">
      <div class="social" id="social">
        <nav aria-label="Social media links" class="container">
          <h5>Connect with us</h5>
          <?php dynamic_sidebar( 'social-menu' ); ?>
        </nav>
      </div>
		
	  <div class="program-institute">
		  <div class="container">
			  <div>
				  <div class="program">
					  <?php dynamic_sidebar( 'program-info' ); ?>	
				  </div>
				  
				  <div class="institute">
					  <a href="https://www.gatech.edu/" aria-label="noopener" target="_blank">
						<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						if (has_custom_logo()) {
						  echo '<img class="img-fluid" src="' . esc_url($logo[0]) . '" alt="Georgia Tech">';
						}
						?>
					  </a>
				  </div>
			  </div>
		  </div>
		</div>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
  </body>
</html>
