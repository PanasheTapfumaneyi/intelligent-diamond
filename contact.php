<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email (your email)
    $recipient = "tapfumaneyi.courtney@gmail.com"; // Replace with your email

    // Subject for your email
    $subject = "New Contact Form Submission";

    // Email content for you
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email";

    // Send email to the site owner
    if (mail($recipient, $subject, $email_content, $headers)) {
        
        // Send confirmation email to user
        $user_subject = "Thank you for contacting us!";
        $user_message = "Hi $name,\n\nThank you for your message. We have received it and will get back to you soon.\n\nBest Regards,\nYour Company";
        $user_headers = "From: no-reply@example.com"; // Adjust accordingly
        
        // Send confirmation email
        mail($email, $user_subject, $user_message, $user_headers);

        // Display a confirmation message in the browser
        echo "<script>alert('Your message has been sent successfully!'); window.location.href = 'index.html';</script>";
        
    } else {
        // Failure message
        echo "<script>alert('Failed to send your message. Please try again later.'); window.location.href = 'index.html';</script>";
    }
}
?>
