
<?php
include_once 'header.php';
include 'api/curlget.php';
?>

<div class="container">
    <div class="container">
        <!-- Profile widget -->
        <div class="container">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="img/profileplaceholder.png" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
                    <div class="media-body mb-5 text-white">
               

                    <?php
                        echo $_SESSION["useruid"];
                    
                    ?>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                    </div>
                </div>
            </div>
        
            <div class="px-4 py-3">
                <h5 class="mb-0">About</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Lives in </p>
                    <p class="font-italic mb-0">Last Tested:</p>
                </div>
            </div>
            
        </div>
    </div>
</div>