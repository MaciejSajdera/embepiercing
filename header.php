<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KMKTT52');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-black text-white antialiased font-josephin' ); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMKTT52"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php do_action( 'embepiercing_site_before' ); ?>

    <?php $adultery = get_field('adultery', get_the_ID() ); ?>

    <?php if ($adultery === true && is_single() ) : ?>
    <?php echo get_template_part('/template-parts/partials/modal-cookies-adultery'); ?>
    <?php endif; ?>

    <?php echo get_template_part('/template-parts/partials/modal-cookies-general'); ?>

    <div id="progressBar"></div>

    <!-- desktop menu -->



    <?php echo get_template_part('/template-parts/layout/menu-desktop-front-page_1'); ?>



    <!-- / desktop menu -->

    <header id="fixedMenuMobile" class="fixed w-full z-40">
        <div class="container mx-auto flex">

            <?php do_action( 'embepiercing_header' ); ?>
            <?php get_template_part( 'template-parts/layout/menu-mobile'); ?>

        </div>
    </header>

    <div id="heroImageHolder" class="embebg fadeOut -z-10">

        <?php $front_page_id = get_option( 'page_on_front' ); ?>
        <?php $welcome_view_image = get_field('welcome_view_image', $front_page_id); ?>
        <img src="<?php echo $welcome_view_image['url']; ?>" alt="<?php echo $welcome_view_image['alt']; ?>" />

    </div>


    <div id="luxy" class="z-30 will-change-transform">

        <div id="page" class="min-h-screen flex flex-col opacity-0 transition-opacity duration-[500ms] will-change-transform">
            
            <!-- front page only -->

            <?php if (is_front_page()): ?>

            <?php echo get_template_part('/template-parts/layout/menu-desktop-front-page_2'); ?>

            <?php endif; ?>

            <!-- / front page only -->

            <div id="content" class="site-content pt-12 md:pt-20 flex-grow">

                <?php do_action( 'embepiercing_content_start' ); ?>

                <main>