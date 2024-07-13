<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($country) && !empty($message)) {
        $to = "shezr69@gmail.com"; // Replace with your email address
        $subject = "New Booking Query from $name";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nCountry: $country\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>
