<div class="mobile-menu md:hidden">

    <button id="mobileMenuToggle" class="menu-toggle nav-icon z-50" aria-controls="primary-menu-mobile" aria-expanded="false">
                <div class="nav-icon-wrapper pointer-events-none">
                    <div class="burger-menu-piece top-0"></div>
                    <div class="burger-menu-piece top-[7px]"></div>
                    <div class="burger-menu-piece top-[14px]"></div>
                </div>
    </button>

    <div class="site-branding w-16 z-50 fixed left-4 top-4">
        <?php the_custom_logo(); ?>
    </div>

    <div id="mobileMenuWrapper" class="mobile-menu-wrapper z-40 flex flex-col justify-between">

        <?php wp_nav_menu([
            "theme_location" => "primary",
            "container" => "nav",
            'container_class' => 'mb-16',
            "menu_id" => "primary-menu-mobile",
            'menu_class'      => 'flex flex-col',
            'li_class'        => 'flex flex-wrap uppercase text-md font-bold',
            "orderby" => "menu_order",
            'fallback_cb'     => false,
        ]); ?>

        <div id="social-media__mobile-menu" class="flex flex-col">
            <div class="socials flex flex-col flex-wrap content-start mb-16">
            <a aria-label="link to instagram" href="https://www.instagram.com/embe_piercing/" class="ig mb-4" target="_blank"></a>
            <a aria-label="link to facebook" href="https://www.facebook.com/embepiercing" class="fb" target="_blank"></a>
            </div>
        </div>
    </div>

</div>