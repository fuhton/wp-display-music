=== Display Music ===
Contributors: fuhton
Requires at least: 4.8
Tested up to: 4.9.1
Stable tag: 0.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A WordPress plugin to display musical content (musical scores, guitar tabs, etc/tbd...) inside your WordPress content

== Description ==

= List of supported media types =
* VexTab
  * [Github Link](https://github.com/0xfe/vextab)
  * [Documentation](http://www.vexflow.com/vextab/tutorial.html)
* [PROPOSED] MusicXML
  * [Main Site](http://www.musicxml.com/)
* [PROPOSED] Developer built notation

= Setup =
* Install this plugin through the WordPress plugin interface or by downloading this repository
* Activate the plugin
* Create a new post and select the :musical_note: from the TinyMCE toolbar
* Select your desired notation (assumed VexTab)
* Paste `tabstave notation=true\n notes :q 4/4\n` into the TinyMCE dialoge
* Save and view your post! There should be some music there!
* If you run into issues, please review our (Issues and Support)[#issues-and-support] section

== Frequently Asked Questions ==

= How can I send feedback or get help with a bug? or How can I contribute? =

We'd love to hear your bug reports, feature suggestions and any other feedback! Please head over to <a href="https://github.com/fuhton/wp-display-music/issues">the GitHub issues page</a> to search for existing issues or open a new one.

== Changelog ==

= 0.1.0 =
* First release of the plugin.
