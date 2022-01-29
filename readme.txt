=== Neumorphic ===
Contributors: wildworks
Tags: one-column, two-columns, right-sidebar, left-sidebar, wide-blocks, block-styles, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, theme-options, sticky-post, threaded-comments, translation-ready, blog, education, news, photography, portfolio,
Donate link: https://www.paypal.me/thamanoJP
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Stable tag: 2.0.0
Requires at least: 5.7
Tested up to: 5.8
Requires PHP: 5.6

Neumorphic is a advanced WordPress theme based on neumorphic design.

== Description ==

Neumorphic is a advanced WordPress theme based on neumorphic design. This theme surports WordPress Block Editor, and almost all the core blocks are styled for neumorphic design. You can change theme color by using color skin function, and you can also adjust each colors individually to create your original skin.

== Installation ==

1. In your admin panel, go to **Appearance > Themes** and click the **Add New** button.
2. Type **Neumorphic** in the search form and press the **Enter** key.
3. Click the **Activate** button to begin using this theme on your website.
4. In your admin panel, navigate to **Appearance > Customize**.
5. Put the finishing touches on your website by adding a logo, color skin, and custom colors.

== Resources ==

= Font Awesome =
License: Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License
Source: https://fontawesome.com/

= css-vars-ponyfill=
License: MIT License
Source: https://github.com/jhildenbiddle/css-vars-ponyfill

= object-fit-images =
License: MIT License
Source: https://github.com/fregante/object-fit-images

= Image for theme screenshot =
License: CC0 Public Domain
Source: https://pxhere.com/ja/photo/32163

== Changelog ==

= v2.0.0=
Add: Customizer setting (Block-based widgets editor switch control)
Add: Customizer setting (neumoprhic style site logo image)
Add: Customizer setting (post modified date)
Add: Customizer SNS setting variation
Add: Flat template
Add: Support for custom spacing
Change: Style and script handle name
Clean: Change sass compiler from node sass to dart sass
Clean: CSS refactoring
Clean: npm packages
Fix: Accessibility check
Fix: Page template identification error
Remove: Bundled language files
Styling: IE and old WordPress version fallback
Styling: Tuning of all blocks
Styling: Widget Block Editor
Update: Font Awesome version and build flow

= v1.3.2 =
Fix: Problem about installation error in PHP 8
Fix: Notice Error on SNS icons parts
Tested to PHP 8

= v1.3.1 =
Clean: Remove sourceMappingURL from css-vars-ponyfill.min.js
Fix: File loading error when using a child theme

= v1.3.0 =
Fix: Fine tuning of embed blocks
Add: Indivisual block margin-bottom style
Add: embed block style

= v1.2.3 =
Fix: Fine tuning of all widgets, some blocks, comment tag style
Fix: add classic style(table, definition list, inline quotes)
Clean: Remove indivisual block margin-bottom style
Add: Comment content tag style
Add: Style for password protected post
Change: post meta component layout

= v1.2.2 =
Clean: Update npm packages, change the scss directory structure, and refactor the development environment
Fix: Problem about skin color is not applied to a tag in the editor
Fix: Fine tuning of all blocks

= v1.2.1 =
Add: style for the form parts

= v1.2.0 =
add theme-support custom-line-height, custom-units, navigation-widgets(html5)

= v1.1.9 =
Update: Overall refactoring of the block style
Change: Refactoring of css loading

= v1.1.8 =
Fix: Problem about customizer color settings are not reflected
Fix: jQuery selector expression
Change: The way to load CSS/JS on the admin side

= v1.1.7 =
Update: Add skip links

= v1.1.6 =
Update: Control tab key movement in the modal window
Fix: Adjust the x button of the drawer menu to does not overlapp the wp admin bar

= v1.1.5 =
Fix: Pagination HTML was escaping
Add translation on searchform.php
Change:Removing escape process at get_search_query()
Change:Add prefix to the var in customizer inline script
Change:script( css-vars-ponyfill ) loading method from CDN to file

= v1.1.4 =
Fix: Accessibility css

= v1.1.3 =
Update: Accessibility support for drop down menus ( make it possible to navigate with tab key )

= v1.1.2 =
Doc: Update license, donate link
Doc: Change `Requied PHP ( 7.0 to 5.6 ) , add `Tested up to`
Fix: Support for PHP 5.6 using Theme Sniffer
Update: Screenshot

= v1.1.1 =
Fix: Problem about customizer SNS settings are not reflected
Change: pagination function `paginate_links` to `the_posts_pagination`
Change: script( css-vars-ponyfill ) loading method from CDN to file

= v1.1.0 =
Update: Package Font Awesome Free 5.12.1 to 5.13.1, and add no minification css files

= v1.0.5 =
Fix: Add escape Functions and translation
Update: Development related configuration files

= v1.0.4 =
Update: block style(social icons)
Update: gitignore
Update: composer setting

= v1.0.3 =
Fix: The problem that the mouse action of the button does not work correctly

= v1.0.2 =
Update: apply mediaelement style to the front audio block

= v1.0.1 =
Fix: wrong variable name(sns choice)

= 1.0.0 =
* Initial release
