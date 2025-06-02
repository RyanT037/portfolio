<?php
// Start session for form handling
session_start();

// Define variables for dynamic content
$title = "Ryan Tsele | Software Engineer";
$description = "Experienced software developer specializing in web applications and system architecture";

// Page sections - can be customized
$sections = [
    "home" => "Home",
    "about" => "About",
    "skills" => "Skills",
    "projects" => "Projects",
    "contact" => "Contact"
];

// Handle contact form submission
$formSubmitted = false;
$formError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic form validation
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    if (empty($name) || empty($email) || empty($message)) {
        $formError = "All fields are required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = "Invalid email format";
    } else {
        // In a real application, you would send an email here
        // For demo purposes, we'll just set a success flag
        $formSubmitted = true;
        
        // Redirect to avoid form resubmission
        header("Location: " . $_SERVER['PHP_SELF'] . "#contact?success=true");
        exit();
    }
}

// Check if success parameter is set in URL
$formSuccess = isset($_GET['success']) && $_GET['success'] === 'true';

// Include site header
include 'includes/header.php';
?>

<!-- Main Content -->
<main>
    <?php include 'includes/hero.php'; ?>
    <?php include 'includes/about.php'; ?>
    <?php include 'includes/skills.php'; ?>
    <?php include 'includes/projects.php'; ?>
    <?php include 'includes/contact.php'; ?>
</main>

<?php
// Include site footer
include 'includes/footer.php';
?>