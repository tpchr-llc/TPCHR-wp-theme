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

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head();?>
    </head>
    <body>
<!--
*******************************************************************************
        CHANGE THESE CLASS NAMES DANIEL!!!
*******************************************************************************
-->
        <header class="tpchr-header container-fluid">
            <div class="tpchr-header-logo">
                <a href="<?php echo get_bloginfo( 'wpurl' );?>">
                    <?php
                        Output_Customizer_Setting('img',
                        array('src' => 'TPCHR-wp-theme_logo','alt' =>esc_attr(get_bloginfo('name', 'display'))),
                        null,"h1","class=\"site-title\"",get_bloginfo( 'name' ));
                    ?>
                </a>
                <p class="lead blog-description">
                    <?php echo get_bloginfo( 'description' ); ?>
                </p>
            </div>
            <div class="tpchr-header-control container-fluid">
                <div class="row">
                </div>
                <div class="row">
                    <nav class="tpchr-header-control-nav col-sm-12">
                        <?php wp_list_pages( '&title_li=' ); ?>
                    </nav>
                </div>
            </div>
        </header>
        <div class="container-fluid">
