<?php
$welcome_view_image = get_field('welcome_view_image');

?>

<div class="welcome-view">

    <img src="<?php echo $welcome_view_image['url']; ?>" alt="<?php echo $welcome_view_image['alt']; ?>" />

</div>