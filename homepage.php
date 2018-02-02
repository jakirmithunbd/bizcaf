<?php get_header(); 
/*
Template Name: Home
*/

?>

    <section class="banner">
        <?php $banner = get_field('banner_item'); if ($banner): foreach ($banner as $banner_item):?>
        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="banner-content" style="background: url(<?php echo $banner_item['image'] ?>) no-repeat bottom right;">
                        <div class="col-md-6 col-sm-6 col-xs-12"  >
                            <div class="jumbotron">
                                <h1><?php echo $banner_item['title'] ?></h1>
                                <p><?php echo $banner_item['content'] ?></p>
                               <a class="btn btn-primary" href="#" role="button"><?php _e('Get a Free Quate', 'bizcaf'); ?><span><i class="fa fa-angle-double-right"></i></span></a>                        
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;endif; ?>

    </section>
    <!-- / Banner -->

    <section class="features">
        <div class="container">

        <?php $features = get_field('feature_title'); if('$features'):?>
            <div class="section-title">

                <?php if ($features['sm_title']):?>
                    <h6 class="sm-title"><?php echo $features['sm_title']; ?></h6>
                <?php endif; ?>
                
                <?php if ($features['title']):?>
                    <h2 class="title"><?php echo $features['title']; ?></h2>
                <?php endif; ?>

                <?php if ($features['text']):?>
                    <span class="separator"></span>
                    <p><?php echo $features['text']; ?></p>
                <?php endif; ?>

            </div>
        <?php endif; ?>

            <div class="row">
               <?php 
                     $featured_item = get_field('feature_item'); if ($featured_item): foreach ($featured_item as $featured):;
                ?>
                <div class="col-md-4 col-sm-4 col-xs-6 col">
                    <div class="feature-item text-center">
                        <span><i class="fa fa-<?php echo $featured['icons']; ?>"></i></span>
                        <h4 class="title"><?php echo $featured['title']; ?></h4>
                        <p><?php echo $featured['content']; ?></p>
                    </div>
                </div>
            <?php endforeach; endif; ?>

            </div>
        </div>
    </section><!-- / Featured Area -->

    <section class="services">
        <div class="container">
            <?php $services_title = get_field('services_title'); if ($services_title): ?>
                <div class="section-title">
                    <h6 class="sm-title"><?php echo $services_title['sm_title']; ?></h6>
                    <h2 class="title"><?php echo $services_title['title']; ?></h2>
                    <span class="separator"></span>
                    <p><?php echo $services_title['content']; ?></p>
                </div>
            <?php endif; ?>

            <div class="row">
            <?php $servie_item = get_field('services_item'); if ($servie_item) : foreach ($servie_item as $servie):?>
                <div class="col-md-4 col-sm-4 col-xs-6 col">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?php echo $servie['image'] ?>" class="img-responsive" alt="Service Image">
                        </div>
                        <h4 class="title"><?php echo $servie['title'] ?></h4>
                        <p><?php echo $servie['content'] ?></p>
                        <a href="#" class="btn"><?php _e('Read More', 'bizcaf'); ?><span><i class="fa fa-angle-right"></i></span></a>
                    </div>
                </div>

            <?php endforeach; endif; ?>

            </div>
        </div>
    </section>   <!-- / Service section -->

    <section class="work" >
        <div class="container-fluid">
            <div class="container">
                <div class="row align-center-v">
                     <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="presentation">
                            <a href="https://www.youtube.com/embed/lNDaCmnmOls?feature=oembed" class="play-video cboxElement">
                                <span><i class="fa fa-play"></i></span>
                                <h6>View Our Presentation Video</h6>
                                <p>We love Our Client</p>
                            </a>                      
                        </div>
                    </div>
                
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <?php $skill_title = get_field('skill_title'); if ($skill_title):?>
                            <div class="section-title">
                                <h6 class="sm-title"><?php echo $skill_title['sm_title']; ?></h6>
                                <h2 class="title"><?php echo $skill_title['title']; ?></h2>
                                <span class="separator"></span>
                                <p><?php echo $skill_title['content']; ?></p>
                            </div>

                        <?php endif; ?>
                        
                        <?php $progress = get_field('our_skill'); if ($progress): foreach ($progress as $progress_bar):?>
                        <div class="progress">
                            <h3 class="progress-title"><?php echo $progress_bar['progress_title']; ?></h3>
                            <div class="progress-bar" style="width:<?php echo $progress_bar['value']; ?>">
                                <div class="progress-value"><?php echo $progress_bar['something']; ?></div>
                            </div>
                        </div>
                        <?php endforeach;endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- / skill section  -->

    <section class="work-list container-fluid">
        <div class="row">
            <?php $work_list = get_field('work_list'); if ($work_list) : foreach ($work_list as $work):?>
            <div class="col-md-4 col-sm-6 col-xs-6 col work-list-item">
                <h4><?php echo $work['title'] ?></h4>
                <p><?php echo $work['content'] ?></p>
                <a href="#" class="btn btn-border"><?php _e('Find Out More ', 'bizcaf'); ?><span><i class="fa fa-angle-right"></i></span></a>
            </div>
        <?php endforeach;endif; ?>

        </div>
    </section><!-- / work-list area -->
    
    <section class="testimonials">
        <div class="container">
            <?php $testimonial_title = get_field('testimonial_title'); if($testimonial_title) : ?>
            <div class="section-title">
                <h6 class="sm-title"><?php echo $testimonial_title['sm_title'] ?></h6>
                <h2 class="title"><?php echo $testimonial_title['title'] ?></h2>
                <span class="separator"></span>
                <p><?php echo $testimonial_title['content'] ?></p>
            </div>

        <?php endif; ?>

            <div class="testimonial">
                
                <?php $testimonial_item = get_field('testimonia_item'); if ($testimonial_item): foreach ($testimonial_item as $item):?>
                <div class="item">
                    <div class="description">
                        <p class="quote"><?php echo $item['description'] ?></p>
                    </div>
                    <div class="client-profile">
                        <div class="client-img">
                            <img src="<?php echo $item['client_profile']['image']; ?>" class="img-responsive" alt="Client Image">
                        </div>
                        <div class="client-meta">
                            <p><?php echo $item['client_profile']['title']; ?></p>
                            <span><?php echo $item['client_profile']['sub_title']; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach;endif; ?>

            </div>
        </div>
    </section><!-- / Testimonials area -->
    
    <section class="portfolio container-fluid">
        <div class="row">
            <?php $porfolio = get_field('portfolio_item'); if ($porfolio): foreach ($porfolio as $porfolio_item):?>
            <div class="portfolio-item col-md-3 col-sm-4 col-xs-6 col">
                <div class="portfolio-img">
                    <img src="<?php echo $porfolio_item['image'] ?>" class="img-responsive" alt="portfolio Image">
                </div>
                <div class="portfolio-content">
                    <div class="description">
                        <p><?php echo $porfolio_item['title'] ?></p>
                        <a href="#"><?php echo $porfolio_item['sub_title'] ?></a>
                    </div>
                </div>
                <a href="#" class="read">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        <?php endforeach;endif; ?>
        </div>
    </section>

    <section class="counter-up">
        <div class="container">
            <div class="row">
                <?php $counter = get_field('counter'); if ($counter): foreach ($counter as $counter_item):?>
                    <div class="col-sm-3 col-xs-6 col">
                         <span class="counter"><?php echo $counter_item['value'] ?></span>
                        <h5><?php echo $counter_item['title'] ?></h5>
                    </div>
                <?php endforeach;endif; ?>

            </div>
        </div>
    </section><!-- counter up -->
    
    <secction class="team-members">
        <div class="container">
            
                <?php $team_title = get_field('team_member_title'); if ($team_title):?>
                    <div class="section-title">
                        <h6 class="sm-title"><?php echo $team_title['sm_title']; ?></h6>
                        <h2 class="title"><?php echo $team_title['title']; ?></h2>
                        <span class="separator"></span>
                        <p><?php echo $team_title['content']; ?></p>
                    </div>
                <?php endif; ?>

            <div class="row">
                <?php $team_member = get_field('team_member'); if ($team_member): foreach ($team_member as $member):?>
                <div class="col-md-4 col-sm-4 col-xs-6 col team-member">
                    <div class="member-img">

                    <?php if ($member['image']):?>
                        <img src="<?php echo $member['image']; ?>" class="img-responsive" alt="Team Image">
                    <?php endif; ?>
                        
                        <?php $info = get_field('member_info'); if ($info):?>
                        <div class="member-info">
                            <h5><?php echo $info['title']; ?></h5>
                            <span><?php echo $info['status']; ?></span>
                            <p><?php echo $info['content']; ?></p>
                            <ul class="list-inline social-link">

                            <?php foreach($member['contact_link'] as $contact_link):?>

                            <li><a href="<?php echo $contact_link['link']; ?>"><span><i class="fa fa-<?php echo $contact_link['icon']; ?>"></i></span></a></li>

                            <?php endforeach;?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            <?php endforeach;endif; ?>

            </div>
        </div>
    </secction>

    <section class="latest-post">
        <div class="container">
            <div class="section-title">
                <h6 class="sm-title">News</h6>
                <h2 class="title">Latest Blog Post</h2>
                <span class="separator"></span>
                <p>Wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
            </div>
            <div class="row">
                <article class="col-md-8 col-sm-8 col-xs-12 col">
                    <div class="latest-post-item">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="latest-post-item-img">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>./images/post-1.jpg" alt="">
                                        <div class="post-date">
                                            <ul>
                                                <li><span>30</span></li>
                                                <li><span>nov</span></li>
                                            </ul>
                                        </div>
                                    </a>
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="post-meta">
                                    <a href="#" class="title">Interview with CEO of big data BIZSTART</a>
                                    <ul class="admin list-inline">
                                        <li><span><i class="fa fa-folder-open-o"></i></span>Anyhink,Business</li>
                                        <li><span><i class="fa fa-user"></i></span>Admin</li>
                                    </ul>
                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isanthing embarrassing  in the middle of text.</p>
                                    <a class="btn" href="#" role="button">Read More<span><i class="fa fa-angle-right"></i></span></a> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="latest-post-item bottom-blog">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="post-meta">
                                    <a href="#" class="title">Interview with CEO of big data BIZSTART</a>
                                    <ul class="admin list-inline">
                                        <li><span><i class="fa fa-folder-open-o"></i></span>Anyhink,Business</li>
                                        <li><span><i class="fa fa-user"></i></span>Admin</li>
                                    </ul>
                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isanthing embarrassing  in the middle of text.</p>
                                    <a class="btn" href="#" role="button">Read More<span><i class="fa fa-angle-right"></i></span></a> 
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="latest-post-item-img">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>./images/post-1.jpg" alt="">
                                        <div class="post-date">
                                            <ul>
                                                <li><span>30</span></li>
                                                <li><span>nov</span></li>
                                            </ul>
                                        </div>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </article>

                <article class="col-md-4 col-sm-4 col-xs-12 col">
                    <div class="latest-post-item aside-blog">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-post-item-img">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri() ?>./images/post-1.jpg" alt="">
                                        <div class="post-date">
                                            <ul>
                                                <li><span>30</span></li>
                                                <li><span>nov</span></li>
                                            </ul>
                                        </div>
                                    </a>
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="post-meta">
                                    <a href="#" class="title">Interview with CEO of big data BIZSTART</a>
                                    <ul class="admin list-inline">
                                        <li><span><i class="fa fa-folder-open-o"></i></span>Anyhink,Business</li>
                                        <li><span><i class="fa fa-user"></i></span>Admin</li>
                                    </ul>
                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isanthing embarrassing  in the middle of text.</p>
                                    <a class="btn" href="#" role="button">Read More<span><i class="fa fa-angle-right"></i></span></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <section class="partner">
        <div class="container">
            <div class="client-logo">
                <?php $client_logo = get_field('client_logoes'); if ($client_logo) : foreach ($client_logo as $client):?>
                <div class="logo-item">
                    <img src="<?php echo $client['image']; ?>" class="img-responsive" alt="<?php echo $client['alt']; ?>">
                </div>
            <?php endforeach;endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>