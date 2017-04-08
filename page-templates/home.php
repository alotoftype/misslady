<?php
/**
 * Template Name: HomePage
 *
 *
 *
 *
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<section class="header">
    <?
    $images =get_field('carousel');

    if($images):
    ?>
    <div class="owl-carousel">


    <? foreach($images as $image): ?>
        <div class="owl-s" style="background: url('<?php echo $image['url']; ?>') no-repeat center center;"><!--<div class="carousel-text"><? //echo $image['title'] ?></div> --></div>
    <?php endforeach; ?>
    </div>

    <?php endif; ?>


</section>

<section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="<? echo get_stylesheet_directory_uri() ?>/img/misslady.jpg" class="" alt="" >
            </div>
            <div class="col-sm-8">
                <article>
                    <h2>About <span class="logo"> MissLady Liquor</span></h2>
                    We strive to serve the best products to all of our customers. Since 2005, our company has been determined to give our customers nothing but quality products they can utilize. We want to be the best and stay the best for years to come. Our commitment to our customer base won't change because YOUNG bright ideas will be the focal part of our business strategy. We will continue to INNOVATE our level of performance to meet the ever changing demands of our consumers. We will be LEADERS in creating a NEW GENRE of product that will appeal to our SAVVY clientele. Being the TOP in our market is what we aspire to be. STYLING is what we are known to do.
                </article>

            </div>
        </div>
    </div>


</section>


<section class="bio" id="bio">
    <div class="container">
        <h2>Bio</h2>
        <div class="row">
                <div class="col-sm-6">
                    <h5>Sha</h5>
                    <p>Shawmell Long is the CEO and President of Smut Entertainment. SMUT Entertainment is an upcoming business that ventures into different areas such as clothing, liquor, and music. Shawmell Long is a graduate of New York State University of Delhi College of Technology in Delhi, New York where he earned his Bachelor's degree in 2009.</p>
                </div>
            <div class="col-xs-12 col-sm-6 ">
               <? //echo get_field('bio_text') ?>
                <h5>DJ</h5>
                <p>Didier Marcelin is the COO and Vice President of SMUT Entertainment. He is responsible for implementing the products and goods to the consumer in an orderly fashion. Mr. Marcelin makes sure that the products have their final touches and communicates directly with the CEO Shawmell Long. Didier Marcelin is also a graduate of New York State University of Delhi College of Technology in Delhi, New York where he earned his Bachelor’s degree in Restaurant Services in 2009.</p>

            </div>
            <div class="col"></div>
        </div>
    </div>
</section>

<section class="testimonials"  id="testimonials">

<?php if( have_rows('message') ): ?>

    <div class="owl-carousel">

        <?php while( have_rows('message') ): the_row();

            // vars
            $message = get_sub_field('testimonial_message');
            $name = get_sub_field('testimonial_name');

            ?>



            <div class="text-center"><?php if( $message ): ?>
                    <p><? echo $message ?></p>
                <?php endif; ?>

                <?php if( $name ): ?>
                    <p class=""><span class="name"><? echo $name ?></span></p>

                <?php endif; ?>

            </div>

        <?php endwhile; ?>
    </div>

<?php endif; ?>


</section>


<section class="news" id="news">
    <div class="container">
        <h2> News/Events</h2>
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center">A variety of hosted events coming soon</p>
            </div>
        </div>
    </div>
</section>
<section class="contact" id="contact">
    <div class="container">
        <h2 class="text-uppercase">Get in Contact with us</h2>
        <div class="row">
            <div class="col-sm-12">

                <?php gravity_form( 1, false, false, false, '', false );
                ?>
            </div>
        </div>
    </div>
</section>










<?php get_footer(); ?>
