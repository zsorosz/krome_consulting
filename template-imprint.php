<?php

/*
Template Name: Imprint
*/

?>

<?php get_header(); ?>

<section class="wrapper">
    <div class="section section__imprint">
        <article class="section__content section__content-imprint">
            <h2><?php the_title();?></h2>
            <?php get_template_part('includes/section', 'content'); ?>
        </article>
    </div>
</section>

<?php get_footer(); ?>