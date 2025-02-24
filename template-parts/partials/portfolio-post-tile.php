<?php
$action = get_query_var( 'action' );
?>

<div class="reveal-node reveal h-96 w-full mx-auto max-w-sm bg-white rounded-lg shadow overflow-hidden">
    <a href="<?php echo get_permalink() ?>" class="block h-full text-white hover:text-white">
    <article id="post-<?php the_ID(); ?>" <?php post_class('h-full'); ?>>

        <div class="w-full h-full bg-cover bg-top flex items-center content-center justify-center" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)" alt="<?php the_title(); ?>" loading="lazy">
            <div class="w-full h-full flex justify-center items-center transition-colors
                bg-gray-900/30 hover:bg-gray-900/0">
                <h4 class="text-3xl text-center"><?php echo get_the_title(); ?></h4>
            </div>
        </div>

    </article>

</a>
</div>