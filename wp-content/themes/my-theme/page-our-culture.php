<?php get_header(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/our-culture.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



<section class="page-hero">
  <div class="page-hero-overlay"></div>

  <div class="page-hero-content">
    <h1>Our Culture</h1>

    <div class="breadcrumb">
      <span class="home-icon">
        <i class="fa-solid fa-house"></i>
      </span>
      <span class="slash">/</span>
      <a href="#">About Us</a>
      <span class="slash">/</span>
      <span class="current">Our Culture</span>
    </div>
  </div>
</section>

<section class="vision-mission">
  <div class="vm-card">

    <div class="vm-left">
      <h5>VISION</h5>
      <p>
        “Enhance the lives of our customers and communities by delivering
        world-class integrated healthcare systems”
      </p>
    </div>

    <div class="vm-right">
      <h5>MISSION</h5>
      <p class="mission-text">
        We are passionate about the people and communities we serve and work
        tirelessly every day to:
      </p>

      <ul>
        <li>Provide comprehensive care to prevent and treat illnesses</li>
        <li>Drive innovations and education to lead & grow the healthcare community</li>
        <li>
          Balance advanced procedures and modern technology with humanity and
          the traditions of caring and compassion
        </li>
      </ul>
    </div>

  </div>
</section>




<section class="values-section">
  <div class="values-container">
    <h2 class="values-title">Our Values</h2>

    <div class="value-item">
      <div class="icon"><i class="fa-solid fa-shield"></i></div>
      <div class="text">
        <h4>Integrity</h4>
        <p>
          We keep our work and deliver honest, ethical, and transparent actions and services
        </p>
      </div>
    </div>

    <div class="value-item">
      <div class="icon"><i class="fa-solid fa-award"></i></div>
      <div class="text">
        <h4>Value of Trust</h4>
        <p>
          We establish and grow the worthiness of trust and demonstrate ability, reliability,
          and strength to build equity and the value of our brand
        </p>
      </div>
    </div>

    <div class="value-item">
      <div class="icon"><i class="fa-solid fa-handshake"></i></div>
      <div class="text">
        <h4>Care, Compassion & Collaboration</h4>
        <p>
          We are stronger together in our determination to deliver excellence in care, hope,
          and support to our patients and customers
        </p>
      </div>
    </div>

    <div class="value-item">
      <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
      <div class="text">
        <h4>Respect</h4>
        <p>
          We treat our diverse community with dignity, confidentiality, and honesty they deserve
        </p>
      </div>
    </div>

    <div class="value-item">
      <div class="icon"><i class="fa-solid fa-star"></i></div>
      <div class="text">
        <h4>Patient Focused Excellence</h4>
        <p>
          Our patients and customers are the ultimate judge of our brand. We ensure innovation
          and adaptation for world-class experiences
        </p>
      </div>
    </div>

  </div>
</section>








<script>
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".vm-right li");

  items.forEach((item, index) => {
    item.style.opacity = "0";
    item.style.transform = "translateY(10px)";
    item.style.transition = "0.4s ease";

    setTimeout(() => {
      item.style.opacity = "1";
      item.style.transform = "translateY(0)";
    }, index * 200);
  });
});


document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".value-item");

  items.forEach((item, i) => {
    item.style.opacity = 0;
    item.style.transform = "translateY(20px)";
    item.style.transition = "0.5s ease";

    setTimeout(() => {
      item.style.opacity = 1;
      item.style.transform = "translateY(0)";
    }, i * 150);
  });
});
</script>

<?php get_footer    (); ?>