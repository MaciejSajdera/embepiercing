<?php get_header(); ?>

<div class="container mx-auto my-8">

  <?php echo get_template_part('/template-parts/partials/page-header'); ?>

    <?php if ( have_posts() ) : ?>

      <div class="reveal-from__trigger grid grid-cols-1 md:grid-cols-3 gap-16 items-center content-center justify-center">

        <?php
        while ( have_posts() ) :
          the_post();
          ?>
        
        <?php echo get_template_part( 'template-parts/partials/blog-post-tile'); ?>

        <?php endwhile; ?>

    </div>

    <?php endif; ?>

</div>

<?php
get_footer();