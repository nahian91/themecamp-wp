<?php

/*
Template Name: About Page
*/

get_header();?>

    <main>

        <!-- Breadcumb -->	
        <?php get_template_part( 'template-parts/partials/content', 'breadcumb' ); ?>

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

        <!-- Testimonials -->	
        <?php get_template_part( 'template-parts/partials/content', 'testimonials' ); ?>

        <!-- Blog -->	
        <?php get_template_part( 'template-parts/partials/content', 'blog' ); ?>

    </main>
   <?php get_footer();?>