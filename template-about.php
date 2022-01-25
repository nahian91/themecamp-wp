<?php

/*
Template Name: About Page
*/

get_header();?>

    <main>

        <!-- Breadcumb -->	
        <?php get_template_part( 'template-parts/partials/content', 'breadcumb' ); ?>

        <!-- About -->	
        <?php get_template_part( 'template-parts/partials/content', 'about' ); ?>

        <!-- Testimonials -->	
        <?php get_template_part( 'template-parts/partials/content', 'testimonials' ); ?>

        <!-- Blog -->	
        <?php get_template_part( 'template-parts/partials/content', 'blog' ); ?>

    </main>
   <?php get_footer();?>