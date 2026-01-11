<?php get_header ()?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/main.css">
<?php get_header(); ?>

<!-- Swiper CSS (REQUIRED) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/main.css">

<main>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
               
                <img src="<?php echo get_template_directory_uri(); ?>/images/arab1.jpg  " alt="">
                <div class="slide_contant">
                 
                    <p>Your health, Our priority</p><h1>Easier <br>Communicationwith <br>Almana WhatsApp</h1>
                    <ul><li><a href="">Book Now</a></li></ul>
                </div>
            </div>
<!-- 
            <div class="swiper-slide">
                <img src="http://jubha_hospital.test/wp-content/uploads/2026/01/arab3.jpg" alt="">
            </div>

            <div class="swiper-slide">
                <img src="https://i.pinimg.com/736x/aa/bb/cc/aabbccddeeff00112233445566778899.jpg" alt="">
            </div> -->

        </div>

        <!-- dots -->
        <div class="swiper-pagination"></div>
    </div>

</main>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,        // ONLY ONE SLIDE
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 3500,        // 3 seconds
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

<?php get_footer(); ?>

