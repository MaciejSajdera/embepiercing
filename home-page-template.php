<?php
 /* Template Name: Home Page Template */ 
?>

<?php get_header(); ?>

<?php

$bio_1_text = get_field('bio_1')['bio_text'];
$bio_1_image = get_field('bio_1')['bio_image'];
$bio_2_text = get_field('bio_2')['bio_text'];
$bio_2_image = get_field('bio_2')['bio_image'];

?>

<div class="container mx-auto mt-24">

    <section class="mb-64">

        <div class="wrapper flex flex-col-reverse md:flex-row mb-36">
            <div class="shrink mb-16 md:mr-16 md:mb-0 md:w-2/3">
                <div class="prose text-xl md:text-3xl">
                    <?php echo $bio_1_text ?> 
                </div>
            </div>
            <div class="grow mb-16 md:mb-0 md:w-1/3 overflow-hidden">
                <img class="zoom-in-out" src="<?php echo $bio_1_image['url']; ?>" alt="<?php echo $bio_1_image['alt']; ?>" />
            </div>
        </div>

        <div class="wrapper flex flex-col-reverse md:flex-row-reverse mb-16">
            <div class="shrink mb-16 md:mb-0 md:w-1/3">
                <div class="prose text-xl md:text-3xl">
                    <?php echo $bio_2_text ?> 
                </div>
            </div>
            <div class="grow mb-16 md:mr-16 md:mb-0 md:w-2/3 overflow-hidden">
                <img class="zoom-in-out" src="<?php echo $bio_2_image['url']; ?>" alt="<?php echo $bio_2_image['alt']; ?>" />
            </div>
        </div>
    </section>
    <section class="mb-64">
        section2
    </section>
    <section class="mb-64">
        <h3 class="text-6xl mb-24 text-center">Najnowsze posty</h3>
        <div class="reveal-from__trigger grid grid-cols-1 md:grid-cols-3 gap-16 items-center content-center justify-center">
            <?php echo get_template_part('template-parts/recent-posts') ?>
        </div>
    </section>

    <section class="mb-64">
        <h3 class="text-6xl mb-24 text-center">Zapisz się na wizytę</h3>
        <div id="contactForm">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
        </div>
    </section>

</div>

<?php
get_footer();