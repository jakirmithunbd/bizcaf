<?php get_header(); 

/*
Template Name: Blog
*/

?>

    <section class="page-banner" style="background: url(<?php the_field('banner_bg'); ?>) no-repeat center center;"> 
        <div class="container">
            <div class="row align-center-v">
                <div class="col-md-12">
                    <h2 class="title">Blog </h2>
                </div>
            </div>
        </div>
    </section>
    <!-- / Banner -->

    <section class="latest-post blog-post">
        <div class="container">
            <div class="row">
                <article class="col-md-8 col-sm-8 col-xs-12 col">
                    
                    <?php 
                        $blog_post = new WP_Query(array(
                            'post_type' =>  'post'
                        ));

                     ?>
                    <?php while($blog_post->have_posts()) : $blog_post->the_post(); ?>

                    <div class="latest-post-item">
                        <div class="latest-post-item-img">
                            <a href="#">
                                <?php the_post_thumbnail(); ?>
                                <div class="post-date">
                                    <ul>
                                        <li><span><?php the_time('d'); ?></span></li>
                                        <li><span><?php the_time('M'); ?></span></li>
                                    </ul>
                                </div>
                            </a>
                        </div> 
                        <div class="post-meta">
                            <a href="#" class="title"><?php the_title(); ?></a>
                            <ul class="admin list-inline">
                                <li><span><i class="fa fa-folder-open-o"></i><?php the_category(); ?></span></li>
                                <li><span><i class="fa fa-user"></i><?php the_author(); ?></span></li>
                            </ul>
                            <p><?php read_more(67); ?></p>
                            <a class="btn" href="<?php the_permalink(); ?>" role="button">Read More<span><i class="fa fa-angle-right"></i></span></a> 
                        </div>
                    </div>

                <?php endwhile; ?>

                </article>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="sidebar">
                        <form action="">
                            <div class="input-group">
                                <input class="form-control" placeholder="Search" name="s" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>

                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
      
                    </div>

                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>