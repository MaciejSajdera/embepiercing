<?php
global $wp_query;
$my_posts = $wp_query->posts;
 ?>

<?php get_header(); ?>

<div class="container my-8 mx-auto">

<?php echo get_template_part('/template-parts/partials/archive-header'); ?>

    <?php if ( have_posts() ) : ?>

      <?php echo get_template_part('/template-parts/partials/tabs', '',  array(
        'posts' => $my_posts, // passing this array possible since WP 5.5
    )); ?>

    <?php endif; ?>

</div>

<?php
get_footer();