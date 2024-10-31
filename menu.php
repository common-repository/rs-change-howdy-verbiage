<?php
//Options Page Settings
  add_action( 'admin_init', 'rschv_settings_init' );
  function rschv_settings_init(  ) {
    register_setting( 'rschv_options_group', 'rschv_settings' );
    $settings_s1 = 'rschv_settings_s1';
    add_settings_section($settings_s1, 'Options', 'rschv_s1h1_render','rschv_options_group');
    add_settings_field('rschv_s1f1', 'Change To:', 'rschv_s1f1_render','rschv_options_group',$settings_s1);

  }
  function rschv_s1f1_render(  ) {
    ?><input type='text' name='rschv_settings[rschv_s1f1]' value='<?php echo get_option('rschv_settings')['rschv_s1f1'] ?>' ><?php
  }
  function rschv_s1h1_render(  ) {
    echo __( 'The following will change the "Howdy" verbiage in the top right to anything you input', 'rschv_options_group' );
  }
//Function for options page creation
  function rschv_page() {
    //Check if Current User Can Manage Options
      if (!current_user_can('manage_options')) {return;}
      ?>
      <div class="wrap">
          <h1><?= esc_html(get_admin_page_title()); ?></h1>
          <form action="options.php" method="post">
              <?php
              settings_fields('rschv_options_group');
              do_settings_sections('rschv_options_group');
              submit_button('Save Settings');
              ?>
          </form>
      </div>
      <?php
  }

//Adds the options page to menu
    function rschv_page_add() {
        add_submenu_page(
            'raineri-software', //$parent_slug
            'Change Howdy Verbiage', //$page_title
            'Change Howdy', //$menu_title
            'manage_options', //$capability
            'rschv_options_group', //$menu_slug
            'rschv_page' //Callable function
        );
    }
    add_action('admin_menu', 'rschv_page_add');
 ?>
