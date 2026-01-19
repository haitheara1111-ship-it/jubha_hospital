<?php get_header(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/page-get-in-touch.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



<section class="page-hero">
  <div class="page-hero-overlay"></div>

  <div class="page-hero-content">
    <h1>Find in Touch</h1>

    <div class="breadcrumb">
      <span class="home-icon">
        <i class="fa-solid fa-house"></i>
      </span>
      <a href="#">Contact</a>
      <span class="slash">/</span>
      <span class="current">Find in Touch</span>
    </div>
  </div>
</section>
<section class="contact-section">
    <div class="text-container">
        <p>We serve our clients from multiple locations in Saudi Arabia. In case of inquiries, complaints or suggestions please contact us through one of the beneath listed channels  from multiple locations in Saudi Arabia.</p>
    </div>
    <div class="img-section">
        <img src="<?php echo get_template_directory_uri(); ?>/images/image.png" alt="Contact Image">
    </div>
</section>


<div class="form-container">
    <h2>Contact Almana Hospital</h2>

    <h3>If you want to find out more about the Almana Hospital, or to know more about our services, doctors, departments, you can fill the following form or send your inquiries to 
        <p>info@almanahospital.com.sa.</p></h3>
    <form id="contactForm">
        <div class="form-row">
            <input type="text" id="firstName" placeholder="First Name *" required>
            <input type="email" id="email" placeholder="Email Address *" required>
        </div>
        
        <div class="form-row">
            <input type="tel" id="phone" placeholder="Phone Number *" required>
            <select id="inquiryType">
                <option value="" disabled selected>Type of Inquiry</option>
                <option value="appointment">Request Appointment</option>
                <option value="medical">Medical Inquiry</option>
                <option value="general">General Feedback</option>
            </select>
        </div>

        <textarea id="message" rows="6" placeholder="Your Message *" required></textarea>

        <button type="submit" id="submitBtn">SUBMIT →</button>
        <p class="captcha-text">*THIS FORM IS PROTECTED BY INVISIBLE CAPTCHA</p>
    </form>
</div>




<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Collect data
    const formData = {
        name: document.getElementById('firstName').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        type: document.getElementById('inquiryType').value,
        message: document.getElementById('message').value
    };

    // Example: Log to console (In a real app, you'd use fetch() to send this to a server)
    console.log("Form Submitted Successfully:", formData);
    
    alert("Thank you! Your inquiry has been sent.");
    this.reset(); // Clear form
}); 
</script>
<?php get_footer(); ?>