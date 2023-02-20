<?php
$title = strlen(get_the_archive_title() > 0) ? get_the_archive_title() : get_the_title();
?>

<header class="entry-header mb-16">
		<h1 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1"><?php echo $title; ?></h1>
</header>