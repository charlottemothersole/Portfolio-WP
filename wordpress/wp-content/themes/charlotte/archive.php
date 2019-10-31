<?php  
/**
 * Template Name: archive
 * 
 * @author         BrightMinded Ltd.
 * @copyright      2017
 * @license        Bespoke
 */
if( !defined( 'ABSPATH' ) ) { exit; }

    get_header();

    //defining variables

    $args = array(
        'type'            => 'monthly',
        'limit'           => '', 
        'format'          => 'html', 
        'before'          => '<p class="archive-year">',
        'after'           => '</p>',
        'show_post_count' => true,
        'echo'            => 0,
        'order'           => 'DESC',
        'post_type'     => 'post'
    );

    $all_years = wp_get_archives($args, 0);
    $query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts ";
    $query.= "FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ";
    $query.= "GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date DESC";
    $results = $wpdb->get_results( $query ); // query returns results in format: [{ year, month, count }, { year, month, count }...]

    // get unique years
    $post_years =[];
    foreach ($results as $item) {
        $post_years[]=$item->year;
    }
    $unique_years =array_unique($post_years);

    //for each year, get months for the year
    $post_years_months = []; // [key] = months[], where key = year
    foreach ($unique_years as $year) {
        $months = [];
        $posts = '';
        // filter results(months) by the year (comparing $results database query to our $unique_years)
        foreach ($results as $result) {
            if ($result->year == $year) {
                $months[] = $result->month;
                
            }
        }

        $post_years_months[$year] = $months;
    }

    $month_as_string = [
        1   =>  'January',
        2   =>  'February',
        3   =>  'March',
        4   =>  'April',
        5   =>  'May',
        6   =>  'June',
        7   =>  'July',
        8   =>  'August',
        9   =>  'September',
        10  =>  'October',
        11  =>  'November',
        12  =>  'December'
    ];

    $posts_per_month = '';
    foreach($unique_years as $year) {
        $posts = '';
        foreach($results as $item) {
            if($item->year == $year){
                $posts= $item->posts;
            }
        }
        
    }

    print_r($posts_per_month);
    

    // foreach ($all_posts as $single_post) {
    //     $post_year = get_the_date('Y', $single_post);        
    //     array_push($post_years,$post_year);
        
    //     $post_month_year = get_the_date('Y M', $single_post);
    //     array_push($posts_months_years,$post_month_year);
    // }
    
    
    
    // $unique_posts_months_years = array_unique($posts_months_years);
    
?>

<section id='archive'>
    <h1 id='archive-heading'>Older Posts</h1>
    <div id='archive-photo'>
        <div id='archive-overlay'>
            <?php 
                echo $all_years;
            ?>
            
            <?php foreach($unique_years as $year) {
                echo "<div class='archive-dates'>";
                echo "<p class='archive-year'>$year</p>";
                echo "<div class='archive-months'>";
                
                $months = $post_years_months[$year];
                foreach($months as $month) {
                    $posts ='';
                    $month_name = $month_as_string[$month];
                    $month_link = get_month_link($year, $month);
                    echo "<a class='archive-link' target='_blank' href='$month_link'><p class='archive-month'>$month_name</p></a>";

                    
                }
                
                echo "</div>";
                echo "</div>";
            }
            ?>
                <!-- <div class='archive-months'> -->
                    
                <!-- <p class='archive-year'>2019</p>
                <div class='archive-months'>
                    <a class='archive-link' target='_blank'><p class='archive-month'>February</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>March</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>April</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>May</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>June</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>July</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>August</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>September</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>October</p></a> -->
                <!-- </div>
            </div> -->
            <!-- <div class='archive-dates'>
                <p class='archive-year'>2019</p>
                <div class='archive-months'>
                    <a class='archive-link' target='_blank'><p class='archive-month'>February</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>March</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>April</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>May</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>June</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>July</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>August</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>September</p></a>
                    <a class='archive-link' target='_blank'><p class='archive-month'>October</p></a>
                </div>
            </div> -->
        </div>
    </div>
</section>

<?php 
/* to access footer.php*/
get_footer();
?>