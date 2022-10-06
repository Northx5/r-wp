<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package reason-wp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				reason_wp_posted_on();
				reason_wp_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php reason_wp_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'reason-wp' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'reason-wp' ),
				'after'  => '</div>',
			)
		);
		?>
		<?php 
 
	$my_date = get_post_meta( get_the_ID(), 'date', true);
	$my_location = get_post_meta( get_the_ID(), 'location', true);
 
	$date = DateTime::createFromFormat('Ymd', $my_date);
	
			
	if( ! empty( $my_date ) ) {
		echo '<p>Date: ' . $date->format('F j, Y ') . '<p>';
		echo '<p>Location: ' . $my_location . '</p>';
	}
 
?>
	</div><!-- .entry-content -->

	
	
	
</article><!-- #post-<?php the_ID(); ?> -->
