=== Plugin Name ===
Contributors: zackphilipps
Donate link: n/a
Tags: restrict, content, business, hours, operation, open, closed
Requires at least: 3.0.1
Tested up to: 3.8
Stable tag: 0.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

THIS PLUGIN HAS BEEN DEPRECATED.

== Description ==

TSBusinessDay class with functions used for restricting content based on hours of operation. Supports hours that run past midnight. Will eventually develop into full-fledged plugin, but thanks to [Elliot Condon]("http://www.elliotcondon.com/"), I don't have to just yet!

= Dependencies =

This function requires the [Advanced Custom Fields]("http://www.advancedcustomfields.com/") plugin and some of its add-ons. They are as follows:

* [Repeater Field]("http://www.advancedcustomfields.com/add-ons/repeater-field/")
* [Options Page]("http://www.advancedcustomfields.com/add-ons/options-page/")
* [Date & Time Picker Field]("http://www.advancedcustomfields.com/add-ons/date-time-picker/")

The Repeater Field and Options page are premium add-ons. If you are already using them, you understand how invaluable they are. If not, there's no better time to start!

= Installation =

1. Make sure you have all of the required dependencies.
2. Download the ts-business-hours directory and copy it to wp-content/plugins.
3. Activate the plugin on the Plugins page.
4. Navigate to the Options page. Configure days and hours. You must have both opening and closing times.
5. You must start the week on Sunday and end it on Saturday for the plugin to work correctly. This is because the plugin uses the date('w') function.
6. See example.php and use accordingly.

= Notes =

I ran into an issue when working locally, which was that I had to wait until the turn of a minute to see my changes to the template file reflected live. I'm not sure why that is and would love to hear suggestions!

= What does 'TS' stand for, anyway? =

Tribeswell is an interactive marketing company specializing in high quality responsive website design. We are students of great design and useability. Choosing to work with Tribeswell means your organization will get the absolute best in modern design. We are headquartered in Bloomington, Indiana and work with clients all across the midwest.

= About the Author =

Originally from Bedford, Indiana, Zack is currently working full-time at Tribeswell. Zack is passionate about front-end design and UX. He is instrumental in ensuring that every Tribeswell website contains a flawless level of fit and finish, providing an excellent experience for visitors.

== Installation ==

1. Make sure you have all of the required dependencies.
2. Download the ts-business-hours directory and copy it to wp-content/plugins.
3. Activate the plugin on the Plugins page.
4. Navigate to the Options page. Configure days and hours. You must have both opening and closing times.
5. You must start the week on Sunday and end it on Saturday for the plugin to work correctly. This is because the plugin uses the date('w') function.
6. See example.php and use accordingly.

== Frequently Asked Questions ==

= Can I use isOpen() to restrict content within a blog post? =

You cannot use a PHP function in a WYSIWYG editor. [Shortcodes]("http://codex.wordpress.org/Shortcode") provide this functionality. Shortcode support for this plugin is on the way!

== Changelog ==

= 0.1.1 =
* Created TSBusinessDay class with several utility functions including isOpen(). All functions can be accessed like so: $this->theFunction().
