<?php get_header();?>

<!-- Breadcumb -->	
<?php get_template_part( 'template-parts/partials/content', 'breadcumb' ); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-not-found">
                <h1>Sorry! Nothing Found.</h1>
                <a href="<?php echo site_url();?>" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>