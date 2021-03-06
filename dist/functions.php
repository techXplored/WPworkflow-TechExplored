<?php

/****************************************
Theme Setup
*****************************************/

require_once( get_template_directory() . '/lib/init.php' );
require_once( get_template_directory() . '/lib/theme-helpers.php' );
require_once( get_template_directory() . '/lib/theme-functions.php' );
require_once( get_template_directory() . '/lib/theme-comments.php' );


/****************************************
Require Plugins
*****************************************/

require_once( get_template_directory() . '/lib/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/lib/theme-require-plugins.php' );

add_action( 'tgmpa_register', 'te_register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/

/**
 * Define custom post type capabilities for use with Members
 */
function te_add_post_type_caps() {
	// te_add_capabilities( 'portfolio' );
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'te_filter_yoast_seo_metabox' );
function te_filter_yoast_seo_metabox() {
	return 'low';
}
