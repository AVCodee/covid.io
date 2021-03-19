<?php
    include_once 'header.php';
?>

<html>
<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/login&registerstyle.css" />
</head>
<body>
    <section class="registerbox">
        <h2>Covid.io Password Reset</h2>
        <p>You will be sent an e-mail with Password Reset Instructions.</p>
        <form action="includes/reset-request.inc.php" method="post">
            <input type="text" name="email" placeholder="Enter your email address...">
            <button type="submit" name="reset-request-submit">Send Reset Password Email</button>
        </form> 
        <?php
            if(isset($_GET["reset"])){
                if($_GET["reset"] == "success"){
                    echo '<p class="signupsuccess">Check your e-mail!</p>';
                }
            }
        ?>

    </section>
</body>


</html>
