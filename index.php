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

            <?php
            echo "There are currently " . $decoded[0]->positive . " positive cases in the US.";
            ?>
            
            
            <h1>Insert information here about main site(Slogan)</h1>
            <p>Insert more Information here.</p>

        </div>
    </section>
    
    
    <section id="latestnews">
        <div class="container">
            <h1>Potential Subscription to email updates...</h1>
            <form>
                <input type="email" placeholder="Enter Email..." />
                <button type="submit" class="button_1">Subscribe</button>

            </form>
        </div>

    </section>
    
    
</body>
</html>
