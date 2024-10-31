<?php
function rschv_activation() {
    //Clear Permalinks
      flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'rschv_activation' );
 ?>
