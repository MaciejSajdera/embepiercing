<?php
$i = get_query_var( 'i' );
$is_odd = $i % 2 == 0;
?>
<div class="wrapper flex flex-col xl:flex-row mb-36 <?php echo !$is_odd ? 'xl:flex-row-reverse' : null ?>">
    <div class="shrink mb-16 xl:mb-0 xl:w-1/2 2xl:w-2/3 <?php echo !$is_odd ? 'xl:ml-8' : 'xl:mr-8' ?>">
        <h3 class="text-gold prose text-5xl uppercase mb-8"><?php echo the_title() ?></h3>
        <div class="entry-content prose text-xl xl:text-2xl">
            <?php 
                the_content();
            ?> 
        </div>
    </div>
    <div class="flex grow xl:mb-0 xl:w-1/2 2xl:w-1/3 max-h-[420px] xl:max-h-[640px] overflow-hidden">
        <img class="zoom-in-out object-contain object-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" />
    </div>
</div>