<?php
/*
 * Template Name: Front page
 */

get_header();

$hero_image = get_field('hero_picture');
$style = $hero_image ? 'style="background: url(' . $hero_image . ') center no-repeat; background-size: cover;"' : '';

$hero_video = get_field('hero_video');
$certLink = get_field('certificates_link');
?>

<section class="section hero" <?=$style;?>></section>

<?php get_footer(); ?>
