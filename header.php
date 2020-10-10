<html>
    <head>
        <title><?php // wp_bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Secular+One&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>  
        <header>
            <div class="logo">
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                };
                ?>
            </div>
            <nav>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-bar'
                    )
                );
                ?>
            </nav>
        </header>   
        <!-- <div id="ttr_header" class="">
            <a id="logo" class="" href="<?php bloginfo('url'); ?>">
                <h1 class="logo">L27</h1>
            </a>
            <nav class="navbar">
                <?php //wp_nav_menu(array('menu'=>'menu')); ?>
            </nav>
        </div> -->
        <main>