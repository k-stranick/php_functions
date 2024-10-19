<!--
Kyle Stranick
ITN 264 Web App Development 
Assignment 7: Functions
10/18/2024 
-->

<?php
// Include the file with reusable functions
require_once '../logic/globalfunctions.php';

// Generate the header
generateHeader('Menu', ['../css/globalstyle.css', '../css/menu.css']);

//Generate the navigation
generateNavagation();

// Generate the menu
generateMenu();

// Generate the footer
generateFooter();
?>