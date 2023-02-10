<div class="mobile-menu md:hidden">

    <button id="mobileMenuToggle" class="menu-toggle nav-icon z-50" aria-controls="primary-menu" aria-expanded="false">
                <div class="nav-icon-wrapper">
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
            "menu_id" => "primary-menu",
            'menu_class'      => 'flex flex-col',
            'li_class'        => 'flex flex-wrap uppercase text-md font-bold',
            "orderby" => "menu_order",
            'fallback_cb'     => false,
        ]); ?>

        <div id="social-media__mobile-menu" class="flex flex-col">
            <div class="socials flex flex-col flex-wrap content-start mb-16">
                <a href="" class="ig mb-4" target="_blank"></a>
                <a href="" class="fb" target="_blank"></a>
            </div>
        </div>
    </div>

</div>