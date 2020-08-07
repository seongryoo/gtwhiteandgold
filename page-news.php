<?php
/**
 * The template for displaying News
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GT_White_and_Gold
 */

get_header(); 

$nodes = simplexml_load_file("http://hg.gatech.edu/node/635164/xml");
?>
<div class="news">
	<div class="container">
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?> 
		
		<h2>All news</h2>
		<div class="row">
		<?php
		foreach ($nodes->node as $node) {
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
<?php get_footer(); ?>