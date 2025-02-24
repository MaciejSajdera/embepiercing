</main>

<?php do_action( 'embepiercing_content_end' ); ?>

</div>

<?php do_action( 'embepiercing_content_after' ); ?>


<footer id="colophon" class="site-footer bg-black bg-opacity-50 pt-20 pb-12" role="contentinfo">

    <?php do_action( 'embepiercing_footer' ); ?>

    <div class="container mx-auto text-center text-white prose mb-16">

        <a href="<?php echo get_privacy_policy_url(); ?>">polityka prywatności</a>
    </div>

    <div class="container mx-auto text-center text-gold prose mb-4">
        &copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
    </div>
    <div class="container mx-auto text-center mb-8 text-gold prose">
        wszelkie prawa zastrzeżone
    </div>

    <div class="container mx-auto text-center">
        <p class="text-gray-400 text-center text-xs">
            made by: saiyan161
        </p>
    </div>



</footer>

</div> <!-- end of Luxy wrapper -->

</div>

<?php wp_footer(); ?>

</body>

</html>