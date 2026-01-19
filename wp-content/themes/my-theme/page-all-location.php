<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/all-location.css">

<section class="page-hero">
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <h1>All Locations</h1>

        <div class="breadcrumb">
            <span class="home-icon">🏠</span>
            <span class="slash">/</span>
            <span class="current">All Locations</span>
        </div>
    </div>
</section>

<section class="all-locations">
    <div class="locations-container">

        <!-- Location Card -->
        <div class="location-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/location7.jpg" alt="AMC Rakkah">
            <h3>AMC Rakkah</h3>
            <a href="#">View Details →</a>
        </div>

        <div class="location-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/location8.jpg" alt="AGH Khobar">
            <h3>AGH Khobar</h3>
            <a href="#">View Details →</a>
        </div>

        <div class="location-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/location7.jpg" alt="AGH Dammam">
            <h3>AGH Dammam</h3>
            <a href="#">View Details →</a>
        </div>

        <div class="location-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/location8.jpg" alt="Oncology Center">
            <h3>Oncology Center – Dammam</h3>
            <a href="#">View Details →</a>
        </div>

        <div class="location-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/location7.jpg" alt="AGH Jubail">
            <h3>AGH Jubail</h3>
            <a href="#">View Details →</a>
        </div>

        <div class="location-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/location7.jpg" alt="AGH Hofuf">
            <h3>AGH Hofuf</h3>
            <a href="#">View Details →</a>
        </div>

    </div>
</section>

<?php get_footer(); ?>
