<?php  

if( !defined( 'ABSPATH' ) ) { exit; }

$toggle_sidebar= get_field('show_sidebar');
$tags = get_field('tag_category');
$all_social_media=get_field('social_media', 'options');

if($toggle_sidebar){
?>    
    
<div id='sidebar' class='sidebar-active'>
    <p id='sidebar-exit' class='js-hide-on-active'>Close</p>
    <p id='sidebar-dots' class='hide'>...</p>
    <ul id='sidebar-links' class='js-hide-on-active'>
        <li id='latest-posts' ><a class='sidebar-link'>Latest Posts</a></li>
        <li id='archived-posts'><a  class='sidebar-link'>Archived Posts</a></li>
        <li id='posts-by-category' class='sidebar-list'><span id='span-hover'>Posts By Category</span>
            <ul id='category-links'>
<?php 
            foreach($tags as $tag) {                
                $category = $tag['category']; 
                echo "<li class='sidebar-link'><a>$category </a></li>";    
            }
?>
            </ul> 
        </li>       
    </ul>
    <div id='sidebar-footer' class='js-hide-on-active'>

    <?php
    foreach($all_social_media as $social_media) {        
        $social_media_icon = $social_media['social_media_logo']['url'];
        $social_media_alt_text = $social_media['social_media_logo']['alt'];
        $social_media_link = $social_media['social_media_link'];
        echo "<a class='sidebar-footer-link' href='$social_media_link' target='_blank'>
            <img src='$social_media_icon' alt='$social_media_alt_text'></a>";
    }
    ?>
    </div>
</div>
    
<?php
}
?>