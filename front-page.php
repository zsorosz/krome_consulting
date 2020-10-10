<?php get_header(); ?>
<div class="banner-container">
    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('banner-fullwidth');?>" alt="<?php the_title();?>">
    <?php endif;?>
</div>
<section class="page-wrap">
<div class="container">
    <!-- <h2><?php //the_title();?></h2> -->
    <?php get_template_part('includes/section', 'content'); ?>
 </div>

<section id="about" class="container">
    <h2>
        <?php 
            $my_postid = 23;
            $title = get_the_title( $my_postid );
            echo $title;
        ?>
    </h2>
    <div class="container">
        <?php 
            $my_postid = 23;
            $content_post = get_post($my_postid);
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace('&nbsp;', ' ', $content);
            echo $content;
        ?>
    </div>
</section>
<section id="services" class="container">
<h2>
        <?php 
            $my_postid = 24;
            $title = get_the_title( $my_postid );
            echo $title;
        ?>
    </h2>
    <div>
        <?php 
            $my_postid = 24;
            $content_post = get_post($my_postid);
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace('&nbsp;', ' ', $content);
            echo $content;
        ?>
    </div>
</section>
<section id="contact" class="container">
    <h2>
        <?php 
            $my_postid = 25;
            $title = get_the_title( $my_postid );
            echo $title;
        ?>
    </h2>
    <div>
        <?php 
            $my_postid = 25;
            $content_post = get_post($my_postid);
            $content = $content_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace('&nbsp;', ' ', $content);
            echo $content;
        ?>
    </div>
</section>
<section id="contact" class="container">
    <div class="blog-wrap">
        <div class="contact-container">
            <?php $url = get_the_post_thumbnail_url(25, 'front-small');?>
            
                <img src="<?php echo $url;?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">
           
            <div class="contact-content">
                <h2>
                    <?php 
                        $my_postid = 25;
                        $title = get_the_title( $my_postid );
                        echo $title;
                    ?>
                </h2>
                <div>
                    <?php 
                        $my_postid = 25;
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        $content = str_replace('&nbsp;', ' ', $content);
                        echo $content;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
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
    <?php get_sidebar(); ?>
</div> --> -->
<?php get_footer(); ?>