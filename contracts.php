<?php
$pageTitle = "General Contracts - Diamond Integrated Homes";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/nav.php"; ?> 

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">General Contracts</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="current">General Contracts</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- SERVICE CONTENT -->
  <!-- General Contracts Section -->
<section class="py-5 position-relative service-section">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- IMAGE -->
      <div class="col-lg-6" data-aos="fade-right">
        <div class="position-relative contract-img-wrapper">
          <img src="assets/img/diamond-img/contract.jpg" class="img-fluid rounded-4 shadow-lg contract-img" alt="General Contracts">
          <div class="contract-overlay rounded-4"></div>
        </div>
      </div>

      <!-- TEXT -->
      <div class="col-lg-6" data-aos="fade-left">
        <h2 class="fw-bold text-dark mb-3">Building Trust Through Every Project</h2>
        <p class="text-muted fs-5">
          Our <strong>general contracts division</strong> covers a wide range of construction, electrical, and infrastructure projects — from small-scale residential works to large commercial undertakings.
        </p>
        <p class="text-muted fs-5">
          With a reputation for delivering on time and on budget, we manage every contract with professionalism, transparency, and a focus on lasting client satisfaction.
        </p>
        <a href="contact" class="btn btn-warning px-4 py-2 mt-2 rounded-pill shadow-sm text-white">
          <i class="bi bi-briefcase-fill me-1"></i> Learn More
        </a>
      </div>

    </div>
  </div>

  <style>
    .service-section {
      background: linear-gradient(135deg, #fff, #fdfaf5);
      position: relative;
      overflow: hidden;
    }

    .contract-img-wrapper {
      position: relative;
      display: inline-block;
    }

    .contract-img {
      border: 4px solid rgba(255, 255, 255, 0.8);
      transition: all 0.5s ease;
      position: relative;
      z-index: 2;
    }

    .contract-img:hover {
      transform: scale(1.03);
      box-shadow: 0 12px 30px rgba(255, 193, 7, 0.35);
    }

    .contract-overlay {
      position: absolute;
      bottom: -25px;
      left: -25px;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(255, 193, 7, 0.25), rgba(0, 0, 0, 0.1));
      z-index: 1;
      border-radius: 1rem;
      filter: blur(2px);
    }

    .btn-warning {
      background-color: #ffc107;
      border: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-warning:hover {
      background-color: #e0a800;
      transform: translateY(-3px);
    }

    @media (max-width: 768px) {
      .contract-overlay {
        display: none;
      }
    }
  </style>
</section>


  <?php include "includes/philosophy.php"; ?> 

</main>

<?php include "includes/footer.php"; ?>
