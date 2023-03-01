<?php
 /* Template Name: Home Page Template */ 
?>

<?php get_header(); ?>

<div class="container mx-auto mt-24">

    <section class="mb-64">
        <h3 class="text-6xl mb-24 text-center uppercase">Zespół</h3>
            <?php echo get_template_part('template-parts/team-members') ?>
    </section>

    <section class="mb-64">
        <h3 class="text-6xl mb-24 text-center uppercase">Portfolio</h3>
        <?php echo get_template_part('/template-parts/portfolio-grid'); ?>
    </section>

    <section class="mb-64">
        <h3 class="text-6xl mb-24 text-center uppercase">Najnowsze posty</h3>
        <div class="reveal-from__trigger grid grid-cols-1 md:grid-cols-3 gap-16 items-center content-center justify-center">
            <?php echo get_template_part('template-parts/recent-posts') ?>
        </div>
    </section>

    <section class="mb-64">
        <h3 class="text-6xl mb-24 text-center uppercase">Zapisz się na wizytę</h3>
        <div id="contactForm">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
        </div>
    </section>

</div>

<?php
get_footer();