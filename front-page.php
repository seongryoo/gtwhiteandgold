<?php
/**
 * Template Name: Home Page
 *
 * The template file for the front page of the site
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GT_White_and_Gold
 */

get_header();
?>
	<div class="index">
		<div class="banner" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="left col-md-6">
						<h1><?php the_title(); ?></h1>
						<p><?php the_field( "subheading" ); ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?> 
		</div>
		
		<div class="section news">
			<div class="container">
				<div class="section-header">
					<h2>Latest news</h2>
					<p><a href="/news/">See all news</a></p>
				</div>
				
				<div class="row">
				<?php
				$nodes = simplexml_load_file("http://hg.gatech.edu/node/635164/xml");
				for ($i = 0; $i < 3; $i++) {
					$node = $nodes->node[$i]
					?>
					<div class="col-md-4">
						<?php if ($node->article_url) {
						?>
						<a href="<?php echo $node->article_url ?>" target="_blank">
						<?php
						} else {
						?>
						<a href="#" target="_blank">
						<?php
						}
						?>
						  <div class="card">
							<img class="img-fluid" src="<?php echo $node->hg_media->item->image_full_path ?>" alt="<?php echo $node->hg_media->item->image_alt ?>" />
							<div class="card-body">
							  <?php if ($node->iso_article_dateline) {	
							  ?>
							  	<time datetime="<?php echo $node->iso_article_dateline  ?>">
								<?php 
									$time = strtotime($node->iso_article_dateline );
									$dateInLocal = date("M j, Y", $time);
									echo $dateInLocal;
								?></time>
							  <?php
						      } else {
							  ?>
								<time datetime="<?php echo $node->iso_dateline  ?>">
								<?php 
									$time = strtotime($node->iso_dateline );
									$dateInLocal = date("M j, Y", $time);
									echo $dateInLocal;
								?></time>
							  <?php
							  }
							  ?>
							  <h4 class="card-title"><?php echo $node->title ?></h4>
							  <?php echo $node->summary ?>
							</div>
						  </div>
						</a>
					  </div>
					<?php
				}
				?>
				</div>
			</div>
		</div>
		
		<?php
		$nodes = simplexml_load_file("http://hg.gatech.edu/node/635185/xml");
		
		$upcoming_events = array();
		for ($i = 0; $i < 3; $i++) {
			$node = $nodes->node[$i];
			$start = strtotime($node->start);
			$end = strtotime($node->end);    
			
			if ($start >= time()) {
				array_push($upcoming_events, $node);
			}
		}
		
		if (count($upcoming_events) > 0) {
		?>
		<div class="section events">
			<div class="container">
				<div class="section-header">
					<h2>Upcoming events</h2>
					<p><a href="/events/">See all events</a></p>
				</div>
				
				<?php
				foreach ($upcoming_events as $event) {
					$start = strtotime($event->start);
					$end = strtotime($event->end);     
					?>
					<div class="row">
					  <div class="col-md-1">
						<div class="date-box">
						  <h5><?php echo date("D", $start); ?></h5>
						  <h5><?php echo date("M", $start); ?></h5>
						  <h3><?php echo date("j", $start); ?></h3>
						</div>
					  </div>
					  <div class="col-md-9">
						<h4 class="card-title"><?php echo $event->title ?></h4>
						<p><time class="event-time" datetime="<?php echo $event->start; ?>"><?php echo date("g:i A", $start); ?></time> - <time class="event-time" datetime="<?php echo $event->end; ?>"><?php echo date("g:i A T", $end); ?></time> | <span class="event-location"><?php echo $event->location; ?></span></p>
						<?php echo $node->summary ?>
					  </div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
		<?php 
		}
		?>
		
	</div>

<?php get_footer(); ?>

