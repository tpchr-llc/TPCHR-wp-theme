<!--
The singular template is used for posts when single.php is not found, or for
pages when page.php are not found. If singular.php is not found, index.php is
used.

single-{post-type}.php
    The single post template used when a visitor requests a single post from a
    custom post type. For example, single-book.php would be used for displaying
    single posts from a custom post type named book. The index.php is used if a
    specific query template for the custom post type is not present.
-->
<?php get_header(); ?>
            singular.php
<?php get_footer(); ?>
