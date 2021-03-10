<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
    <section class="registerbox">
        <h2>Covid.io Registration</h2>
        <div class="registerbox">
        <form action="../includes/login.inc.php" method="post">
            <input type="text" name="name" placeholder="Username/Email" />
            <input type="password" name="pwd" placeholder="Password" />
            <button type="submit" name="submit">Log In</button>
        </form>
        </div>
        <a href="login.php">Already have an account? Log in.</a>
    </section>
</body>


</html>
