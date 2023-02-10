<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-black text-white antialiased font-josephin' ); ?>>

    <?php do_action( 'embepiercing_site_before' ); ?>

    <header class="fixed w-full z-40">
        <div class="mx-auto container flex">

            <?php do_action( 'embepiercing_header' ); ?>
            <?php get_template_part( 'template-parts/layout/menu-mobile'); ?>
            <?php get_template_part( 'template-parts/layout/menu-desktop'); ?>

        </div>
    </header>

    <div id="heroImageHolder" class="embebg fadeOut">

        <?php $front_page_id = get_option( 'page_on_front' ); ?>
        <?php $welcome_view_image = get_field('welcome_view_image', $front_page_id); ?>
        <img src=<?php echo $welcome_view_image['url']; ?>" alt="<?php echo $welcome_view_image['alt']; ?>" />

    </div>

    <div id="luxy" class="z-30">

        <div id="page" class="min-h-screen flex flex-col">

            <div id="content" class="site-content pt-40 flex-grow">

                <?php do_action( 'embepiercing_content_start' ); ?>

                <main>