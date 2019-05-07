<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acaffeinateddev
 */

?>

    <header id="sidebar">
        <div class="sidebar-content">
            <div class="branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="https://acaffeinated.dev/wp-content/themes/acaffeinateddev/acd_logo_small.png" alt="A Caffeinated Dev" />
                </a>
            </div>
			<div class="social-media">
				<a class="fab fa-github" href="https://github.com/acaffeinateddev" target="_blank"></a>
				<a class="fab fa-twitter" href="https://twitter.com/acaffeinateddev" target="_blank"></a>
				<a class="fab fa-linkedin-in" href="https://www.linkedin.com/in/leilambaker/" target="_blank"></a>
			</div>
            <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Navigation', 'acaffeinateddev' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
            
        </div>
    </header>
