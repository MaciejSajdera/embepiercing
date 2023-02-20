<?php

/*
 * Template Name: Galerie Archive Template
 * description: >-
  Page template without sidebar
 */

 ?>

<?php get_header(); ?>

<div class="container my-8 mx-auto">

    <?php echo get_template_part('/template-parts/partials/post-type-header'); ?>

    <?php

    $tax_terms = get_terms('kategorie_uslug', array('kategorie_uslug' => false));

    foreach($tax_terms as $term_single) { 
        
        /* Taxonomy title*/

        ?>
        <h2 class="text-2xl mb-4">
            <?php echo $term_single->name; ?>
        </h2>
        <?php
        
        $args = array(  
            'post_type' => 'uslugi',
            'post_status' => 'publish',
            'posts_per_page' => 999, 
            'order' => 'ASC',
            'tax_query' => array(
                array (
                    'taxonomy' => 'kategorie_uslug',
                    'field' => 'slug',
                    'terms' => $term_single->slug,
                )
            ),
        );

        $loop = new WP_Query( $args ); 

        ?>

        <div class="relative overflow-x-auto shadow-md rounded-xl mb-16">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="hidden md:block px-6 py-3">
                        Zdjęcie
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nazwa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Cena (PLN)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Czytaj więcej
                    </th>
                </tr>
                </thead>

            <?php

            while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="hidden md:table-cell w-32 p-4">
                    <div class="w-24 h-24 bg-cover bg-center rounded-lg" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>">
                </td>
                <td class="w-48 px-6 py-4 font-semibold text-base md:text-xl text-gray-900 dark:text-white">
                    <?php echo get_the_title(); ?>
                </td>
                <td class="w-48 px-6 py-4 font-semibold text-base md:text-xl text-gray-900 dark:text-white">
                    <?php
                    $details = get_field('details', get_the_ID());
                    $price = $details['price'];
                    $price ? printf($price) : printf('Zapytaj o cenę');
                    ?>
                </td>
                <td class="w-48 px-6 py-4">
                    <a href="<?php echo get_permalink() ?>">
                    <button type="button" id="accept" class="text-white text-sm md:text-lg bg-gold hover:bg-blend-darken focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-4 py-2 text-center">Szczegóły</button>
                    </a>
                </td>
            </tr>

            <?php

            endwhile;

            wp_reset_postdata(); 

        ?>
            </table>
        </div>

        <?php
    }

    ?>
    





</div>

<?php
get_footer();