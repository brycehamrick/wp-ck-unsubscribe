=== WP Custom ConvertKit Unsubscribe ===
Contributors: bhamrick
Tags: convertkit
Requires at least: 2.5
Tested up to: 4.5.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows you to create a custom Unsubscribe page for use with ConverKit.

== Description ==

This plugin will allow you to create a page to use as your Unsubscribe link in your ConvertKit templates.

This method has been confirmed to be in compliance with ConvertKit's Terms of Service by ConvertKit Support.

Subscribers who click the Unsubscribe link will be immediately unsubscribed, but you can add custom messaging or add a form to collect feedback on your custom page.

To create your unsubscribe page:

* Install and activate this Plugin
* Add the [ck-unsubscribe] to a page you would like to use as your unsubscribe page.
* You can optionally include a "width" and "height" parameter, e.g. [ck-unsubscribe width="600" height="200"]
* Update your ConvertKit template to include a custom Unsubscribe link with the real unsubscribe link passed in as a URL parameter, "unsub". <a href="http://mydomain.com/unsubscribe/?unsub={{ unsubscribe_url }}">Unsubscribe</a>
* Test it out!

You can now add forms, last-chance sale opportunities, or any other content you would like.

== Installation ==

1. Upload the directory: `/wp-ck-unsubscribe/` to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress
