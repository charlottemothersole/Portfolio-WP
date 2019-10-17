<?php  
/**
 * Template Name: single
 * 
 * @author         BrightMinded Ltd.
 * @copyright      2017
 * @license        Bespoke
 */
if( !defined( 'ABSPATH' ) ) { exit; }

    get_header();
?>

<section id='posts'>    
    <div class='single-post-container'>
        <div class='single-post'>
            <h1>Header</h1>
            <ul id='tags'>
                <li>tag 1</li>
                <li>tag 2</li>
                <li>tag 3</li>
            </ul>
            <p> random textrandom textrandom textrandom textrandom textrandom textrandom textrandom textrandom text</p>
        </div>    
    </div>
    <div id='sidebar-container'>
        <div id='sidebar' class='sidebar-active'>
            <p id='sidebar-exit'>Close
            </p>
        </div>
    </div>
</section>

<?php 
/* to access footer.php*/
get_footer();
?>