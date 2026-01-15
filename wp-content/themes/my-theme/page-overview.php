<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/page-overview.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<section class="page-hero">
  <div class="page-hero-overlay"></div>

  <div class="page-hero-content">
    <h1>Overview</h1>

    <div class="breadcrumb">
      <span class="home-icon">
        <i class="fa-solid fa-house"></i>
      </span>
      <a href="#">About Us</a>
      <span class="slash">/</span>
      <span class="current">Overview</span>
    </div>
  </div>
</section>

<section class="hospital-section">
  <div class="hospital-container">

    <div class="hospital-text">
      <h2>The Hospital</h2>
      <h4>Seven decades of care and quality</h4>

      <p>
        Since our inception in 1949, we have a legacy of excellence. We are a family hospital fully dedicated to caring for the needs of the patients, communities, and Kingdom we serve to keep healthy. Almana believes in offering compassionate care, inspired by family values which has kept patients happier and healthier for over 75 years — this is a deeply ingrained part of our DNA.
      </p>

      <p>
        What’s more, our rich legacy of delivering person-centric, specialized, integrated, and comprehensive care, makes Almana a trusted institution and drives our journey to meet the growing needs of today and generations to come.
      </p>
    </div>

    <div class="hospital-media">
      <img src="https://nbhc.ca/sites/default/files/assets/images/Article%20image.jpg" alt="">

      
    
      <div class="play-btn">▶</div>

      <div class="year-badge">
        <span>SERVING THE COMMUNITY SINCE</span>
        <strong>1949</strong>
      </div>
    </div>

    

  </div>

  <a href="#" class="culture-btn" id="cultureBtn">
  <span class="text">Our Culture</span>
  <span class="arrow">→</span>
  <span class="glow"></span>
</a>

</section>

<section class="dept-section">
  <div class="dept-overlay"></div>

  <div class="dept-content">
    <div class="dept-top">
      <div class="dept-text">
        <h2>Transforming healthcare in the Eastern Province.</h2>
        <p>We deliver a wide range of high-quality services, built on an excellence legacy of exceptional health care.</p>
      </div>
      <a href="#" class="dept-link">ALL DEPARTMENTS →</a>
    </div>

    <div class="dept-slider-wrapper">
      <button class="dept-nav left" id="prevBtn">❮</button>

      <div class="dept-slider" id="deptSlider">
        <div class="dept-card"><span><i class="fa-regular fa-hospital"></i></span>Anesthesiology</div>
        <div class="dept-card"><span><i class="fa-solid fa-phone"></i></span>Cardiac Surgery</div>
        <div class="dept-card"><span><i class="fa-regular fa-circle-user"></i></span>Cath Lab</div>
        <div class="dept-card"><span><i class="fa-solid fa-bus"></i></span>Emergency</div>
        <div class="dept-card"><span><i class="fa-solid fa-database"></i></span>Endoscopy</div>
        <div class="dept-card"><span><i class="fa-brands fa-wordpress"></i></span>Orthopaedics</div>
      </div>

      <button class="dept-nav right" id="nextBtn">❯</button>
    </div>
  </div>
</section>



<section class="stats-section">
  <div class="stats-inner">

    <div class="stats-text">
      <p>
        Establishing itself as the center for healthcare excellence in the Kingdom,
        Almana presently employs more than 6,500+ highly qualified professionals including
        800+ specialized doctors and has extended its services to operating and managing
        healthcare contracts in other regions of Saudi Arabia.
      </p>
    </div>

    <div class="stats-cards">
      <div class="stat-card">
        <div class="icon"><i class="fa-solid fa-user-doctor"></i></div>
        <h2>6500</h2>
        <span>Qualified Professionals</span>
      </div>

      <div class="stat-card">
        <div class="icon"><i class="fa-solid fa-stethoscope"></i></div>
        <h2>800</h2>
        <span>Specialized Doctors</span>
      </div>
    </div>

  </div>
</section>

<section class="vision-section">
  <div class="vision-inner">
    <div class="vision-image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/mrdubai.png" alt="Founder">
    </div>

    <div class="vision-content">
      <h2>The Visionary Behind is Mr. Dubai Meng</h2>
      <p>
        Driven by the concern to provide healthcare services for the local community,
        Sheikh Mohammed Abdulla Almana opened the doors of the first healthcare center in 1949.
      </p>
      <p>
        The Group began with modest clinics and expanded into ultra-modern hospitals across the Eastern Province.
        The beginning was a humble effort. The Group began with modest sized clinics for dental and ophthalmic care. Over the decades these clinics expanded into five large independent ultra-modern hospitals with 3 additional specialized medical centers with out-patient services and medical dispensaries in the four major cities of the Eastern Province, namely, Al-Asha Dammam, Al-Khobar and Jubail.
      </p>

      <a href="#" class="vision-btn">Our Legacy →</a>
    </div>
  </div>
</section>



<script>




document.addEventListener("DOMContentLoaded", () => {

  /* ===== HELPER ===== */
  const reveal = (selector, className = "show", threshold = 0.2) => {
    const els = document.querySelectorAll(selector);
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add(className);
      });
    }, { threshold });

    els.forEach(el => observer.observe(el));
  };

  /* ===== HERO ===== */
  reveal(".page-hero-content", "fade-up");

  /* ===== HOSPITAL SECTION ===== */
  reveal(".hospital-text", "slide-left");
  reveal(".hospital-media", "slide-right");
  reveal(".culture-btn", "fade-up");

  /* ===== DEPARTMENT SECTION ===== */
  reveal(".dept-top", "fade-up");
  reveal(".dept-slider-wrapper", "fade-up");

  /* ===== STAGGER DEPT CARDS ===== */
  const cards = document.querySelectorAll(".dept-card");
  const cardObserver = new IntersectionObserver(entries => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add("card-show"), i * 120);
      }
    });
  }, { threshold: 0.3 });

  cards.forEach(card => cardObserver.observe(card));

});






 const animatedElements = document.querySelectorAll('.vision-image, .vision-content');

  animatedElements.forEach(el => el.classList.add('animate'));

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  }, { threshold: 0.3 });

  animatedElements.forEach(el => observer.observe(el));




const btn = document.getElementById("cultureBtn");

btn.addEventListener("mousemove", e => {
  const rect = btn.getBoundingClientRect();
  const x = e.clientX - rect.left - rect.width / 2;
  const y = e.clientY - rect.top - rect.height / 2;
  btn.style.transform = `translate(${x * 0.15}px, ${y * 0.15}px)`;
});

btn.addEventListener("mouseleave", () => {
  btn.style.transform = "translate(0,0)";
});

document.addEventListener("DOMContentLoaded", function () {
  const slider = document.getElementById("deptSlider");
  const next = document.getElementById("nextBtn");
  const prev = document.getElementById("prevBtn");

  if (!slider || !next || !prev) {
    console.log("Slider elements not found");
    return;
  }

  const scrollAmount = 320;

  next.addEventListener("click", function () {
    slider.scrollBy({ left: scrollAmount, behavior: "smooth" });
  });

  prev.addEventListener("click", function () {
    slider.scrollBy({ left: -scrollAmount, behavior: "smooth" });
  });
});

</script>


<?php get_footer(); ?>