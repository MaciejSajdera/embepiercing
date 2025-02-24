<?php
 /* Template Name: Home Page Template */ 
?>

<?php get_header(); ?>

<div class="container mx-auto mt-24">

    <section class="mb-48 md:mb-64">
        <h3 class="text-4xl md:text-6xl mb-24 text-center uppercase">Zespół</h3>
            <?php echo get_template_part('template-parts/team-members') ?>
    </section>

    <section class="mb-48 md:mb-64">
        <h3 class="text-4xl md:text-6xl  mb-24 text-center uppercase">Portfolio</h3>
        <?php echo get_template_part('/template-parts/portfolio-grid'); ?>
    </section>


    <?php echo get_template_part('template-parts/recent-posts') ?>


    <section class="mb-48 md:mb-64">
        <h3 class="text-4xl mb-24 text-center uppercase">Napisz do nas!</h3>
        <div id="contactForm">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
        </div>
    </section>

</div>

<?php
get_footer();