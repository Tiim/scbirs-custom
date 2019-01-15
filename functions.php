<?php

/** Allow iframes în widgets etc. Used for youtube player */
function allow_iframe_content() {
  global $allowedposttags, $allowedtags;
  $iframe = array(
	"width" => array(),
	"height" => array(),
	"src" => array(),
	"frameborder" => array(),
	"allowfullscreen" => array()
  );
  
  $allowedposttags["iframe"] = $iframe;
  $allowedtags["iframe"] = $iframe;
}
add_action( 'init', 'allow_iframe_content' );

/** Add the theme meta tag */
function scbirs_add_theme_meta() {
?>
	<meta name="theme-color" content="#005fab">
<?php
}
add_action( 'wp_head', 'scbirs_add_theme_meta' );
?>
