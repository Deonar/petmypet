<?php get_header(); ?>
<div class="hero-block py">
    <div class="container">
        <h1 class="color-wthite"><?php the_title(); ?></h1>
    </div>
</div>
<main class="py">
    <div class="container">
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>