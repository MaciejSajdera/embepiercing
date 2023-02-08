<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-dark text-light antialiased' ); ?>>

    <?php do_action( 'tailpress_site_before' ); ?>

    <div id="fixedMenu" class="fixed z-20 left-8">
        <div class=" lg:flex lg:justify-between lg:items-center py-6">
            <div class="flex justify-between items-center">
                <div>
                    <?php if ( has_custom_logo() ) { ?>
                    <?php the_custom_logo(); ?>
                    <?php } else { ?>
                    <!-- <a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
                            <?php echo get_bloginfo( 'name' ); ?>
                        </a> -->

                    <!-- <p class="text-sm font-light text-gray-600">
                            <?php echo get_bloginfo( 'description' ); ?>
                        </p> -->

                    <?php } ?>
                </div>

                <div class="lg:hidden">
                    <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                        <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="menu-wrapper flex flex-col gap-4">


                <?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-dark mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-dark lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4 flex-col',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
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

    </div>

    <div class="embebg z-10">

        <?php $welcome_view_image = get_field('welcome_view_image'); ?>

        <img src="<?php echo $welcome_view_image['url']; ?>" alt="<?php echo $welcome_view_image['alt']; ?>" />

    </div>

    <div id="luxy" class="z-30">

        <di id="page" class="min-h-screen flex flex-col">

            <?php do_action( 'tailpress_header' ); ?>

            <header class="min-h-screen flex flex-col justify-end">
                <div class="absolute top-8 right-8">
                    <p>PIERCING ARTIST BASED</p>
                    <p>IN CRACOW</p>
                </div>
                <div class="flex justify-end p-8">
                    <div class="lg:flex lg:justify-between lg:items-center py-6">

                        <div class="flex flex-col text-right">
                            <div className="embe-piercing title-reveal w-full">
                                <h1 class="text-9xl">
                                    EMBE
                                </h1>
                            </div>
                            <div className="embe-piercing title-reveal w-full">
                                <h1 class="text-9xl">
                                    PIERCING
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div id="content" class="site-content">

                <section class="min-h-screen">
                    section1
                </section>
                <section class="min-h-screen">
                    section2
                </section>
                <section class="min-h-screen">
                    section3
                </section>

                <?php do_action( 'tailpress_content_start' ); ?>

                <main>