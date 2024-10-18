<?php

// Function to generate the header
function generateHeader($title, $stylesheets = [])
{
  echo '
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . htmlspecialchars($title) . '</title>

    <!-- Add the Bootstrap CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Add Font Awesome css file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">';

  foreach ($stylesheets as $stylesheet) {
    echo '<link rel="stylesheet" href="' . htmlspecialchars($stylesheet) . '">';
  }
  echo '
  </head>
  <body>
    <div class="site-wrapper"> <!-- Start wrapper for custom border -->

  ';
}

// Function to generate the navigation
function generateNavagation()
{
  echo '
  <nav class="navbar navbar-expand-lg navbar-dark position-relative" style="background-color: rgba(0, 0, 0, 0.6);">
    <a class="navbar-brand" href="#">Need Logo Here!!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
 ';
}

// Function to generate a footer
function generateFooter()
{
  echo '
<footer class="bg-dark text-light py-4">
  <div class="container text-center">
    <p>&copy; 2024 The Reload Food Truck. All Rights Reserved.</p>
    <div>
      <a href="https://twitter.com" class="text-light mx-2"><i class="fab fa-twitter"></i></a>
      <a href="https://instagram.com" class="text-light mx-2"><i class="fab fa-instagram"></i></a>
    </div>
    <p>Visit us at Range Time, where great food meets great company.</p>
  </div>
</footer>

  <!-- Add the Bootstrap JS file -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
        </div> <!-- End wrapper -->
  </body>
  </html>
  ';
}

// Function to generate the menu
function generateMenu()
{
  echo '
  <div class="card-container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="../media/burger.jpg" class="card-img-top" alt="Burger">
          <div class="card-body">
            <h5 class="card-title">Burgers</h5>
            <p class="card-text">Juicy, grilled burgers topped with your favorite condiments.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="../media/cubano.jpg" class="card-img-top" alt="Fries">
          <div class="card-body">
            <h5 class="card-title">Cubano</h5>
            <p class="card-text">Crispy and golden fries, perfect with any meal.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="../media/jerk_chix.jpg" class="card-img-top" alt="Soda">
          <div class="card-body">
            <h5 class="card-title">Soda</h5>
            <p class="card-text">Wash it all down with an ice-cold soda.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="../media/cheesesteak.jpg" class="card-img-top" alt="Soda">
          <div class="card-body">
            <h5 class="card-title">Soda</h5>
            <p class="card-text">Wash it all down with an ice-cold soda.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="../media/grilled_chz.jpg" class="card-img-top" alt="Soda">
          <div class="card-body">
            <h5 class="card-title">Soda</h5>
            <p class="card-text">Wash it all down with an ice-cold soda.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="../media/taco.jpg" class="card-img-top" alt="Soda">
          <div class="card-body">
            <h5 class="card-title">Soda</h5>
            <p class="card-text">Wash it all down with an ice-cold soda.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="../media/tendy.jpg" class="card-img-top" alt="Soda">
          <div class="card-body">
            <h5 class="card-title">Soda</h5>
            <p class="card-text">Wash it all down with an ice-cold soda.</p>
          </div>
        </div>
      </div>
    </div>
  </div>';
}
