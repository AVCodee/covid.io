<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
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
        <a href="login.php">Already have an account? Log in.</a>

    </section>
</body>


</html>
