<?php
$i = get_query_var( 'i' );
$is_odd = $i % 2 == 0;
$content = get_the_content();
$trimmed_content = substr( $content, 0, 350 )
?>
<div class="wrapper flex flex-col xl:flex-row mb-32 <?php echo !$is_odd ? 'xl:flex-row-reverse' : null ?>">

    <div class="shrink xl:mb-0 xl:w-1/2 2xl:w-2/3 <?php echo !$is_odd ? 'xl:ml-8' : 'xl:mr-8' ?>">
        <h3 class="text-gold prose text-5xl uppercase mb-8"><?php echo the_title() ?></h3>

        <div class="flex grow xl:mb-0 xl:w-1/2 2xl:w-1/3 max-h-[420px] xl:max-h-[640px] overflow-hidden mb-16 md:hidden">
            <img class="zoom-in-out object-contain object-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" />
        </div>

        <div class="entry-content entry-content--revealFullOnMobile prose text-xl xl:text-2xl">
            <div class="trimmed-content md:hidden">
                <?php
                    echo $trimmed_content;
                    echo '...';
                ?>
            </div>
            <div class="full-content hidden md:block">
                <?php 
                    echo $content;
                ?>
            </div>
            <div class="flex justify-center items-center mt-4">
                <button data-show="false" class="reveal-more md:hidden text-gold p-4">Czytaj więcej</button>
            </div>
        </div>
        
    </div>

    <div class="grow xl:mb-0 xl:w-1/2 2xl:w-1/3 max-h-[420px] xl:max-h-[640px] overflow-hidden hidden md:flex">
        <img class="zoom-in-out object-contain object-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" />
    </div>

</div>