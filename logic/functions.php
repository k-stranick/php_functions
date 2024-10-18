<?php
// Author: Kyle Stranick
// Description: Reusable PHP functions for generating a menu and footer for the food truck sales website

// Function to generate a menu
function generateMenu() {
    echo '<nav>';
    echo '<ul>';
    echo '<li><a href="index.php">Home</a></li>';
    echo '<li><a href="menu.php">Menu</a></li>';
    echo '<li><a href="locations.php">Locations</a></li>';
    echo '<li><a href="contact.php">Contact</a></li>';
    echo '</ul>';
    echo '</nav>';
}


