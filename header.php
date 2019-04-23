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

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <?php wp_list_pages( '&title_li=' ); ?>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="blog-header">
                <h1 class="blog-title">
                    <a href="<?php echo get_bloginfo( 'wpurl' );?>">
                        <?php echo get_bloginfo( 'name' ); ?>
                    </a>
                </h1>
                <p class="lead blog-description">
                    <?php echo get_bloginfo( 'description' ); ?>
                </p>
            </div>
