<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>


<footer>

    <div class="footer-top"></div>
    <div class="footer-bottom">
        <div class="container">
            <p class="text-center"> Misslady Liquor © 2017</p>
        </div>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" integrity="sha256-s5TTOyp+xlSmsDfr/aZhg0Gz+JejYr5iTJI8JxG1SkM=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<script type="text/javascript">


    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop:true,
            items:1,
            margin: 40,
            stagePadding:0,
            smartSpeed:450,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true
        });




    });
</script>



</body>

</html>
