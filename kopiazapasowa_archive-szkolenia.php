<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bmxschool
 */

get_header();

$today = date("Y-m-d");

$args_future_events = array(
    'post_type' => 'szkolenia',
        'meta_key' => 'start_date',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key'  => 'start_date',
                'value'     => $today,
                'compare'   => '>=',
                'type' => 'DATE'
            ),
        ),
        'posts_per_page'    => -1,
);

$future_event = query_posts($args_future_events);

$args_past_events = array(
    'post_type' => 'szkolenia',
        'meta_key' => 'start_date',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key'  => 'start_date',
                'value'     => $today,
                'compare'   => '<',
                'type' => 'DATE'
            ),
        ),
        'posts_per_page'    => -1,
);

$future_events = query_posts($args_future_events);
$past_events = query_posts($args_past_events);


// aktualnie sortuje malejaco do czasu edycji posta (najnowszy zaktuualizowany ostatni)
?>

<?php get_header(); ?>

<div class="container my-8 mx-auto">

                <header class="entry-header mb-8">
                        <h1 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1"><?php echo get_the_archive_title(); ?></h1>
                </header>

                <?php if ($future_events): ?>

                <div class="future-events mb-16">

                    <h2 class="entry-title text-gold text-xl md:text-2xl font-bold leading-tight mb-8">Nadchodzące:</h2>

                    <ul class="reveal-from__trigger grid grid-cols-1 md:grid-cols-2 gap-16 items-center content-center justify-center list-none">

                        <?php
                        foreach( $future_event as $post ):
                            setup_postdata( $post )
                            ?>

                            <li class="reveal-node reveal justify-self-stretch h-full w-full">
                                <?php get_template_part( 'template-parts/partials/single-szkolenie-post-tile', get_post_type() ); ?>
                            </li>

                        <?php
                        endforeach;
                    ?>

                    </ul>

                    <?php wp_reset_postdata(); ?>

                </div>

                <?php endif; ?>

                <?php

                if ($past_events) {

                ?>
                <div class="past-events">

                    <h2 class="entry-title text-gold text-xl md:text-2xl font-bold leading-tight mb-8">Minione:</h2>

                    <ul class="reveal-from__trigger grid grid-cols-1 md:grid-cols-2 gap-16 items-center content-center justify-center list-none">

                        <?php
                            foreach( $past_events as $post ):
                            setup_postdata( $post )
                            ?>

                            <li class="reveal-node reveal justify-self-stretch h-full w-full">
                                <?php get_template_part( 'template-parts/partials/single-szkolenie-post-tile', get_post_type() ); ?>
                            </li>

                        <?php
                         endforeach;
                        ?>

                    </ul>

                </div>

                <?php
                }
                ?>
</div>

<?php
// get_sidebar();
get_footer();
