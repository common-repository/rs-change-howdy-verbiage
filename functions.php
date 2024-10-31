<?php
add_filter('gettext', 'rs_change_howdy', 10, 3);
function rs_change_howdy($translated, $text, $domain) {
    if (!is_admin() || 'default' != $domain)
        return $translated;
    $replacement = get_option('rschv_settings')['rschv_s1f1'];
    if ($replacement != '') {
      if (false !== strpos($translated, 'Howdy'))
          return str_replace('Howdy', $replacement, $translated);
    }
    return $translated;
}
 ?>
