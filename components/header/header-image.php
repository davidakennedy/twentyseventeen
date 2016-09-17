
<div class="custom-header">
	<?php
		$header_image = get_header_image();
		$header_video = get_header_video();

		// If this is the front page
		if ( is_front_page() && ! empty( $header_video ) ) : ?>
			<div class="custom-header-video">
				<video src="<?php header_video(); ?>" autoplay loop width="<?php echo esc_attr( get_custom_header()->video_width ); ?>" height="<?php echo esc_attr( get_custom_header()->video_height ); ?>"</video>
			</div>

		<?php
		// If this is a single post or page with a featured image
		elseif ( has_post_thumbnail() && is_singular() ) :
			$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
			$thumbnail_attributes = wp_get_attachment_image_src( $post_thumbnail_id, 'twentyseventeen-featured-image' );
			?>

			<div class="custom-header-image" style="background-image: url(<?php echo esc_url( $thumbnail_attributes[0] ); ?>)">
				<?php get_template_part( 'components/header/site', 'branding' ); ?>
			</div>

		<?php
		// Else if the Custom Header image has been set
		elseif ( ! empty( $header_image ) ) : ?>

			<div class="custom-header-image" style="background-image: url(<?php echo esc_url( $header_image ); ?>)">
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
