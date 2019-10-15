<?php  

if( !defined( 'ABSPATH' ) ) { exit; }

$url= get_field('contact_link');

print_r($url);
?>

<a id='contact-tab' class='contact-tab' href='<?php echo $url ?>' target='_blank'>Contact Me!</a>