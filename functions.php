<?php

/**
 * Theme setup.
 */
function embepiercing_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'embepiercing' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
}

add_action( 'after_setup_theme', 'embepiercing_setup' );

/**
 * Enqueue theme assets.
 */
function embepiercing_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'embepiercing', embepiercing_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_style( 'fonts', embepiercing_asset( 'css/typography.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'embepiercing', embepiercing_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );

	if (is_front_page()) {
		wp_enqueue_script( 'home', embepiercing_asset( 'js/home.js' ), array(), $theme->get( 'Version' ) );
	}
}

add_action( 'wp_enqueue_scripts', 'embepiercing_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function embepiercing_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}


/* UTILITIES */

function header_copyright()
{
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
	SELECT
	YEAR(min(post_date_gmt)) AS firstdate,
	YEAR(max(post_date_gmt)) AS lastdate
	FROM
	$wpdb->posts
	WHERE
	post_status = 'publish'
	");
	$output = "";
	if ($copyright_dates) {
		$copyright = "&copy; " . $copyright_dates[0]->lastdate;
		// if ($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
		// 	$copyright .= "-" . $copyright_dates[0]->lastdate;
		// }
		$output = $copyright;
	}
	return $output;
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function embepiercing_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'embepiercing_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function embepiercing_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'embepiercing_nav_menu_add_submenu_class', 10, 3 );

function add_img_size($content) {
	$pattern = '/<img [^>]*?src="(https?:\/\/[^"]+?)"[^>]*?>/iu';

preg_match_all($pattern, $content, $imgs);
foreach ( $imgs[0] as $i => $img ) {
if ( false !== strpos( $img, 'width=' ) && false !== strpos( $img, 'height=' ) ) {
continue;
}
$img_url = $imgs[1][$i];
$img_size = @getimagesize( $img_url );

if ( false === $img_size ) {
continue;
}
$replaced_img = str_replace( '<img ', ' <img ' . $img_size[3] . ' ', $imgs[0][$i] );
	  $content = str_replace( $img, $replaced_img, $content );
	}
	return $content;
}

/* MENUS */

// Mobile menu

add_filter("wp_nav_menu_objects", "wpdocs_add_menu_parent_class", 11, 3);

function wpdocs_add_menu_parent_class($items)
{
	$parents = [];

	// Collect menu items with parents.
	foreach ($items as $item) {
		if ($item->menu_item_parent && $item->menu_item_parent > 0) {
			$parents[] = $item->menu_item_parent;
		}
	}

	// Add class.
	foreach ($items as $item) {
		if (in_array($item->ID, $parents)) {
			$item->classes[] = "menu-parent-link"; //here attach the class
			// $item->title .= ' <span class="show-submenu"></span>';
		}
	}

	return $items;
}

function prefix_add_button_after_menu_item_children(
	$item_output,
	$item,
	$depth,
	$args
) {
	if (
		in_array("menu-item-has-children", $item->classes) ||
		in_array("page_item_has_children", $item->classes)
	) {
		$item_output = str_replace(
			$args->link_after . "</a>",
			$args->link_after .
				'</a><span class="show-submenu" aria-expanded="false" aria-pressed="false"></span>',
			$item_output
		);
	}

	return $item_output;
}
add_filter(
	"walker_nav_menu_start_el",
	"prefix_add_button_after_menu_item_children",
	10,
	4
);

class Has_Child_Walker_Nav_Menu extends Walker_Nav_Menu
{
	public function display_element(
		$element,
		&$children_elements,
		$max_depth,
		$depth,
		$args,
		&$output
	) {
		if (!$element) {
			return;
		}
		$element->has_children = !empty(
			$children_elements[$element->{$this->db_fields["id"]}]
		);
		parent::display_element(
			$element,
			$children_elements,
			$max_depth,
			$depth,
			$args,
			$output
		);
	}
}

function set_custom_facebook_image_size( $img_size ) { return 'large' ; };
add_filter( 'wpseo_opengraph_image_size' , 'set_custom_facebook_image_size' );

add_filter(' the_content','add_img_size');
add_filter( 'wpseo_metabox_prio' , function() { return 'low' ; } );

add_filter('xmlrpc_enabled', '__return_false' );