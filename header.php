<html>
    <head>
        <title><?php // wp_bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>">
        </script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>">
        </script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
        </script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Secular+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
    </head>
    <body>     
        <div id="ttr_header" class="">
            <a id="logo" class="" href="<?php bloginfo('url'); ?>">
                <h1 class="logo">L27</h1>
            </a>
            <nav class="navbar">
                <?php wp_nav_menu(array('menu'=>'menu')); ?>
            </nav>
        </div>
        <div class="container">