<?php

$title = get_the_title();
$blog_post_header = get_field('blog_post_header', get_the_ID());

?>

<header class="entry-header">

    <div class="title-wrapper flex flex-col content-end justify-between mb-4">

        <h1 class="entry-title text-2xl xl:text-3xl font-extrabold leading-tight mb-4">
            <?php echo $title; ?>
        </h1>

        <?php if ($blog_post_header): ?>
            <div class="blog-post-header text-gold text-xl">
                <?php echo $blog_post_header; ?>
            </div>
        <?php endif; ?>

    </div>

    <?php
    if ( 'post' === get_post_type() ) :
        ?>
    <div class="entry-meta">
        <?php
            echo '<span class="text-gray-400 text-sm">Opublikowano: '. get_the_time( 'F j, Y' ) .'</span>';
        ?>
    </div><!-- .entry-meta -->
    <?php endif; ?>


</header>