<?php

/*
 * Template Name: Galerie Archive Template
 * description: >-
  Page template without sidebar
 */

 ?>

<?php get_header(); ?>

<div class="container my-8 mx-auto">

    <?php echo get_template_part('/template-parts/partials/archive-header'); ?>
    <?php echo get_template_part('/template-parts/portfolio-grid'); ?>

</div>

<?php
get_footer();