<?php
/*
Plugin Name: Promotions: D.L. Blair Skin
Plugin URI: http://bozuko.com
Description: D.L. Blair skin for Promotions
Version: 1.0.0
Author: Bozuko
Author URI: http://bozuko.com
License: Proprietary
*/

add_action('promotions/plugins/load', function()
{
  define('PROMOTIONS_DLB_DIR', dirname(__FILE__));
  define('PROMOTIONS_DLB_URL', plugins_url('/', __FILE__));
  
  Snap_Loader::register( 'PromotionsDLB', PROMOTIONS_DLB_DIR . '/lib' );
  Snap::inst('PromotionsDLB_Plugin');
}, 100);