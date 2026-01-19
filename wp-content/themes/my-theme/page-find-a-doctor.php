<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/find-doctor.css">


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

    </section>

</main>
\

<?php get_footer(); ?>
