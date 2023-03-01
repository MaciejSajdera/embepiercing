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

    <?php $adultery = get_field('adultery', get_the_ID() ); ?>

    <?php if ($adultery === true && is_single() ) : ?>
    <?php echo get_template_part('/template-parts/partials/modal-cookies-adultery'); ?>
    <?php endif; ?>

    <?php echo get_template_part('/template-parts/partials/modal-cookies-general'); ?>

    <div id="progressBar"></div>

    <!-- all pages  -->

    <?php if (!is_front_page()): ?>

    <header class="fixed w-full z-40">
        <div class="mx-auto container flex">

            <?php do_action( 'embepiercing_header' ); ?>
            <?php get_template_part( 'template-parts/layout/menu-mobile'); ?>
            <?php get_template_part( 'template-parts/layout/menu-desktop'); ?>

        </div>
    </header>

    <div id="heroImageHolder" class="embebg fadeOut -z-10">

    <?php $front_page_id = get_option( 'page_on_front' ); ?>
    <?php $welcome_view_image = get_field('welcome_view_image', $front_page_id); ?>
    <img src="<?php echo $welcome_view_image['url']; ?>" alt="<?php echo $welcome_view_image['alt']; ?>" />

    </div>

    <?php endif; ?>

    <!-- front page only -->

    <?php if (is_front_page()): ?>

        <?php echo get_template_part('/template-parts/layout/menu-desktop-front-page_1'); ?>

        <header class="fixed w-full z-40">
            <div class="mx-auto container flex">
                <?php do_action( 'embepiercing_header' ); ?>
                <?php get_template_part( 'template-parts/layout/menu-mobile'); ?>
            </div>
        </header>

    <?php endif; ?>

    <div id="luxy" class="z-30 will-change-transform">

        <div id="page" class="min-h-screen flex flex-col opacity-0 transition-opacity duration-300">
            
            <!-- front page only -->

            <?php if (is_front_page()): ?>

            <?php echo get_template_part('/template-parts/layout/menu-desktop-front-page_2'); ?>

            <?php endif; ?>

            <div id="content" class="site-content pt-20 md:pt-40 flex-grow">

                <?php do_action( 'embepiercing_content_start' ); ?>

                <main>