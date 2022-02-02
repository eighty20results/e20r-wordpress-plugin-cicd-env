<?php
/**
 *  Copyright (c) 2022. - Eighty / 20 Results by Wicked Strong Chicks.
 *  ALL RIGHTS RESERVED
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  You can contact us at mailto:info@eighty20results.com
 */

namespace E20R\CICD_Environment;

/*
Plugin Name: E20R WordPress Plugin CICD Environment
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: eighty20results
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

use E20R\Utilities\ActivateUtilitiesPlugin;

if ( ! class_exists( 'E20R\CICD_Environment' ) ) {
	// FIXME: Add class definition here for the plugin
}
/**
 * Load the required E20R Utilities Module functionality
 */
require_once __DIR__ . '/ActivateUtilitiesPlugin.php';

if ( function_exists( 'apply_filters' ) && ! apply_filters( 'e20r_utilities_module_installed', false ) ) {

	$required_plugin = 'E20R WordPress Plugin CICD Environment';

	if ( false === ActivateUtilitiesPlugin::attempt_activation() ) {
		add_action(
			'admin_notices',
			function () use ( $required_plugin ) {
				\E20R\Utilities\ActivateUtilitiesPlugin::plugin_not_installed( $required_plugin );
			}
		);

		return false;
	}
}
