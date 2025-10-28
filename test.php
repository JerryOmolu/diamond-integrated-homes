<?php
if (!isset($pageTitle)) {
    $pageTitle = "Diamond Integrated Homes";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  
  <!-- SEO Meta -->
  <meta name="description" content="Diamond Integrated Homes specializes in real estate properties, land sales, estate renovation, transformers and solar installation, importation, and general contracts. Our main focus is real estate and property listing.">
  <meta name="keywords" content="real estate, land, property listing, estate renovation, transformers installation, solar installation, importation, general contracts, Diamond Integrated Homes, Nigeria real estate">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="icon" href="favicon_io/favicon.ico">

  <!-- ⚡ Performance Optimizations -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

  <!-- Google Fonts (Optimized) -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- ✅ Latest Bootstrap 5.3.3 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Vendor CSS (Lazy Loaded for Speed) -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" media="print" onload="this.media='all'">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" media="print" onload="this.media='all'">

  <!-- Custom Main CSS -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Project Info -->
  <!-- =======================================================
  * Project Name: Diamond Integrated Homes
  * Updated: Oct 2025
  * Focus: Real Estate & Property Listing
  * Author: BootstrapMade + Custom by Jerry Steve
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

<!-- Preloader Start -->
<div id="preloader-active">
  <div class="preloader d-flex align-items-center justify-content-center vh-100">
    <div class="preloader-inner text-center position-relative">

      <!-- Animated Circle with Logo Inside -->
      <div class="position-relative d-inline-flex align-items-center justify-content-center mx-auto mb-3" style="width: 120px; height: 120px;">
        <div class="preloader-circle border border-4 border-primary border-top-0 rounded-circle position-absolute top-0 start-0 w-100 h-100"></div>
        <img src="assets/img/diamond-img/logo/3D-icon.png" alt="Diamond Homes Logo" class="img-fluid" style="width: 60px; height: auto; z-index: 2;">
      </div>

      <!-- Text / Tagline -->
      <div class="mt-3">
        <h6 class="fw-semibold text-dark mb-0">Diamond Homes</h6>
        <small class="text-muted">Built on Trust. Inspired by Excellence.</small>
      </div>

    </div>
  </div>
</div>
<!-- Preloader End -->


<style>
/* Preloader Animation */
#preloader-active {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background-color: #ffffff;
  display: flex;
  justify-content: center;
  align-items: center;
}

.preloader-circle {
  border-color: #0026C1;
  border-top-color: transparent;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  animation: spin 1.2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Fade-out effect when loading completes */
body.loaded #preloader-active {
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.5s ease, visibility 0.5s ease;
}

</style>

<script>
  window.addEventListener("load", function() {
    document.body.classList.add("loaded");
  });
</script>
