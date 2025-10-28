<?php
$pageTitle = "Solar Installation - Diamond Integrated Homes";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/nav.php"; ?> 

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Solar Installation</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="current">Solar Installation</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- SERVICE CONTENT -->
  <!-- Solar Installation Section -->
<section class="py-5 position-relative service-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <!-- IMAGE -->
      <div class="col-lg-6" data-aos="fade-right">
        <div class="position-relative solar-img-wrapper">
          <img src="assets/img/diamond-img/solar.jpg" class="img-fluid rounded-4 shadow-lg solar-img" alt="Solar Installation">
          <div class="solar-overlay rounded-4"></div>
        </div>
      </div>

      <!-- TEXT -->
      <div class="col-lg-6" data-aos="fade-left">
        <h2 class="fw-bold text-dark mb-3">Clean Energy for a Sustainable Future</h2>
        <p class="text-muted fs-5">
          <strong>Diamond Integrated Homes</strong> provides high-efficiency <strong>solar installation services</strong> to help clients harness renewable energy. Our solar solutions are built for long-term performance and cost savings.
        </p>
        <p class="text-muted fs-5">
          From residential rooftops to commercial complexes, we deliver turnkey installations — including design, supply, installation, and maintenance of complete solar power systems.
        </p>
        <a href="contact" class="btn btn-warning px-4 py-2 mt-2 rounded-pill shadow-sm">Request a Consultation</a>
      </div>
    </div>
  </div>

  <style>
    .service-section {
      background: linear-gradient(135deg, #ffffff, #f8fbff);
      overflow: hidden;
      position: relative;
    }

    .solar-img-wrapper {
      position: relative;
      display: inline-block;
    }

    .solar-img {
      border: 4px solid rgba(255, 255, 255, 0.7);
      transition: all 0.5s ease;
      z-index: 2;
      position: relative;
    }

    .solar-img:hover {
      transform: scale(1.03);
      box-shadow: 0 12px 30px rgba(255, 193, 7, 0.25);
    }

    .solar-overlay {
      position: absolute;
      top: 25px;
      left: -25px;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(255, 193, 7, 0.2), rgba(0, 0, 0, 0.1));
      z-index: 1;
      border-radius: 1rem;
      filter: blur(2px);
    }

    .btn-warning {
      background-color: #ffc107;
      color: #000;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-warning:hover {
      background-color: #e0a800;
      color: #fff;
      transform: translateY(-3px);
    }

    @media (max-width: 768px) {
      .solar-overlay {
        display: none;
      }
    }
  </style>
</section>


  <?php include "includes/philosophy.php"; ?> 

</main>

<?php include "includes/footer.php"; ?>
