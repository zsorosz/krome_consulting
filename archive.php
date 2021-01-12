<?php get_header(); ?>

<section class="wrapper archive">
    <section class="section section__post">
        <?php get_template_part('includes/section', 'archive'); ?>
        <?php previous_posts_link();?>
        <?php next_posts_link();?>
    </section>
</section>

<?php get_footer(); ?>