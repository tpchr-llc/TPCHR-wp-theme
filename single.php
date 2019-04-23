<!--
The single post template is used when a visitor requests a single post.

single-{post-type}.php
    The single post template used when a visitor requests a single post from a
    custom post type. For example, single-book.php would be used for displaying
    single posts from a custom post type named book. The index.php is used if a
    specific query template for the custom post type is not present.

-->
<?php get_header(); ?>
            <div class="row">
                <div class="col-sm-12">
                    <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( '_post-complete', get_post_format() );
                                if ( comments_open() || ger_comments_number() ) :
                                    comments_template();
                                endif;
                            endwhile;
                        endif;
                    ?>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
<?php get_footer(); ?>
