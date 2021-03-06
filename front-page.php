<!--
The front page template is always used as the site front page if it exists,
regardless of what settings on Admin > Settings > Reading.

The front-page.php template file is used to render your site’s front page,
whether the front page displays the blog posts index (mentioned above) or a
static page. The front page template takes precedence over the blog posts index
(home.php) template. If the front-page.php file does not exist, WordPress will
either use the home.php or page.php files depending on the setup in Settings →
Reading. If neither of those files exist, it will use the index.php file.
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
