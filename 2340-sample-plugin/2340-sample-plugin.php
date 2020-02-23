<?php
/*Plugin Name: 2340 Sample Plugin
Plugin URI:
Description: A sample plugin for INFO 2340
version:1.0   
Author:Deepa Natarajan
License:GPL
 */

 add_shortcode("wittyquote","get_quote");
 function get_quote($atts){
 $quotes= array(
   "Good Morning America !",   "Be Happy !",
   "Be Kind !",   "Stay Warm!",    "Enjoy everyday!"  

);

return $quotes[array_rand($quotes)];
 }



