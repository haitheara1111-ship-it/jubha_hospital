<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/book-appointment.css">
<section class="appointment-wrap">
  <div class="appointment-box">

    <h2>Request an Appointment</h2>

    <form id="appointmentForm">

      <label>Doctor</label>
      <select name="doctor" required>
        <option value="">Choose a doctor</option>
        <option>Dr. John Smith</option>
        <option>Dr. Sarah Lee</option>
        <option>Dr. Ahmed Khan</option>
      </select>

      <div class="two-col">
        <div>
          <label>First Name</label>
          <input type="text" name="first_name" required>
        </div>

        <div>
          <label>Last Name</label>
          <input type="text" name="last_name" required>
        </div>
      </div>

      <div class="two-col">
        <div>
          <label>Sex</label>
          <select name="sex" required>
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>

        <div>
          <label>Date of Birth</label>
          <input type="date" name="dob">
        </div>
      </div>

      <div class="two-col">
        <div>
          <label>Phone</label>
          <input type="text" name="phone" required>
        </div>

        <div>
          <label>Email</label>
          <input type="email" name="email">
        </div>
      </div>

      <label>Reason</label>
      <textarea name="reason" required></textarea>

      <div class="checkbox">
        <input type="checkbox" id="policy" required>
        <label for="policy">I agree to Privacy Policy</label>
      </div>

      <button type="submit">Submit</button>
    </form>

  </div>
</section>

<script>
document.getElementById("appointmentForm").addEventListener("submit", function(e) {
  e.preventDefault();

  let formData = new FormData(this);
  formData.append("action", "submit_appointment");

  fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
    method: "POST",
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    alert("✅ Appointment saved successfully!");
    this.reset();
  });
});
</script>

<?php get_footer(); ?>
