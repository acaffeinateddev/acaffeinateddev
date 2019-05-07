<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acaffeinateddev
 */

?>

	<header class="entry-header">
		<?php the_title( '<h1 class="site-section-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
    <div class="content-block">
        <?php acaffeinateddev_post_thumbnail(); ?>

            <?php
            the_content();

            
		?>
    </div>
	
