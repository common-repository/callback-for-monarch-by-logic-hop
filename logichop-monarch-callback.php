<?php
/**
 * Plugin Name: Callback for Monarch by Logic Hop
 * Plugin URI:	https://logichop.com/resources/callback-for-monarch-plugin/?ref=wp-plugins-menu
 * Description: Adds Javascript Callback functionality to Elegant Themes Monarch plugin.
 * Version:		1.0.0
 * Author:		Logic Hop
 * Author URI:	https://logichop.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: logichop-monarch
 * Domain Path: languages
 *
 * Callback for Monarch by Logic Hop is is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Callback for Monarch by Logic Hop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

if (!defined('ABSPATH')) { header('location: /'); die; }

class LogicHop_Monarch_Callback {
	
	/**
	 * Plugin version
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version = '1.0.0';
	
	/**
	 * Initialize plugin
	 *
	 * @since    1.0.0
	 * @access   public
	  */
	public function __construct () {
		add_filter('plugin_action_links_' . plugin_basename(__FILE__), array($this, 'plugin_links'));
		add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
	}
	
	/**
	 * Adds Instructions to Dashboard plugin links
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function plugin_links ($links) {
		$new_links = array();
		$new_links['settings'] = sprintf('<a href="https://logichop.com/resources/callback-for-monarch-plugin/?ref=wp-plugins-menu" target="_blank">%s</a>', __('Instructions', 'logichop-monarch'));
		$new_links['deactivate'] = $links['deactivate'];
		return $new_links;
	}
	
	/**
	 * Enqueue primary Javascript and URLSearchParams polyfill
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function enqueue_scripts () {
		wp_enqueue_script('url-search-params', plugin_dir_url(__FILE__) . 'url-search-params.js', array(), '1.0', false);
		wp_enqueue_script('logichop_monarch_callback', plugin_dir_url(__FILE__) . 'logichop-monarch-callback.min.js', array('jquery'), '1.0', false);
	}
}

$logichop_monarch_callback = new LogicHop_Monarch_Callback();





