<?php
// Page configuration
$pageTitle = "Sign Up";
$currentPage = "signup";

// Include header
include 'includes/header.php';
?>

<!-- Sign Up Form -->
<div class="container">
    <div class="signup-container">
        <h2 class="text-center mb-4">Create an Account</h2>
        
        <?php
        // Process form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // This is where you would add your PHP validation and database code
            // For this example, we'll just show a success message
            echo '<div class="alert alert-success">Account created successfully! <a href="login.php">Login now</a></div>';
        }
        ?>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                <label class="form-check-label" for="terms">I agree to the Terms of Service and Privacy Policy</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>
        <div class="mt-3 text-center">
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</div>

<?php
// Include footer
include 'includes/footer.php';
?>