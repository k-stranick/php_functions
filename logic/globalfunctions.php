<?php

function generateHeader($title, $stylesheets = [])
{
    echo `    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($title); ?></title>
        <?php foreach ($stylesheets as $stylesheet): ?>
            <link rel="stylesheet" href="<?php echo htmlspecialchars($stylesheet); ?>">
        <?php endforeach; ?>
    </head>
    <body>
    <header>
        <h1><?php echo htmlspecialchars($title); ?></h1>
    </header>
    `;
}

function generateMenu()
{
    echo `
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: var(--secondary-color);">
    <a class="navbar-brand" href="#">Kyle's Food Truck</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Locations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <h1>Welcome to Kyle's Food Truck</h1>
  <p>We offer delicious street food made fresh. Check out our menu and swing by our location to grab a bite!</p>
  `;
}
// Function to generate a footer
function generateFooter()
{   echo`
    <footer>
    <p>&copy; 2024 Kyle\'s Food Truck. All Rights Reserved.</p>';
<p>Follow us on <a href="https://twitter.com">Twitter</a> and <a href="https://instagram.com">Instagram</a>.</p>
    </footer>
    `;
}
