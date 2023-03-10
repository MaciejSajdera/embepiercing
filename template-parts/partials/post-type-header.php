<?php

$title = get_the_title();

?>

<header class="entry-header mb-16">

        <div class="title-wrapper flex content-end items-center justify-between mb-8">

			<h1 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1">
				<?php echo $title; ?>
			</h1>
            <div class="hidden md:flex items-center">
                <p class="mr-4">Udostępnij:</p> <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
            </div>

        </div>

        <?php
		if ( 'post' === get_post_type() ) :
			?>
        <div class="entry-meta">
            <?php
                echo '<span class="text-gray-400 text-sm">'. get_the_time( 'Y-m-d, G:i' ) .'</span>';
			?>
        </div><!-- .entry-meta -->
        <?php endif; ?>


</header>