<?php  get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/agh-dammam.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<section class="page-hero">
  <div class="page-hero-overlay"></div>

  <div class="page-hero-content">
    <h1>AGH Dammam</h1>

    <div class="breadcrumb">
      <span class="home-icon">
        <i class="fa-solid fa-house"></i>
      </span>
      <span class="slash">/</span>
      <a href="#">Hospital & Clinic</a>
      <span class="slash">/</span>
      <span class="current">AGH Dammam</span>
    </div>
  </div>
</section>




<section class="hero-slider">
  <div class="slides">
    <div class="slide active" style="background-image:url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3');"></div>
    <div class="slide" style="background-image:url('https://images.unsplash.com/photo-1576765607924-3f7b8410a787');"></div>
    <div class="slide" style="background-image:url('https://images.unsplash.com/photo-1600959907703-125ba1374a12');"></div>
  </div>

  <div class="hero-content">
    <h1>AGH Dammam</h1>
    <a href="#" class="hero-btn">Book an Appointment</a>
  </div>

  <button class="nav prev">&#10094;</button>
  <button class="nav next">&#10095;</button>
</section>


<section class="hospital-tabs">
  <div class="tabs-header">
    <button class="tab-btn active" data-tab="overview">Overview</button>
    <button class="tab-btn" data-tab="director">Medical Director</button>
    <button class="tab-btn" data-tab="hours">Working Hours</button>
    <button class="tab-btn" data-tab="doctors">Doctors (122)</button>
    <button class="tab-btn" data-tab="contact">Contact & Location</button>
  </div>

  <div class="tabs-content">
    <div class="tab-panel active" id="overview">
      <p>
        Welcome to Jubha General Hospital. Since its establishment in the early 1990s,
        our hospital has grown into a trusted healthcare provider dedicated to quality
        medical services and patient-centered care.
      </p>
      <p>
        Accredited by international healthcare standards, we are recognized for
        delivering safe, reliable, and advanced medical treatments across a wide
        range of specialties.
      </p>
      <p>
        Our hospital offers comprehensive inpatient and outpatient services, including
        diagnostic imaging, laboratory services, specialized clinics, and advanced
        treatment facilities designed to support patient recovery and comfort.
      </p>
      <p>
        Your health and well-being are our highest priorities. We combine modern
        medical technology with compassionate care to ensure the best outcomes
        for our patients.
      </p>
    </div>

    <div class="tab-panel" id="director">
      <p>
        Our Medical Director leads the hospital with a strong commitment to clinical
        excellence, ethical practice, and continuous improvement in healthcare delivery.
      </p>
    </div>

    <div class="tab-panel" id="hours">
      <p><strong>Emergency:</strong> 24/7</p>
      <p><strong>Outpatient Clinics:</strong> 8:00 AM – 10:00 PM</p>
      <p><strong>Administration:</strong> 8:00 AM – 5:00 PM</p>
    </div>

    <div class="tab-panel" id="doctors">
      <p>
        Our team includes over 120 highly qualified doctors across multiple specialties,
        working together to provide comprehensive and personalized care.
      </p>
    </div>

    <div class="tab-panel" id="contact">
      <p><strong>Phone:</strong> +966 000 000 000</p>
      <p><strong>Email:</strong> info@jubhahospital.com</p>
      <p><strong>Location:</strong> Jubha City, Saudi Arabia</p>
    </div>
  </div>
</section>







<script>
const slides = document.querySelectorAll(".slide");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

let index = 0;
autodisplay();

function showSlide(i) {
  slides.forEach(slide => slide.classList.remove("active"));
  slides[i].classList.add("active");
}

function autodisplay() {
  index = (index + 1) % slides.length;
  showSlide(index);
}

setInterval(autodisplay, 5000);

nextBtn.addEventListener("click", () => {
  index = (index + 1) % slides.length;
  showSlide(index);
});

prevBtn.addEventListener("click", () => {
  index = (index - 1 + slides.length) % slides.length;
  showSlide(index);
});






document.querySelectorAll(".tab-btn").forEach(button => {
  button.addEventListener("click", () => {
    // Remove active from buttons
    document.querySelectorAll(".tab-btn").forEach(btn => btn.classList.remove("active"));
    button.classList.add("active");

    // Hide panels
    document.querySelectorAll(".tab-panel").forEach(panel => panel.classList.remove("active"));

    // Show selected panel
    const tabId = button.getAttribute("data-tab");
    document.getElementById(tabId).classList.add("active");
  });
});



</script>


<?php  get_footer(); ?>