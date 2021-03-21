<?php
    include_once 'header.php';
?>

<main>
    <div class="registerbox">
        <section class="registerbox">
        <h2>Create New Password</h2>
            <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if(empty($selector) || empty($validator)){
                    echo "We couldn't validate your request!";
                } else {
                    if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
            ?> 

                        <form action="includes/reset-password.inc.php" method="post">
                            <input type="hidden" name="selector" value="<?php echo $selector;?>">
                            <input type="hidden" name="validator" value="<?php echo $validator;?>">
                            <input type="password" name="pwd" placeholder="Enter a new Password">
                            <input type="password" name="pwd-repeat" placeholder="Repeat new Password">
                            <button type="submit" name="reset-password-submit">Reset Password</button>
                        </form>
                        
                        <?php
                    }
                }
            ?>

        </section>
    </div>
</main>
