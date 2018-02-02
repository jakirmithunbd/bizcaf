    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm- col-xs-6 col widgets">
                    <img src="<?php the_field('footer_logo', 'options'); ?>" class="img-responsive">
                    <?php the_field('footer_content','options'); ?>
                    <div class="social-link">
                        <ul class="list-inline">

                        	<?php $social_link = get_field('footer_social_link', 'options'); if ($social_link): foreach ($social_link as $link):?>

	                            <li><a href="<?php $link['link']; ?>"><i class="fa fa-<?php echo $link['icons']; ?>"></i></a></li>

                        	<?php endforeach;endif; ?>

                        </ul>
                    </div>
                </div>

                <?php dynamic_sidebar('footer'); ?>


                <div class="col-md-3 col-sm-6 col-xs-6 col widgets contact-info">
                    <h5 class="title">Contact info</h5>
                    <span><i class="fa fa-map-marker"></i></span>
                    <a href="#">2144 Aajddfhufntrep parkey New York City, Ny 10018 US</a>

                    <span><i class="fa fa-phone"></i></span>
                    <a href="#">Center office: 222 134 5675</a>

                    <span><i class="fa fa-envelope"></i></span>
                    <a href="#">rsfb@chdjasders.com</a>

                    <span><i class="fa fa-fax"></i></span>
                    <a href="#">rsfb@chdjasders.com</a>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6 col widgets photo-stream">
                    <h5 class="title">Photo Stream</h5>
                    <img src="<?php echo get_template_directory_uri() ?>./images/photo.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>./images/photo.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>./images/photo.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>./images/photo.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>./images/photo.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri() ?>./images/photo.jpg" alt="">
                </div>

            </div>
        </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-6 col">
                    <p>Copyright &copy;2016 BIZ<span>CAFE</span> Theme. All Right Reserved</p>
                </div>
                <div class="col-md-6 col-xs-6 col">
                    <div class="footer-menu text-right">
						<?php 
                            if (function_exists('wp_nav_menu'))
                                wp_nav_menu(array(
                                    'theme_location'    =>  'footer_menu',
                                    'menu_class'        =>  'nav navbar-nav navbar-right'
                                ))
                            
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer><!-- / Footer -->
    <?php wp_footer(); ?>
    </body>
</html>