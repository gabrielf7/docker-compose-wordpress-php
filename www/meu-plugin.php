<?php 
/**
 * Plugin Name: Meu Plugin
 */
function my_content_footer ($content) {
  if(is_single()) {
    return $content . '<p>Obrigado pela visita, volte sempre.</p>';
  }
}

add_filter('the_content', 'my_content_footer');

?>