<?php
$title = get_the_archive_title();
if ($title === "Archiwa" || $title === "Archives") {
  $title = "Blog";
}
?>

<header class="entry-header mb-16">
		<h1 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1"><?php echo $title; ?></h1>
</header>