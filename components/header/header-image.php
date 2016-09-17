
<div class="custom-header">
	<?php
		$header_tag = get_header_tag();

		// If this is a single post or page with a featured image
		if ( has_post_thumbnail() && is_singular() ) :
			$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
			$thumbnail_attributes = wp_get_attachment_image_src( $post_thumbnail_id, 'twentyseventeen-featured-image' );
			?>

			<div class="custom-header-image" style="background-image: url(<?php echo esc_url( $thumbnail_attributes[0] ); ?>)">
				<?php get_template_part( 'components/header/site', 'branding' ); ?>
			</div>

		<?php
		// Else if the Custom Header image has been set
		elseif ( ! empty( $header_tag ) ) : echo $header_tag; ?>

			<div class="custom-header-image">
				<?php get_template_part( 'components/header/site', 'branding' ); ?>
			</div>
		<?php
		// Otherwise, show an empty header background.
		else : ?>
			<div class="custom-header-image">
				<?php get_template_part( 'components/header/site', 'branding' ); ?>
			</div>
	<?php endif; ?>

</div><!-- .custom-header -->
