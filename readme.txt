=== Callback for Monarch by Logic Hop ===
Contributors: logichop
Donate link: https://logichop.com
Tags: monarch, social, sharing, share, javascript, callback
Requires at least: 4.0.1
Tested up to: 4.7
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Callback for Monarch by Logic Hop adds a Javascript callback to the Monarch Social Sharing Plugin. Simply install the plugin and a callback is automatically available when any Monarch social share or follow button is clicked. 

== Description ==
 
Callback for Monarch by Logic Hop adds a Javascript callback to the Monarch Social Sharing Plugin. Simply install the plugin and a callback is automatically available when any Monarch social share or follow button is clicked.

Now you can trigger custom events when a social share or follow button has been clicked. The callback is available for use in your pages, posts or Javascript files – Simply add the following code:

	<script>
		function logichop_monarch_callback (stats) {
			console.log( 'logichop_monarch_callback' );
			console.log( stats );
			// Your Javascript code here
		} 
	</script>

When a Monarch event is triggered the __stats__ parameter is sent to the _logichop_monarch_callback_ function with the following values:

+ __action__
	+ _The action performed. Typically 'share', 'follow' or 'media'._
+ __network__
	+ _The network for which the action was triggered. 'Facebook', 'Twitter', etc._
+ __media_url__
	+ _Image URL when media is shared._
+ __post_id__
	+ _ID of the page or post where the button was triggered._


**Interested in Content Personalization for Wordpress?** See how we're using Monarch with Logic Hop – Check out our tutorial at: https://logichop.com/track-social-shares/


== Installation ==

This plugin requires the Monarch Social Sharing Plugin by Elegant Themes.

1. Unzip the callback-for-monarch-by-logic-hop.zip file
2. Upload the callback-for-monarch-by-logic-hop folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress


== Frequently Asked Questions ==
 
= How The Callback Works =
 
Callback for Monarch by Logic Hop calls a Javascript function named 'logichop_monarch_callback' when a Monarch social share action is triggered. 


== Changelog ==

= 1.0.0 =
* Initial version


== Upgrade Notice ==

= 1.0.0 =
Initial version