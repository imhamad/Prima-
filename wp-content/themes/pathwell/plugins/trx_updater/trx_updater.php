<?php
/* TRX Updater support functions
------------------------------------------------------------------------------- */

// Theme init priorities:
// 9 - register other filters (for installer, etc.)
if (!function_exists('pathwell_trx_updater_theme_setup9')) {
	add_action( 'after_setup_theme', 'pathwell_trx_updater_theme_setup9', 9 );
	function pathwell_trx_updater_theme_setup9() {

		if (is_admin()) {
			add_filter( 'pathwell_filter_tgmpa_required_plugins',			'pathwell_trx_updater_tgmpa_required_plugins' );
		}
	}
}


// Filter to add in the required plugins list
if ( ! function_exists( 'pathwell_trx_updater_tgmpa_required_plugins' ) ) {
	//Handler of the add_filter('pathwell_filter_tgmpa_required_plugins',	'pathwell_trx_updater_tgmpa_required_plugins');
	function pathwell_trx_updater_tgmpa_required_plugins( $list = array() ) {
		if ( pathwell_storage_isset( 'required_plugins', 'trx_updater' )) {
			$path = pathwell_get_file_dir( 'plugins/trx_updater/trx_updater.zip' );
			if ( ! empty( $path ) || pathwell_get_theme_setting( 'tgmpa_upload' ) ) {
				$list[] = array(
					'name'     => pathwell_storage_get_array( 'required_plugins', 'trx_updater' ),
					'slug'     => 'trx_updater',
					'source'   => ! empty( $path ) ? $path : 'upload://trx_updater.zip',
					'version'  => '1.4.1',
					'required' => false,
				);
			}
		}
		return $list;
	}
}


// Check if this plugin installed and activated
if ( !function_exists( 'pathwell_exists_trx_updater' ) ) {
	function pathwell_exists_trx_updater() {
		return function_exists( 'trx_updater_load_plugin_textdomain' );
	}
}
