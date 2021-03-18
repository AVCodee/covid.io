<?php

if (isset($POST[reset-request-submit])){

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://www.covidproject.42web.io/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);    

    $expires = date("U") + 1800;

    require 'dbh.inc.php'

} else {
    header("Location: ../index.php");
}
