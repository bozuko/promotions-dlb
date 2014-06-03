<?php

class PromotionsDLB_Plugin extends Promotions_Plugin_Base
{
  /**
   * @wp.action               ["wp_enqueue_scripts","admin_enqueue_scripts"]
   */
  public function add_style()
  {
    if( is_admin() || is_user_logged_in() ) 
      wp_enqueue_style('promotions-dlb', PROMOTIONS_DLB_URL.'/assets/stylesheets/dlb.css');
  }
  
  /**
   * @wp.action               admin_bar_menu
   * @wp.priority             1
   */
  public function add_dlb_logo( &$wp_admin_bar )
  {
    $wp_admin_bar->add_node(array(
      'title' => '<span class="dlb-ab"></span>',
      'id'    => 'dlb-logo',
      'href'  => 'https://dlblair.com'
    ));
  }
    
    
  /**
   * @wp.action               admin_bar_menu
   * @wp.priority             1000
   */
  public function remove_wordpress_admin_menu_item( &$wp_admin_bar )
  {
    $wp_admin_bar->remove_node('wp-logo');
  }
  
  /**
   * @wp.filter
   */
  public function login_headerurl()
  {
    return 'https://dlblair.com';
  }
    
  /**
   * @wp.filter
   */
  public function login_headertitle()
  {
    return 'Powered by Bozuko';
  }
    
  /**
   * @wp.action
   */
  public function login_head()
  {
    ?>
<style type="text/css">
.login h1 a {
    background-image: url("<?= PROMOTIONS_DLB_URL ?>/assets/images/logo-dlb.png");
    width: 114px;
    height: 76px;
    background-size: auto auto;
}
</style>
    <?php
  }
    
  /**
   * @wp.filter
   */
  public function wp_mail_from()
  {
    return 'no-reply@dlblairsweeps.com';
  }
  
  /**
   * @wp.filter
   */
  public function wp_mail_from_name()
  {
    return 'D.L. Blair Digital Promotions';
  }
}