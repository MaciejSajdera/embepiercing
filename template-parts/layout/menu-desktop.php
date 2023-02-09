<div class="desktop-menu fixed top-0 max-width--xl hidden md:flex content-between w-full">

    <div class="site-branding">
        <?php the_custom_logo(); ?>
    </div>

    <div class="primary-menu-wrapper p-0 flex items-center self-end">

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

        <div class="dropdownBackground">
            <span class="arrow"></span>
        </div>

    </div>

</div>