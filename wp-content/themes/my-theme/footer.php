<?php get_header(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/.style/footer.css">
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
    <div class="footer-col">
      <h4>Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Download / Get</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">OS Documentation</a></li>
        <li><a href="#">Tool Documentation</a></li>
        <li><a href="#">System Status</a></li>
        <li><a href="#">Archived Releases</a></li>
        <li><a href="#">Partnerships</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Platforms</h4>
      <ul>
        <li>ARM (SBC)</li>
        <li>NetHunter (Mobile)</li>
        <li>Amazon AWS</li>
        <li>Docker</li>
        <li>Linode</li>
        <li>Microsoft Azure</li>
        <li>Microsoft Store (WSL)</li>
        <li>Vagrant</li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Development</h4>
      <ul>
        <li>Bug Tracker</li>
        <li>Continuous Integration</li>
        <li>Network Mirror</li>
        <li>Package Tracker</li>
        <li>GitLab</li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Community</h4>
      <ul>
        <li>Discord</li>
        <li>Support Forum</li>
        <li>PeerTube</li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Follow Us</h4>
      <ul>
        <li>Bluesky</li>
        <li>Facebook</li>
        <li>Instagram</li>
        <li>Mastodon</li>
        <li>X</li>
        <li>Newsletter</li>
        <li>RSS</li>
      </ul>
    </div>

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

    <div class="footer-brand">
      <img src=<?php echo get_template_directory_uri(); ?>/images/logo-hospital.png alt="logo">
      <p>© OffSec Services Limited<br>2025. All rights reserved.</p>
    </div>
  </div>




  <?php get_footer(); ?>

</footer>





















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



