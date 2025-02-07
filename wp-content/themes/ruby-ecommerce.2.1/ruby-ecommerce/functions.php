<?php

/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Ruby Ecommerce for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'ruby_ecommerce_register_required_plugins', 0);
function ruby_ecommerce_register_required_plugins()
{
	$plugins = array(
		array(
			'name'      => 'Superb Addons',
			'slug'      => 'superb-blocks',
			'required'  => false,
		),
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false,
		)
	);

	$config = array(
		'id'           => 'ruby-ecommerce',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa($plugins, $config);
}


function ruby_ecommerce_pattern_styles()
{
	wp_enqueue_style('ruby-ecommerce-patterns', get_template_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('ruby-ecommerce-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'ruby_ecommerce_pattern_styles');


add_theme_support('wp-block-styles');

// Removes the default wordpress patterns
add_action('init', function () {
	remove_theme_support('core-block-patterns');
});

// Register customer Ruby Ecommerce pattern categories
function ruby_ecommerce_register_block_pattern_categories()
{
	register_block_pattern_category(
		'header',
		array(
			'label'       => __('Header', 'ruby-ecommerce'),
			'description' => __('Header patterns', 'ruby-ecommerce'),
		)
	);
	register_block_pattern_category(
		'call_to_action',
		array(
			'label'       => __('Call To Action', 'ruby-ecommerce'),
			'description' => __('Call to action patterns', 'ruby-ecommerce'),
		)
	);
	register_block_pattern_category(
		'content',
		array(
			'label'       => __('Content', 'ruby-ecommerce'),
			'description' => __('Ruby Ecommerce content patterns', 'ruby-ecommerce'),
		)
	);
	register_block_pattern_category(
		'teams',
		array(
			'label'       => __('Teams', 'ruby-ecommerce'),
			'description' => __('Team patterns', 'ruby-ecommerce'),
		)
	);
	register_block_pattern_category(
		'banners',
		array(
			'label'       => __('Banners', 'ruby-ecommerce'),
			'description' => __('Banner patterns', 'ruby-ecommerce'),
		)
	);
	register_block_pattern_category(
		'contact',
		array(
			'label'       => __('Contact', 'ruby-ecommerce'),
			'description' => __('Contact patterns', 'ruby-ecommerce'),
		)
	);
	register_block_pattern_category(
		'layouts',
		array(
			'label'       => __('Layouts', 'ruby-ecommerce'),
			'description' => __('layout patterns', 'ruby-ecommerce'),
		)
	);
	register_block_pattern_category(
		'testimonials',
		array(
			'label'       => __('Testimonial', 'ruby-ecommerce'),
			'description' => __('Testimonial and review patterns', 'ruby-ecommerce'),
		)
	);

}

add_action('init', 'ruby_ecommerce_register_block_pattern_categories');


// Initialize information content
require_once trailingslashit(get_template_directory()) . 'inc/vendor/autoload.php';

use SuperbThemesThemeInformationContent\ThemeEntryPoint;

ThemeEntryPoint::init([
	'theme_url' => 'https://superbthemes.com/ruby-ecommerce/',
	'demo_url' => 'https://superbthemes.com/demo/ruby-ecommerce/'
]);
