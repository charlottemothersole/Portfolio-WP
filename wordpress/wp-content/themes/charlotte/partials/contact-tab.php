<?php  

if( !defined( 'ABSPATH' ) ) { exit; }

$url= get_field('contact_link');
$toggle = get_field('contact_tab');
if($toggle){
?>    
<a id='contact-tab' 
class='contact-tab' 
href='<?php echo $url ?>' 
target='_blank'>Contact Me!</a>
<?php
}
?>