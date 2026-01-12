<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/main.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

<main>

<div class="swiper mySwiper">
    <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide slide-one">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab1.jpg" alt="">
            <div class="slide_contant">
                <p>Your health, Our priority</p>
                <h1>Easier <br>Communication with <br>Almana WhatsApp</h1>
                <ul><li><a href="">Book Now →</a></li></ul>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide slide-two">
            <img src="http://jubha_hospital.test/wp-content/uploads/2026/01/arab3.jpg" alt="">
            <div class="slide_contant-1">
                <p>ALMANA GROUP OF HOSPITAL</p>
                <h1>Quality Healthcare <br>Closer to you</h1>
                <ul><li><a href="">EXPLORE OUR LOCATION →</a></li></ul>
            </div>
        </div>
          <div class="swiper-slide slide-three">
            <img src="http://jubha_hospital.test/wp-content/uploads/2026/01/arab3.jpg" alt="">
            <div class="slide_contant-1">
                <p>ALMANA GROUP OF HOSPITAL</p>
                <h1>Quality Healthcare <br>Closer to you</h1>
                <ul><li><a href="">EXPLORE OUR LOCATION →</a></li></ul>
            </div>
        </div>
    </div>

    <div class="swiper-pagination"></div>
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
</script>

<?php get_footer(); ?>
