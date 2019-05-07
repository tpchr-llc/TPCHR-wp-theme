<!--
The header template file usually contains your site’s document type, meta
information, links to stylesheets and scripts, and other data.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head();?>
    </head>
    <body>
        <header class="tpchr-header container-fluid sticky-top">
            <div class="tpchr-header-logo">
                <a href="<?php echo get_bloginfo('wpurl');?>">
                    <?php if(get_theme_mod('TPCHR-wp-theme_logo')) : ?>
                        <img src="<?php echo get_theme_mod('TPCHR-wp-theme_logo'); ?>" alt="<?php esc_attr(get_bloginfo('name', 'display')); ?>" />
                    <?php else : ?>
                        <h1 class="site-title">
                            <?php echo get_bloginfo( 'name' ); ?>
                        </h1>
                    <?php endif; ?>
                </a>
                <p class="lead">
                    <?php
                        echo get_bloginfo('description');
                    ?>
                </p>
            </div>
            <div class="tpchr-header-control container-fluid">
                <div class="row">
                </div>
                <div class="row">
                    <nav class="tpchr-header-control-nav col-sm-12">
                        <?php
                            wp_nav_menu(
                                array('theme_location' => 'header-menu')
                            );
                        ?>
                    </nav>
                </div>
            </div>
        </header>
        <div class="container-fluid">
