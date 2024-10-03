<?php
/**
 * Admin View: Custom Notices
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div id="message" class="wpm-message notice notice-<?php echo esc_html( $notice_html['type'] ); ?>">
	<a class="wpm-message-close notice-dismiss" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'wpm-hide-notice', $notice ), 'wpm_hide_notices_nonce', '_wpm_notice_nonce' ) ); ?>"><span class="screen-reader-text"><?php esc_html_e( 'Dismiss', 'wp-multilang' ); ?></span></a>
	<?php echo wp_kses_post( wpautop( $notice_html['notice_html'] ) ); ?>
</div>
