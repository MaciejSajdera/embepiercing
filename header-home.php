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

    <div id="fixedMenuDesktop" class="desktop-menu--home fixed z-40 left-8 h-full flex flex-col justify-between">
        <div class="py-12">

            <div class="menu-wrapper hidden md:flex md:flex-col md:gap-4">

                <?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden mt-4 p-4 lg:mt-0 lg:p-0 lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4 flex-col',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4 uppercase text-md font-bold',
						'fallback_cb'     => false,
					)
				);
				?>

                <div class="">
                    <p class="text-gray-500">
                        <?php echo header_copyright() ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="socials py-8 flex flex-col">
            <a href="" class="instagram">ig</a>
            <a href="" class="facebook">fb</a>
        </div>

    </div>

    <div id="heroImageHolder" class="embebg z-10">

        <?php $welcome_view_image = get_field('welcome_view_image'); ?>

        <img src=<?php echo $welcome_view_image['url']; ?>" alt="<?php echo $welcome_view_image['alt']; ?>" />

    </div>


    <div id="luxy" class="z-30">

        <div id="page" class="relative min-h-screen flex flex-col">

            <?php do_action( 'tailpress_header' ); ?>

            <header class="min-h-screen flex flex-col justify-end">
                <div class="absolute top-20 right-32">
                    <span id="heroScreenMarker" class="absolute -bottom-100 h-4 w-4"></span>
                    <p>PIERCING ARTIST BASED</p>
                    <p>IN CRACOW</p>
                </div>
                <div class=" flex justify-end px-8 py-8">
                    <div class="lg:flex lg:justify-between lg:items-center">

                        <div class="flex flex-col text-right">
                            <div className="embe-piercing title-reveal w-full">
                                <h1 class="text-5xl md:text-9xl">
                                    EMBE
                                </h1>
                            </div>
                            <div className="embe-piercing title-reveal w-full">
                                <h1 class="text-5xl md:text-9xl">
                                    PIERCING
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div id="content" class="site-content">

                <?php do_action( 'tailpress_content_start' ); ?>

                <main>