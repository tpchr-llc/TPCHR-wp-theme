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
