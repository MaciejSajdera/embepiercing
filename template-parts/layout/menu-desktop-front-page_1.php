
    <div class="site-branding hidden xl:block fixed left-6 top-4 z-50 max-w-[100px]">
                <?php the_custom_logo(); ?>
    </div>

    <div id="fixedMenuDesktop" class="desktop-menu--home fixed z-40 left-8 h-full flex flex-col justify-between">

        <div class="pb-40 mt-40">

            <!-- backdrop-blur-sm bg-black bg-opacity-10  -->
            <div class="menu-wrapper py-4 rounded-2xl hidden xl:flex xl:flex-col xl:gap-4">

                <?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden mt-4 p-4 xl:mt-0 lg:p-0 xl:block',
						'menu_class'      => 'xl:flex md:-mx-4 flex-col',
						'theme_location'  => 'primary',
						'li_class'        => 'flex flex-wrap content-between items-center xl:mx-4 uppercase text-xl font-bold',
						'fallback_cb'     => false,

					)
				);
				?>

                <div class="">
                    <p class="text-gray-400">
                        <?php echo header_copyright() ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="socials  content-start mb-16 hidden xl:flex xl:flex-col xl:flex-wrap">
            <a aria-label="link to instagram" href="https://www.instagram.com/embe_piercing/" class="ig mb-4" target="_blank"></a>
            <a aria-label="link to facebook" href="https://www.facebook.com/embepiercing" class="fb" target="_blank"></a>
        </div>

    </div>