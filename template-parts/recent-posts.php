<?php 
   // the query
   $the_query = new WP_Query( array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 4, 
      'order' => 'ASC',
      'orderby' => 'date',
   ));
?>

<?php if ( $the_query->have_posts() ) : ?>
   <section class="mb-64">
      <h3 class="text-6xl mb-24 text-center uppercase">Najnowsze posty</h3>
      <ul class="reveal-from__trigger grid grid-cols-1 md:grid-cols-2 gap-16 items-center content-center justify-center list-none">
         <?php
         foreach ( $the_query->posts as $post ) :
            setup_postdata( $post ); // Set up global post data for the loop

            ?>
            <li class="reveal-node reveal justify-self-stretch h-full w-full">
               <article id="post-<?php echo get_the_ID() ?>" class='flex flex-col w-full h-full bg-white rounded-xl shadow overflow-hidden'>
                  <div class="overflow-hidden">
                     <a class="flex h-72 will-change-transform transition-transform duration-500 hover:scale-110" href="<?php echo get_post_permalink($post) ?>">
                        <div class="rounded-t-lg w-full h-full bg-cover bg-center" style="background-image: url(<?php echo get_the_post_thumbnail_url($post) ?>)" alt="<?php echo get_the_title($post); ?>" loading="lazy"></div>
                     </a>
                  </div>
                  <div class="p-5 justify-between flex flex-col flex-1">
                     <div class="text-content">
                        <h5 class="text-2xl text-black font-bold"><?php echo get_the_title($post); ?></h5>
                        <?php
                        if (strlen(get_the_excerpt($post)) > 0) {
                           echo '<span class="text-gray-400 text-sm">'. get_the_time( 'Y-m-d, G:i' ) .'</span>';
                           echo '<p class="text-black text-base mt-4 mb-8">'.mb_strimwidth( get_the_excerpt($post), 0, 220, '...' ).'</p>';
                        }
                        ?>
                     </div>
                     <a href="<?php echo get_post_permalink($post) ?>" class="inline-flex w-fit items-center px-3 py-2 text-md text-center text-white bg-black rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-900">
                        <?php echo 'Czytaj dalej' ?>
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                     </a>
                  </div>
            </article>
            </li>
         <?php
         endforeach;
         ?>
      </ul>

   </section>

<?php endif; ?>