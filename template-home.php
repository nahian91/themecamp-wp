<?php

/*
Template Name: Home Page
*/

get_header(); ?>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">

                <?php
                    $args = array(
                        'post_type' => 'slider',
                        'posts_per_page' => 3
                    );
                    $query = new WP_Query($args);
                    while($query->have_posts()){
                        $query->the_post();

                        $slider_subtitle = get_field('slider_subtitle');
                        $slider_button_url = get_field('slider_button_url');
                        $slider_button_text = get_field('slider_button_text');
                    ?>
                        <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 mx-auto">
                                    <div class="hero__caption">
                                        <?php
                                            if($slider_subtitle) {
                                        ?>
                                            <p><?php echo $slider_subtitle;?></p>
                                        <?php
                                            }
                                        ?>
                                        <h1><?php the_title();?></h1>
                                        <!-- Hero-btn -->
                                        <div class="hero__btn">
                                            <?php
                                                if($slider_button_text) {
                                            ?>
                                                <a href="<?php the_field('slider_button_url') ?>" class="btn hero-btn"><?php the_field('slider_button_text') ?></a>
                                            <?php
                                                }
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                    wp_reset_postdata();
                ?>

                


            </div>
        </div>
        <!-- slider Area End-->

        <!-- About -->	
        <?php get_template_part( 'template-parts/partials/content', 'about' ); ?>

        <!-- services Area Start-->
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2><?php echo esc_html__('Our Services', 'buson');?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php
                        $args = array(
                            'post_type' => 'services',
                            'posts_per_page' => 6
                        );
                        $query = new WP_Query($args);
                        while($query->have_posts()) {
                            $query->the_post();
                    ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-services text-center">
                                <div class="services-icon">
                                    <img src="<?php echo esc_url(the_post_thumbnail_url());?>" alt="<?php the_title();?>">
                                </div>
                                <div class="services-caption">
                                    <h4><?php the_title();?></h4>
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
        <!-- services Area End-->

        <!-- Request Back Start -->
        <div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="request-content">
                            <h3>Request for  Call Back</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,</p>
                            <a href="#" class="btn trusted-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3>Completed Cases</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali
                                quUt enim ad minim veniam.
                                quis nostrud exercitation ullamco laboris 
                                nierci si ut.</p>
                            <a href="gallery.html" class="border-btn border-btn2">See more</a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel"> 
                            <div class="single-cases-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/completed_case_1.png" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                    <h4><a href="case_details.html">Marketing Strategy</a></h4>
                                    <p>Completely impact synergistic mindshare whereas premium services.</p>
                                    <span>Advisory</span>
                               </div>
                            </div>
                            <div class="single-cases-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/completed_case_2.png" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                   <h4><a href="case_details.html">Marketing Strategy</a></h4>
                                    <p>Completely impact synergistic mindshare whereas premium services.</p>
                                    <span>Advisory</span>
                               </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Teams</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-1.jpg" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4>John Doe <span>Web Developer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-2.jpg" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4>John Doe <span>Web Developer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-3.jpg" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4>John Doe <span>Web Developer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/team-2.jpg" alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4>John Doe <span>Web Developer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        

        <!-- Testimonials -->	
        <?php get_template_part( 'template-parts/partials/content', 'testimonials' ); ?>

        <!-- Blog -->	
        <?php get_template_part( 'template-parts/partials/content', 'blog' ); ?>

        

    </main>
<?php get_footer();?>