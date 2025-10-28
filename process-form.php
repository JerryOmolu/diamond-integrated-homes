<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name    = htmlspecialchars($_POST['fullname']);
    $email   = htmlspecialchars($_POST['email']);
    $mobile  = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email
    $to = "info@diamondhomes.ng";

    // Email subject
    $subject = "New Service Request from $name";

    // Email body
    $body = "
    <div style='
        font-family: Arial, sans-serif; 
        background-color: #f8f9fa; 
        padding: 20px; 
        border-radius: 8px; 
        color: #333; 
        max-width: 600px; 
        margin: auto;
        border: 1px solid #e0e0e0;
    '>
        <h2 style='
            color: #0026C1; 
            border-bottom: 3px solid #FF0000; 
            padding-bottom: 10px;
        '>New Service Request</h2>

        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Mobile:</strong> {$mobile}</p>
        <p><strong>Requested Service:</strong> {$service}</p>
        <p><strong>Message:</strong><br>
            <span style='white-space: pre-line;'>{$message}</span>
        </p>
    </div>
";


    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Diamond Integrated Homes <no-reply@diamondhomes.ng>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Your request has been submitted successfully!'); window.location.href='contact';</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your request. Please try again.'); window.location.href='contact';</script>";
    }
} else {
    header("Location: contact");
    exit();
}
?>
