<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <p><?php echo get_the_date('d/m/y h:i:s');?></p>

    <?php the_content(); ?>

    <?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    //echo $fname . ' ' . $lname;
    ?>
    <p>Posted by <?php echo $fname;?> <?php echo $lname;?></p>

    <div class="tags">
        <?php
        $tags = get_the_tags();
        foreach($tags as $tag):?>
            <a href="<?php echo get_tag_link($tag -> term_id);?>" class="badge badge-success">
                <?php echo $tag -> name;?>
            </a>
        <?php endforeach;?>
    
        <?php
        $categories = get_the_category();
        foreach($categories as $cat):?>
            <a href="<?php echo get_tag_link($cat -> term_id);?>" class="badge">
                <?php echo $cat -> name;?>
            </a>
        <?php endforeach;?>
    </div>

    <?php //comments_template();?>

<?php endwhile; else: endif; ?>