<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <div>
        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
        <?php endif;?>
        <article>
            <h3><?php the_title();?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink();?>" class="btn btn-sm read-more">Read more</a>
        </article>
    </div>

<?php endwhile; else: endif; ?>