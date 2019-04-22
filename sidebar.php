            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>
                        About
                    </h4>
                    <p>
                        <?php the_author_meta( 'description' ); ?>
                    </p>
                </div>
                <div class="sidebar-module">
                    <h4>
                        Archives
                    </h4>
                    <ol class="list-unstyled">
                        <?php wp_get_archives( 'type=monthly' ); ?>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>
                        sidebar
                    </h4>
                    <ol class="list-unstyled">
                        <li><a href="<?php echo get_option('facebook'); ?>">facebook</a></li>
                        <li><a href="<?php echo get_option('linkedin'); ?>">Linkedin</a></li>
                    </ol>
                </div>
            </div>
            <!-- /.blog-sidebar -->
