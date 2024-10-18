<?php
// Include the file with reusable functions
require_once '../logic/globalfunctions.php';

// Generate the header
generateHeader('The Reload at Range Time', ['../css/globalstyle.css', '../css/homepage.css']);

// Generate the menu
generateNavagation();

// Page-specific content goes here
echo '
<!-- Parallax Hero Section -->
<main>
  <section class="parallax d-flex align-items-center justify-content-center text-center">
    <div class="text-light">
      <h1 class="display-3 fw-bold">Eat and Relax at The Reload Food Truck</h1>
      <p class="lead">Homemade meals, the perfect stop after a day at the range.</p>
      <a href="./menu.php" class="btn btn-lg btn-primary">Explore Our Menu</a>
    </div>
  </section>

  <!-- Main Content Section -->
  <section class="container py-5">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <i class="fas fa-fire fa-3x"></i>
        <h3>Cozy Fire Pit</h3>
        <p>Relax by our 360,000 BTU fire pit after a long day of practice.</p>
      </div>
      <div class="col-md-4 mb-4">
        <i class="fas fa-guitar fa-3x"></i>
        <h3>Live Music</h3>
        <p>Enjoy live performances while you dig into our delicious meals.</p>
      </div>
      <div class="col-md-4 mb-4">
        <i class="fas fa-gift fa-3x"></i>
        <h3>Private Parties</h3>
        <p>We host unforgettable events, from casual hangouts to private parties.</p>
      </div>
    </div>
  </section>
</main>
';

// Generate the footer
generateFooter();
