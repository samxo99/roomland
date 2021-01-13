 <?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    // Gmail-ზე დატესტვა
    $mailTo = "giorgisamxaradze1999@gmail.com";

    mail();
} 