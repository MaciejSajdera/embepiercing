</main>

<?php do_action( 'embepiercing_content_end' ); ?>

</div>

<?php do_action( 'embepiercing_content_after' ); ?>


<footer id="colophon" class="site-footer bg-black py-20" role="contentinfo">

    <?php do_action( 'embepiercing_footer' ); ?>

    <div class="container mx-auto text-center text-gold prose">
        &copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
    </div>
</footer>

</div> <!-- end of Luxy wrapper -->

</div>

<?php wp_footer(); ?>

</body>

</html>