<? php
/**
 * @package NamePlugin
 */
/**
 *Plugin Name: Plugin-Boilerplate Plugin
 *Plugin URI: https://fredsoloy.com/plugin
 *Description: Boilerplate plugin code starter
 *Version: 1.0.0
 *Author: Fred Soloy
 *Author URI: https://fredsoloy.com 
 *License: GPLv2 or later
 *Text Domain: plugin-boilerplate-plugin
 */

/**
 *Copyright 2018 Fred Soloy  (email : fred@fredsoloy.fr)

*This program is free software; you can redistribute it and/or modify
*it under the terms of the GNU General Public License, version 2, as 
*published by the Free Software Foundation.

*This program is distributed in the hope that it will be useful,
*but WITHOUT ANY WARRANTY; without even the implied warranty of
*MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*GNU General Public License for more details.

*You should have received a copy of the GNU General Public License
*along with this program; if not, write to the Free Software
*Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

 // Check if the plugin is accessed from outside or inside the cms
 //if ( ! defined( 'ABSPATH' ) ) {
 //  exit;
 //}
 // OR
 //defined ('ABSPATH' ) or die ('Hey, you can\t access this file, you silly human or bot');

 // OR by checking the add-action function
 if ( ! function_exists( 'add_action' ) ) {
   echo 'Hey, you can\t access this file, you silly human or bot';
   exit;
 }

 class PluginBoilerplate
 {
   // methods
 }

 if ( class_exists( 'PluginBoilerplate' ) ) {
   $pluginBoilerplate = new PluginBoilerplate();
 }

 ?>