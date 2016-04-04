<?php
// Prevent direct access to the file
if( ! defined( 'ABSPATH' ) ) exit; 

/**
 * About Agama Page under Appearances
 *
 * @since Agama v1.0.1
 */
if( ! class_exists( 'Agama_About' ) ) {
	class Agama_About
	{
		/**
		 * Class Constructor
		 *
		 * @since Agama v1.0.1
		 */
		public function __construct() {
			// Register page
			add_action('admin_menu', array( $this, 'register_page' ) );
		}
		
		/**
		 * Register 'About Agama' Page
		 *
		 * @since Agama v1.0.1
		 */
		public function register_page() {
			add_theme_page( 
				__( 'About Agama', 'agama' ), 
				__( 'About Agama', 'agama' ), 
				'edit_theme_options', 
				'about-agama', 
				array( $this, 'render_page' )
			);
		}
		
		/**
		 * Render 'About Agama' Page
		 *
		 * @since Agama v1.0.1
		 */
		public function render_page() {
			echo '<div class="wrap about-wrap">';
				echo '<h1>'.sprintf( __( 'Welcome to Agama v%s', 'agama' ), Agama_Core::version() ).'</h1>';
				
				echo '<div class="about-text">';
					echo __( 'Thank you for using Agama theme!', 'agama' ).'<br>';
					echo __( 'Consider supporting us with any desired amount donation.', 'agama' ).'<br>';
					echo __( 'Even the smallest donation amount means a lot for us.', 'agama' ).'<br>';
					echo __( 'With donations you are helping us for faster theme development & updates.', 'agama' ).'<br><br>';
					echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
							<div class="paypal-donations">
							<input type="hidden" name="cmd" value="_donations">
							<input type="hidden" name="bn" value="TipsandTricks_SP">
							<input type="hidden" name="business" value="paypal@theme-vision.com">
							<input type="hidden" name="return" value="https://www.theme-vision.com/thank-you/">
							<input type="hidden" name="item_name" value="Agama development support.">
							<input type="hidden" name="rm" value="0">
							<input type="hidden" name="currency_code" value="USD">
							<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online.">
							<img alt="" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</div>
						</form>';
					
					echo __( 'or', 'agama' ).'<br>';
					
					echo sprintf( __( 'You can support us by Buying an %s theme with allot new features & extensions!', 'agama' ), '<a href="http://theme-vision.com/agama-pro/" title="Agama Pro" target="_blank">AgamaPRO</a>' );
				echo '</div>';
				
				echo '<h2 class="nav-tab-wrapper">';
					echo '<a class="nav-tab nav-tab-active">'.__( 'What\'s New', 'agama' ).'</a>';
				echo '</h2>';
				
				echo '<div class="changelog point-releases">';
					echo sprintf( '<h3>Changelog Agama v%s</h3>', Agama_Core::version() );
						echo '<p>ADDED: Transparent header (Header V1) feature.</p>';
						echo '<p>ADDED: Transparent header (Header V1) styling feature.</p>';
						echo '<p>ADDED: Slider features.</p>';
						echo '<p>ADDED: Logo max-height feature.</p>';
						echo '<p>ADDED: German translation files (Credits: Thomas Moritz).</p>';
						echo '<p>UPDATED: Rewritten customizer options completely.</p>';
						echo '<p>UPDATED: Mobile menu completely rewritten.</p>';
						echo '<p>UPDATED: Language translation files.</p>';
				echo '</div>';
				
			echo '</div>';
		}
	}
	new Agama_About;
}