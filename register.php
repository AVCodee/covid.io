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
        <h2>Covid.io Registration</h2>
        <div class="registerbox">
        <form action="../includes/register.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name" />
            <input type="text" name="email" placeholder="Enter a Valid Email" />
            <input type="text" name="uid" placeholder="Username" />
            <input type="password" name="pwd" placeholder="Password" />
            <input type="password" name="pwdrepeat" placeholder="Repeat Password" />
            <button type="submit" name="submit">Sign Up</button>
        </form>
        </div>
        <a href="login.php"class="alreadyhave">Already have an account? Log in.</a>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "invaliduid"){
                echo "<p>Choose a proper username!</p>";
            }
            else if ($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper email!</p>";
            }
            else if ($_GET["error"] == "passwordmismatch"){
                echo "<p>Passwords don't match!</p>";
            }
            else if ($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong, try again!</p>";
            }
            else if ($_GET["error"] == "usernametaken"){
                echo "<p>Username already exists, try again!</p>";
            }
            else if ($_GET["error"] == "none"){
                echo "<p>You're signed up</p>";
            }
    
        }
        ?>

    </section>
</body>


</html>
