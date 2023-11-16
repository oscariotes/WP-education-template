<?php 
get_header();

while(have_posts()){
    the_post(); ?>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?php echo get_theme_file_uri("img/about.jpg");?>" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3"><?php the_title();?></h6>
                    <h1 class="mb-4"><?php the_content();?></h1>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
<?php }

get_footer();
?>

