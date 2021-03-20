<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = 'covidiopwdreset@gmail.com';
$mail->Password = 'f6%Ae)h975cmxe-';



if (isset($POST[reset-request-submit])){

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://www.covidproject.42web.io/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);    

    $expires = date("U") + 1800;

    require 'dbh.inc.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);

    }

    $sql = "INSERT INFO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close();

    

    $to = $userEmail;
    $mail->setFrom('covidiopwdreset@gmail.com', 'Covid Password-Reset');
    $mail->addReplyTo('covidiopwdreset@gmail.com');
    $mail->addAddress($to, '');
    $mail->Subject = 'Reset Your Password for Covid.io';
    $mail->AltBody = '<p>You are receiving this email because you requested a Password Reset on Covid.io. The link to reset your password is below. If you did not make this request, you can ignore this email</p>';
    //$mail->AltBody .= '<p>Here is your password reset link: </br>';
    //$mail->AltBody .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: Covid.io <covidiopwdreset@gmail.com>\r\n";
    $headers .= "Reply-To: covidiopwdreset@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    if (!$mail->send()){
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message Sent!';
    }

    header("Location: ../reset-password.php?reset=success");

    

} else {
    header("Location: ../index.php");
}
