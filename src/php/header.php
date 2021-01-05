 <!DOCTYPE html>
 <html lang="de">
 <head>
     <meta charset="UTF-8">
     <title>Wp-alex</title>
     <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
     <?php wp_head(); ?>
 </head>
 <body>
    <div id="mobile_overflow">
    <header>
        <div id="menu">
        <h1>Alex Mayer</h1>
        <button class="hamburger hamburger--collapse burger" id="burgerham" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
        </button>
        <nav id="desktopmenu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </div>
    <div class="burgermenu">
            <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
        </div>
        <section id="start">
            <div id="herotext">
            <h1>Glänzende Ideen für leuchtende Augen</h1>
            <button onclick="location.href='index.html'" type="button">Angebot einholen</button>
            </div>
        </section>    
    </header>
    
