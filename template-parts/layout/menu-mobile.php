<div class="mobile-menu md:hidden">

    <button id="mobileMenuToggle" class="menu-toggle nav-icon z-50" aria-controls="primary-menu" aria-expanded="false">
                <div class="nav-icon-wrapper">
                    <div class="burger-menu-piece top-0"></div>
                    <div class="burger-menu-piece top-[7px]"></div>
                    <div class="burger-menu-piece top-[14px]"></div>
                </div>
    </button>

    <div id="mobileMenuWrapper" class="mobile-menu-wrapper z-40">

        <?php wp_nav_menu([
            "theme_location" => "primary",
            "container" => "nav",
            'container_class' => '',
            "menu_id" => "primary-menu",
            'menu_class'      => 'lg:flex lg:-mx-4 flex-col',
            'li_class'        => 'lg:mx-4 uppercase text-md font-bold',
            "orderby" => "menu_order",
            'fallback_cb'     => false,
        ]); ?>

        <div id="social-media__mobile-menu" class="flex flex-col">social-media-mobile-menu
        </div>
    </div>

    <div class="site-branding">
        <?php the_custom_logo(); ?>
        </a>
    </div>

</div>