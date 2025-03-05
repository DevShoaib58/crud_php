<?php
// Page configuration
$pageTitle = "Login";
$currentPage = "login";

// Include header
include 'includes/header.php';
?>

<!-- Login Form -->
<div class="container">
    <div class="login-container">
        <h2 class="text-center mb-4">Login to Your Account</h2>
        
        <?php
        // Process form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // This is where you would add your PHP authentication code
            // For this example, we'll just show a success message
            echo '<div class="alert alert-success">Login successful! Redirecting...</div>';
        }
        ?>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="mt-3 text-center">
            <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
            <p><a href="#">Forgot password?</a></p>
        </div>
    </div>
</div>

<?php
// Include footer
'includes/footer.php';
?>