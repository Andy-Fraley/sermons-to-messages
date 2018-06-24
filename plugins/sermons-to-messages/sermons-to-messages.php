<?php
/*
Plugin Name: Sermons to Messages
Plugin URI: http://YOUR.DOMAIN.EXT/PLUGINPAGEDESCRIPTION
Description: This plug-in works with ChurchThemes church-theme-content plugin to rename "Sermons" to "Messages".
Author: Andy Fraley
Version: 1.0
Author URI: https://fraleys.org
*/

/**
 * Change sermon slug in URL
 * 
 * Example of how to change sermon slug in Church Content plugin.
 * This is ideally placed in your own functionality plugin so that it works after switching themes.
 *
 * REQUIRED: Go to Settings > Permalinks and save after applying this, or it will not take effect
 * 
 * More info: https://churchthemes.com/guides/developer/church-content/#modifying-post-types
 *
 * @param array $args Post type registration arguments yourprefix_change_sermon_slug
 * @return array Filtered arguments with new slug
 */
function asf_change_sermon_args( $args ) {
	 $args['rewrite']['slug'] = 'messages';
	 $args['labels']['name'] = esc_html_x('Messages', 'post type general name', 'church-theme-content');
	 $args['labels']['singular_name'] = esc_html_x('Message', 'post type singular name', 'church-theme-content');
	 $args['labels']['add_new_item'] = esc_html__('Add Message', 'church-theme-content');
	 $args['labels']['edit_item'] = esc_html__('Edit Message', 'church-theme-content');
	 $args['labels']['new_item'] = esc_html__('New Message', 'church-theme-content');
	 $args['labels']['all_items'] = esc_html__('All Messages', 'church-theme-content');
	 $args['labels']['view_item'] = esc_html__('View Message', 'church-theme-content');
	 $args['labels']['search_items'] = esc_html__('Search Messages', 'church-theme-content');
	 $args['labels']['not_found'] = esc_html__('No messages found', 'church-theme-content');
	 $args['labels']['not_found_in_trash'] = esc_html__('No messages found in Trash', 'church-theme-content');
	 return $args;
}
add_filter( 'ctc_post_type_sermon_args', 'asf_change_sermon_args' );

function asf_change_sermon_topic_args( $args ) {
	 $args['labels']['name'] = esc_html_x('Message Topics', 'taxonomy general name', 'church-theme-content');
	 $args['labels']['singular_name'] = esc_html_x('Message Topic', 'taxonomy singular name', 'church-theme-content');
	 $args['rewrite']['slug'] = 'message-topic';
	 return $args;
}
add_filter( 'ctc_taxonomy_sermon_topic_args', 'asf_change_sermon_topic_args' );

function asf_change_sermon_book_args( $args ) {
	 $args['labels']['name'] = esc_html_x('Message Books', 'taxonomy general name', 'church-theme-content');
	 $args['labels']['singular_name'] = esc_html_x('Message Book', 'taxonomy singular name', 'church-theme-content');
	 $args['rewrite']['slug'] = 'message-book';
	 return $args;
}
add_filter( 'ctc_taxonomy_sermon_book_args', 'asf_change_sermon_book_args' );

function asf_change_sermon_series_args( $args ) {
	 $args['labels']['name'] = esc_html_x('Message Series', 'taxonomy general name', 'church-theme-content');
	 $args['labels']['singular_name'] = esc_html_x('Message Series', 'taxonomy singular name', 'church-theme-content');
	 $args['rewrite']['slug'] = 'message-series';
	 return $args;
}
add_filter( 'ctc_taxonomy_sermon_series_args', 'asf_change_sermon_series_args' );

function asf_change_sermon_speaker_args( $args ) {
	 $args['labels']['name'] = esc_html_x('Message Speaker', 'taxonomy general name', 'church-theme-content');
	 $args['labels']['singular_name'] = esc_html_x('Message Speaker', 'taxonomy singular name', 'church-theme-content');
	 $args['rewrite']['slug'] = 'message-speaker';
	 return $args;
}
add_filter( 'ctc_taxonomy_sermon_speaker_args', 'asf_change_sermon_speaker_args' );

function asf_change_sermon_tag_args( $args ) {
	 $args['labels']['name'] = esc_html_x('Message Tags', 'taxonomy general name', 'church-theme-content');
	 $args['labels']['singular_name'] = esc_html_x('Message Tag', 'taxonomy singular name', 'church-theme-content');
	 $args['rewrite']['slug'] = 'message-tag';
	 return $args;
}
add_filter( 'ctc_taxonomy_sermon_tag_args', 'asf_change_sermon_tag_args' );
