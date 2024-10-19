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
generateHeader('Location', ['../css/globalstyle.css', '../css/location.css']);

// Generate the navigation (this should typically be before the content)
generateNavagation();
?>

<div class="container mt-5">
    <h1 class="text-center">Our Location</h1>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Visit Us</h5>
                    <p class="card-text">38351 Parker Rd<br>Millsboro, DE, 19966</p>
                    <p class="card-text">Phone: (123) 456-7890</p>
                    <p class="card-text">Email: info@range-time.com</p>

                    <!-- Map embedding with a responsive wrapper -->
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3124.5128926359403!2d-75.37013622365163!3d38.45271887281889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b8e0ec58c6960f%3A0x26a3a1209469fee6!2s38531%20Parker%20Rd%2C%20Millsboro%2C%20DE%2019966!5e0!3m2!1sen!2sus!4v1729290087267!5m2!1sen!2sus"
                                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Generate the footer
generateFooter();
?>
