<?php  

if( !defined( 'ABSPATH' ) ) { exit; }

$side_tab= get_field('side_tab');
$url = $side_tab['url'];
$toggle = $side_tab['side_toggle'];
$text = $side_tab['side_text'];

if($toggle){
?>    
<a id='contact-tab' 
class='contact-tab' 
href='<?php echo $url ?>' 
target='_blank'><?php echo $text ?></a>
<?php
}
?>