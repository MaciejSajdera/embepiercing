<div class="desktop-menu desktop-menu--global mx-auto px-16 right-0 left-0 bg-black p-4 fixed top-0 max-width--xl hidden xl:flex content-center justify-between w-full">

    <div class="site-branding max-w-[100px]">
        <?php the_custom_logo(); ?>
    </div>

    <div class="primary-menu-wrapper p-0 flex items-center">

        <?php wp_nav_menu([
            "theme_location" => "primary",
            "container" => "nav",
            'container_class' => '',
            "menu_id" => "primary-menu",
            'menu_class'      => 'flex flex-row',
            'li_class'        => 'uppercase text-md font-bold',
            "orderby" => "menu_order",
            'fallback_cb'     => false,
        ]); ?>

        <div class="dropdownBackground">
            <span class="arrow"></span>
        </div>

    </div>

</div>