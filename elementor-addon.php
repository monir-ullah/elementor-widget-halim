<?php



/**
 * Plugin Name: Elementor Addon Development
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-addon

*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register List Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */

function register_list_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/elementor-addon.php' );

	$widgets_manager->register( new \Elementor_Test_Widget() );

}
add_action( 'elementor/widgets/register', 'register_list_widget' );

function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'first-category-test',
		[
			'title' => esc_html__( 'First Category', 'elementor-addon' ),
			'icon' => 'fa fa-plug',
		]
	);
	$elements_manager->add_category(
		'second-category',
		[
			'title' => esc_html__( 'Second Category', 'elementor-addon' ),
			'icon' => 'fa fa-plug',
		]
	);
}
 add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );
