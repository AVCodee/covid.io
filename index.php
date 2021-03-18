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
            echo "There are currently " . number_format($decoded[0]->positive) . " positive cases in the US.";
            ?>
            
            
            <h1>Covid.io is the top source for Covid- 19 Information</h1>
            <p>Using accurate and responsive data sources, Covid.io strives to bring you a robust and simple interface to see Covid data relevant to you, as well as 
                around the country.
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
