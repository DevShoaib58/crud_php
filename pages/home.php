<?php
// Page configuration
$pageTitle = "Home";
$currentPage = "pages/home";

?>
<?php include 'includes/header.php'; ?>
<!-- Hero Section -->
<section class="hero-section">
    <div class="container text-center">
        <h1>Welcome to Our Website</h1>
        <p class="lead">A simple website template with Bootstrap 5 and PHP</p>
        <div class="mt-4">
            <a href="signup.php" class="btn btn-primary me-2">Sign Up</a>
            <a href="login.php" class="btn btn-outline-secondary">Login</a>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature One</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature Two</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature Three</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
// Include footer
include 'includes/footer.php';
?>