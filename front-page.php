<?php get_header(); ?>

<section class="hero">
        <?php 
            $content = get_the_content();
            echo $content;
        ?>
</section>
<section class="wrapper">
    <section id="about" class="section section__about">
        <article class="section__content section__about-content">
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
    <section id="services" class="section section__services">
        <article class="section__content section__services-content">
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
    <?php $post = get_post(253)->post_content;
        if(!empty($post)):?>
            <section id="extra" class="section section__extra">
                <article class="section__content section__extra-content">
                <?php 
                    $my_postid = 253;
                    $content_post = get_post($my_postid);
                    $content = $content_post->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace('&nbsp;', ' ', $content);
                    echo $content;
                ?>
                </article>
            </section>
        <?php endif;?>
    <section id="contact" class="section section__contact">
        <article class="section__content section__contact-content">
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
</section>

<?php get_footer(); ?>