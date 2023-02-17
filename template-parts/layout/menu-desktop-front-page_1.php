
    <div class="site-branding hidden md:block fixed left-6 top-4 z-50 max-w-[100px]">
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
            <a href="https://www.instagram.com/embe_piercing/" class="ig mb-4" target="_blank"></a>
            <a href="https://www.facebook.com/embepiercing" class="fb" target="_blank"></a>
        </div>

    </div>

    <div id="heroImageHolder" class="embebg -z-10">
        <?php $welcome_view_image = get_field('welcome_view_image'); ?>
        <img src=<?php echo $welcome_view_image['url']; ?> alt="<?php echo $welcome_view_image['alt']; ?>" />
    </div>