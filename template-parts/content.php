<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acaffeinateddev
 */

?>
<div class="portfolio-block">
<figure class="preview">
<div class="thumbnail-wrapper">
    <?php acaffeinateddev_post_thumbnail(); ?>
</div>
<figcaption id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			
		<?php endif; ?>

	

	<p>
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( '&gt;Read More<span class="screen-reader-text"> "%s"</span>', 'acaffeinateddev' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'acaffeinateddev' ),
			'after'  => '</div>',
		) );
		?>
	</p><!-- .entry-content -->
</figure>
	<footer class="entry-footer">
		<?php acaffeinateddev_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</figcaption><!-- #post-<?php the_ID(); ?> -->
</div>
