<?php 
   // the query
   $the_query = new WP_Query( array(
      'post_type' => 'zespol',
      'post_status' => 'publish',
      'posts_per_page' => 999, 
      'order' => 'ASC', 
  )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
   <?php $i = 0 ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <?php $i++; ?>
  <?php set_query_var( 'i', $i ); ?>
  <?php echo get_template_part( 'template-parts/partials/team-member'); ?>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>