<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $name = $data['name'];
    $email = $data['email'];
    $grade = $data['grade'];

    // Email details
    $to = 'your-email@gmail.com'; // Your email address
    $subject = 'New Student Details';
    $message = "Name: $name\nEmail: $email\nGrade: $grade";
    $headers = 'From: noreply@yourdomain.com' . "\r\n" .
               'Reply-To: noreply@yourdomain.com';

    // Sending email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully';
    } else {
        echo 'Email sending failed';
    }
} else {
    echo 'Invalid request';
}
?>
