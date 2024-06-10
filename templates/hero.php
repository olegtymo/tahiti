<?php
$hero_title = get_field('hero_title');
$hero_title_bold = get_field('hero_title_bold');
$hero_subtitle = get_field('hero_subtitle');
$images = get_field('hero_slider');
?>

<section class="hero">
    <?php if ($hero_title || $hero_title_bold): ?>
    <div class="hero__text-wrapper">
        <h2 class="hero__title">
        <span>
            <?php echo $hero_title_bold; ?>
        </span>
            <?php echo $hero_title; ?>
        </h2>
        <?php endif; ?>

        <?php if ($hero_subtitle): ?>
            <p class="hero__subtitle">
                <?php echo $hero_subtitle ?>
            </p>
        <?php endif; ?>

    </div>
    <?php if ($images): ?>
        <div class="slider-wrapper">
            <?php foreach ($images as $image): ?>
                <div class="hero-slide">
                    <picture>
                        <?php echo wp_get_attachment_image($image['ID'], 'full', false, array('class' => 'hero-slide__img', 'loading' => 'lazy')); ?>
                    </picture>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
