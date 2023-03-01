</main>

<?php do_action( 'embepiercing_content_end' ); ?>

</div>

<?php do_action( 'embepiercing_content_after' ); ?>


<footer id="colophon" class="site-footer bg-black pt-20 pb-12" role="contentinfo">

    <?php do_action( 'embepiercing_footer' ); ?>

    <div class="container mx-auto text-center text-white prose mb-16">

        <a href="<?php echo get_privacy_policy_url(); ?>">polityka prywatności</a>
    </div>

    <div class="container mx-auto text-center text-gold prose mb-4">
        &copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
    </div>
    <div class="container mx-auto text-center  text-gold prose">
        wszelkie prawa zastrzeżone
    </div>



</footer>

</div> <!-- end of Luxy wrapper -->

</div>

<?php wp_footer(); ?>

</body>

</html>