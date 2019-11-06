<?php  
/**
 * Template Name: work
 * 
 * @author         BrightMinded Ltd.
 * @copyright      2017
 * @license        Bespoke
 */

if( !defined( 'ABSPATH' ) ) { exit; }

    get_header();
?>

<section id='projects'>
                
<div id='filler-top'>    
    <h1 id='project-header'><?php the_title() ?> </h1>
    <?php 
        $tagline = get_field('tagline'); 
    ?>  
    <h2 id='project-tagline'><?php echo $tagline ?> </h2>
    <?php the_post(); the_content(); ?>              
</div>
  
<svg id='project-svg-top' xmlns="http://www.w3.org/2000/svg" viewbox='0 0 100 100' height='100px' width='100%' preserveAspectRatio='none'>
    <polygon id='polygon' points='0,100 100,0 100,100' fill='rgba(77,0,17,1)'>
    </polygon>                          
</svg>
<div id='projects-container'>
<?php 
    $projects = get_field('projects'); 
    
    foreach($projects as $project) { 
        $img = $project['image'];
        $link = $project['link'];
        $description = $project['description'];
        $target = $link['target'];
        $alt_text = $project['alt_text'];
?>
    <figure class='project-tile'>
        <a class='projects-link' href='<?php echo $link['url'] ?>' target='<?php echo $target ?>'>
            <img src='<?php echo $img['url'] ?>' class='project-img' alt='<?php echo $alt_text ?>'>
            <figcaption class='figcaption'><?php echo $description ?></figcaption>
        </a>
    </figure>
    <?php
    }
    ?>
</div>  
<svg id='project-svg-bottom' xmlns="http://www.w3.org/2000/svg" viewbox='0 0 100 100' height='100px' width='100%' preserveAspectRatio='none'>
    <polygon id='polygon' points='0,0 100,0 0,100' fill='rgba(77,0,17,1)'>
    </polygon>
    
</svg>  
<div id='contact-container'></div>
    <a class='contact-link' target='_blank' href='https://github.com/charlottemothersole?tab=repositories'>
        <figure class='contact-tile'>
            <img class='icon' src='<?php echo get_template_directory_uri() ?>./github.png'/>
            <figcaption>View On Github</figcaption>
        </figure>
    </a>
</div>
             
<?php 
/* to access footer.php*/
get_footer();
?>
