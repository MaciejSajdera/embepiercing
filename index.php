<?php get_header(); ?>

<div class="container mx-auto my-8">

  <?php echo get_template_part('/template-parts/partials/archive-header'); ?>

    <?php if ( have_posts() ) : ?>

      <ul class="reveal-from__trigger grid grid-cols-1 md:grid-cols-2 gap-16 items-center content-center justify-center list-none">

        <?php
        while ( have_posts() ) :
          the_post();
          ?>
        <li class="reveal-node reveal justify-self-stretch h-full w-full">
          <?php echo get_template_part( 'template-parts/partials/blog-post-tile'); ?>
        </li>

        <?php endwhile; ?>

      </ul>

    <?php endif; ?>

</div>

<?php
get_footer();