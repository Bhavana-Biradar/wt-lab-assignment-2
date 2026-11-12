<?php
// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs for security
    $fullname   = htmlspecialchars(trim($_POST['fullname']));
    $email      = htmlspecialchars(trim($_POST['email']));
    $phone      = htmlspecialchars(trim($_POST['phone']));
    $department = htmlspecialchars(trim($_POST['department']));
    $semester   = htmlspecialchars(trim($_POST['semester']));
    $timestamp  = date("F j, Y, g:i a");
} else {
    // Redirect back to form if accessed directly without submission
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Receipt | RVITM Web Tech Assignment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="receipt-container">
        <div class="success-header">
            <h3>Registration Successful!</h3>
            <p>Your application details have been received and recorded.</p>
        </div>

        <div class="receipt-details">
            <div class="receipt-row">
                <span class="receipt-label">Full Name:</span>
                <span class="receipt-value"><?php echo $fullname; ?></span>
            </div>
            <div class="receipt-row">
                <span class="receipt-label">Email Address:</span>
                <span class="receipt-value"><?php echo $email; ?></span>
            </div>
            <div class="receipt-row">
                <span class="receipt-label">Phone Number:</span>
                <span class="receipt-value"><?php echo $phone; ?></span>
            </div>
            <div class="receipt-row">
                <span class="receipt-label">Department:</span>
                <span class="receipt-value"><?php echo $department; ?></span>
            </div>
            <div class="receipt-row">
                <span class="receipt-label">Semester:</span>
                <span class="receipt-value"><?php echo $semester; ?></span>
            </div>
            <div class="receipt-row">
                <span class="receipt-label">Submission Time:</span>
                <span class="receipt-value"><?php echo $timestamp; ?></span>
            </div>
        </div>

        <a href="index.php" class="back-btn">Register Another Response</a>
    </div>

</body>
</html>