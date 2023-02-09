<?php
 /* Template Name: Home Page Template */ 
?>

<?php get_header('home'); ?>

<?php

$bio_1_text = get_field('bio_1')['bio_text'];
$bio_1_image = get_field('bio_1')['bio_image'];
$bio_2_text = get_field('bio_2')['bio_text'];
$bio_2_image = get_field('bio_2')['bio_image'];

?>

<div class="container mx-auto mt-24">

    <section class="min-h-screen p-4 max-w-7xl mx-auto">

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
    <section class="min-h-screen">
        section2
    </section>
    <section class="min-h-screen">
        section3
    </section>

</div>

<?php
get_footer('home');