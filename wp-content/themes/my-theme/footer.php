<?php get_header(); ?>


<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/.style/footer.css">



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
      <h4>Policies</h4>
      <ul>
        <li>Cookie Policy</li>
        <li>Privacy Policy</li>
        <li>Trademark Policy</li>
      </ul>
    </div>

    <div class="footer-brand">
      <img src=<?php echo get_template_directory_uri(); ?>/images/image.png alt="logo">
      <p>© OffSec Services Limited<br>2025. All rights reserved.</p>
    </div>
  </div>




  <?php wp_footer(); ?>

</footer>





















<script>
  const toggle = document.getElementById("themeToggle");
  const footer = document.getElementById("siteFooter");

  toggle.addEventListener("change", () => {
    footer.classList.toggle("light", toggle.checked);
  });


  const themeToggle = document.getElementById("themeToggle"); // change ID if needed

if (themeToggle) {
  themeToggle.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
  });
}
</script>












<?php get_footer(); ?>