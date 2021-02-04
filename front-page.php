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
                $args = array('cat' => 4);
                $category_posts = new WP_Query($args);
                if($category_posts->have_posts()) : while       ($category_posts->have_posts()) :       $category_posts->the_post();?>
                <p><?php the_content(); ?></p>
                <?php endwhile; else: ?>
            <?php endif; ?>
        </article>
    </section>
    <section id="services" class="section section__services">
        <article class="section__content section__services-content">
            <?php
                $args = array('cat' => 5);
                $category_posts = new WP_Query($args);
                if($category_posts->have_posts()) : while       ($category_posts->have_posts()) :       $category_posts->the_post();?>
                <p><?php the_content(); ?></p>
                <?php endwhile; else: ?>
            <?php endif; ?>
        </article>
    </section>
            <section id="extra" class="section section__extra">
                <article class="section__content section__extra-content">
                <?php
                    $args = array('cat' => 6);
                    $category_posts = new WP_Query($args);
                    if($category_posts->have_posts()) : while           
                    ($category_posts->have_posts()) :           $category_posts->the_post();?>
                    <p><?php the_content(); ?></p>
                    <?php endwhile; else: ?>
                <?php endif; ?>
                </article>
            </section>
    <section id="contact" class="section section__contact">
        <article class="section__content section__contact-content">
            <?php
                $args = array('cat' => 7);
                $category_posts = new WP_Query($args);
                if($category_posts->have_posts()) : while       ($category_posts->have_posts()) :       $category_posts->the_post();?>
                <p><?php the_content(); ?></p>
                <?php endwhile; else: ?>
            <?php endif; ?>
        </article>
    </section>
</section>

<?php get_footer(); ?>