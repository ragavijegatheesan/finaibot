<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $homepage = filter_var($_POST['homepage'], FILTER_SANITIZE_URL);

    // Validate email and URL
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($homepage, FILTER_VALIDATE_URL)) {
        // Recipient email address
        $to = "ragavijegathesan@gmail.com"; // Change to the recipient's email address
        // Email subject
        $subject = "Clicks form request";
        // Email message
        $message = "Email: $email\nHomepage: $homepage";
        // Email headers
        $headers = "From: ragavijegathesan@gmail.com"; // Change to your desired from address

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully.";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Invalid input.";
    }
} else {
    echo "Invalid request method.";
}
?>
