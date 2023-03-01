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

    <?php echo get_template_part('/template-parts/layout/menu-desktop-front-page_1'); ?>

    <div id="luxy" class="z-30 will-change-transform">

        <div id="page" class="min-h-screen flex flex-col opacity-0 transition-opacity duration-300">
            
            <?php get_template_part( 'template-parts/layout/menu-mobile'); ?>
            <?php echo get_template_part('/template-parts/layout/menu-desktop-front-page_2'); ?>

            <div id="content" class="site-content pt-20 md:pt-40 flex-grow">

                <?php do_action( 'embepiercing_content_start' ); ?>

                <main>