<?php
 /* Template Name: Szkolenia Page Template */ 
?>

<?php get_header(); ?>

<div class="container mx-auto mt-24">

    <?php echo get_template_part('/template-parts/partials/page-header'); ?>

    <section class="mb-16">
	<?php if ( have_posts() ) : ?>
        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <?php get_template_part( 'template-parts/content', 'single' ); ?>

        <?php endwhile; ?>

        <?php endif; ?>
    </section>

</div>

<?php
get_footer();