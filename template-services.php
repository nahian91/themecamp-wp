<?php

/*
Template Name: Service Page
*/

get_header();?>

    <main>

        <!-- Breadcumb -->	
        <?php get_template_part( 'template-parts/partials/content', 'breadcumb' ); ?>

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
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <img src="assets/img/recent/rcent_1.png" alt="">
                            </div>
                            <div class="services-caption">
                                <h4>Strategic Planning</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <img src="assets/img/recent/rcent_2.png" alt="">
                            </div>
                            <div class="services-caption">
                                <h4>Trades & stocks</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <img src="assets/img/recent/rcent_3.png" alt="">
                            </div>
                            <div class="services-caption">
                                <h4>Audit & Assurance</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <img src="assets/img/recent/rcent_2.png" alt="">
                            </div>
                            <div class="services-caption">
                                <h4>Audit & Assurance</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <img src="assets/img/recent/rcent_1.png" alt="">
                            </div>
                            <div class="services-caption">
                                <h4>Audit & Assurance</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-services text-center">
                            <div class="services-icon">
                                <img src="assets/img/recent/rcent_3.png" alt="">
                            </div>
                            <div class="services-caption">
                                <h4>Audit & Assurance</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services Area End-->
        

        <!-- Blog -->	
        <?php get_template_part( 'template-parts/partials/content', 'blog' ); ?>

    </main>
    <?php get_footer();?>