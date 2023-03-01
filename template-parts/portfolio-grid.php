<?php if ( have_posts() ) : ?>
        <div class="reveal-from__trigger grid grid-cols-1 md:grid-cols-3 gap-16 items-center content-center justify-center">
        
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

            <?php set_query_var( 'action', 'Zobacz galerię' ); ?>
            <?php echo get_template_part( 'template-parts/partials/portfolio-post-tile'); ?>


            <?php

            endwhile;

            wp_reset_postdata(); 
            ?>

        </div>

<?php endif; ?>