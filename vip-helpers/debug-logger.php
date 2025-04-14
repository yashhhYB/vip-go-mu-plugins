<?php
/**
 * VIP Debug Logger Helper
 *
 * Logs messages to debug.log when WP_DEBUG and WP_DEBUG_LOG are true.
 *
 * @package vip-go-mu-plugins
 */

/**
 * Logs a debug message to the debug.log file if WP_DEBUG is enabled.
 *
 * @param string|array|object $message Message to log.
 */
function vip_log_debug( $message ) {
	if ( defined( 'WP_DEBUG' ) && WP_DEBUG && defined( 'WP_DEBUG_LOG' ) && WP_DEBUG_LOG ) {
		if ( is_array( $message ) || is_object( $message ) ) {
			error_log( print_r( $message, true ) );
		} else {
			error_log( $message );
		}
	}
}
