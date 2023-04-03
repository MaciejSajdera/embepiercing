<?php
$action = get_query_var( 'action' );
$id = get_the_ID();
$title = get_the_title();
$excerpt = mb_strimwidth( html_entity_decode(get_the_excerpt()), 0, 440, '...' );

$start_date = date("d-m-Y", strtotime(get_field('start_date')));
$destination = get_field('destination');


?>


    <article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-col w-full h-full bg-white rounded-xl shadow overflow-hidden'); ?>>
                <div class="relative overflow-hidden">
                    <div class="absolute z-10 top-6 left-4 bg-black bg-opacity-70 rounded-full px-4 py-1"><p><?php echo $start_date ?></p></div>
                    <div class="absolute z-10 bottom-6 left-4 bg-gold rounded-full px-4 py-1"><p><?php echo mb_strimwidth( html_entity_decode($destination), 0, 30, '...' ) ?></p></div>
                    <a class="flex h-72 will-change-transform transition-transform duration-500 hover:scale-110" href="<?php echo get_permalink() ?>">
                        <div class="w-full h-full bg-cover bg-center" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)" alt="<?php the_title(); ?>" loading="lazy"> </div>
                    </a>
                </div>

              <div class="p-5 justify-between flex flex-col flex-1">
                    <div class="text-content">

                        <h5 class="text-2xl text-black font-bold"><?php the_title() ?></h5>
                        <?php
                        if (strlen(get_the_excerpt()) > 0) {
                            // echo '<span class="text-gray-400 text-sm">'. get_the_time( 'Y-m-d, G:i' ) .'</span>';
                            echo '<p class="text-black text-base mt-4 mb-8">'.mb_strimwidth( get_the_excerpt(), 0, 220, '...' ).'</p>';
                        }
                        
                        ?>
                    </div>
                  <a href="<?php echo get_permalink() ?>" class="px-3 py-2 text-md text-center text-white bg-black rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-900">
                      <p>
                        <?php echo $action ? $action : 'Szczegóły szkolenia' ?>
                        <!-- <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> -->
                    </p>
                  </a>
              </div>
    </article>
