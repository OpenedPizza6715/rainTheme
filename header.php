<<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="site-branding">
            <h1>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </div>
</header>

<?php if (has_nav_menu('primary')) : ?>
<nav class="main-navigation">
    <div class="container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'fallback_cb' => false
        ));
        ?>
    </div>
</nav>
<?php endif; ?>

<main class="container site-main">
