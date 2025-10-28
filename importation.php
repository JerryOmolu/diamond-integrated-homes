<?php
$pageTitle = "Importation - Diamond Integrated Homes";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/nav.php"; ?> 

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Importation</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="current">Importation</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- SERVICE CONTENT -->
  <!-- Importation Service Section -->
<section class="py-5 position-relative service-section">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- IMAGE -->
      <div class="col-lg-6 order-lg-2" data-aos="fade-left">
        <div class="position-relative import-img-wrapper">
          <img src="assets/img/diamond-img/import.jpg" class="img-fluid rounded-4 shadow-lg import-img" alt="Importation Service">
          <div class="import-overlay rounded-4"></div>
        </div>
      </div>

      <!-- TEXT -->
      <div class="col-lg-6" data-aos="fade-right">
        <h2 class="fw-bold text-dark mb-3">Global Procurement, Local Delivery</h2>
        <p class="text-muted fs-5">
          We handle <strong>importation of high-quality building and electrical materials</strong> from trusted international manufacturers. Our network ensures clients get access to premium materials at competitive rates.
        </p>
        <p class="text-muted fs-5">
          Whether it’s electrical equipment, solar components, or estate finishing materials — we manage logistics, customs clearance, and delivery with transparency and efficiency.
        </p>
        <a href="about" class="btn btn-primary px-4 py-2 mt-2 rounded-pill shadow-sm">Learn More</a>
      </div>

    </div>
  </div>

  <style>
    .service-section {
      background: linear-gradient(135deg, #ffffff, #f4f8ff);
      position: relative;
      overflow: hidden;
    }

    .import-img-wrapper {
      position: relative;
      display: inline-block;
    }

    .import-img {
      border: 4px solid rgba(255, 255, 255, 0.7);
      transition: all 0.5s ease;
      position: relative;
      z-index: 2;
    }

    .import-img:hover {
      transform: scale(1.03);
      box-shadow: 0 12px 30px rgba(13, 110, 253, 0.25);
    }

    .import-overlay {
      position: absolute;
      top: 25px;
      right: -25px;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(13, 110, 253, 0.2), rgba(0, 0, 0, 0.1));
      z-index: 1;
      border-radius: 1rem;
      filter: blur(2px);
    }

    .btn-primary {
      background-color: #0d6efd;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0b5ed7;
      transform: translateY(-3px);
    }

    @media (max-width: 768px) {
      .import-overlay {
        display: none;
      }
    }
  </style>
</section>


  <?php include "includes/philosophy.php"; ?> 

</main>

<?php include "includes/footer.php"; ?>
