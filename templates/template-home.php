<?php
/*
Template Name: Home Page
*/
get_header();
?>
<main>
    <?php if (have_posts()) :?>
        <?php while (have_posts()) : the_post(); ?>
    <?php endwhile;
    endif; ?>

    <?php echo review(3) ?>
</main>

<?php get_footer() ?>