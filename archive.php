<?php get_header(); ?>

<section class="row">
    <!-- <aside class="col-lg-3">
        <?php //if( is_active_sidebar('blog-sidebar') ):?>
            <?php //dynamic_sidebar('blog-sidebar');?>
        <?php //endif;?>
    </aside> -->
    <section class="col-lg-9">

        <!-- <h1><?php //echo single_cat_title();?></h1> -->
        
        <?php get_template_part('includes/section', 'archive'); ?>
        
        <?php previous_posts_link();?>
        <?php next_posts_link();?>
    </section>
</section>

<?php get_footer(); ?>