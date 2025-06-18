<?php
/**
 * Template Name: Homepage
 */
get_header(); 
?>

<div>
    <h1>homepage</h1>
    <a href="#" id="show-contact">Contact</a>
</div>

<div id="contact-form-wrap" class="contact_popup">
    <?php get_template_part('template-parts/contact-form'); ?>
</div>

<?php get_footer(); ?>
