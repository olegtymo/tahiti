<?php
$fieldIsland  = get_field_object( 'island', 'option' );
$fieldPackage = get_field_object( 'package', 'option' );
$fieldTahiti  = get_field_object( 'tahiti', 'option' );
$logo         = get_field( 'logo', 'option' );
?>


</main>
<footer class="footer">
    <div class="container">
        <div class="row">
            <a class="logo col-md-3 col-12 mb-5 col-xl-3 d-flex justify-content-center">
                <img src="<?php echo $logo['sizes']['logo'] ?>" alt="Logo">
            </a>

            <div class="footer-nav-wrapper col-md-9 col-12 col-xl-6 d-flex justify-content-around ">
                <div class="footer-nav">
					<?php if ( $fieldIsland['label'] ): ?>
                        <h3 class="footer-nav__header">
							<?php echo $fieldIsland['label']; ?>
                        </h3>
					<?php endif; ?>


					<?php if ( have_rows( 'island', 'option' ) ): ?>
                        <ul class="footer-nav__list">
							<?php while ( have_rows( 'island', 'option' ) ) : the_row(); ?>

								<?php
								$island_item = get_sub_field( 'island_item' );
								if ( is_array( $island_item )
								     && isset( $island_item['title'] )
								     && isset( $island_item['url'] ) ) : ?>
                                    <li class="footer-nav__item">
                                        <a class="footer-nav__link"
                                           href="<?php echo $island_item['url'] ?>"><?php echo $island_item['title']; ?></a>
                                    </li>
								<?php endif; ?>

							<?php endwhile; ?>
                        </ul>
					<?php endif; ?>
                </div>


                <div class="footer-nav">
					<?php
					if ( $fieldPackage['label'] ):?>
                        <h3 class="footer-nav__header">
							<?php echo $fieldPackage['label']; ?>
                        </h3>
					<?php endif; ?>

					<?php if ( have_rows( 'package', 'option' ) ): ?>
                        <ul class="footer-nav__list">
							<?php while ( have_rows( 'package', 'option' ) ) : the_row(); ?>

								<?php
								$package_item = get_sub_field( 'package_item' );
								if ( is_array( $package_item )
								     && isset( $package_item['title'] )
								     && isset( $package_item['url'] ) ) : ?>
                                    <li class="footer-nav__item">
                                        <a class="footer-nav__link" href="<?php echo $package_item['url'] ?>">
                                            <?php echo $package_item['title']; ?>
                                        </a>
                                    </li>
								<?php endif; ?>

							<?php endwhile; ?>
                        </ul>
					<?php endif; ?>
                </div>


                <div class="footer-nav">
	                <?php
	                if ($fieldTahiti['label']):?>
                        <h3 class="footer-nav__header">
			                <?php echo $fieldTahiti['label']; ?>
                        </h3>
	                <?php endif; ?>


					<?php if ( have_rows( 'tahiti', 'option' ) ): ?>
                        <ul class="footer-nav__list">
							<?php while ( have_rows( 'tahiti', 'option' ) ) : the_row(); ?>

								<?php
								$tahiti_item = get_sub_field( 'tahiti_item' );
								if ( is_array( $tahiti_item )
								     && isset( $tahiti_item['title'] )
								     && isset( $tahiti_item['url'] ) ) : ?>
                                    <li class="footer-nav__item">
                                        <a class="footer-nav__link" href="<?php echo $tahiti_item['url'] ?>">
                                            <?php echo $tahiti_item['title']; ?>
                                        </a>
                                    </li>
								<?php endif; ?>

							<?php endwhile; ?>
                        </ul>
					<?php endif; ?>
                </div>

            </div>

			<?php if ( have_rows( 'socials', 'option' ) ): ?>
                <div class="col-md-12 col-12 col-xl-3 offset-sm-0 footer-icons-wrap mt-5 mt-xl-0">
                    <ul class="footer-icons-list d-sm-flex flex-row flex-xl-row justify-content-center align-items-center">
						<?php while ( have_rows( 'socials', 'option' ) ) : the_row(); ?>
                            <li class="footer-icon mb-xs-1">
                                <a class="social-icon"
                                   href="<?php the_sub_field( 'social_link' ) ?>"><?php the_sub_field( 'social_icon' ) ?></a>
                            </li>
						<?php endwhile; ?>
                    </ul>
                </div>
			<?php endif; ?>

        </div>
    </div>
</footer>
<div class="mobile-nav-wrapper">
	<?php wp_nav_menu(
		array(
			'theme_location'  => 'mobile',
			'container'       => false,
			'menu_class'      => 'mobile-nav',
			'menu_item_class' => 'mobile-nav__link'
		)
	); ?>
</div>
<?php wp_footer() ?>
</body>
</html>