=== WP Facebook Embedded Posts ===
Contributors: htaccess24
Tags: facebook, embed facebook posts, facebook posts
Requires at least: 3.6
Tested up to: 4.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This Plugin gives you the opportunity to embed Facebook Posts with one easy shortcode on your WordPress Blog.

== Description ==
The Plugin WP Facebook Embedded Posts gives you the opportunity to embed Facebook Posts with the Shortcode `[fb-post href=]` on your WordPress Blog.

You just need to copy the hyperlink of your Facebook Post and insert it into the href-attribute (e.g. `[fb-post href=https://www.facebook.com/permalink.php?story_fbid=1072847306060993&id=707570922588635]`). After that you have to save your WordPress Post/Site and that's it.

If you want more information about the Plugin you can [read this article](http://www.htaccess24.de/facebook-beitraege-in-wordpress-einbinden/ "WordPress Facebook Embedded Posts - Article by htaccess24.de") in german language. If you found bugs or have feedback you can post it here or on my blog (in german or english please).

== Installation ==
1. Download this Plugin from the WordPress Plugin Directory.
2. Extract the Folder inside the zip-file in your plugin directory (/wp-content/plugins/)
3. Activate the Plugin through the Plugin-Menu in your WordPress Backend
4. Now you can use the shortcode [fb-post href=] everywhere you want.
5. That's it! Have fun with this plugin.

== Frequently Asked Questions ==
= How can I copy the Hyperlink of a Facebook Post? =
1. Every Facebook Post contains a timestamp (e.g. 9 hours)
2. Right click the timestamp. The menu of your Webbrowser will be shown
3. Click on `Copy link address`
4. Insert the copied link into the href-attribute in the `[fb-post href=]` shortcode

= Does this Plugin work with the current Version of WordPress? =
Yes, I tested the functionality of this Plugin and it works fine with WordPress 4.3.1

= Does this Plugin works with WPTC? =
Yes, I have installed WPTC too on my Blog and I have no problems with it

== Screenshots ==
1. A small example of how the embedded post may look

== Changelog ==
= 1.0.2 =
* Fixed a bug which let rss feeds not be valid

= 1.0.1 =
* Updated the Facebook Javascript SDK to ensure the functionality of this plugin

= 1.0 =
* First release of the WP Facebook Embedded Posts Plugin

== Upgrade Notice ==
= 1.0.2 =
I have fixed a bug, which let rss feeds not to be valid. For Websites like Bloggerei.de or something else was this a problem because they can't read the feed correctly and don't updates your lastest post on their website.

= 1.0.1 =
Facebook updated their Javascript SDK. I had to update my code to ensure the functionality of this Plugin.