<?php
/*
Plugin Name: Banner CTA Product
Plugin URI: 
Description: This plugin is used for displaying a call-to-action banner from an article about a product towards the shop.
Author: James Cousin-Krüger
Version: 1.0
Author URI: 
*/


add_shortcode( 'banner', 'action_button_shortcode' );
function action_button_shortcode( $atts ) {
       extract( shortcode_atts(
               array(
                       'url' => '',
                       'img' => '',
                       'color' => '',
               ),
               $atts
       ));
       return '<div style="background-color:' . $color . ';background-image: url(' . $img . '); font-weight: 700; color: white; display: flex; flex-direction: column; align-items: center; background-position: bottom; background-repeat: no-repeat;"><p> Ce produit vous intéresse ? Retrouvez le sur notre boutique</p>
       <a href="' . $url . '"><input type=button value="Voir le produit" /></a></div>';
}
