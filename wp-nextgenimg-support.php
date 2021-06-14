<?php
/**
 *
 * @package wpnextgenimgsupport
 *
 * Plugin Name: WordPress Next Gen. Image Support
 * Plugin URI: https://github.com/rolandfarkasCOM/wp-webp-support
 * Description: WordPress Next Gen. Image Support (WebP, JP2).
 * Version: 1.2.0
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
add_filter( 'wp_check_filetype_and_ext', 'wpnextgenimgsupport_file_and_ext_webp', 10, 4 );
function wpnextgenimgsupport_file_and_ext_webp( $types, $file, $filename, $mimes ) {
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
add_filter( 'upload_mimes', 'wpnextgenimgsupport_mime_types_webp' );
function wpnextgenimgsupport_mime_types_webp( $mimes ) {
    $mimes['webp'] = 'image/webp';

  return $mimes;
}

/**
 *
 * Sets the extension and mime type for .jp2 files.
 *
 */
add_filter( 'wp_check_filetype_and_ext', 'wpnextgenimgsupport_file_and_ext_jp2', 10, 4 );
function wpnextgenimgsupport_file_and_ext_jp2( $types, $file, $filename, $mimes ) {
    if ( false !== strpos( $filename, '.jp2' ) ) {
        $types['ext'] = 'jp2';
        $types['type'] = 'image/jp2';
    }

    return $types;
}

/**
 *
 * Adds webp filetype to allowed mimes
 * 
 */
add_filter( 'upload_mimes', 'wpnextgenimgsupport_mime_types_jp2' );
function wpnextgenimgsupport_mime_types_jp2( $mimes ) {
    $mimes['jp2'] = 'image/jp2';

  return $mimes;
}