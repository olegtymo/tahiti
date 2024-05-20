<?php
$hero_title      = get_field( 'hero_title' );
$hero_title_bold = get_field( 'hero_title_bold' );
$images          = get_field( 'hero_slider' );
?>

<section class="hero">
	<?php if ( $hero_title || $hero_title_bold ): ?>
    <div class="hero__text-wrapper">
        <h2 class="hero__title">
        <span>
            <?php echo $hero_title_bold; ?>
        </span>
			<?php echo $hero_title; ?>
        </h2>
		<?php endif; ?>

		<?php if ( get_field( 'hero_subtitled' ) ): ?>
            <p class="hero__subtitle">
				<?php the_field( 'hero_subtitle' ) ?>
            </p>
		<?php endif; ?>

    </div>
	<?php if ( $images ): ?>
        <div class="slider-wrapper">
			<?php foreach ( $images as $image ): ?>
                <div class="hero-slide">
                    <picture>
                        <img class="hero-slide__img"
                             src="<?php echo esc_url( $image['sizes']['bg'] ); ?>"
                             alt="<?php echo esc_attr( $image['alt'] ); ?>" loading="lazy"/>
                    </picture>
                </div>
			<?php endforeach; ?>
        </div>
	<?php endif; ?>
</section>
