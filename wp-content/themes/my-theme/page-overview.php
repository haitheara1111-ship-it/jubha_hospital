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



<script>
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
</script>


<?php get_footer(); ?>