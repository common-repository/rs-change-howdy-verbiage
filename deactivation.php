<?php
function rschv_deactivation() {
    //Clear Permalinks
      flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'rschv_deactivation' );
?>
