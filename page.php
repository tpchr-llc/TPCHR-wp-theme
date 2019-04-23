<!--
The page template is used when visitors request individual pages, which are a
built-in template.

page-{slug}.php
    The page slug template is used when visitors request a specific page, for
    example one with the “about” slug (page-about.php).

-->
<?php get_header(); ?>
            <div class="row">
                <div class="col-sm-12">
                    <?php
                        if ( have_posts() ) :
                            the_post();
                            the_content();
                        endif;
                    ?>
                </div> <!-- /.col -->
            </div> <!-- /.row -->
<?php get_footer(); ?>
