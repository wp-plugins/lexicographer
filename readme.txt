=== Lexicographer ===

Contributors: texttheater
Tags: index, dictionary, words, lemmas, glossary
Requires at least: 2.8.4
Tested up to: 3.3.2
Stable tag: trunk

Lexicographer creates an alphabetical index of your blog, using keywords you specify. The index can be included in any page, post or text widget.

== Description ==

Lexicographer creates an alphabetical index of your blog, using keywords you specify. The index can be included in any page, post or text widget. Here's what such an index looks like: http://texttheater.net/woerterverzeichnis

I wrote this plugin because I like to invent words and define them on my blog, thereby creating a dictionary distributed over several posts. Not only was there no list of all the words available, it was also that Google wouldn't find the words because it couldn't deal with the stress marks I put in there, dictionary-style. Lexicographer solves both of these problems. 

== Usage ==

In your posts and pages, put the words and terms to index in spans of class `lemma`, like so: `<span class="lemma">ˌsu·per·ca·liˌfra·gi·lis·ticˌex·pi·a·liˈdo·cious</span>` (the stress and hyphenation marks are of course optional).

In the page (or post, or text widget) where you'd like the index to live, make sure the HTML contains the following exact string:

    <p>{{Lexicographer index}}</p>

At this place, the index will be inserted. It will consist of the defined terms, linking to the definitions.

== Installation ==

Either:

1. Search for and install Lexicographer directly through the 'Plugins' menu in WordPress

Or:

1. Download and unzip Lexicographer
1. Upload the `lexicographer` directory to the `/wp-content/plugins` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 0.5 =

* Transliteration of lemmas to ASCII both for creating anchor names and for sorting now uses the same transliteration table. The characters ÄäÖöÜü (graphemes corresponding to German umlauts) still receive special treatment in that they are expanded à la ä → ae for anchor names (but not for sorting), but this is now done as a preprocessing step.
* The transliteration table now covers almost every latin-derived letter in the Unicode blocks Latin-1 Supplement, Latin Extended-A, Latin Extended-B and Latin Extended Additional. Most transliterations are "glyph-oriented" in that they involve only removing diacritic marks, decomposing ligatures and rotating letters back. A few transliterations are more "usage-oriented", such as ß → ss, þ → th or Ɣ → g. Some effort was made to keep the transliteration table sane, consistent and language-neutral. Missing letters are indicated in comments. Suggestions for additions and improvement are more than welcome!
* Bugfix: generated links were broken if not using /%postname permalinks.
* Bugfix: was indexing unpublished posts/pages on installation.

= 0.4 =

* Now observing DB_CHARSET for creating the databse table. This fixes a problem where non-ASCII characters get replaced by question marks when inserting into the table via an UTF-8 connection.
* Tested with WordPress 3.3.2.
* Updated documentation.

= 0.3 =

* Index can now be inserted in widgets.
* Tested with WordPress 3.3.
* Updated documentation.

= 0.2 =

* Lemmas are now removed from the index when the post/page containing them is deleted or otherwise unpublished.
* The index now uses absolute links.
* Tested with WordPress 2.9.1.
* Updated documentation.

= 0.1 =

* Initial release.

== Support ==

If you have questions or suggestions, contact me at poststelle ät texttheater döt net.
