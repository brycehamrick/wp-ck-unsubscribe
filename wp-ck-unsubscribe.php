<?php
/*
Plugin Name: WP Custom ConvertKit Unsubscribe
Description: Allows you to create a custom Unsubscribe page for use with ConvertKit.
Version: 0.1 BETA
Author: Bryce Hamrick
Author URI: http://bhamrick.com
*/

/*
WP Custom ConvertKit Unsubscribe (Wordpress Plugin)
Copyright (C) 2016 Bryce Hamrick
Contact me at http://bhamrick.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

add_shortcode("ck-unsubscribe", "unsubscribe_handler");

function unsubscribe_handler($atts) {
  $unsub_atts = shortcode_atts( array(
        'width' => '600',
        'height' => '200',
    ), $atts );

  $output = '';
  $unsub = $_GET['unsub'];
  $parse = parse_url($unsub);
  if (preg_match("/convertkit.com$/i", $parse['host'])) {
    // Change to https to prevent mixed content errors
    $https = 'https://' . $parse['host'] . $parse['path'];
    $output = "<iframe src='{$https}' width='{$unsub_atts['width']}' height='{$unsub_atts['height']}' id='wp-ck-unsubscribe-frame'></iframe>";
  }
  return $output;
}
