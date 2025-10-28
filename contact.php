<?php
$pageTitle = "Contact - Diamond Integrated Homes";
?>
<?php include "includes/header.php"; ?>

<?php include "includes/loader.php"; ?>

<?php include "includes/nav.php"; ?> 

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <!-- CONTACT SECTION -->
<section id="contact" class="contact-section py-5">
  <div class="container">
    <div class="row g-5 align-items-start">
      
      <!-- CONTACT INFO COLUMN -->
      <div class="col-lg-5">
        <div class="contact-info bg-white rounded-4 shadow-lg p-4 h-100" data-aos="fade-right">
          <h3 class="fw-bold mb-3 text-dark">Get In Touch</h3>
          <p class="text-muted mb-4">
            We’d love to hear from you. Reach out to <strong>Diamond Integrated Homes</strong> for inquiries, partnerships, or project consultations. Our team is always ready to assist.
          </p>

          <!-- Info Cards -->
          <div class="info-item d-flex align-items-start mb-4">
            <div class="icon-circle bg-primary text-white me-3">
              <i class="bi bi-pin-map-fill"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-1">Our Location</h5>
              <p class="mb-0 small text-muted">3rd Floor, Plot 388 Constitution Avenue, CBD, Abuja 900103, FCT</p>
            </div>
          </div>

          <div class="info-item d-flex align-items-start mb-4">
            <div class="icon-circle bg-primary text-white me-3">
              <i class="bi bi-envelope-open"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-1">Email Us</h5>
              <p class="mb-0 small text-muted">info@diamondhomes.ng</p>
            </div>
          </div>

          <div class="info-item d-flex align-items-start mb-4">
            <div class="icon-circle bg-primary text-white me-3">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-1">Call Us</h5>
              <p class="mb-0 small text-muted">+2347072338544, +2348029872044</p>
            </div>
          </div>

          <div class="info-item d-flex align-items-start mb-4">
            <div class="icon-circle bg-primary text-white me-3">
              <i class="bi bi-clock-history"></i>
            </div>
            <div>
              <h5 class="fw-bold mb-1">Working Hours</h5>
              <p class="mb-0 small text-muted">Mon–Sat: 9AM – 7PM</p>
            </div>
          </div>

          <!-- Social Links -->
          <div class="social-links mt-4">
            <h6 class="fw-bold mb-2">Follow Us</h6>
            <div class="d-flex gap-3">
              <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
              <a href="https://wa.me/2347072338544" class="social-icon"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- MAP + FORM COLUMN -->
      <div class="col-lg-7">
        <div class="map-container mb-4 rounded-4 overflow-hidden shadow-sm" data-aos="fade-up">
          <iframe width="100%" height="300" frameborder="0" style="border:0;"
            src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=3rd%20Floor,%20Plot%20388%20Constitution%20Avenue,%20Central%20Business%20District,%20Abuja%20900103,%20Federal%20Capital%20Territory+(Diamond%20Integrated%20Homes)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
          </iframe>
        </div>

        <div class="contact-form bg-white rounded-4 shadow-lg p-4" data-aos="fade-left">
          <h3 class="fw-bold text-dark mb-2">Send Us a Message</h3>
          <p class="text-muted mb-4">We’ll respond promptly to your inquiry.</p>

          <form action="process-form.php" method="post">
            <div class="form-floating mb-3">
              <input type="text" name="fullname" class="form-control" placeholder="Your Name" required>
              <label>Full Name</label>
            </div>

            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
              <label>Email Address</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" name="phone" class="form-control" placeholder="Your Mobile" required>
              <label>Mobile Number</label>
            </div>

            <div class="form-floating mb-3">
              <select name="service" class="form-select" required>
                <option value="">--Select Service--</option>
                <option value="Real Estate">Real Estate</option>
                <option value="Estate Renovation">Estate Renovation</option>
                <option value="Land Acquisition">Land Acquisition</option>
                <option value="Transformer Installation">Transformer Installation</option>
                <option value="Solar Installation">Solar Installation</option>
                <option value="Importation">Importation</option>
                <option value="General Contracts">General Contracts</option>
              </select>
<!--              <label>Select Service</label>-->
            </div>

            <div class="form-floating mb-3">
              <textarea name="message" class="form-control" placeholder="Message" style="height: 120px;"></textarea>
              <label>Your Message</label>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn-submit">
                Send Message <i class="bi bi-send-fill ms-2"></i>
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>

  <style>
    .contact-section {
      background: linear-gradient(135deg, #f9fbff, #eef3f9);
    }

    .icon-circle {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      box-shadow: 0 4px 10px rgba(0, 43, 91, 0.15);
    }

    .social-icon {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--brand-dark, #002B5B);
      transition: all 0.3s ease;
      box-shadow: 0 2px 5px rgba(0, 43, 91, 0.1);
    }

    .social-icon:hover {
      background: var(--brand-dark, #002B5B);
      color: #fff;
      transform: translateY(-3px);
    }

    .form-control, .form-select {
      border: 2px solid #e0e6ef;
      border-radius: 12px;
      box-shadow: none;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
      border-color: #007BFF;
      box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
    }

    .btn-submit {
      background: linear-gradient(135deg, #002B5B, #007BFF);
      color: #fff;
      border: none;
      padding: 12px 0;
      font-weight: 600;
      border-radius: 50px;
      transition: all 0.3s ease;
    }

    .btn-submit:hover {
      background: linear-gradient(135deg, #004080, #0056d6);
      transform: translateY(-3px);
    }
  </style>
</section>
<!-- /Contact Section -->

  </main>

  <?php include "includes/footer.php"; ?>