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
            
            
            
            <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                 
                        the_post(); ?>
                        <?php the_post_thumbnail('category-hero'); ?>
                        <h1 class='post-header'><?php the_title(); ?></h2>

                        <div id='single-post-tags'>
                            <?php $all_tags = the_tags('', ' ', ''); 
                            
                            ?>
                        </div>
                 
                        <?php 
                        the_content(); ?>
                 
                    <?php }
                }
            
            ?>
            
            <p> random textrandom textrandom textrandom text
            random textrandom textrandom textrandom textrandom text random textrandom textrandom textrandom text
            random textrandom textrandom textrandom textrandom text random textrandom textrandom textrandom text
            random textrandom textrandom textrandom textrandom text random textrandom textrandom textrandom text
            random textrandom textrandom textrandom textrandom text</p>
            <p> random textrandom textrandom textrandom text
            random textrandom textrandom textrandom textrandom text random textrandom textrandom textrandom text
            random textrandom textrandom textrandom textrandom text random textrandom textrandom textrandom text
            random textrandom textrandom textrandom textrandom text random text random textrandom textrandom text
            random text random textrandom text random textrandom text</p>
            <div id='post-img2' class='post-img'></div>
            <p> random textrandom textrandom textrandom text
            random textrandom textrandom textrandom textrandom text random textrandom textrandom textrandom text
            random textrandom textrandom textrandom textrandom text random textrandom textrandom textrandom text
            random textrandom textrandom textrandom textrandom text random text random textrandom textrandom text
            random text random textrandom text random textrandom text</p>
            <div id='post-navigation'>
                <a id='previous'>&laquo Previous</a>
                <a id='next'>Next &raquo</a>
            </div>
        </div>    
    </div>
    
    <div id='sidebar-container'>
    <?php get_template_part('partials/sidebar'); ?>
    </div>
</section>

<?php 
/* to access footer.php*/
get_footer();
?>