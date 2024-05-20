<?php get_header() ?>
<div class="container-lg">
    <?php get_template_part('templates/hero') ?>
    <?php get_template_part('templates/discover') ?>
    <?php wp_reset_postdata() ?>
    <?php get_template_part('templates/experience') ?>
    <?php get_template_part('templates/why') ?>
    <?php get_template_part('templates/book') ?>
</div>
<?php get_footer() ?>
