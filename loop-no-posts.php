<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * No-Posts Loop Content Template-Part File
 *
 * @file           loop-no-posts.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.1.0
 * @filesource     wp-content/themes/responsive/loop-no-posts.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

/**
 * If there are no posts in the loop,
 * display default content
 */
$title = ( is_search() ? sprintf( __( 'Ihre Suche nach %s gab kein Resultat.', 'responsive' ), get_search_query() ) : __( '404 &#8212; Entschuldigung', 'responsive' ) );
?>
	
	<div class="box-404">
		<h1 class="title-404"><?php echo $title; ?></h1>
		<p><?php printf('Die Seite die Sie suchen scheint nicht zu existieren. Zur&uuml;ck auf die %s.',
			sprintf( '<a href="%1$s" title="%2$s">%3$s</a>',
						 esc_url( get_home_url() ),
						 esc_attr__( 'scbirs.ch', 'responsive' ),
						 esc_attr__( '&larr; Hauptseite', 'responsive' )
				)
		);
		?></p>
	</div>