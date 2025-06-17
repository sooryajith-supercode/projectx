<?php
session_start();
$verification_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['check_verification'])) {
    $case_code = sanitize_text_field($_POST['case_code']);
    // Example verification logic. Replace with your own.
    if ($case_code === 'YOUR_VALID_CODE') {
        $_SESSION['verification_message'] = '<div class="success">Code is valid!</div>';
    } else {
        $_SESSION['verification_message'] = '<div class="error">Invalid code. Please try again.</div>';
    }
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit();
}
if (isset($_SESSION['verification_message'])) {
    $verification_message = $_SESSION['verification_message'];
    unset($_SESSION['verification_message']);
}
/**
 * Template Name: Case varification
 */
get_header(); 
?>

<section class="case-verification-section">
    <div class="container">
        <div class="case-verification-content">
            <h3 class="heading-1">Verify a Case</h3>
            <p class="text-1">Enter Case Verification Code</p>
            <form method="post">
                <input class="code-input heading-2" type="text" name="case_code" placeholder="Enter code" required>
                <button class="primary-btn text-2" type="submit" name="check_verification">Check Verification</button>
                <?php if (!empty($verification_message)) echo $verification_message; ?>
            </form>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
