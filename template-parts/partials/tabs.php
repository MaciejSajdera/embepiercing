
<?php

$posts = $args['posts'];

?>

<div id="accordion-color" data-accordion="collapse">

    <?php

    $i = 1;

    foreach ($posts as $post) {

        $post_id = $post->ID;
        $post_title = $post->post_title;
        $post_content = $post->post_content;

            ?>
            <div class="accordion__single">
            <h2 class="accordion__heading prose text-2xl" id="accordion-color-heading-<?php echo $i; ?>">
                <button type="button" class="accordion__button" data-accordion-target="#accordion-color-body-<?php echo $i; ?>" aria-expanded="false" aria-controls="accordion-color-body-<?php echo $i; ?>">
                    <span class="pointer-events-none"><?php echo $i.'.'.' '. $post_title; ?></span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-color-body-<?php echo $i; ?>" class="hidden" aria-labelledby="accordion-color-heading-<?php echo $i; ?>">
                <div class="accordion__body p-5 border-2 border-b-0 border-t-0 border-gray-200">
                    <p class="mb-2 prose text-2xl"><?php echo $post_content; ?></p>
                </div>
            </div>
            </div>
            <?php
    
            $i++;
    }

?>

</div>
