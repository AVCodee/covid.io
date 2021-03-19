<?php

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
    $subject = 'Reset Your Password for Covid.io';
    $message = '<p>You are receiving this email because you requested a Password Reset on Covid.io. The link to reset your password is below. If you did not make this request, you can ignore this email</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';


} else {
    header("Location: ../index.php");
}
