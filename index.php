<?php
    include_once 'header.php';
    include 'api/curlget.php';
?>


    <section id="mainsplash">
        <div class="container">
            <?php
            if (isset($_SESSION["useruid"])) {
                        echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
                    }
                    
            ?>

            <p>This is your profile page. 
            1 word
    
            </p>

        </div>
    </section>
    
    
    <section id="latestnews">
        <div class="container">
            <h1>Latest National News on Covid-19</h1>
            <p>...</p>
        </div>

    </section>
    
    
</body>
</html>
