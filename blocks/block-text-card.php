<div class="col-lg-6">
	<div class="card text-card">
		<div class="card-body">
			<h4 class="card-title"><?php block_field( 'title' ); ?></h4>
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
	</div>
</div>