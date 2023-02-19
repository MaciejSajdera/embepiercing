<?php
$action = get_query_var( 'action' );
?>

<div class="reveal-node reveal w-full mx-auto max-w-sm bg-white rounded-lg shadow overflow-hidden">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <a class="flex h-72 overflow-hidden" href="<?php echo get_permalink() ?>">
                  <div class="rounded-t-lg w-full h-full bg-cover bg-top" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)" alt="<?php the_title(); ?>" loading="lazy"> </div>
              </a>
              <div class="p-5">
                      <h5 class="text-2xl text-black font-bold"><?php the_title() ?></h5>
                      <?php
                        if (strlen(get_the_excerpt()) > 0) {
                            echo '<span class="text-gray-400 text-sm">'. get_the_time( 'Y-m-d, G:i' ) .'</span>';
                            echo '<p class="text-black text-base mt-4 mb-8">'.mb_strimwidth( get_the_excerpt(), 0, 220, '...' ).'</p>';
                        }

                      ?>
                  <a href="<?php echo get_permalink() ?>" class="inline-flex items-center px-3 py-2 text-md text-center text-white bg-black rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-900">
                      <?php echo $action ? $action : 'Czytaj dalej' ?>
                      <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
    </article>
</div>