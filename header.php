<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-54516992-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-54516992-1');
        </script>

        <title><?php //wp_bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Secular+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
        <script src="https://kit.fontawesome.com/15c1aef6e7.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>
    <body>  
        <header class="page-header">
            <div class="navbar">
                <div class="logo">
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    };
                    ?>
                </div>
                <button id="menu-icon" class="menu-icon">
                    <svg class="lnr lnr-menu"><use xlink:href="#lnr-menu"></use></svg>
                </button>
            </div>
                    <nav id="menu-list" class="menu-list">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'top-bar'
                            )
                        );
                        ?>
                    </nav>
        </header>
        <main class="main-container">