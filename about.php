<?php
$pageTitle = "About - Diamond Integrated Homes";
?>
<?php include "includes/header.php"; ?>

<?php include "includes/loader.php"; ?>

<?php include "includes/nav.php"; ?> 

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
<?php include "includes/about.php"; ?> 
    <!-- /About Section -->
	  
<!-- MISSION, VISION & CORE VALUES SECTION -->
<!-- ======= Philosophy Section ======= -->
<section class="py-5 position-relative philosophy-section" 
  style="
    background: linear-gradient(rgba(255,255,255,0.95), rgba(245,245,245,0.9)),
                url('assets/img/construction/bg-pattern.webp') center/cover no-repeat;
  ">
  <div class="container py-5">
    <!-- Section Heading -->
    <div class="text-center mb-5" data-aos="fade-up">
      <h6 class="text-uppercase fw-bold text-primary">Our Philosophy</h6>
      <h2 class="display-5 fw-bold mb-3 text-dark">Mission, Vision & Core Values</h2>
      <p class="text-muted fs-5 mx-auto" style="max-width: 720px;">
        Every project at <strong>Diamond Integrated Homes</strong> is guided by innovation, integrity, and a passion for creating spaces that elevate comfort, beauty, and sustainability across Nigeria and beyond.
      </p>
    </div>

    <div class="row g-4 justify-content-center">

      <!-- Mission -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="philosophy-card h-100 text-center p-4 rounded-4 shadow-sm bg-white position-relative overflow-hidden">
          <div class="icon-wrapper mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle shadow-sm" 
               style="width: 90px; height: 90px; background: linear-gradient(135deg, #007B55, #00B67A);">
            <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" width="50" alt="Mission Icon">
          </div>
          <h4 class="fw-bold mb-3 text-dark">Our Mission</h4>
          <p class="text-muted mb-0">
            To deliver world-class real estate and electrical construction solutions that combine innovation, reliability, and superior value — shaping modern lifestyles for a sustainable future in Nigeria.
          </p>
        </div>
      </div>

      <!-- Vision -->
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="philosophy-card h-100 text-center p-4 rounded-4 shadow-sm bg-white position-relative overflow-hidden">
          <div class="icon-wrapper mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle shadow-sm" 
               style="width: 90px; height: 90px; background: linear-gradient(135deg, #00205B, #004AAD);">
            <img src="https://cdn-icons-png.flaticon.com/512/1040/1040230.png" width="50" alt="Vision Icon">
          </div>
          <h4 class="fw-bold mb-3 text-dark">Our Vision</h4>
          <p class="text-muted mb-0">
            To be a leading name in Africa’s real estate and energy sectors — 
            known for trust, creativity, and delivering homes and infrastructure that stand the test of time.
          </p>
        </div>
      </div>

      <!-- Core Values -->
      <div class="col-lg-4 col-md-12" data-aos="zoom-in" data-aos-delay="300">
        <div class="philosophy-card h-100 text-center p-4 rounded-4 shadow-sm bg-white position-relative overflow-hidden">
          <div class="icon-wrapper mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle shadow-sm" 
               style="width: 90px; height: 90px; background: linear-gradient(135deg, #F4B400, #FF8C00);">
            <img src="https://cdn-icons-png.flaticon.com/512/942/942799.png" width="50" alt="Values Icon">
          </div>
          <h4 class="fw-bold mb-3 text-dark">Core Values</h4>
          <ul class="list-unstyled text-muted mb-0 text-start d-inline-block">
            <li>🏡 Excellence & Innovation</li>
            <li>🤝 Integrity & Trust</li>
            <li>🌍 Sustainability & Responsibility</li>
            <li>💡 Customer-Centric Service</li>
            <li>🚀 Collaboration & Growth</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
    
    <div class="trust-indicators mt-5" data-aos="fade-up" data-aos-delay="400">
            <div class="row g-3 text-center">
              <div class="col-4">
                <div class="trust-item py-3 px-2 rounded float-animate bg-light shadow-sm">
                  <i class="bi bi-clock text-primary fs-3 mb-2"></i>
                  <div class="trust-content">
                    <span class="trust-number fw-bold d-block">24h</span>
                    <span class="trust-label small text-muted">Response Time</span>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="trust-item py-3 px-2 rounded float-animate bg-light shadow-sm">
                  <i class="bi bi-star-fill text-warning fs-3 mb-2"></i>
                  <div class="trust-content">
                    <span class="trust-number fw-bold d-block">4.9</span>
                    <span class="trust-label small text-muted">Client Rating</span>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="trust-item py-3 px-2 rounded float-animate bg-light shadow-sm">
                  <i class="bi bi-house-door-fill text-success fs-3 mb-2"></i>
                  <div class="trust-content">
                    <span class="trust-number fw-bold d-block">500+</span>
                    <span class="trust-label small text-muted">Properties Managed</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
</section>
      
<?php include "includes/testimonials.php"; ?>      

<!-- ======= Philosophy Section Styles ======= -->
<style>
.philosophy-card {
  transition: all 0.4s ease;
  border: 1px solid rgba(0,0,0,0.05);
}
.philosophy-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}
.icon-wrapper {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.philosophy-card:hover .icon-wrapper {
  transform: scale(1.1);
  box-shadow: 0 0 25px rgba(0, 123, 85, 0.3);
}
.text-gradient {
  background: linear-gradient(90deg, #007B55, #004AAD);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>


  </main>

<?php include "includes/footer.php"; ?>  