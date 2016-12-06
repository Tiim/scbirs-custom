<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
* Darstellung für alle Dokumente der Taxonomie "media_category" und der Katergorie "dokumente"
* Erstellt eine Tabelle mit Name | Datum | Vorschau
*/

get_header();?>

<?php 
	if ( have_posts() ) : ?>
	<div id="content" class="grid col-620" role="main">
	<?php	
		if ( function_exists( 'responsive_breadcrumb_lists' ) ) {
			responsive_breadcrumb_lists();
		}?>
		
			
		<h1 class="entry-title post-title">Dokumente</h1>
		<table>
		<tr><th><strong>Name</strong></th><th><strong>Datum</strong></th><th><strong>Vorschau</strong></th></tr>
		<?php while( have_posts() ) : the_post(); ?>
			<tr>
				<td>
					<a href="<?php echo(wp_get_attachment_url(get_the_ID())); ?>" rel="bookmark"><strong><?php the_title(); ?></strong></a>
				</td>
				<td>
					<?php the_date(); ?>
				</td>
				<td>
					<?php
						$link = wp_get_attachment_url(get_the_ID());
						$ext = wp_check_filetype( $link );
						if (strcasecmp($ext["ext"], "pdf") == 0) : ?>
							<a href="https://docs.google.com/viewer?url=<?php echo($link);?>">Vorschau</a>
					<?php endif;?>
				</td>
			</tr>
		<?php
		endwhile;
		?>
		</table>
	<?php
		get_template_part( 'loop-nav', get_post_type() );
	else :
		get_template_part( 'loop-no-posts', get_post_type() );

	endif;
	?>
	</div>

<?php
get_footer(); ?>
