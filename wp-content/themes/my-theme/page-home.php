<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/main.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

<main>

<!-- Swiper Slider -->
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab3.jpg" alt="">
            <div class="slide_contant-1">
                <p>ALMANA GROUP OF HOSPITAL</p>
                <h1>Quality Healthcare <br>Closer to you</h1>
                <ul><li><a href="">EXPLORE OUR LOCATION →</a></li></ul>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="swiper-slide slide-three">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab4.jpg" alt="">
            <div class="slide_contant-1">
                <p>Your health, Our priority</p>
                <h1>OPD clinics Open <br>Until 10PM</h1>
                <ul><li><a href="">BOOK NOW →</a></li></ul>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<!-- Find a Doctor Section -->
<!-- Find a Doctor Section -->
<section class="find-doctor">
    <div class="container">
        <div class="tabs">
            <div class="tab active">FIND A DOCTOR</div>
            <div class="tab">LOCATION & DIRECTION</div>
        </div>
        <div class="form">
            <select name="location">
                <option>Select Location</option>
                <option>AGH Dammam</option>
                <option>AGH Khobar</option>
                <option>AMC Rakkah</option>
                <option>Oncology Center</option>
                <option>AGH Aziziah Dammam</option>
                <option>AGH Jubail</option>
                <option>AMC Jubail</option>
                <option>AGH Hofuf</option>
            </select>

            <!-- Full Specialization list -->
            <select name="specialization">
              <option value="">Select Specialization</option>
              <option>Allergy & Immunology Medicine</option>
              <option>Audiology</option>
              <option>Bariatric Surgery</option>
              <option>Breast Surgery</option>
              <option>Cardiology</option>
              <option>Dentist</option>
              <option>Dermatologist</option>
              <option>Dermatology and Venerology</option>
              <option>Dietician</option>
              <option>Ears, Nose and Throat (ENT)</option>
              <option>Ears, Nose and Throat (ENT) Surgery</option>
              <option>Endocrinology</option>
              <option>Gastroenterology</option>
              <option>General Surgery</option>
              <option>Home Visit</option>
              <option>Hygienist</option>
              <option>Internal Medicine</option>
              <option>Interventional Cardiology</option>
              <option>Interventional Radiology</option>
              <option>IVF - in vitro fertilization</option>
              <option>Maxillofacial</option>

            </select>

            <button class="btn-find-doctor">
              <ul><li><a href="">FIND DOCTOR <i class="fa-solid fa-arrow-right"></i></a></li></ul>
            </button>
        </div>
    </div>
</section>
    <!-- About Us Section -->
<section class="about-section">
    <div class="about">

        <!-- Left Content -->
        <div class="about-left">
            <span class="about-tag">ABOUT US</span>
            <h2>Seven decades of care and quality</h2>
            <p>
                Since our inception in 1949, we have a legacy of excellence. We are a family hospital fully dedicated to caring
                for the needs of the patients, communities, and Kingdom we serve to keep healthy. Almana believes in offering
                compassionate care, inspired by family values which ...
            </p>

            <a href="" class="about-btn">READ MORE →</a>
        </div>

        <!-- Right Image -->
        <div class="about-right">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab4.jpg" alt="About Almana">

            <div class="about-overlay">
                <span class="play-btn">▶</span>

                <div class="year-box">
                    <h1>1949</h1>
                    <p>SERVING THE<br>COMMUNITY SINCE</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Statistics Section -->
<section class="agh-stats">
    <div class="agh-overlay"></div>

    <div class="agh-container">

        <!-- Left Boxes -->
        <div class="agh-boxes">
            <div class="agh-box">
                <h1><i class="fa-solid fa-hospital"></i>6500</h1>
                <p>QUALIFIED<br>WORKFORCE</p>
            </div>

            <div class="agh-box">
                <h1><i class="fa-solid fa-user-doctor"></i>800</h1>
                <p>SPECIALIZED<br>DOCTORS</p>
            </div>

            <div class="agh-box">
                <h1><i class="fa-solid fa-briefcase-medical"></i>8</h1>
                <p>MEDICAL<br>FACILITIES</p>
            </div>

            <div class="agh-box">
                <h1><i class="fa-solid fa-bed"></i>1300</h1>
                <p>TOTAL<br>BEDS</p>
            </div>
        </div>

        <!-- Right Content -->
        <div class="agh-content">
            <span class="agh-tag">STATISTICS</span>
            <h2>AGH At a Glance</h2>
            <p>
                We provide specialized units in various medical specialties.
                A continuation of a series of successes in the Group, we provide specialized units in
                various medical specialties, where we meet the caregivers and the modern medical equipment
                to serve the community and people.
            </p>

            <a href="" class="agh-btn">OUR BRANCHES <i class="fa-solid fa-arrow-right"></i></a>
        </div>

    </div>
</section>
<div class="about-our-doctor">
           <h1>About Our Doctors</h1>
    <div class="container-doctor">
       <img src="<?php echo get_template_directory_uri(); ?>/images/arab4.jpg" alt="">
       <div class="informartion-about-doctor">
            <h2>Dr. John Doe</h2>
            <p>Specialization: Cardiology</p>
            <p>Experience: 15 years</p>
            <p>Education: MD, Harvard Medical School</p>
       </div>
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
