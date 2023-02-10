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

    <?php do_action( 'tailpress_site_before' ); ?>

    <div class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <div class="modal-message-holder"></div>
        </div>
    </div>

    <?php get_template_part( 'template-parts/layout/menu-mobile'); ?>


    <div class="site-branding hidden md:block fixed left-6 top-4 z-40 max-w-[100px]">
                <?php the_custom_logo(); ?>
    </div>

    <div id="fixedMenuDesktop" class="desktop-menu--home fixed z-40 left-8 h-full flex flex-col justify-between">

        <div class="pb-40 mt-40">

            <div class="menu-wrapper hidden md:flex md:flex-col md:gap-4">

                <?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden mt-4 p-4 lg:mt-0 lg:p-0 lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4 flex-col',
						'theme_location'  => 'primary',
						'li_class'        => 'flex flex-wrap content-between items-center lg:mx-4 uppercase text-md font-bold',
						'fallback_cb'     => false,

					)
				);
				?>

                <div class="">
                    <p class="text-gray-400 prose-gold">
                        <?php echo header_copyright() ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="socials  content-start mb-16 hidden md:flex md:flex-col md:flex-wrap">
            <a href="" class="ig mb-4" target="_blank"></a>
            <a href="" class="fb" target="_blank"></a>
        </div>

    </div>

    <div id="heroImageHolder" class="embebg">

        <?php $welcome_view_image = get_field('welcome_view_image'); ?>

        <img src=<?php echo $welcome_view_image['url']; ?> alt="<?php echo $welcome_view_image['alt']; ?>" />

    </div>


    <div id="luxy">

        <div id="page" class="relative min-h-screen flex flex-col z-30">

            <?php do_action( 'tailpress_header' ); ?>

            <header class=" min-h-screen relative flex flex-col items-end justify-center md:justify-end">

                <div class="flex justify-end px-8 py-8">
                    <div class="lg:flex lg:justify-between lg:items-center">

                        <div class="header flex flex-col text-right font-black">
                            <div class="w-full overflow-hidden">
                                <h1 class="hero-title title-reveal">
                                    EMBE
                                </h1>
                            </div>
                            <div class="w-full overflow-hidden -mt-1 md:-mt-4">
                                <h1 class="hero-title title-reveal">
                                    PIERCING
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute overflow-hidden additional-title bottom-24 md:top-4 right-6 md:right-32 text-right">
                    <span id="heroScreenMarker" class="absolute -bottom-100 h-4 w-4"></span>
                    <p class="prose text-gold title-reveal">PIERCING ARTIST BASED</p>
                    <p class="prose text-gold title-reveal">IN CRACOW</p>
                </div>
            </header>

            <div id="content" class="site-content pt-24">

                <?php do_action( 'tailpress_content_start' ); ?>

                <main>