<?php 
session_start();

if (isset($_POST['submit'])) {
    $to = 'contact@actualcashrewards.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $reward = $_POST['reward-checkbox'];
    $featured_reward = $_POST['featured-reward-checkbox'];

    $message = '<html><body>';
    $message .='<table>';
    $message .='<tr><td>Name:</td><td>'. $name .'</td></tr>';
    $message .='<tr><td>Email:</td><td>'. $from .'</td></tr>';
    $message .='<tr><td>Phone:</td><td>'. $phone .'</td></tr>';
    $message .='<tr><td>Website:</td><td>'. $website .'</td></tr>';
    $message .='<tr><td>Subject:</td><td>'. $subject .'</td></tr>';
    $message .='<tr><td>Message:</td><td>'. $message .'</td></tr>';
    if ($reward == "on") $message .='<tr><td>Reward?: </td><td>Yes</td></tr>';
    if ($featured_reward == "on") $message .='<tr><td>Featured Reward?: </td><td>Yes</td></tr>';
    $message .='</table>';
    $message .='</body></html>';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "To: {$to}\r\n";
    $headers .= "From: {$name} <{$from}>\r\n";
    $headers .= "Reply-To: <{$to}>\r\n";
    $headers .= "Subject: {$subject}\r\n";
    $headers .= "X-Mailer: PHP/".phpversion()."\r\n";

    mail($from, $subject, $message, $headers);

    $_SESSION['mailsent'] = "Mail Sent!";
    header('location: about.php#contact-us');
}