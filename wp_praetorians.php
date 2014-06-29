<?php
/**
 * Praetorians
 *
 * @package   wp_praetorians
 * @author    Simon Samtleben <support@nekudo.com>
 * @license   THE BEER-WARE LICENSE
 * @link      http://nekudo.com/wemahu
 * @copyright 2014 nekudo.com
 *
 * @wordpress-plugin
 * Plugin Name:       Praetorians
 * Plugin URI:        http://praetorians.nekudo.com/
 * Description:       The Praetorians plugin.
 * Version:           1.0.0
 * Author:            Simon Samtleben
 * Author URI:        http://nekudo.com
 * License:           THE BEER-WARE LICENSE
 * License URI:       http://people.freebsd.org/~phk/
 */

// If this file is called directly, abort.
if(!defined('WPINC'))
{
	die;
}
require_once(plugin_dir_path( __FILE__ ) . 'libs/class.praetorians.php');

$Praetorians = new Praetorians;
add_action('wp_footer', array($Praetorians, 'add_pi'));