<?php
$pageTitle = "Estate Renovation - Diamond Integrated Homes";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/nav.php"; ?> 

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Estate Renovation</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="current">Estate Renovation</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- SERVICE CONTENT -->
  <section class="py-5 position-relative service-section overflow-hidden">
  <div class="container position-relative z-2">
    <div class="row align-items-center g-5">
      
      <!-- Image Side -->
      <div class="col-lg-6" data-aos="fade-right">
        <div class="image-wrapper position-relative rounded-4 overflow-hidden shadow-lg">
          <img src="assets/img/diamond-img/renovation.jpg" class="img-fluid w-100" alt="Estate Renovation">
          <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark opacity-25"></div>
          <div class="floating-badge position-absolute bottom-0 start-0 bg-brand text-white px-4 py-2 rounded-top-end">
            <i class="bi bi-bricks me-2"></i> Renovation & Restoration Experts
          </div>
        </div>
      </div>

      <!-- Text Side -->
      <div class="col-lg-6" data-aos="fade-left">
        <h6 class="text-uppercase fw-bold text-gradient mb-2">Our Expertise</h6>
        <h2 class="fw-bold text-dark display-6 mb-4">Transforming Spaces, <span class="text-gradient">Preserving Value</span></h2>
        <p class="text-muted fs-5 mb-4">
          At <strong>Diamond Integrated Homes</strong>, we specialize in estate renovation services that breathe new life into existing structures. 
          Our team combines creative design, quality craftsmanship, and sustainable materials to rejuvenate properties while maintaining their original integrity.
        </p>
        <p class="text-muted fs-5 mb-4">
          Whether you’re upgrading an old apartment, modernizing an entire estate, or improving your property's curb appeal, our renovation solutions 
          are tailored to meet your vision and budget.
        </p>
        <a href="contact" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm">
          <i class="bi bi-telephone-forward me-2"></i> Request a Consultation
        </a>
      </div>
    </div>
  </div>

  <!-- Background Accent -->
  <div class="bg-accent position-absolute top-0 end-0 w-50 h-100 d-none d-lg-block"></div>
</section>

<!-- STYLES -->
<style>
:root {
  --brand-dark: #002B5B;
  --brand-accent: #007BFF;
}

.text-gradient {
  background: linear-gradient(90deg, var(--brand-dark), var(--brand-accent));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.service-section {
  background-color: #f9fbff;
  position: relative;
}

.image-wrapper img {
  transition: transform 0.6s ease;
}
.image-wrapper:hover img {
  transform: scale(1.05);
}

.bg-accent {
  background: linear-gradient(135deg, rgba(0, 43, 91, 0.05), rgba(0, 123, 255, 0.1));
  border-radius: 0 0 0 120px;
}

.bg-brand {
  background: linear-gradient(135deg, var(--brand-dark), var(--brand-accent));
}

.image-overlay {
  pointer-events: none;
}

.floating-badge {
  font-size: 0.95rem;
  font-weight: 500;
  letter-spacing: 0.3px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
}
</style>


  <?php include "includes/philosophy.php"; ?> 

</main>

<?php include "includes/footer.php"; ?>
