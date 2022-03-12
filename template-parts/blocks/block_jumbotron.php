<?php

/**
 * Testimonial Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>
<section class="main-jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-6 jumb_img">
                <img src="http://aukfood.local/wp-content/themes/lazuli-starter/assets/images/auk_jumbotron.png" alt="manchot aukfood">
            </div>

            <div class="col-6 jumb_text">
                <InnerBlocks/>
            </div>
        </div>
    </div>
</section>