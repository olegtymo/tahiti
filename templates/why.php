<?php
$why_title_bold = get_field( 'why_title_bold' );
$why_title      = get_field( 'why_title' );
$why_text       = get_field( 'why_text' );
?>

<section id="why" class="why-tahiti">
    <div class="container">
		<?php if ( $why_title || $why_title_bold ): ?>
            <h2 class="why-tahiti__title">
				<?php if ( $why_title_bold ): ?>
                    <span><?php echo esc_html( $why_title_bold ); ?></span>
				<?php endif; ?>
				<?php echo esc_html( $why_title ); ?>
            </h2>
		<?php endif; ?>

		<?php if ( $why_text ): ?>
            <div class="why-tahiti__reasons-wrapper row">
				<?php foreach ( $why_text as $text ) : ?>
                    <div class="why-tahiti__reason col-12 col-md mb-4 mb-md-0">
                        <p>
							<?php echo esc_html($text['description'])?>
                        </p>
                    </div>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>
    </div>
</section>
