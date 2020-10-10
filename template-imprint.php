<?php

/*
Template Name: Imprint
*/

?>

<?php get_header(); ?>

<section>
    <h2><?php the_title();?></h2>
    <article class="row">
        <div class="col-lg-6">
            Address
        </div>
        <div class="col-lg-6">
            <?php get_template_part('includes/section', 'content'); ?>
        </div>
    </article>
</section>

<?php get_footer(); ?>