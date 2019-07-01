<?php
/**
 * Plugin Name: Rest Allow Anonymous Comments
 * Plugin URI: https://github.com/gibso/wordpress-rest-anonymous-comments
 * Description:  This plugin allows the creation of anonymous comments via the rest api
 * Version: 0.0.1
 * Author: Oliver Görtz
 */
add_filter( 'rest_allow_anonymous_comments', '__return_true' );