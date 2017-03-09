<?php

/** Show 404 error */


// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

$title = ( is_search() ? sprintf( __( 'Ihre Suche nach %s gab kein Resultat.', 'responsive' ), get_search_query() ) : __( '404 &#8212; Entschuldigung', 'responsive' ) );
?>
	
	<div class="box-404">
		<h1 class="title-404"><?php echo $title; ?></h1>
		<p><?php printf('Die Seite die Sie suchen scheint nicht zu existieren. Zur&uuml;ck auf die %s.',
			sprintf( '<a href="%1$s" title="%2$s">%3$s</a>',
						 esc_url( get_home_url() ),
						 esc_attr( 'scbirs.ch' ),
						 esc_attr( '&larr; Hauptseite' )
				)
		);
		//printf(get_option('admin_email'));
		?></p>
	</div>