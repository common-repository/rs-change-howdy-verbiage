<?php
// if uninstall.php is not called by WordPress, die
  if (!defined('WP_UNINSTALL_PLUGIN')) {
      die;
  }
//Delete Options Data
  $option_name = 'rschv_settings';
  delete_option($option_name);
  // for site options in Multisite
    delete_site_option($option_name);
 ?>
