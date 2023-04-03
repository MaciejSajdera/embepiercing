<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bmxschool
 */

$start_date = date("d-m-Y", strtotime(get_field('start_date')));;
$destination = get_field('destination');
$spot = get_field('spot');
$time = get_field('time');
$price = get_field('price');
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('mb--4'); ?>>

    <div class="entry-content blog-post__container flex flex-col md:block items-start mb-16">

        <div class="post-thumbnail w-full mb-16 md:mb-0 md:w-2/3 md:float-right md:pl-8 md:pb-8">

            <img class="w-full h-[512px] object-cover overflow-hidden rounded-lg" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE); ?>" />

        </div>

        <div class="post-content inline w-full md:w-1/3 text-lg">
			
			<div class="mb-16">
				<?php
				echo $start_date ? '<div class="wyjazd-info flex justify-between w-min-24 w-max-32 text-xl mb-2"><p class="mr-4 text-gold"><strong>Data rozpoczęcia: </strong></p><p class="text-right">'.mb_strimwidth( html_entity_decode($start_date), 0, 60, '...' ).'</p></div>' : null;
				echo $time ? '<div class="wyjazd-info flex justify-between w-min-24 w-max-32 text-xl mb-2"><p class="mr-4 text-gold"><strong>Godzina: </strong></p><p class="text-right">'.mb_strimwidth( html_entity_decode($time), 0, 60, '...' ).'</p></div>' : null;
				echo $spot ? '<div class="wyjazd-info flex justify-between w-min-24 w-max-32 text-xl mb-2"><p class="mr-4 text-gold"><strong>Miejsce: </strong></p><p class="text-right">'.mb_strimwidth( html_entity_decode($spot), 0, 60, '...' ).'</p></div>' : null;
				echo $destination ? '<div class="wyjazd-info flex justify-between w-min-24 w-max-32 text-xl mb-2"><p class="mr-4 text-gold"><strong>Miasto: </strong></p><p class="text-right">'.mb_strimwidth( html_entity_decode($destination), 0, 60, '...' ).'</p></div>' : null;
				echo $price ? '<div class="wyjazd-info flex justify-between w-min-24 w-max-32 text-xl mb-2"><p class="mr-4 text-gold"><strong>Cena: </strong></p><p class="text-right">'.mb_strimwidth( html_entity_decode($price), 0, 60, '...' ).'</p></div>' : null;
				?>
			</div>

            <?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__( 'Continue reading %s', 'embepiercing' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'embepiercing' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'embepiercing' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>

        </div> <!-- .post-content -->
    </div><!-- .entry-content -->

	<div class="post-navigation flex justify-between items-center mb-16">

        <div>
            <?php previous_post_link('%link', '<p class="post-navigation__prev mb-2">Poprzedni</p> <p>%title</p>'); ?>
        </div>

        <div class="text-right">
            <?php next_post_link('%link', '<p class="post-navigation__next mb-2">Następny</p> <p>%title</p>'); ?>
        </div>

	</div>

    <div class="flex flex-col content-center items-center md:hidden mt--4">
        <p class="mb--1">Udostępnij:</p>
        <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->