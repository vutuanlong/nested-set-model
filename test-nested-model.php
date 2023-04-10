<?php
/*
Plugin Name: Test Netsted Model
Plugin URI: https://www.facebook.com/shinethemetoday
Description: Plugin only for Traveler theme
Version: 1.0.2
Author: ShineTheme
Author URI: https://www.facebook.com/shinethemetoday
License: GPLv2 or later
Text Domain: traveler-layout-essential
*/

namespace NESTED;

// Prevent loading this file directly.
defined( 'ABSPATH' ) || die;

require 'vendor/autoload.php';

define( 'NETSTED_URL', plugin_dir_url( __FILE__ ) );
define( 'NETSTED_DIR', plugin_dir_path( __FILE__ ) );
define( 'NETSTED_VER', '1.0.0' );

new Schema;
new RegisterPostType;
new TestNested;

