
<?php
    $about_image = get_field('about_image', 'option');
    $about_title = get_field('about_title', 'option');
    $about_description = get_field('about_description', 'option');
    $about_button_url = get_field('about_button_url', 'option');
    $about_button_text = get_field('about_button_text', 'option');
?>

<!-- We Trusted Start-->
<div class="we-trusted-area trusted-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="trusted-img">
                            <img src="<?php echo $about_image['url'];?>" alt="<?php echo $about_image['title'];?>">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="trusted-caption">
                           <h2><?php echo $about_title;?></h2>
                           <p><?php echo $about_description;?></p>
                            <a href="<?php echo $about_button_url;?>" class="btn trusted-btn"><?php echo $about_button_text;?></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- We Trusted End-->