<?php
/* Template Name: Front Page */
?>
<?php get_header(); ?>

<main>
    <?php get_template_part('template-parts/hero-block'); ?>
    <?php get_template_part('template-parts/you-get'); ?>
    <?php get_template_part('template-parts/family-block'); ?>
    <?php get_template_part('template-parts/test-block'); ?>
    <?php // get_template_part('template-parts/advantages-block'); ?>
    <?php get_template_part('template-parts/about-block'); ?>
    <?php get_template_part('template-parts/chat-block'); ?>
    <?php get_template_part('template-parts/testimonial-slider'); ?>
    <?php get_template_part('template-parts/subscribe-block'); ?>
    <?php //get_template_part('template-parts/ai-technologies-block'); ?> 
    <?php get_template_part('template-parts/faq-block'); ?> 
</main>

<?php get_footer(); ?>