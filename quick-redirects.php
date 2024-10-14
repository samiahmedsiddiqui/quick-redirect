<?php
/**
 * Plugin Name: Quick Redirects
 * Plugin URI: http://www.anadnet.com/quick-pagepost-redirect-plugin/
 * Description: Redirect Pages, Posts or Custom Post Types to another location quickly (for internal or external URLs). Includes individual post/page options, redirects for Custom Post types, non-existant 301 Quick Redirects (helpful for sites converted to WordPress), New Window functionality, and rel=nofollow functionality.
 * Version: 1.0.0
 * Requires at least: 2.6
 * Requires PHP: 7.0
 * Author: Sami Ahmed Siddiqui
 * Author URI: https://www.linkedin.com/in/sami-ahmed-siddiqui/
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 *
 * Text Domain: quick-redirects
 * Domain Path: /languages
 *
 * @package QuickRedirects
 */

/**
 *  Quick Redirects - Redirect functionality.
 *  Copyright 2024 Sami Ahmed Siddiqui <sami.siddiqui@yasglobal.com>
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.

 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.

 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'QUICK_REDIRECTS_FILE' ) ) {
	define( 'QUICK_REDIRECTS_FILE', __FILE__ );
}

// Include the main Quick Redirects class.
require_once plugin_dir_path( QUICK_REDIRECTS_FILE ) . 'includes/class-quick-redirects.php';
