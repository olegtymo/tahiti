<?php
$discover_title_bold = get_field('discover_title_bold');
$discover_title = get_field('discover_title');
$discover_subtitle = get_field('discover_subtitle');
$discover_text = get_field('discover_text');
$discover_islands_cards = get_field('discover_islands');

$islands_list = get_field('islands_list', 'option');
$islands_select_default_option = get_field('islands_def', 'option');
$islands_btn = get_field('islands_btn', 'option');


?>

<section id="discover" class="discover">
    <div class="container">
        <?php if ($discover_title_bold || $discover_title || $discover_subtitle): ?>
            <div class="row">
                <div class="col-12 discover__text">
                    <h2 class="discover__title">
                        <?php if ($discover_title_bold): ?>
                            <span><?php echo $discover_title_bold; ?></span>
                        <?php endif; ?>
                        <?php echo $discover_title ?>
                    </h2>
                    <?php if ($discover_subtitle): ?>
                        <p class="discover__subtitle">
                            <?php echo $discover_subtitle; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>


        <div class="cards-slider-wrapper">

            <?php if (is_array($discover_islands_cards)): ?>
                <?php foreach ($discover_islands_cards as $discover_islands_card): ?>
                    <div class="card-container">
                        <div class="card" id="islandCard" data-info='<?php echo get_the_title($discover_islands_card); ?>'>
                            <div class="card__img">
                                <img src="<?php echo get_the_post_thumbnail_url($discover_islands_card, 'card'); ?>"
                                     alt="Island Card">
                            </div>
                            <div class="card__title-wrapper">
                                <h3 class="card__title"><?php echo get_the_title($discover_islands_card) ?></h3>
                                <p class="card__desc"><?php the_field('card_description', $discover_islands_card) ?></p>
                            </div>
                            <a href="<?php the_field('card_external_link', $discover_islands_card) ?>" target="_blank" class="card__price">
                                <p>
                                    FROM
                                    <span>$<?php the_field('card_price', $discover_islands_card) ?></span>
                                </p></a></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>

        <?php wp_reset_postdata() ?>

        <form class="select-island-form row">
            <?php if ($discover_text): ?>
                <h3>
                    <?php echo $discover_text; ?>
                </h3>
            <?php endif; ?>
            <div class="select-wrapper col">

                <select class="form-select" id="island-select" aria-label="Island select">
                    <option selected><?php echo $islands_select_default_option; ?></option>

                    <?php if (is_array($islands_list)): ?>
                        <?php foreach ($islands_list as $island_item): ?>

                            <option value="<?php echo $island_item->post_title ?>"><?php echo $island_item->post_title ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>


                </select>
                <button type="submit" class="explore-btn"><?php echo $islands_btn ?></button>
            </div>
        </form>
    </div>
</section>
