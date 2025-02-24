<?php
 /* Template Name: Szkolenia Page Template */ 
$header = get_field('header');
$subheader = get_field('subheader');
$type = get_field('type');
$type_description = get_field('type_description');
$day_1 = get_field('day_1');
$day_1_image = get_field('day_1_image');
$day_1_lesson = get_field('day_1_lesson');
$day_1_content = get_field('day_1_content');
$day_2 = get_field('day_2');
$day_2_image = get_field('day_2_image');
$day_2_lesson = get_field('day_2_lesson');
$day_2_content = get_field('day_2_content');
$day_3 = get_field('day_3');
$day_3_image = get_field('day_3_image');
$day_3_lesson = get_field('day_3_lesson');
$day_3_content = get_field('day_3_content');
$summary = get_field('summary');
?>

<?php get_header(); ?>


<div class="container my-8 mx-auto">

    <?php echo get_template_part('/template-parts/partials/page-header'); ?>

    <div class="entry-content blog-post__container flex flex-col md:block items-start mb-16">

        <div class="post-thumbnail w-full mb-8 md:mb-0 md:w-1/2 md:float-right md:pl-8 md:pb-8">

            <?php if (strlen(get_the_post_thumbnail_url()) > 0) : ?>
            <img class="w-full h-[512px] object-cover overflow-hidden rounded-lg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" />
            <?php endif; ?>
        </div>

        <div class="post-content inline w-full md:w-1/3 text-lg">

                    <div class="mb-8">
                        <h2 class="font-bold text-gold text-3xl"><?php echo $header ?></h2>
                    </div>

                    <div class="mb-4">
                        <p class="text-2xl"><?php echo $subheader ?></p>
                    </div>
                    <div>
                        <p class="text-2xl"><?php echo $type ?> <?php echo $type_description ?></p>
                    </div>

        </div>

    </div>

    <div class="entry-content blog-post__container flex flex-col md:block items-start mb-16">

        <div class="post-content inline w-full md:w-1/3 text-lg">

            <div>
                <div class="mb-4">
                    <h3 class="text-2xl font-semibold text-gold"><?php echo $day_1 ?></h3>
                </div>
                <div class="mb-4">
                    <p class="font-semibold"><?php echo $day_1_lesson ?></p>
                </div>
                <div class="mb-4">
                    <p><?php echo $day_1_content ?></p>
                </div>
                <div class="post-thumbnail w-full mb-8">
                    <?php if ($day_1_image) : ?>
                    <img class="w-full h-[512px] object-cover overflow-hidden rounded-lg" src="<?php echo $day_1_image['url'] ?>" alt="<?php echo $day_1_image['alt'] ?>" />
                    <?php endif; ?>
                </div>
            </div>

            <div>
                <div class="mb-4">
                    <h3 class="text-2xl font-semibold text-gold"><?php echo $day_2 ?></h3>
                </div>
                <div class="mb-4">
                    <p class="font-semibold"><?php echo $day_2_lesson ?></p>
                </div>
                <div class="mb-4">
                    <p><?php echo $day_2_content ?></p>
                </div>
                <div class="post-thumbnail w-full mb-8">
                    <?php if ($day_2_image) : ?>
                    <img class="w-full h-[512px] object-cover overflow-hidden rounded-lg" src="<?php echo $day_2_image['url'] ?>" alt="<?php echo $day_2_image['alt'] ?>" />
                    <?php endif; ?>
                </div>
            </div>

            <div>
                <div class="mb-4">
                    <h3 class="text-2xl font-semibold text-gold"><?php echo $day_3 ?></h3>
                </div>
                <div class="mb-4">
                    <p class="font-semibold"><?php echo $day_3_lesson ?></p>
                </div>
                <div class="mb-4">
                    <p><?php echo $day_3_content ?></p>
                </div>
                <div class="post-thumbnail w-full mb-8">
                    <?php if ($day_3_image) : ?>
                    <img class="w-full h-[512px] object-cover overflow-hidden rounded-lg" src="<?php echo $day_3_image['url'] ?>" alt="<?php echo $day_3_image['alt'] ?>" />
                    <?php endif; ?>
                </div>
            </div>

            <div>
                <?php echo $summary ?>
            </div>

        </div>

    </div><!-- .entry-content -->

    <div class="mx-auto text-center text-white prose-xl mb-16">
    <h3 class="text-4xl md:text-6xl mb-16 text-center uppercase">Płać wygodnie w ratach!</h3>
    <p class="text-2xl text-gold text-center">
    Dzięki MediPay możesz uregulować płatność przelewem w terminie do 30 dni bez dodatkowych kosztów lub rozłożyć spłaty na 3, 4, 8 lub 12 miesięcy. 
    Przelicz!
    </p>

    </div>

    
    <iframe src="https://www.mediraty.pl/kalkulator/kalkulator-medipay.php?klinikain=13823" width="100%" height="400" scrolling="no" frameborder="0"></iframe>


</div>

<?php
get_footer();