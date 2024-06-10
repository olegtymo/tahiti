<?php
$logo = get_field('logo', 'option');
$site_icon_url = get_site_icon_url();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> <?php wp_title('|', true, 'right') ?><?php bloginfo('name'); ?> </title>
    <link rel="icon" href="<?php echo $site_icon_url ?>" type="image/png"/>
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<header class="header">
    <div class="container">
        <nav class="row justify-content-between">
            <a class="logo col-3" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>"
               href="<?php echo esc_url(home_url('')); ?>">
                <picture>
                    <img src="<?php echo $logo['sizes']['logo'] ?>" alt="Logo">
                </picture>
            </a>

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main',
                    'container' => false,
                    'menu_class' => 'nav col-9'
                )
            );
            ?>

            <div class="col-1 nav-menu__btn">
                <div class="bar"></div>
                <div class="bar mid-bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
    </div>
</header>
<main>
