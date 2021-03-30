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

            <p>Welcome to the Covid.io.</br>
            <p>Providing all Covid.19 live updates and reports!
            If you feel any symptoms covid related, 
            Get tested today at a local clinic in your area to be sure 
            We hope everyone takes the proper precautions to ensure the safety of society 
            Wear a mask.
            Practice social distancing. 
            </p>

        </div>
    </section>

    
    <section id="latestnews">
        <div class="container">
            <h1>Latest National News on Covid-19</h1>
            <!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="http://tools.cdc.gov/podcasts/feed.asp?feedid=183";  
rssfeed_frame_width="600"; 
rssfeed_frame_height="260"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url="https://feed.surfing-waves.com/css/style2a.css"; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "699833f4e93bfdd4f18e3078a77ec0a2"; 
//--> 
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<div style="color:#ccc;font-size:10px; text-align:right; width:600px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a></div> 
<!-- end sw-rss-feed code -->
        </div>

    </section>
    
    
</body>
</html>
