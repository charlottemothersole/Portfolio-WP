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
        
    </head>
    <body>
        <header>
            <nav id='navbar'>
                <span style='color:white;' class='navbar-toggle' id='navbar-toggle'>
                    <i class='fas fa-bars'></i>
                </span>
                <ul id='nav-list' class='nav-list inactive'>
                    <?php /*$navigation = get_field('navigation');
                    
                    foreach($navigation as $nav) {
                        $nav_item = $nav['navigation_item'];
                        $nav_link = $nav['navigation_link'];
                    ?>    
                    <li class='nav'><a class='nav-item' href='<?php echo $nav_link ?>'><?php echo $nav_item ?> </a> </li>
                    <?php
                    }
                     */?>
                    <li class='nav'><a class='nav-item' href='#welcome-section'>About</a></li>
                    <li class='nav'><a class='nav-item' href='./work.html'>Work</a></li>
                    <li class='nav' ><a class='nav-item' href='#contact'>Contact</a></li>
                    <li class='nav' ><a class='nav-item' href='#certifications'>Certifications</a></li>
                    
                </ul>
                
            </nav>
        </header>