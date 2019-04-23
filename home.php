<!--
The home page template is the front page by default. If you do not set
WordPress to use a static front page, this template is used to show latest
posts.

By default, WordPress sets your site’s home page to display your latest blog 
posts. This page is called the blog posts index. You can also set your blog
posts to display on a separate static page. The template file home.php is used
to render the blog posts index, whether it is being used as the front page or on
separate static page. If home.php does not exist, WordPress will use index.php.
-->
<?php get_header(); ?>
        	<div class="row">
        		<div class="col-sm-8 blog-main">
                    <?php
            			if ( have_posts() ) :
                             while ( have_posts() ) :
                                the_post();
                                get_template_part( '_post-partial', get_post_format() );
            			    endwhile;
                    ?>
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><?php next_posts_link( '<<' ); ?></li>
                                    <li class="page-item"><?php previous_posts_link( '>>' ); ?></li>
                                </ul>
                            </nav>
                    <?php
                        endif;
                    ?>
        		</div> <!-- /.blog-main -->
        		<?php get_sidebar(); ?>
        	</div> <!-- /.row -->
<?php get_footer(); ?>
