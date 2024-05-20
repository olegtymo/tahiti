<?php
$discover_title_bold = get_field('discover_title_bold');
$discover_title = get_field('discover_title');
$discover_subtitle = get_field('discover_subtitle');
$discover_text = get_field('discover_text');

$islandsArgs = array(
	'post_type' => 'tah_islands',
	'post_per_page' => -1
);
$islandsQuery = new WP_Query($islandsArgs);
?>

<section id="discover" class="discover">
    <div class="container">
        <?php if($discover_title_bold || $discover_title || $discover_subtitle): ?>
            <div class="row">
                <div class="col-12 discover__text">
                    <h2 class="discover__title">
                        <?php if ($discover_title_bold): ?>
                            <span><?php the_field('discover_title_bold') ?></span>
                        <?php endif; ?>
                        <?php the_field('discover_title') ?>
                    </h2>
                    <?php if ($discover_subtitle): ?>
                        <p class="discover__subtitle">
                            <?php the_field('discover_subtitle') ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif;?>

        <div class="cards-slider-wrapper">
            <?php if ($islandsQuery->have_posts()): ?>
                <?php while ($islandsQuery->have_posts()):$islandsQuery->the_post() ?>

                    <div class="card-container">
                        <div class="card" id="islandCard" data-info='<?php the_title() ?>'>
                            <div class="card__img">
                                <?php the_post_thumbnail('card'); ?>
                            </div>
                            <div class="card__title-wrapper">
                                <h3 class="card__title"><?php the_title() ?></h3>
                                <p class="card__desc"><?php the_field('card_description') ?></p>
                            </div>
                            <a href="<?php the_field('card_external_link') ?>" target="_blank" class="card__price">
                                <p>
                                    FROM
                                    <span>$<?php the_field('card_price') ?></span>
                                </p></a></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <?php wp_reset_postdata() ?>

        <form class="select-island-form row">
            <?php if ($discover_text): ?>
                <h3>
                    <?php the_field('discover_text'); ?>
                </h3>
            <?php endif; ?>

            <div class="select-wrapper col">
                <select class="form-select" id="island-select" aria-label="Island select">
                    <option selected>Select an&#160;island</option>
                    <?php if ($islandsQuery->have_posts()): ?>
                        <?php while ($islandsQuery->have_posts()):$islandsQuery->the_post() ?>
                            <option value="<?php the_title() ?>"><?php the_title() ?></option>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </select>
                <button type="submit" class="explore-btn">Explore</button>
            </div>
        </form>
    </div>
</section>
