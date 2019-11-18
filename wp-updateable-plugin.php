<?php
/*
Plugin Name: Updateable Plugin Template
Plugin URI: safetyllama.com
Description: A boilerplate plugin.
Version: 1.0
Author: Joseph Greve
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Set up Updates
require 'plugin-update-checker/plugin-update-checker.php';
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/lime517/wp-updateable-plugin.git',
	__FILE__,
	'wp-updateable-plugin' // name of repo
);

// Set branch
$updateChecker->setBranch('master');

//Enable Releases mode
$updateChecker->getVcsApi()->enableReleaseAssets();

//Optional: If you're using a private repository, specify the access token like this:
//$updateChecker->setAuthentication('');

// Add your own functions here:

?>
