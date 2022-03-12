<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>
<section class="block-hero">
    <div class="container">

        <div class="row g-4">
            <div class="col-lg-5 align-self-center">
                <div class="content-wrapper">

                   <InnerBlocks/>

                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 align-self-center">

                // IMAGE

            </div>
        </div>

    </div>
</section>