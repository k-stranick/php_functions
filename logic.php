<?php
// menu.php

// Define a function to generate a menu
function generateMenu($items) {
    echo '<ul>';
    foreach ($items as $item) {
        echo '<li>' . htmlspecialchars($item) . '</li>';
    }
    echo '</ul>';
}

// Example usage
$menuItems = ['Home', 'About', 'Services', 'Contact'];
generateMenu($menuItems);
?>