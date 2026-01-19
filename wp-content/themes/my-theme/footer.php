<?php get_header(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">




<footer class="site-footer" id="siteFooter">

  <div class="footer-top">
    <span class="mode-label">LIGHT</span>

    <label class="switch">
      <input type="checkbox" id="themeToggle">
      <span class="slider"></span>
    </label>

    <span class="mode-label">DARK</span>
  </div>

  <div class="footer-grid">

    <!-- Column 1 -->
    <div class="footer-col">
      <h4>Quick Access</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Find a Doctor</a></li>
        <li><a href="#">Book an Appointment</a></li>
        <li><a href="#">Departments & Clinics</a></li>
        <li><a href="#">Health Packages</a></li>
        <li><a href="#">Patient Guide</a></li>
        <li><a href="#">Visiting Hours</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>

    <!-- Column 2 -->
    <div class="footer-col">
      <h4>Medical Services</h4>
      <ul>
        <li>Emergency Care (24/7)</li>
        <li>Outpatient Clinics</li>
        <li>Inpatient Services</li>
        <li>Diagnostic & Imaging</li>
        <li>Laboratory Services</li>
        <li>Pharmacy</li>
        <li>Home Healthcare</li>
        <li>Telemedicine</li>
      </ul>
    </div>

    <!-- Column 3 -->
    <div class="footer-col">
      <h4>Patient Care</h4>
      <ul>
        <li>Appointments & Scheduling</li>
        <li>Medical Records</li>
        <li>Insurance & Billing</li>
        <li>Patient Rights</li>
        <li>Complaints & Suggestions</li>
      </ul>
    </div>

    <!-- Column 4 -->
    <div class="footer-col">
      <h4>Community & Support</h4>
      <ul>
        <li>Health Awareness Programs</li>
        <li>Patient Support Groups</li>
        <li>Volunteer Programs</li>
      </ul>
    </div>

    <!-- Column 5 -->
    <div class="footer-col">
      <h4>Connect With Us</h4>
      <ul>
        <li>Hospital News</li>
        <li>Health Tips</li>
        <li>Events & Campaigns</li>
        <li>Careers</li>
        <li>Media Center</li>
        <li>Mobile Application</li>
        <li>Newsletter</li>
      </ul>
    </div>

    <!-- Column 6 -->
    <div class="footer-col">
      <h4>Follow Us</h4>
      <ul class="social-icons">
        <li><a href="#"><i class="fa-brands fa-bluesky"></i> Bluesky</a></li>
        <li><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
        <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
        <li><a href="#"><i class="fa-brands fa-mastodon"></i> Mastodon</a></li>
        <li><a href="#"><i class="fa-brands fa-x-twitter"></i> X</a></li>
        <li><a href="#"><i class="fa-solid fa-envelope"></i> Newsletter</a></li>
        <li><a href="#"><i class="fa-solid fa-rss"></i> RSS</a></li>
      </ul>
    </div>

    <!-- Brand -->
    <div class="footer-brand">

      <img src="<?php echo get_template_directory_uri(); ?>/images/logo-hospital-rm-bg.png" alt="logo">
      <p>© Jubha Hospital<br><?php echo date('Y'); ?>. All rights reserved.</p>

    </div>

  </div>

</footer>

<?php get_footer(); ?>





















<script>
document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("themeToggle");
  const footer = document.getElementById("siteFooter");

  if (!toggle || !footer) {
    alert("Toggle or footer not found!");
    return;
  }

  toggle.addEventListener("change", function () {
    if (toggle.checked) {
      footer.classList.add("light");
    } else {
      footer.classList.remove("light");
    }
  });
});
</script>



