<?php
// Include the file with reusable functions
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Truck Menu</title>
</head>
<body>

<?php
// Generate the menu
generateMenu();
?>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="burger.jpg" class="card-img-top" alt="Burger">
        <div class="card-body">
          <h5 class="card-title">Burgers</h5>
          <p class="card-text">Juicy, grilled burgers topped with your favorite condiments.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="fries.jpg" class="card-img-top" alt="Fries">
        <div class="card-body">
          <h5 class="card-title">Fries</h5>
          <p class="card-text">Crispy and golden fries, perfect with any meal.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="soda.jpg" class="card-img-top" alt="Soda">
        <div class="card-body">
          <h5 class="card-title">Soda</h5>
          <p class="card-text">Wash it all down with an ice-cold soda.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
// Generate the footer
generateFooter();
?>

</body>
</html>