<?php get_header(); ?>

	<main role="main">

		<?php
			if( have_rows( 'page_builder' ) ):
				while( have_rows( 'page_builder' ) ) : the_row();

					/*========================*/
					/*	Fetch Block File  */
					include( 'blocks/' . get_row_layout() . '.php' );
					/*========================*/
					
				endwhile;
			endif;
		?>

	</main>

<?php get_footer(); ?>
