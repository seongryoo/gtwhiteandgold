<div class="col-lg-6">
	<a href="<?php block_field( 'link' ); ?>">
		<div class="card">
			<img class="card-img img-fluid" src="<?php block_field( 'image' ); ?>" alt="<?php echo get_post_meta( block_value( 'image' ), '_wp_attachment_image_alt', true ); ?>" />
			<div class="card-body">
				<h4 class="card-title"><?php block_field( 'title' ); ?></h4>
				<?php block_field( 'description' ); ?>
			</div>
		</div>        
	</a>
</div>