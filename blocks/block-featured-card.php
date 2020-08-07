<div class="featured-card">
	<div class="row">
		<div class="col-md-6">
			<?php 
			$title = block_field('title', false);
			if ( ! empty( $title ) ) {
			?>
				<h4 class="card-title"><?php block_field( 'title' ); ?></h4>
				<?php
			}
			?>
			<?php block_field( 'description' ); ?>
			<?php 
			$link_text = block_field('link-text', false);
			if ( ! empty( $link_text ) ) {
			?>
			<a class="btn btn-gt" href="<?php block_field( 'link' ); ?>" class="btn btn-primary"><?php block_field( 'link-text' ); ?></a>
			<?php 
			}
			?>
		</div>
		<div class="col-md-6">
			<img class="img-fluid" src="<?php block_field( 'image' ); ?>" alt="<?php echo get_post_meta( block_value( 'image' ), '_wp_attachment_image_alt', true ); ?>" />
		</div>
	</div>
</div>

