<?php  

if( !defined( 'ABSPATH' ) ) { exit; }

$toggle_sidebar= get_field('show_sidebar');



if($toggle_sidebar){
?>    

<div id='sidebar' class='sidebar-active'>
    <p id='sidebar-exit'>Close</p>
    <p id='sidebar-dots' class='hide'>...</p>
    <ul id='sidebar-links'>
        <li id='latest-posts' ><a class='sidebar-link'>Latest Posts</a></li>
        <li id='archived-posts'><a  class='sidebar-link'>Archived Posts</a></li>
        <li id='posts-by-category' class='sidebar-list'>Posts By Category
            <ul id='category-links'>
                <li class='sidebar-link'><a>category</a></li>
                <li class='sidebar-link'><a>category</a></li>
                <li class='sidebar-link'><a>category</a></li>
            </ul>
        </li>
    </ul>
    <div id='sidebar-footer'>
    </div>
</div>
    
<?php
}
?>