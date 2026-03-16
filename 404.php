<?php
http_response_code(404);
$page_title = "Page Not Found | Maicol Photography";
$page_description = "The page you are looking for does not exist.";

include 'header.php' ?>
  


<section>
    <div class="container">
        <div class="row py-5 text-center">
            <h1>404</h1>
            <p>There is no page here.</p>
            <p>The page you are looking for does not exist.</p>

            <a href="index.php">Go Back Home</a>
        </div>
    </div>
</section>




<?php include 'footer.php' ?>