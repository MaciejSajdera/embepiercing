<?php

/*
 * Template Name: Galerie Archive Template
 * description: >-
  Page template without sidebar
 */

 ?>

<?php get_header(); ?>

<div class="container my-8 mx-auto">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-16 items-center content-center justify-center">

    <?php if ( have_posts() ) : ?>

      <?php
          $args = array(  
              'post_type' => 'portfolio',
              'post_status' => 'publish',
              'posts_per_page' => 999, 
              'order' => 'ASC', 
          );

          $loop = new WP_Query( $args ); 

          while ( $loop->have_posts() ) : $loop->the_post(); 
          ?>

          <div class="w-full mx-auto max-w-sm bg-white rounded-lg shadow overflow-hidden">
              <a class="flex h-72 overflow-hidden" href="<?php echo get_permalink() ?>">
                  <div class="rounded-t-lg w-full h-full bg-cover bg-top" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)" alt="<?php the_title(); ?>" loading="lazy"> </div>
              </a>
              <div class="p-5">
                      <h5 class="mb-4 text-2xl text-black font-bold"><?php the_title() ?></h5>
                  <a href="<?php echo get_permalink() ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-900">
                      Galeria
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </div>


          <?php

          endwhile;

          wp_reset_postdata(); 
          ?>

    <?php endif; ?>


    </div>

</div>

<?php
get_footer();