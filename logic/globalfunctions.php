<!--
Kyle Stranick
ITN 264 Web App Development 
Assignment 7: Functions
10/18/2024 
-->

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
    <nav class="navbar navbar-expand-lg navbar-dark position-relative">
        <div class="container">
            <!-- Logo and Brand -->
            <a class="navbar-brand" href="#">
                <img src="../media/logo.png" alt="Logo" class="logo">
            </a>

            <!-- Toggler button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./location.php">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">Contact</a>
                    </li>
                </ul>
            </div>
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
    <p>Visit us at <a href="https://range-time.com">Range Time</a>, where great food meets Freedom.</p>
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
  <div class="menu-container">
    <div class="menu-item">
      <img src="../media/burger.jpg" alt="Burger" class="menu-img">
      <div class="menu-info">
        <h3>Smash Burger</h3>
        <p>Juicy, smashed thin seasoned patty topped with candied bacon, lettuce, garlic aioli, and smoked gouda cheese
        served with fresh cut fries or chips.</p>
      </div>
    </div>
    <div class="menu-item">
      <img src="../media/cubano.jpg" alt="Cubano" class="menu-img">
      <div class="menu-info">
        <h3>Cubano</h3>
        <p>From the heartland of miami to your mouth.
        Toasted Cubano roll with hand-made: mustard, pickles, and pickled red onion; slow braised mojo pork, swiss and Black Forest Ham.</p>
      </div>
    </div>
    <div class="menu-item">
      <img src="../media/jerk_chix.jpg" alt="Jerk Chicken" class="menu-img">
      <div class="menu-info">
        <h3>Jerk Chicken</h3>
        <p>The sanwhich that is just as spicy ad it is sweet. Jerk marinated chicken, fresh pico de gallo, and grilled pinapple, served on a toasted Kaiser roll and served with french fried.</p>
      </div>
    </div>
    <div class="menu-item">
      <img src="../media/cheesesteak.jpg" alt="Cheesesteak" class="menu-img">
      <div class="menu-info">
        <h3>Cheesesteak</h3>
        <p>Shaved ribeye and served with grilled peppers, onion, and covered in melted gouda nad white cheddar. Served with fresh cut fries.</p>
      </div>
    </div>
    <div class="menu-item">
      <img src="../media/grilled_chz.jpg" alt="Grilled Cheese" class="menu-img">
      <div class="menu-info">
        <h3>Grilled Cheese</h3>
        <p>Delicious Twist on a cult classic
        Toasted Brioche with candied bacon and tomato. Smothered in melty smoked gouda and white cheddar. .</p>
      </div>
    </div>
    <div class="menu-item">
      <img src="../media/taco.jpg" alt="Taco" class="menu-img">
      <div class="menu-info">
        <h3>Taco</h3>
        <p>The fastest selling item to date.
        Three fried flour taco shells served with lemon poppey slaw, Mojo braised pork tossed in home made Jerk sauce, fresh pico de gallo, and chipotle aioli. Served with homemade tortilla chips so you can turn your droppings into nachos.</p>
      </div>
    </div>
    <div class="menu-item">
      <img src="../media/tendy.jpg" alt="Tenders" class="menu-img">
      <div class="menu-info">
        <h3>Tenders</h3>
        <p>Crispy, golden chicken tenders that are a crowd favorite.</p>
      </div>
    </div>
  </div>';
}
