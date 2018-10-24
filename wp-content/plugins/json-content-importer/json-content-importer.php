<?php
/*
Plugin Name: JSON Content Importer
Plugin URI: https://json-content-importer.com/
Description: Plugin to import, cache and display a JSON-Feed. Display is done with wordpress-shortcode or gutenberg-block.
Version: 1.3.1
Author: Bernhard Kux
Author URI: https://json-content-importer.com/
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

/* block direct requests */
if ( !function_exists( 'add_action' ) ) {
	echo 'Hello, this is a plugin: You must not call me directly.';
	exit;
}
defined('ABSPATH') OR exit;

#$requri = $_SERVER["REQUEST_URI"];
#if (preg_match("/wp\-json/", $requri)) {
#  return "";
#}

if ( defined( 'GUTENBERG_VERSION' ) ) {
	define( 'JCI_FREE_BLOCK_VERSION', '0.1' );
	if ( ! defined( 'JCI_FREE_BLOCK_NAME' ) ) {
		define( 'JCI_FREE_BLOCK_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
	}
	if ( ! defined( 'JCI_FREE_BLOCK_DIR' ) ) {
		define( 'JCI_FREE_BLOCK_DIR', WP_PLUGIN_DIR . '/' . JCI_FREE_BLOCK_NAME );
	}
	if ( ! defined( 'JCI_FREE_BLOCK_URL' ) ) {
		define( 'JCI_FREE_BLOCK_URL', WP_PLUGIN_URL . '/' . JCI_FREE_BLOCK_NAME );
	}
	require_once( JCI_FREE_BLOCK_DIR . '/block/index.php' );
}
	
  
if(!class_exists('JsonContentImporter')){
	require_once plugin_dir_path( __FILE__ ) . '/class-json-content-importer.php';
}
require_once plugin_dir_path( __FILE__ ) . '/options.php';
$JsonContentImporter = new JsonContentImporter();

function jci_upgrade_link( $links) {
  $link2pro = array(
#    '<a href="https://json-content-importer.com/compare/" target="_blank">Upgrade to PRO-Version</a>',
    '<a style="color:#3db634; font-weight: bold;" href="https://json-content-importer.com/welcome-to-the-home-of-the-json-content-importer-plugin/" target="_blank">Upgrade to PRO-Version</a>',
  );
  return array_merge( $links, $link2pro);
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'jci_upgrade_link');
 
/* extension hook BEGIN */
do_action('json_content_importer_extension');
/* extension hook END */
?>