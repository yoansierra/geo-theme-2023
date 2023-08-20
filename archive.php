<?php
/**
 * The Template for displaying Archive pages.
 */

get_header();

if ( have_posts() ) :
?>
<header class="page-header">
	<h1 class="page-title">
		<?php
			if ( is_day() ) :
				printf( esc_html__( 'Daily Archives: %s', 'geo-theme-2023' ), get_the_date() );
			elseif ( is_month() ) :
				printf( esc_html__( 'Monthly Archives: %s', 'geo-theme-2023' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'geo-theme-2023' ) ) );
			elseif ( is_year() ) :
				printf( esc_html__( 'Yearly Archives: %s', 'geo-theme-2023' ), get_the_date( _x( 'Y', 'yearly archives date format', 'geo-theme-2023' ) ) );
			else :
				esc_html_e( 'Blog Archives', 'geo-theme-2023' );
			endif;
		?>
	</h1>
</header>
<?php
	get_template_part( 'archive', 'loop' );
else :
	// 404.
	get_template_part( 'content', 'none' );
endif;

wp_reset_postdata(); // End of the loop.

get_footer();
