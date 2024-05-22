<?php
/**
 * Plugin Name: BWD Elementor Addons
 * Description: BWD Elementor Addons is a plugin built on the Elementor page builder platform. It includes several widgets that can be used to create custom designs for your website. One of the main features of the plugin is the variety of preset designs available, which can save time and simplify the design process. Overall, the plugin aims to enhance the functionality and design capabilities of the Elementor page builder.
 * Plugin URI:  https://bestwpdeveloper.com/bwd-elementor-addons/
 * Version:     3.2.7
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: bwd-elementor-addons
 * Elementor tested up to: 3.19.2
 * Elementor Pro tested up to: 3.19.2
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
define( 'BWDEB_PLUGIN_V', '3.2.7' );
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';
final class BWDEBElementorBundle {
	const VERSION = BWDEB_PLUGIN_V;
	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';
	const MINIMUM_PHP_VERSION = '7.0';
	public function __construct() {
		add_filter( 'plugin_action_links', [$this, 'bwdeb_settings_plugin_action_link'], 10, 2 );
		add_action( 'bwdeb_init', array( $this, 'bwdeb_loaded_textdomain' ) );
		add_action( 'plugins_loaded', array( $this, 'bwdeb_init' ) );
		// For woocommerce install check
		if ( ! did_action( 'woocommerce/loaded' ) ) {
			add_action( 'admin_notices', 'bwdeb_WooCommerce_register_required_plugins' );
			return;
		}
	}                                                                                                                                                                                                                                                                                                                                                                                                                                                       

	public function bwdeb_settings_plugin_action_link($links, $file){
		if ( plugin_basename( __FILE__ ) == $file ) {
			$settings_link = '<a href="' . admin_url( 'admin.php?page=bwdeb-plugin-main-menu' ) . '">'.esc_html__('Settings', 'bwd-elementor-addons').'</a>';
			$update_pro_link = ( !class_exists( 'ProbwdelementorBundle' ) ) ? '<a class="bwdeb_pro_action" href="https://bestwpdeveloper.com/pricing" target="_blank">'.esc_html__('Upgrade Pro', 'bwd-elementor-addons').'</a>' : '';
			array_push( $links, $settings_link, $update_pro_link );
		}
		return $links;
	}

	public function bwdeb_loaded_textdomain() {
		load_plugin_textdomain( 'bwd-elementor-addons', false, basename(dirname(__FILE__)).'/languages' );
	}

	public function bwdeb_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', 'bwdeb_register_required_plugins');
			return;
		}
		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdeb_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'bwdeb_admin_notice_minimum_php_version' ) );
			return;
		}
		require_once( 'bwdeb-boots.php' );
	}

	public function bwdeb_admin_notice_minimum_php_version() {
		if (isset($_GET['activate'])) {
			unset($_GET['activate']);
		}
	
		$message = sprintf(
			esc_html__('%1$s requires %2$s version %3$s or greater.', 'bwd-elementor-addons'),
			'<strong>' . esc_html__('BWD Elementor Addons', 'bwd-elementor-addons') . '</strong>',
			'<strong>' . esc_html__('PHP', 'bwd-elementor-addons') . '</strong>',
			self::MINIMUM_PHP_VERSION
		);
	
		printf(
			'<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>',
			esc_html($message)
		);
	}
}

// Instantiate bwd-elementor-addons.
new BWDEBElementorBundle();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );