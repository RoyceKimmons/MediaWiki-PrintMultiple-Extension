This software is released under a GNU-GPL by Royce Kimmons, 2011.

-----------------
What does it do?
-----------------
This set of scripts allows you to generate a single printable HTML page from multiple MediaWiki pages.


-----------------
How do I  use it?
-----------------
1. Unzip the directory and place it in your MediaWiki extensions folder (though this location is not necessary, as it is not a true MW extension, placing it here makes organizational sense).

2. In a text editor, open the 'config.php' file and enter the base url for your MediaWiki install with no trailing slash (e.g. 'http://en.wikipedia.org').

3. Add any page names (as they appear in the url for the page) as additional array items in the $pages array.
(e.g.
$pages[] = 'Other_page_1';
$pages[] = 'Other_page_2';
etc.)

4. Navigate your browser to the page at http://YOUR_MEDIAWIKI_INSTALL/extensions/PrintMultiple and voila!