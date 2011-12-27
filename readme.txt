=== Lexicographer ===

Contributors: texttheater
Tags: index, dictionary, words, lemmas, glossary
Requires at least: 2.8.4
Tested up to: 3.3
Stable tag: trunk

Lexicographer creates an alphabetical index of your blog, using keywords you specify. The index can be included in any page or post.

== Description ==

Lexicographer creates an alphabetical index of your blog, using keywords you specify. The index can be included in any page or post. Here's what such an index looks like: http://texttheater.net/woerterverzeichnis

I wrote this plugin because I like to invent words and define them on my blog, thereby creating a dictionary distributed over several posts. Not only was there no list of all the words available, it was also that Google wouldn't find the words because it couldn't deal with the stress marks I put in there, dictionary-style. Lexicographer solves both of these problems. 

== Usage ==

In your posts and pages, put the words and terms to index in spans of class `lemma`, like so: `<span class="lemma">ˌsu·per·ca·liˌfra·gi·lis·ticˌex·pi·a·liˈdo·cious</span>` (the stress and hyphenation marks are of course optional).

In the page (or post) where you'd like the index to live, make sure the HTML contains the following exact string:

    <p>{{Lexicographer index}}</p>

At this place, the index will be inserted. It will consist of the defined terms, linking to the definitions.

== Installation ==

Either:

1. Search for and install Lexicographer directly through the 'Plugins' menu in WordPress

Or:

1. Download and unzip Lexicographer
1. Upload the `lexicographer` directory to the `/wp-content/plugins` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Support ==

If you have questions or suggestions, contact me at strompost ät texttheater döt de.
