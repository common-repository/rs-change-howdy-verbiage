<?php
/*
  Plugin Name: Change Howdy Verbiage - Raineri Software, LLC
  Plugin URI:  https://wordpress.org/plugins/rs-change-howdy-verbiage/
  Description: Change the "Howdy" text in the top right corner to anything else you'd. Extremely easy to use, light weight and simple plugin.
  Version:     1.0
  Author:      Zachary Raineri, Raineri Software LLC
  Author URI:  https://twitter.com/ZacharyRaineri
  License:     GPL2
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
  Text Domain: rs-change-howdy-verbiage
*/
$raineri = 'rschv';
//Activation
  require_once(dirname(__FILE__) . '/activation.php');
//Deactivation
  require_once(dirname(__FILE__) . '/deactivation.php');
//Raineri Software Menu
  require_once(dirname(__FILE__) . '/rs-menu.php');
//Plugin Menu
  require_once(dirname(__FILE__) . '/menu.php');
//Functions
  require_once(dirname(__FILE__) . '/functions.php');
 ?>
