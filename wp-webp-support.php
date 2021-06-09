<?php
/**
 *
 * @package wpwebpsupport
 *
 * Plugin Name: WordPress WebP Support
 * Plugin URI: https://github.com/rolandfarkasCOM/wp-webp-support
 * Description: WordPress Webp Support.
 * Version: 1.0.0
 * Author: Roland Farkas
 * Author URI: https://rolandfarkas.com
 * Text Domain: wowebpsupport
 * License: GNU General Public License v3.0
 * URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if ( ! defined( 'ABSPATH' ) ) die( 'Hey, you can`t access this file, you silly human!' );

/**
 *
 * Sets the extension and mime type for .webp files.
 *
 */
add_filter( 'wp_check_filetype_and_ext', 'mcms_file_and_ext_webp', 10, 4 );
function mcms_file_and_ext_webp( $types, $file, $filename, $mimes ) {
    if ( false !== strpos( $filename, '.webp' ) ) {
        $types['ext'] = 'webp';
        $types['type'] = 'image/webp';
    }

    return $types;
}

/**
 *
 * Adds webp filetype to allowed mimes
 * 
 */
add_filter( 'upload_mimes', 'mcms_mime_types_webp' );
function mcms_mime_types_webp( $mimes ) {
    $mimes['webp'] = 'image/webp';

  return $mimes;
}