<?php
$pageTitle = "Request a Quote - Diamond Integrated Homes";
?>
<?php include "includes/header.php"; ?>

<?php include "includes/loader.php"; ?>

<?php include "includes/nav.php"; ?> 

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Request a Quote</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="current">Request a Quote</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Request a Quote Section -->
  <section class="py-5 position-relative overflow-hidden">
    <div class="container py-5">
      <div class="text-center mb-5">
        <h6 class="text-uppercase fw-bold text-gradient">Get Started</h6>
        <h2 class="display-5 fw-bold mb-3 text-dark">Request a Free Quote</h2>
        <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">
          Fill out the form below to request a quote for any of our services. A representative from 
          <strong>Diamond Integrated Homes</strong> will get back to you shortly.
        </p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <form action="process-form.php" method="POST" class="p-4 border rounded-4 bg-light shadow-sm">
            
            <div class="row g-4">
              <!-- Full Name -->
              <div class="col-md-6">
                <label for="fullname" class="form-label fw-bold">Full Name</label>
                <input type="text" id="fullname" name="fullname" class="form-control rounded-3" placeholder="Enter your full name" required>
              </div>

              <!-- Email -->
              <div class="col-md-6">
                <label for="email" class="form-label fw-bold">Email Address</label>
                <input type="email" id="email" name="email" class="form-control rounded-3" placeholder="Enter your email" required>
              </div>

              <!-- Phone Number -->
              <div class="col-md-6">
                <label for="phone" class="form-label fw-bold">Phone Number</label>
                <input type="text" id="phone" name="phone" class="form-control rounded-3" placeholder="Enter your phone number" required>
              </div>

              <!-- Service -->
              <div class="col-md-6">
                <label for="service" class="form-label fw-bold">Select Service</label>
                <select id="service" name="service" class="form-select rounded-3" required>
                  <option value="">-- Choose a Service --</option>
                  <option value="Real Estate">Real Estate</option>
                  <option value="Land Acquisition">Land Acquisition</option>
                  <option value="Estate Renovation">Estate Renovation</option>
                  <option value="Transformers Installation">Transformers Installation</option>
                  <option value="Solar Installation">Solar Installation</option>
                  <option value="Importation">Importation</option>
                  <option value="General Contracts">General Contracts</option>
                </select>
              </div>

              <!-- Message -->
              <div class="col-12">
                <label for="message" class="form-label fw-bold">Your Message</label>
                <textarea id="message" name="message" rows="5" class="form-control rounded-3" placeholder="Provide details about your request..." required></textarea>
              </div>

              <!-- Submit Button -->
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2">
                  <i class="bi bi-send me-2"></i> Submit Request
                </button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /Request a Quote Section -->

</main>

<?php include "includes/footer.php"; ?>  
