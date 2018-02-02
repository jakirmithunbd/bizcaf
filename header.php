<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Blog | bizcafe</title>
        <link href="https://fonts.googleapis.com/css?family=Hind:400,500,600,700|PT+Sans:400,400i,700|Raleway:200i,300,300i,400,400i,500,500i,600,700" rel="stylesheet">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <?php wp_head(); ?>
    <body>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12 phone-mail">
                        <ul class="list-inline">
                            
                            <?php 
                                $quick_contact = get_field('quick_contact', 'options');
                                foreach ($quick_contact as $quick):
                             ?>
                            <li>
                                <a href="tel:"><span><i class="fa fa-<?php echo $quick['icons']; ?>"></i></span><?php echo $quick['text']; ?></a>
                            </li>

                            <?php endforeach; ?>

                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 social-link">
                        <ul class="list-inline">
                            <?php 
                                $social_link = get_field('social_link', 'options');
                                foreach ($social_link as $social):
                             ?>
                            <li><a href="#"><span><i class="fa fa-<?php echo $social['icons']; ?>"></i></span></a></li>
                            
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <div class="logo">
                        <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri() ?> . /images/logo.png" class="img-responsive" alt="Logo Image"></a>
                    </div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                        <span class="icon-bar"><span class="inner"></span></span>
                        <span class="icon-bar"><span class="inner"></span></span>
                        <span class="icon-bar"><span class="inner"></span></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                        
                        <?php 
                            if (function_exists('wp_nav_menu'))
                                wp_nav_menu(array(
                                    'theme_location'    =>  'header_menu',
                                    'menu_class'        =>  'nav navbar-nav navbar-right'
                                ))
                            
                         ?>

                </div>
            </div><!-- / Container -->  
        </nav>
    </header><!-- / Header -->