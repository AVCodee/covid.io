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
            Welcome to the Covid.io 
            Providing all Covid.19 live updates and reports!
            If you feel any symptoms covid related, 
            Get tested today at a local clinic in your area to be sure 
            We hope everyone takes the proper precautions to ensure the safety of society 
            Wear a mask 
            Practice social distancing 
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
