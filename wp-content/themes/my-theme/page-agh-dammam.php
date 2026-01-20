<?php  get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/agh-dammam.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<section class="page-hero">
  <div class="page-hero-overlay"></div>

  <div class="page-hero-content">
    <h1>AGH Dammam</h1>

    <div class="breadcrumb">
      <span class="home-icon">
        <i class="fa-solid fa-house"></i>
      </span>
      <span class="slash">/</span>
      <a href="#">Hospital & Clinic</a>
      <span class="slash">/</span>
      <span class="current">AGH Dammam</span>
    </div>
  </div>
</section>




<section class="hero-slider">
  <div class="slides">
    <div class="slide active" style="background-image:url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3');"></div>
    <div class="slide" style="background-image:url('https://images.unsplash.com/photo-1576765607924-3f7b8410a787');"></div>
    <div class="slide" style="background-image:url('https://images.unsplash.com/photo-1600959907703-125ba1374a12');"></div>
  </div>

  <div class="hero-content">
    <h1>AGH Dammam</h1>
    <a href="#" class="hero-btn">Book an Appointment</a>
  </div>

  <button class="nav prev">&#10094;</button>
  <button class="nav next">&#10095;</button>
</section>


<section class="hospital-tabs">
  <div class="tabs-header">
    <button class="tab-btn active" data-tab="overview">Overview</button>
    <button class="tab-btn" data-tab="director">Medical Director</button>
    <button class="tab-btn" data-tab="hours">Working Hours</button>
    <button class="tab-btn" data-tab="doctors">Doctors (122)</button>
    <button class="tab-btn" data-tab="contact">Contact & Location</button>
  </div>

  <div class="tabs-content">
    <div class="tab-panel active" id="overview">
      <p>
        Welcome to Jubha General Hospital. Since its establishment in the early 1990s,
        our hospital has grown into a trusted healthcare provider dedicated to quality
        medical services and patient-centered care.
      </p>
      <p>
        Accredited by international healthcare standards, we are recognized for
        delivering safe, reliable, and advanced medical treatments across a wide
        range of specialties.
      </p>
      <p>
        Our hospital offers comprehensive inpatient and outpatient services, including
        diagnostic imaging, laboratory services, specialized clinics, and advanced
        treatment facilities designed to support patient recovery and comfort.
      </p>
      <p>
        Your health and well-being are our highest priorities. We combine modern
        medical technology with compassionate care to ensure the best outcomes
        for our patients.
      </p>
    </div>

    <div class="tab-panel" id="director">
     <section class="doctor-section">
  <div class="doctor-wrapper">

    <!-- LEFT IMAGE -->
    <div class="doctor-image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/mrdubai.png" alt="Dr Talal">
    </div>

    <!-- RIGHT CONTENT -->
    <div class="doctor-info">
      <h1>Dr. Talal Aldhary</h1>
      <span class="title">Medical Director</span>

      <p>
        Dr. Talal Aldhary is a highly accomplished and well-respected medical professional,
        currently holding the esteemed position of Hospital and Medical Director at Almana
        General Hospital in Dammam, Saudi Arabia.
      </p>

      <p>
        Boasting an impressive 32 years of experience in the medical field, Dr. Talal Aldhary
        has held several notable roles throughout his career, including serving as Assistant
        Director General for the Eastern Health Committee, Director of the Private Health Sector
        Affairs Department, and Chief Resident Physician of Internal Medicine at Dammam Central
        Hospital.
      </p>

      <p>
        Dr. Talal Aldhary holds a Bachelor of Medicine and Surgery, as well as a certificate
        from the Saudi Specialty Program for Internal Medicine, further demonstrating his
        dedication and expertise in the field.
      </p>

      <p>
        Additionally, he is a distinguished member of the Violations Committee of Private Health
        Institutions and an esteemed member of the Saudi Cancer Society, exemplifying his
        commitment to advancing medical care and research.
      </p>
    </div>

  </div>
</section>
    </div>

    <div class="tab-panel" id="hours">
    <section class="working-hours">
  <div class="hours-wrapper">

    <!-- LEFT COLUMN -->
    <div class="hours-box">
      <h3>OUT PATIENT CLINICS “OPD”</h3>
      <div class="row">
        <span>1st Shift</span>
        <span>8am - 12pm</span>
      </div>
      <div class="row">
        <span>2nd Shift</span>
        <span>4pm - 10pm</span>
      </div>
    </div>

    <div class="hours-box">
      <h3>PHARMACIES</h3>
      <div class="row">
        <span>1st Shift</span>
        <span>8am - 1pm</span>
      </div>
      <div class="row">
        <span>2nd Shift</span>
        <span>4pm - 10pm</span>
      </div>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="hours-box">
      <h3>VISITORS</h3>
      <div class="row">
        <span>1st Shift</span>
        <span>1pm - 3pm</span>
      </div>
      <div class="row">
        <span>2nd Shift</span>
        <span>5pm - 9pm</span>
      </div>
      <div class="row">
        <span>Friday</span>
        <span>10am - 9pm</span>
      </div>
    </div>

    <div class="hours-box">
      <h3>HEAD OFFICE</h3>
      <div class="row">
        <span>1st Shift</span>
        <span>8am - 12pm</span>
      </div>
      <div class="row">
        <span>2nd Shift</span>
        <span>4pm - 8pm</span>
      </div>
    </div>

  </div>
</section>
    </div>

    <div class="tab-panel" id="doctors">
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

    </div>

    <div class="tab-panel" id="contact">
      <p><strong>Phone:</strong> +966 000 000 000</p>
      <p><strong>Email:</strong> info@jubhahospital.com</p>
      <p><strong>Location:</strong> Jubha City, Saudi Arabia</p>
    </div>
  </div>
</section>







<script>
const slides = document.querySelectorAll(".slide");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

let index = 0;
autodisplay();

function showSlide(i) {
  slides.forEach(slide => slide.classList.remove("active"));
  slides[i].classList.add("active");
}

function autodisplay() {
  index = (index + 1) % slides.length;
  showSlide(index);
}

setInterval(autodisplay, 5000);

nextBtn.addEventListener("click", () => {
  index = (index + 1) % slides.length;
  showSlide(index);
});

prevBtn.addEventListener("click", () => {
  index = (index - 1 + slides.length) % slides.length;
  showSlide(index);
});






document.querySelectorAll(".tab-btn").forEach(button => {
  button.addEventListener("click", () => {
    // Remove active from buttons
    document.querySelectorAll(".tab-btn").forEach(btn => btn.classList.remove("active"));
    button.classList.add("active");

    // Hide panels
    document.querySelectorAll(".tab-panel").forEach(panel => panel.classList.remove("active"));

    // Show selected panel
    const tabId = button.getAttribute("data-tab");
    document.getElementById(tabId).classList.add("active");
  });
});


const btn = document.getElementById("readMoreBtn");
let expanded = false;

btn.addEventListener("click", () => {
    const paragraphs = document.querySelectorAll(".profile-content p");

    if (!expanded) {
        paragraphs.forEach(p => p.style.maxHeight = "none");
        btn.textContent = "Show Less";
    } else {
        window.scrollTo({ top: 0, behavior: "smooth" });
        btn.textContent = "Read More";
    }

    expanded = !expanded;
});

document.querySelectorAll(".row").forEach(row => {
  row.addEventListener("mouseenter", () => {
    row.style.background = "#f4fbfc";
  });

  row.addEventListener("mouseleave", () => {
    row.style.background = "transparent";
  });
});



</script>


<?php  get_footer(); ?>