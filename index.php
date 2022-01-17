<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
        <?php wp_head();?>
   </head>

   <body <?php body_class();?>>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li><i class="fas fa-map-marker-alt"></i>65/A, 17th floor, Kings land, New York</li>
                                        <li><i class="fas fa-envelope"></i>info@consulting.com</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">             
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="cases.html">Cases</a>
                                                <ul class="submenu">
                                                    <li><a href="single-case.html">Case Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

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

        <!-- We Trusted Start-->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="trusted-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/wetrusted.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="trusted-caption">
                           <h2>We are more trusted then 5000 clients</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru  dolor sit amet, consectetur adipn.</p>
                            <a href="#" class="btn trusted-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Services</h2>
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
                                    <img src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>">
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

        <!-- Testimonial Start -->
        <div class="testimonial-area fix">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/testimonial.png" class="ani-btn " alt="">
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and 
                                        follow the well-worn path. You need to create a new and 
                                        original path for yourself. </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/testimonial.png"  class="ani-btn" alt="">
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and 
                                        follow the well-worn path. You need to create a new and 
                                        original path for yourself. </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <div class="recent-area section-paddingt">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Recent News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent/rcent_1.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Business planing</span>
                                <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent/rcent_2.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Audit</span>
                                <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent/rcent_3.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Business planing</span>
                                <h4><a href="single-blog.html">Amazing Places To Visit In Summer</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Area End-->

        

    </main>
   <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod</p>
                               </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-pinterest-square"></i></a>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Company</h4>
                               <ul>
                                   <li><a href="index.html">Home</a></li>
                                   <li><a href="about.html">About Us</a></li>
                                   <li><a href="single-blog.html">Services</a></li>
                                   <li><a href="#">Cases</a></li>
                                   <li><a href="contact.html">  Contact Us</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Services</h4>
                               <ul>
                                   <li><a href="#">Commercial Cleaning</a></li>
                                   <li><a href="#">Office Cleaning</a></li>
                                   <li><a href="#">Building Cleaning</a></li>
                                   <li><a href="#">Floor Cleaning</a></li>
                                   <li><a href="#">Apartment Cleaning</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Get in Touch</h4>
                               <ul>
                                <li><a href="#">152-515-6565</a></li>
                                <li><a href="#"> Demomail@gmail.com</a></li>
                                <li><a href="#">New Orleans, USA</a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
        <?php wp_footer();?>
    </body>
</html>