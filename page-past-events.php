<?php
/**
 * Template Name: Past Events
 *
 * The template for displaying Events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GT_White_and_Gold
 */

get_header(); 

date_default_timezone_set("America/New_York");

$nodes = simplexml_load_file("http://hg.gatech.edu/node/635185/xml");
?>
<main class="events" id="content" role="main">
	<div class="container">
		<h2><?php the_title(); ?></h2>
		
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?> 
		
		<?php
		$num_events = 0;
		foreach ($nodes->node as $node) {
			$start = strtotime($node->start);
			$end = strtotime($node->end);			
			
			if ($end < time()) {
				
				$num_events++;
				?>
				<div class="row events-list">
					<div class="col-md-1">
						<div class="date-box">
						  <h5><?php echo date("D", $start); ?></h5>
						  <h5><?php echo date("M", $start); ?></h5>
						  <h3><?php echo date("j", $start); ?></h3>
						</div>
					</div>
					<div class="col-md-9">
						<h4 class="card-title"><?php echo $node->title ?></h4>
						<p><time class="event-time" datetime="<?php echo $node->start; ?>"><?php echo date("g:i A", $start); ?></time> - <time class="event-time" datetime="<?php echo $node->end; ?>"><?php echo date("g:i A T", $end); ?></time> | <span class="event-location"><?php echo $node->location; ?></span></p>
						<?php echo $node->summary ?>
					</div>
				</div>
				<?php
			}
		}
		
		if ($num_events == 0) {
		?>
			<h3>No past events</h3>
		<?php
		}
		?>
		<p><a class="btn btn-gt" href="/events/">See upcoming events</a></p>
	</div>
</main>
<?php get_footer(); ?>