<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/find-doctor.css">

<div class="picture-doctors"><h1>OUR Doctor</h1></div>

<!-- First row of doctors -->
<div class="doctor-container">
    <?php for ($i=0; $i<4; $i++) : ?>
    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/images/arab1.jpg" alt="Doctor">
        <div class="doctor-info">
            <h3>Dr. Ahmed Ali</h3>
            <p>Cardiologist</p>
            <a href="#">View Profile</a>
        </div>
    </div>
    <?php endfor; ?>
</div>

<!-- Second row of doctors -->
<div class="doctor-container">
    <?php for ($i=0; $i<4; $i++) : ?>
    <div class="doctor-card">
        <img src="<?php echo get_template_directory_uri(); ?>/images/arab1.jpg" alt="Doctor">
        <div class="doctor-info">
            <h3>Dr. Ahmed Ali</h3>
            <p>Cardiologist</p>
            <a href="#">View Profile</a>
        </div>
    </div>
    <?php endfor; ?>
</div>

<?php get_footer(); ?>
