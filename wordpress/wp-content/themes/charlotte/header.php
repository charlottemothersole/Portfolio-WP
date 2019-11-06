<!DOCTYPE html>
<html>
    <head>
        <?php
            wp_head();
        ?>
        <title><?php
            wp_title();
             ?> </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>            
            <nav id='navbar'>
                <div id='logo'>
                    <img width='400px' src='<?php echo get_template_directory_uri() ?>./logo-small.png' alt='Site logo of heart enclosed inside html close tag'/>
                </div>
                <span style='color:white;' class='navbar-toggle' id='navbar-toggle'>
                    <i class='fas fa-bars'></i>
                </span>
                    <!-- to display nav menu -->
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'header-menu', 
                        'menu_class'     => 'nav-menu',
                        ) );
                    ?> 
                </ul>
                
            </nav>            
        </header>
        <?php 
            get_template_part('partials/contact-tab');
            
        ?>