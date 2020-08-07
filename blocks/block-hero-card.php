<div class="hero">
	<div class="row <?php if ( block_value( 'reversed' ) ) { echo 'reversed'; } ?>">
		<div class="left col-md-6">
			<h1><?php block_field( 'title' ); ?></h1>
			<?php block_field( 'description' ); ?>
		</div>
		<div class="right col-md-6">
			<img class="img-fluid" src="<?php block_field( 'image' ); ?>" alt="<?php echo get_post_meta( block_value( 'image' ), '_wp_attachment_image_alt', true ); ?>" />
		</div>
	</div>
</div>
