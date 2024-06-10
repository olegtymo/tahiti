<?php
$experience_title_bold = get_field( 'experience_title_bold' );
$discover_title        = get_field( 'discover_title' );
$experience_subtitle   = get_field( 'experience_subtitle' );
$experience_text       = get_field( 'experience_text',false,false );
$experience_btn        = get_field( 'experience_button' );
$experience_bg_img     = get_field( 'experience_background_image' );
$experience_btn_title  = $experience_btn['title'];
$experience_btn_link   = $experience_btn['url'];
?>


<section id="experience" class="experience" style="background-image: url(<?php echo $experience_bg_img; ?>);">
    <div class="container">
        <div class="experience__inner row">
			<?php if ( $experience_title_bold ||
			           $discover_title ||
			           $experience_subtitle ):
				?>
                <div class="experience__upper-wrapper col-12">
                    <h2 class="experience__title">
						<?php if ( $experience_title_bold ): ?>
                            <span><?php echo $experience_title_bold; ?></span>
						<?php endif; ?>

						<?php echo $discover_title; ?>

                    </h2>

					<?php if ( $experience_subtitle ): ?>
                        <p class="experience__subtitle"><?php echo $experience_subtitle ?></p>
					<?php endif; ?>
                </div>
			<?php endif; ?>

			<?php if ( $experience_text || $experience_btn ): ?>
                <div class="experience__lower-wrapper col-12">
					<?php if ( $experience_text ): ?>
                        <p class="experience__description">
							<?php echo esc_html( $experience_text ); ?>
                        </p>
					<?php endif; ?>

					<?php if ( $experience_btn ): ?>
                        <a href="<?php echo esc_url( $experience_btn_link ); ?>"
                           class="experience__btn btn"><?php echo esc_html( $experience_btn_title ); ?></a>
					<?php endif; ?>
                </div>
			<?php endif; ?>
        </div>
    </div>
</section>