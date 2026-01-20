<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/find-doctor.css">
<section class="page-hero">
  <div class="page-hero-overlay"></div>

  <div class="page-hero-content">
    <h1>Find a Doctor</h1>

    <div class="breadcrumb">
      <span class="home-icon">
        <i class="fa-solid fa-house"></i>
      </span>
      
      <span class="slash">/</span>
      <span class="current">Find a Doctor</span>
    </div>
  </div>
</section>
<section class="contact-section">
    <div class="text-container">
    <h1>At JUBHA Hospital's,</h1>   
    <p>

We've proudly served our patients for over 75 years!. As a leader in Saudi Arabia's healthcare landscape, we're dedicated to providing exceptional care to our patients.

Find Your Doctor Building trusting relationships with our patients is paramount.Explore our extensive network of over 900 doctors and find the one who best suits your needs.Search now! by location, or specialty.</p>
    </div>
    <div class="img-section">
    </div>
</section>

<main class="find-doctor-page">

    <section class="find-doctor-header">
        <h1>Find a Doctor</h1>
        <p>Search and find the best doctor for your needs</p>
    </section>

    <section class="doctor-search">
        <input type="text" placeholder="Search by doctor name...">
      <select>
    <option>All Specialties</option>
    <option>Cardiology</option>
    <option>Neurology</option>
    <option>Pediatrics</option>
    <option>Orthopedics</option>
    <option>Dermatology</option>
    <option>Ophthalmology</option>
    <option>ENT (Ear, Nose & Throat)</option>
    <option>Gynecology</option>
    <option>Urology</option>
    <option>Gastroenterology</option>
    <option>Oncology</option>
    <option>Pulmonology</option>
    <option>Endocrinology</option>
</select>
        <button>Search</button>
    </section>

    <section class="doctor-list">

        <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab1.jpg" alt="">

            <h3>Dr. Ahmed Ali</h3>
            <p>Cardiologist</p>
            <a href="#">View Profile</a>
        </div>


        <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab3.jpg" alt="">
            <h3>Dr. Sara Khan</h3>
            <p>Neurologist</p>
            <a href="#">View Profile</a>
        </div>
              <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab3.jpg" alt="">
            <h3>Dr. Sara Khan</h3>
            <p>Neurologist</p>
            <a href="#">View Profile</a>
        </div>
              <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab3.jpg" alt="">
            <h3>Dr. Sara Khan</h3>
            <p>Neurologist</p>
            <a href="#">View Profile</a>
        </div>
                  <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab3.jpg" alt="">
            <h3>Dr. Sara Khan</h3>
            <p>Neurologist</p>
            <a href="#">View Profile</a>
        </div>

    </section>
    

    
    <section class="doctor-list">

        <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab1.jpg" alt="">

            <h3>Dr. Ahmed Ali</h3>
            <p>Cardiologist</p>
            <a href="#">View Profile</a>
        </div>


        <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab3.jpg" alt="">
            <h3>Dr. Sara Khan</h3>
            <p>Neurologist</p>
            <a href="#">View Profile</a>
        </div>
              <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab3.jpg" alt="">
            <h3>Dr. Sara Khan</h3>
            <p>Neurologist</p>
            <a href="#">View Profile</a>
        </div>
              <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab3.jpg" alt="">
            <h3>Dr. Sara Khan</h3>
            <p>Neurologist</p>
            <a href="#">View Profile</a>
        </div>
                  <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arab3.jpg" alt="">
            <h3>Dr. Sara Khan</h3>
            <p>Neurologist</p>
            <a href="#">View Profile</a>
        </div>

    </section>
    <section class="doctor-list">
    </section>
    
    
<!-- PAGINATION -->
<div class="pagination">
    <a href="#" class="prev">« Prev</a>
    <span class="current">1</span>
    <a href="">2</a>
    <a href="">3</a>
    <a href="">4</a>
    <a href="">5</a>
    <a href="" class="next">Next »</a>
</div>

</main>


<?php get_footer(); ?>
