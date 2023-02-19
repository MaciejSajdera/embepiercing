<?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <?php echo get_template_part( 'template-parts/partials/blog-post-tile'); ?>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php endif; ?>