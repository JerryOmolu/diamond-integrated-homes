<?php
$pageTitle = "Transformers Installation - Diamond Integrated Homes";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/nav.php"; ?> 

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Transformers Installation</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="current">Transformers Installation</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- SERVICE CONTENT -->
  <!-- Transformer Installation Section -->
<section class="py-5 position-relative service-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <!-- IMAGE -->
      <div class="col-lg-6 order-lg-2" data-aos="fade-left">
        <div class="position-relative">
          <img src="assets/img/diamond-img/transformer.jpg" class="img-fluid rounded-4 shadow-lg transform-img" alt="Transformers Installation">
          <div class="image-overlay rounded-4"></div>
        </div>
      </div>

      <!-- TEXT -->
      <div class="col-lg-6" data-aos="fade-right">
        <h2 class="fw-bold text-dark mb-3">Powering Communities with Expertise</h2>
        <p class="text-muted fs-5">
          Our <strong>transformer installation services</strong> ensure safe, reliable, and efficient power distribution for estates, factories, and commercial spaces. We handle everything from site preparation to full system integration with precision.
        </p>
        <p class="text-muted fs-5">
          Backed by skilled engineers and certified technicians, we guarantee installations that meet regulatory standards and perform optimally for years to come.
        </p>
        <a href="get-a-quote" class="btn btn-primary px-4 py-2 mt-2 rounded-pill shadow-sm">Get a Quote</a>
      </div>
    </div>
  </div>

  <style>
    .service-section {
      background: linear-gradient(135deg, #f8f9fa, #ffffff);
      overflow: hidden;
    }

    .transform-img {
      border: 4px solid rgba(255, 255, 255, 0.6);
      transition: transform 0.5s ease, box-shadow 0.5s ease;
      z-index: 2;
      position: relative;
    }

    .transform-img:hover {
      transform: scale(1.03);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .image-overlay {
      position: absolute;
      top: 20px;
      left: -20px;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(40, 167, 69, 0.2), rgba(0, 0, 0, 0.1));
      z-index: 1;
      border-radius: 1rem;
    }

    .btn-success {
      background-color: #198754;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-success:hover {
      background-color: #157347;
      transform: translateY(-3px);
    }

    @media (max-width: 768px) {
      .image-overlay {
        display: none;
      }
    }
  </style>
</section>


  <?php include "includes/philosophy.php"; ?> 

</main>

<?php include "includes/footer.php"; ?>
