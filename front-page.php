<?php get_header(); ?>
<section>
    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('banner-fullwidth');?>" alt="<?php the_title();?>">
    <?php endif;?>
    <h1>Headline</h1>
</section>

<section id="about">
    <h2>
        <?php 
            $my_postid = 23;
            $title = get_the_title( $my_postid );
            echo $title;
        ?>
    </h2>
    <article>
        <?php 
            $my_postid = 23;
            $content_post = get_post($my_postid);
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace('&nbsp;', ' ', $content);
            echo $content;
        ?>
    </article>
</section>
<section id="services">
    <h2>
        <?php 
            $my_postid = 24;
            $title = get_the_title( $my_postid );
            echo $title;
        ?>
    </h2>
    <article>
        <?php 
            $my_postid = 24;
            $content_post = get_post($my_postid);
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace('&nbsp;', ' ', $content);
            echo $content;
        ?>
    </article>
</section>
<section id="contact">
    <h2>
        <?php 
            $my_postid = 25;
            $title = get_the_title( $my_postid );
            echo $title;
        ?>
    </h2>
    <article>
        <?php 
            $my_postid = 25;
            $content_post = get_post($my_postid);
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace('&nbsp;', ' ', $content);
            echo $content;
        ?>
    </article>
</section>
<section id="contact">
    <?php $url = get_the_post_thumbnail_url(25, 'front-small');?>     
        <img src="<?php echo $url;?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">       
    <div>
        <h2>
            <?php 
                $my_postid = 25;
                $title = get_the_title( $my_postid );
                echo $title;
            ?>
        </h2>
        <article>
            <?php 
                $my_postid = 25;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace('&nbsp;', ' ', $content);
                echo $content;
            ?>
        </article>
    </div>
</section>

<!-- <div id="ttr_main" class="row">
    <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <h1><?php the_title(); ?></h1>
                    <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                    <p><?php the_content(__('(more...)')); ?></p>
                </div>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php //get_sidebar(); ?> -->

<?php get_footer(); ?>