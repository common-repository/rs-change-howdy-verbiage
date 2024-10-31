<?php
//Check for base Raineri Software Section (Used to centralize all Raineri Software, LLC Plugin settings|Will already have if another Raineri Software, LLC plugin is active)
  global $submenu;
  $main_menu = 'raineri-software';
  if (
      isset( $submenu[ $main_menu ] )
      && in_array( 'raineri-software', wp_list_pluck( $submenu[ $main_menu ], 2 ) )
  ) {
      // Already Exists.
  } else {
      //Doesn't Exist - Add it
      add_action( 'admin_menu', 'rschv_base' );
      function rschv_base() {
        if (!current_user_can('manage_options')) {return;}
        add_menu_page( 'Raineri Software', 'Raineri Software', 'manage_options', 'raineri-software', 'rschv_base_options' );
      }
      function rschv_base_options() {
        echo "<h1>Raineri Software</h1>
              <h2>Thanks for downloading!</h2>
              <p>My name is Zachary Raineri and this section is where all Raineri Software plugins are stored. We will be releasing tons of free plugins to assist with
              usability, performance, security, and more!</p>
              <p>If you have any questions, concerns, issues or recommendations with any of our installed plugins please don't hesitate to email me at zach@raineriventures.com</p>
              <p>Have a great day!</p>
              <p>**This section will soon be replaced with an interactive dashboard</p>
        ";
      }
  }
 ?>
