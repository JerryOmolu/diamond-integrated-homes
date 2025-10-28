<?php
$pageTitle = "Properties - Diamond Integrated Homes";
?>
<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/nav.php"; ?> 

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Properties- Real Estate</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index">Home</a></li>
          <li class="current">Properties</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- PROPERTY LISTINGS SECTION -->
  <section class="py-5 position-relative overflow-hidden property-section">
    <div class="container py-4">

      <!-- Filter / Search Bar -->
      <form class="row g-3 mb-5 bg-white shadow-sm p-4 rounded-4">
        <div class="col-md-4">
          <label class="form-label fw-bold text-muted">Property Type</label>
          <select class="form-select rounded-pill">
            <option selected>All Types</option>
            <option>Apartment</option>
            <option>Duplex</option>
            <option>Land</option>
            <option>Commercial</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label fw-bold text-muted">Location (Abuja)</label>
          <select class="form-select rounded-pill">
            <option selected>All Locations</option>
            <option>Maitama</option>
            <option>Gwarinpa</option>
            <option>Wuse</option>
            <option>Jabi</option>
            <option>Lokogoma</option>
          </select>
        </div>

        <div class="col-md-4">
          <label class="form-label fw-bold text-muted">Budget</label>
          <select class="form-select rounded-pill">
            <option selected>Any</option>
            <option>₦10M - ₦50M</option>
            <option>₦50M - ₦100M</option>
            <option>₦100M+</option>
          </select>
        </div>

        <div class="col-12 text-center mt-3">
          <button type="submit" class="btn btn-primary rounded-pill px-5">Search</button>
        </div>
      </form>

      <!-- Section Header -->
      <div class="text-center mb-5">
        <h6 class="text-uppercase fw-bold text-gradient">Explore Our Listings</h6>
        <h2 class="display-5 fw-bold mb-3 text-dark">Discover Your Dream Property</h2>
        <p class="text-muted fs-5 mx-auto" style="max-width: 750px;">
          From modern luxury apartments to expansive estates — we bring you properties designed for comfort, elegance, and investment value.
        </p>
      </div>

      <!-- Property Grid -->
      <div class="row g-4">
        <!-- PROPERTY CARD 1 -->
        <div class="col-lg-4 col-md-6">
          <div class="property-card rounded-4 overflow-hidden shadow-sm bg-white">
            <div class="property-image position-relative">
              <img src="assets/img/diamond-img/D10.jpg" alt="Luxury Apartment">
              <span class="badge bg-brand position-absolute top-0 end-0 m-3">For Sale</span>
            </div>
            <div class="property-content p-4">
              <h4 class="fw-bold mb-2 text-dark">Luxury 3-Bedroom Apartment</h4>
              <p class="text-muted mb-3"><i class="bi bi-geo-alt"></i> Maitama, Abuja</p>
              <p class="text-primary fw-bold fs-5 mb-3">₦120,000,000</p>
              <ul class="list-inline small text-muted mb-3">
                <li class="list-inline-item"><i class="bi bi-house-door"></i> 3 Beds</li>
                <li class="list-inline-item"><i class="bi bi-droplet"></i> 3 Baths</li>
                <li class="list-inline-item"><i class="bi bi-aspect-ratio"></i> 300 m²</li>
              </ul>
              <a href="#" class="btn btn-outline-primary rounded-pill px-4">View Details</a>
            </div>
          </div>
        </div>

        <!-- PROPERTY CARD 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="property-card rounded-4 overflow-hidden shadow-sm bg-white">
            <div class="property-image position-relative">
              <img src="assets/img/diamond-img/D9.jpg" alt="Duplex">
              <span class="badge bg-success position-absolute top-0 end-0 m-3">For Rent</span>
            </div>
            <div class="property-content p-4">
              <h4 class="fw-bold mb-2 text-dark">5-Bedroom Smart Duplex</h4>
              <p class="text-muted mb-3"><i class="bi bi-geo-alt"></i> Lekki Phase 1, Lagos</p>
              <p class="text-primary fw-bold fs-5 mb-3">₦8,000,000 / year</p>
              <ul class="list-inline small text-muted mb-3">
                <li class="list-inline-item"><i class="bi bi-house-door"></i> 5 Beds</li>
                <li class="list-inline-item"><i class="bi bi-droplet"></i> 5 Baths</li>
                <li class="list-inline-item"><i class="bi bi-aspect-ratio"></i> 450 m²</li>
              </ul>
              <a href="#" class="btn btn-outline-primary rounded-pill px-4">View Details</a>
            </div>
          </div>
        </div>

        <!-- PROPERTY CARD 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="property-card rounded-4 overflow-hidden shadow-sm bg-white">
            <div class="property-image position-relative">
              <img src="assets/img/diamond-img/H4.jpeg" alt="Estate Land">
              <span class="badge bg-brand position-absolute top-0 end-0 m-3">For Sale</span>
            </div>
            <div class="property-content p-4">
              <h4 class="fw-bold mb-2 text-dark">Residential Estate Land</h4>
              <p class="text-muted mb-3"><i class="bi bi-geo-alt"></i> Gwarinpa, Abuja</p>
              <p class="text-primary fw-bold fs-5 mb-3">₦25,000,000 / plot</p>
              <ul class="list-inline small text-muted mb-3">
                <li class="list-inline-item"><i class="bi bi-tree"></i> Gated Estate</li>
                <li class="list-inline-item"><i class="bi bi-lightning-charge"></i> Power Ready</li>
                <li class="list-inline-item"><i class="bi bi-shield-check"></i> Titled Land</li>
              </ul>
              <a href="#" class="btn btn-outline-primary rounded-pill px-4">View Details</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <nav aria-label="Page navigation" class="mt-5">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled"><a class="page-link">Previous</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>

    </div>
  </section>

</main>

<!-- PROPERTY PAGE STYLES -->
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

.property-section {
  background: #f8faff;
  position: relative;
}

.property-card {
  transition: all 0.4s ease;
  border: 1px solid rgba(0, 43, 91, 0.08);
}
.property-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 43, 91, 0.15);
}
.property-image {
  height: 250px;
  overflow: hidden;
  position: relative;
}
.property-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}
.property-card:hover .property-image img {
  transform: scale(1.07);
}
.bg-brand {
  background: linear-gradient(135deg, var(--brand-dark), var(--brand-accent)) !important;
}
.btn-outline-primary {
  color: var(--brand-dark);
  border-color: var(--brand-accent);
  transition: all 0.3s ease;
}
.btn-outline-primary:hover {
  background: linear-gradient(135deg, var(--brand-dark), var(--brand-accent));
  color: #fff;
  border-color: transparent;
}
.pagination .page-link {
  color: var(--brand-dark);
  border-radius: 50%;
  margin: 0 4px;
}
.pagination .page-item.active .page-link {
  background-color: var(--brand-dark);
  border-color: var(--brand-dark);
}
.pagination .page-link:hover {
  background-color: var(--brand-accent);
  color: #fff;
}
</style>


<?php include "includes/footer.php"; ?>

