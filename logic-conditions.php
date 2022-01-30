<?php

?>
<!--
Writing Logic Code
The text in the ‘Widget logic’ field can be full PHP code and should return ‘true’ when you need the widget to appear. If there is no ‘return’ in the text, an implicit ‘return’ is added to the start and a ‘;’ is added on the end. (This is just to make single statements like is_home() more convenient.)

The Basics
Make good use of WP’s own conditional tags. You can vary and combine code using:

! (NOT) to reverse the logic, eg !is_home() is TRUE when this is NOT the home page.
|| (OR) to combine conditions. X OR Y is TRUE when either X is true or Y is true.
&& (AND) to make conditions more specific. X AND Y is TRUE when both X is true and Y is true.
There are lots of great code examples on the WP forums, and on WP sites across the net. But the WP Codex is also full of good examples to adapt, such as Test if post is in a descendent category.

Examples
is_home() — just the main blog page
!is_page('about') — everywhere EXCEPT this specific WP ‘page’
!is_user_logged_in() — shown when a user is not logged in
is_category(array(5,9,10,11)) — category page of one of the given category IDs
is_single() && in_category('baked-goods') — single post that’s in the category with this slug
current_user_can('level_10') — admin only widget
strpos($_SERVER['HTTP_REFERER'], "google.com")!=false — widget to show when clicked through from a google search
is_category() && in_array($cat, get_term_children( 5, 'category')) — category page that’s a descendent of category 5
global $post; return (in_array(77,get_post_ancestors($post))); — WP page that is a child of page 77
global $post; return (is_page('home') || ($post->post_parent=="13")); — home page OR the page that’s a child of page 13
Note the extra ‘;’ on the end where there is an explicit ‘return’.

The ‘widget_logic_eval_override’ filter
Before the Widget Logic code is evaluated for each widget, the text of the Widget Logic code is passed through this filter. If the filter returns a BOOLEAN result, this is used instead to determine if the widget is visible. Return TRUE for visible.