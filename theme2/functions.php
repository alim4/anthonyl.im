<?php

function my_js_variables(){ ?>
      <script type="text/javascript">
        var templateUrl = '<?php echo get_stylesheet_directory_uri(); ?>';
      </script><?php
}
add_action ( 'wp_head', 'my_js_variables' );

?>
