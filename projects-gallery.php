<?php
$pageTitle = "Gallery - Diamond Integrated Homes";
?>
<?php include "includes/header.php"; ?>

<?php include "includes/loader.php"; ?>
<?php include "includes/nav.php"; ?> 

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Our Gallery</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="current">Projects Gallery</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Projects Gallery Section -->
  <section id="projects" class="projects section py-5 bg-light">
    <div class="container text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold text-dark">Our Gallery</h2>
      <p class="text-muted mx-auto" style="max-width: 700px;">
        Explore some of our ongoing real estate and construction projects across Nigeria.
      </p>
    </div>

    <div class="container">
      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

        <!-- Gallery Item -->
        <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH1.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH1.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/H1.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/H1.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH4.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH4.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH5.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH5.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH3.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH3.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH8.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH8.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>
<!--          jgjjhgjghjjgjhghjgj-->
        <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH10.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH10.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>
          
    <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH11.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH11.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>
    
    <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH16.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH16.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>
          
    <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH13.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH13.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>
          
    <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH14.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH14.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>
          
    <div class="col-lg-4 col-md-6">
          <a href="assets/img/diamond-img/DH15.jpeg" class="glightbox" data-gallery="projects">
            <div class="project-card rounded-4 overflow-hidden shadow-sm">
              <img src="assets/img/diamond-img/DH15.jpeg" class="img-fluid w-100" alt="">
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- End Projects Gallery Section -->

  <style>
  /* Project Gallery Styling */
  .project-card {
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    border-radius: 12px;
  }

  .project-card img {
    transition: transform 0.6s ease, opacity 0.4s ease;
  }

  .project-card:hover img {
    transform: scale(1.08);
    opacity: 0.9;
  }

  /* Subtle hover glow effect */
  .project-card:hover {
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
  }

  /* Hide lightbox captions */
  .gdesc-inner {
    display: none !important;
  }
  </style>

  <!-- ✅ Add GLightbox Library -->
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        zoomable: false,
        autoplayVideos: false,
        preload: true
      });
    });
  </script>

</main>

<?php include "includes/footer.php"; ?>
