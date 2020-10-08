<html>
    <head>
        <title><?php // wp_bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Secular+One&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>  
        <header id="ttr_header">
            <div class="container">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-bar'
                    )
                );
                ?>
            </div>
        </header>   
        <!-- <div id="ttr_header" class="">
            <a id="logo" class="" href="<?php bloginfo('url'); ?>">
                <h1 class="logo">L27</h1>
            </a>
            <nav class="navbar">
                <?php wp_nav_menu(array('menu'=>'menu')); ?>
            </nav>
        </div> -->
        <div class="container">