<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <div class="post">
        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="post__img">
        <?php endif;?>
        <article class="post__content">
            <h3 class="post__title"><?php the_title();?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink();?>" class="btn post__btn">Read more</a>
        </article>
    </div>

<?php endwhile; else: endif; ?>