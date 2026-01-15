<?php
/*
Template Name: Find A Doctor
*/
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/find-doctor.css">

<main class="find-doctor-page">

    <!-- Hero / Search Form -->
   <section class="find-doctor-page">

    <!-- Hero Search Section -->
    <div class="find-hero">
        <h1>Find A Doctor</h1>
        <p>Search doctors by location and specialization</p>

        <div class="find-form">
            <select>
                <option>Select Location</option>
                <option>Jubha Main Hospital</option>
                <option>Jubha Clinic Center</option>
                <option>Jubha Medical Complex</option>
            </select>

            <select>
                <option>Select Specialization</option>
                <option>Cardiology</option>
                <option>Dermatology</option>
                <option>ENT</option>
                <option>Internal Medicine</option>
                <option>General Surgery</option>
            </select>

            <button>Search</button>
        </div>
    </div>

    <!-- Doctor Cards Section -->
    <div class="doctor-list">

        <div class="doctor-card">
            <img src="images/arab5.jpg" alt="">
            <div class="doctor-info">
                <h3>Dr. Ahmed Ali</h3>
                <p>Cardiologist</p>
                <span>Jubha Main Hospital</span>
                <a href="#">View Profile →</a>
            </div>
        </div>

        <div class="doctor-card">
            <img src="images/arab3.jpg" alt="">
            <div class="doctor-info">
                <h3>Dr. Sarah Khan</h3>
                <p>Dermatologist</p>
                <span>Jubha Clinic Center</span>
                <a href="#">View Profile →</a>
            </div>
        </div>

        <div class="doctor-card">
            <img src="images/arab6.jpg" alt="">
            <div class="doctor-info">
                <h3>Dr. John Doe</h3>
                <p>General Surgeon</p>
                <span>Jubha Medical Complex</span>
                <a href="#">View Profile →</a>
            </div>
        </div>

    </div>

</section>

</main>

<?php
get_footer();
?>
