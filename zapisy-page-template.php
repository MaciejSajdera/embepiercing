<?php
 /* Template Name: Zapisy Page Template */ 
?>

<?php get_header(); ?>

<div class="container mx-auto mt-24">
    <div class="text-center text-4xl">
        <?php echo get_template_part('/template-parts/partials/page-header'); ?>
    </div>

    <section class="mb-16 text-center">
	<?php if ( have_posts() ) : ?>
        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <?php get_template_part( 'template-parts/content', 'single' ); ?>

        <?php endwhile; ?>

        <?php endif; ?>
    </section>

    <section class="mb-16">
        <div id="bookingForm">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 4 ) ); ?>
        </div>

        <?php get_template_part( 'template-parts/partials/booksy-widget'); ?>
    </section>

</div>

<?php
get_footer();