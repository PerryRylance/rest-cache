<?php
/*
Plugin Name: REST Cache
Plugin URI: https://perryrylance.com/rest-cache
Author: Perry Rylance
Author URI: https://perryrylance.com
Description: The fastest REST cache for WordPress. This plugin makes REST requests lightning fast and will eliminate any load associated with REST GET requests on your database. Provides facilities for inclusion and exclusion rules, and hooks for 3rd party developers to clear their REST routes.
Version: 1.0.0b
Requires at least: 4.4.0
Requires PHP: 5.4
License: Apache License 2.0
Text Domain: rest-cache
*/

namespace PerryRylance\WordPress\RESTCache;

$dir = plugin_dir_path(__FILE__);

require_once($dir . "vendor/autoload.php");
require_once($dir . "includes/class.plugin.php");