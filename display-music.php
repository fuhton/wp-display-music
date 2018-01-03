<?php
/**
 * Plugin Name: Display Music
 * Plugin URI:  https://fuhton.com
 * Description: Display Music based-content in your Posts/Pages
 * Version:     0.1.0
 * Author:      Nicholas Smith
 * Author URI:  fuhton
 * Text Domain: dis-mus
 * Domain Path: /languages
 * License:     GPL-2.0+
 */

/**
 * Copyright (c) 2016 fuhton (email : fuhton@gmail.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Useful global constants
define( 'DIS_MUS_VERSION',   '0.1.6' );
define( 'DIS_MUS_URL',       plugin_dir_url( __FILE__ ) );
define( 'DIS_MUS_PATH',      dirname( __FILE__ ) . '/' );
define( 'DIS_MUS_INC',       DIS_MUS_PATH . 'includes/' );
define( 'DIS_MUS_TEMPLATES', DIS_MUS_PATH . 'templates/' );

// Include files
require_once DIS_MUS_INC . 'setup.php';

// Activation/Deactivation
register_activation_hook( __FILE__, '\Dis_Mus\Core\activate' );
register_deactivation_hook( __FILE__, '\Dis_Mus\Core\deactivate' );

// Bootstrap
Dis_Mus\Setup\setup();
