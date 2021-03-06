<?php
/**
 * ACF Hooks
 *
 * @package     PName/Customizations
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'PName_ACF_Hooks' ) ) :

	/**
	 * PName_ACF_Hooks Class.
	 */
	class PName_ACF_Hooks {

		/**
		 * Hook in methods.
		 */
		public static function init() {
			// add_filter( 'acf/settings/load_json', array( __CLASS__, 'acf_json_load_point' ) );
			// add_filter( 'acf/settings/save_json', array( __CLASS__, 'acf_json_save_point' ) );
		}

		/**
		 * Set from where ACF must load JSON files
		 *
		 * @param  array $paths Paths that ACF will read JSON from.
		 * @return array
		 */
		public static function acf_json_load_point( $paths ) {
			unset( $paths[0] );

			$paths[] = dirname( __FILE__ ) . '/acf-json';

			return $paths;
		}

		/**
		 * Set to where ACF must save JSON files
		 *
		 * @param  string $path Path that ACF will save JSON to.
		 * @return string
		 */
		public static function acf_json_save_point( $path ) {
			$path = dirname( __FILE__ ) . '/acf-json';

			return $path;
		}
	}

endif;

return new PName_ACF_Hooks();
