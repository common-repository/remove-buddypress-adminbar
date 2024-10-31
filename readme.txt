=== Remove BuddyPress AdminBar ===

Contributors: netweblogic
Tags: BuddyPress, admin bar, adminbar
Requires at least: 2.7
Tested up to: 2.8.4
Stable tag: 1.2

This plugin removes the admin bar completely from the public and admin areas of the website. Can be used either as a normal or MU plugin. 

== Description ==

This plugin removes the admin bar completely from the public and admin areas of the website. Can be used either as a normal or MU plugin.

Upon activation/installation this works immediately. Nothing fancy, the admin bar is just not loaded anymore.

If you have any problems with the plugins, please visit our [http://netweblogic.com/forums/](support forums) for further information and provide some feedback first, we may be able to help. It's considered rude to just give low ratings and no reason for doing so.

= BuddyPress 1.1 Onwards =

You can also add the following to your wp-config.php file and then you don't need this plugin ( sniff ;( ) :

`define( 'BP_DISABLE_ADMIN_BAR', false );`


== Installation ==

1. Upload this plugin to the `/wp-content/plugins/` directory and unzip it, or simply upload the zip file within your wordpress installation from 2.7 onwards.

2. Activate the plugin through the 'Plugins' menu in WordPress

3. Alternatively, move the remove_bp_adminbar.php file into your `/wp-content/mu-plugins/` directory for it to work sitewide automatically.


== Frequently Asked Questions ==

None yet!