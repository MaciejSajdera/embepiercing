<div class="mobile-menu xl:hidden">

    <button id="mobileMenuToggle" class="menu-toggle nav-icon top-[0.5rem] right-4 z-50" aria-controls="primary-menu-mobile" aria-expanded="false">
                <div class="nav-icon-wrapper pointer-events-none">

                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 200 200">
                        <g stroke-width="6.5" stroke-linecap="round">
                        <path d="M72 82.286h28.75" fill="#009100" fill-rule="evenodd" stroke="#fff" />
                        <path d="M100.75 103.714l72.482-.143c.043 39.398-32.284 71.434-72.16 71.434-39.878 0-72.204-32.036-72.204-71.554" fill="none" stroke="#fff" />
                        <path d="M72 125.143h28.75" fill="#009100" fill-rule="evenodd" stroke="#fff" />
                        <path d="M100.75 103.714l-71.908-.143c.026-39.638 32.352-71.674 72.23-71.674 39.876 0 72.203 32.036 72.203 71.554" fill="none" stroke="#fff" />
                        <path d="M100.75 82.286h28.75" fill="#009100" fill-rule="evenodd" stroke="#fff" />
                        <path d="M100.75 125.143h28.75" fill="#009100" fill-rule="evenodd" stroke="#fff" />
                        </g>
                    </svg>

                </div>
    </button>

    <div class="site-branding w-16 z-50 fixed left-4 top-[1.5rem]">
        <?php the_custom_logo(); ?>
    </div>

    <div id="mobileMenuWrapper" class="mobile-menu-wrapper z-40 flex flex-col">

        <?php wp_nav_menu([
            "theme_location" => "primary",
            "container" => "nav",
            'container_class' => 'mb-24',
            "menu_id" => "primary-menu-mobile",
            'menu_class'      => 'flex flex-col',
            'li_class'        => 'flex flex-wrap uppercase text-xl font-bold',
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