<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/complaints-suggestions.css">

<section class="page-hero">
  <div class="page-hero-overlay"></div>

  <div class="page-hero-content">
    <h1>Complaints & Suggestions</h1>

    <div class="breadcrumb">
      <span class="home-icon">
        <i class="fa-solid fa-house"></i>
      </span>
      <span class="slash">/</span>
      <a href="#">Contact</a>
      
      <span class="slash">/</span>
      <span class="current">complaints & suggestions</span>
    </div>
  </div>
</section>




<section class="contact-section">
  <div class="contact-container">
    <h2>Get in touch with us</h2>
    <p>
      At Almana Hospitals we value our clients’ opinions and feedback.
      We are constantly looking for ways to improve our services and support your needs.
    </p>

    <form id="contactForm">
      <div class="form-group">
        <input type="text" id="name" placeholder="Full Name" required>
      </div>

      <div class="form-group">
        <input type="email" id="email" placeholder="Email Address" required>
      </div>

      <div class="form-group">
        <input type="number" id="phone" placeholder="Phone Number" required>
      </div>

      <div class="form-group">
        <select id="type" required>
          <option value="">Select Type</option>
          <option value="complaint">Complaint</option>
          <option value="suggestion">Suggestion</option>
        </select>
      </div>

      <div class="form-group">
        <textarea id="message" placeholder="Write your message..." required></textarea>
      </div>

      <button type="submit">Submit</button>
      <p class="form-message" id="formMessage"></p>
    </form>
  </div>
</section>








<script>
document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const type = document.getElementById("type").value;
  const message = document.getElementById("message").value.trim();
  const formMessage = document.getElementById("formMessage");

  if (!name || !email || !type || !message) {
    formMessage.style.color = "red";
    formMessage.textContent = "Please fill in all fields.";
    return;
  }

  formMessage.style.color = "green";
  formMessage.textContent = "Thank you! Your message has been submitted.";

  // Reset form
  this.reset();
});
</script>
























<?php get_footer(); ?>