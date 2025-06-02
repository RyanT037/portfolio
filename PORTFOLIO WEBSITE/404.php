<?php
$title = "404 - Page Not Found";
$description = "The page you are looking for doesn't exist.";

// Include header
include 'includes/header.php';
?>

<section class="error-page section">
    <div class="container">
        <div class="error-content text-center">
            <h1 class="error-title text-gradient">404</h1>
            <h2 class="section-title">Page Not Found</h2>
            <p class="error-text">
                Sorry, the page you are looking for doesn't exist or has been moved.
            </p>
            <a href="index.php" class="btn btn-primary mt-4">Back to Home</a>
        </div>
    </div>
</section>

<?php
// Include footer
include 'includes/footer.php';
?>