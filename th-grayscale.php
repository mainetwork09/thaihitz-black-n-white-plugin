<?php

/*
Plugin Name:  ThaiHitz B/W
Plugin URI:   https://chonable.com
Description:  Change theme to black and white
Version:      01-oct-2017
Author:       Mai Chanchaemsri
Author URI:   https://chonable.com
License:      WTFPL
License URI:  http://www.wtfpl.net/
Text Domain:  thaihitz-black-n-white
Domain Path:  /languages
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function thbw_hook_css() {
    ?>
       <style>
       
    h1,h2,h3,h4,h5,h6{
        color: #000 !important;
    }
    
    .image-logo img {
        -moz-filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        filter: gray;
        filter: grayscale(100%);
    }
    .primary-navigation,
    #navigation ul ul,
    #navigation ul .current-menu-item a {
        background-color: #000 !important;
    }
    
    ul.rrssb-buttons {
        -moz-filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        filter: gray;
        filter: grayscale(100%);
    }
    
    a, span {
        -moz-filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        filter: gray;
        filter: grayscale(100%);
    }
       </style>
    <?php
}
add_action('wp_head', 'thbw_hook_css');

?>