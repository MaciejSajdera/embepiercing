<?php

/*
 * Template Name: Galerie Archive Template
 * description: >-
  Page template without sidebar
 */

 ?>

<?php get_header(); ?>

<div class="container my-8 mx-auto">

    galerie

    <?php if ( have_posts() ) : ?>
    <?php
		while ( have_posts() ) :
			the_post();
			?>

    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

    <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php
get_footer();