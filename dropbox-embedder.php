<?php

/*
Plugin Name: Dropbox Embedder Shortcode
Plugin URI: https://github.com/JudahGabriel/WordPressDropboxEmbedder
Description: Provides a [dropbox-embed] shortcode.
Author: Judah Gabriel Himango
Version: 1.0
Author URI: http://twitter.com/judahgabriel
*/

// Creates a WordPress shortcode for [dropbox-embed]
function create_dropbox_embed( $atts ) {
  $a = shortcode_atts( array(
    0 => null
   'link' => null,
   'width' => '100%',
   'height' => '600px'
   ), $atts );

  $linkUrl = $a[0] !== null ? $a[0] : $a['link'];
  if ($linkUrl === null) {
    return "<p>Oops - you didn't specify a link in your shortcode. Your shortcode should look like this: <strong>[dropbox-embed https://path-to-file-on-dropbox]</strong";
  }
  
  $width = $a['width'];
  $height = $a['height'];
  return "<a href='{$linkUrl}' class='dropbox-embed' data-width='{$width}' data-height='{$height}'></a>";
}

add_shortcode( 'dropbox-embed', 'create_dropbox_embed' );

?>
