<?php
$page_title = "Corporate Headshots in Palm Beach page | Maicol Photography";
$page_description = "Your headshot is your casting card. It needs to show your type, your energy, and your range in one glance.";
$canonical_url = "https://www.maicolphotography.com";
$og_image = "https://www.maicolphotography.com/assets/img/og-about.jpg";
$page_type = "website";

include "header.php";
?>

<section class="corporate-hero-section">
  <div class="container">
    <div class="row g-5 align-items-center flex-column-reverse flex-lg-row">
      <div class="col-md-6">
        <div class="heading">
        <h1>Corporate Headshots in <span>West Palm Beach</span></h1>
        <p>Your team is the brand. Let them look like it.</p>
    </div>
      </div>
      <div class="col-md-6">
        <div class="image-contaner">
       <img src="assets/img/corporate-headshots/the-starboard-group-maicol-photography.webp"
     alt="You are the brand. Let them see it"
     loading="lazy">
    </div>
      </div>
    </div>
  </div>
</section>

<section class="infinity-slider">
  <div class="container">
     <h3 class="main-title">Brands that invest in how their people are seen.</h3>
  </div>
    <div class="slider">
  <div class="slide-track">
    <img src="assets/img/corporate-headshots/Fidelity-footer-logo.webp" alt="Fidelity Investments logo, investment firm team headshots client in Florida photographed by Maicol Photography">
    <img src="assets/img/corporate-headshots/douglas-elliman-logo-florida.webp" alt="Douglas Elliman logo, luxury real estate team headshots client in Florida photographed by Maicol Photography">
    <img src="assets/img/corporate-headshots/fox-rothschild-law-firm-logo.webp" alt="Fox Rothschild law firm logo, corporate headshots client photographed by Maicol Photography">
     <img src="assets/img/corporate-headshots/nai-global-logo.webp" alt="NAI Global logo, commercial real estate team headshots client photographed by Maicol Photography">
      <img src="assets/img/corporate-headshots/vault-insurance-logo.webp" alt="Vault Insurance logo, corporate headshots client in Florida photographed by Maicol Photography">
       <img src="assets/img/corporate-headshots/wm-partners-logo-aventura-miami.webp" alt="WM Partners logo, private equity team headshots client in Aventura Miami photographed by Maicol Photography">

    <!-- duplicate for infinite effect -->
   <img src="assets/img/corporate-headshots/Fidelity-footer-logo.webp" alt="Fidelity Investments logo, investment firm team headshots client in Florida photographed by Maicol Photography">
    <img src="assets/img/corporate-headshots/douglas-elliman-logo-florida.webp" alt="Douglas Elliman logo, luxury real estate team headshots client in Florida photographed by Maicol Photography">
    <img src="assets/img/corporate-headshots/fox-rothschild-law-firm-logo.webp" alt="Fox Rothschild law firm logo, corporate headshots client photographed by Maicol Photography">
     <img src="assets/img/corporate-headshots/nai-global-logo.webp" alt="NAI Global logo, commercial real estate team headshots client photographed by Maicol Photography">
      <img src="assets/img/corporate-headshots/vault-insurance-logo.webp" alt="Vault Insurance logo, corporate headshots client in Florida photographed by Maicol Photography">
       <img src="assets/img/corporate-headshots/wm-partners-logo-aventura-miami.webp" alt="WM Partners logo, private equity team headshots client in Aventura Miami photographed by Maicol Photography">
  </div>
</div>
</section>

<section class="about-section wow fadeInUp">
    <div class="container-fluid">
        <div class="row">
            <h3 class="sub-title">Corporate Headshots in West Palm Beach</h3>
            
            <div class="button_cta">
                <a href="#booking">SCHEDULE YOUR EXPERIENCE</a>
            </div>
            
        </div>
        
    </div>
    
</section>





 <section class="gallery-section">
    <div class="container">

        <div class="section-logo">
            <img src="assets/img/corporate-headshots/clc-law-firm-logo-west-palm-beach-florida.webp" alt="Corporate Headshots in West Palm Beach"   loading="lazy">
        </div>

        <div class="row " id="gallery">
            <?php

            $images = glob("assets/img/corporate-headshots/CLC/*.{jpg,jpeg,png,webp}", GLOB_BRACE);
            sort($images); // sort by filename
            $images = array_slice($images, 0, 6); // only first 6 images

            foreach($images as $img){

            $filename = basename($img);
            $alt = ucwords(str_replace('-', ' ', pathinfo($filename, PATHINFO_FILENAME)));

            echo '<div class="col-lg-4 gallery-item wow animate__animated animate__zoomInUp">';
            echo '<img src="'.$img.'" alt="'.$alt.'">';
            echo '</div>';

            }

            ?>
        </div>
        <!-- <p class="small-text">photographed by Maicol Osorio from Maicol Photography</p> -->

    </div>
</section>

 <section class="gallery-section">
    <div class="container">

        <div class="section-logo">
            <img src="assets/img/corporate-headshots/woodline-partners-logo-florida.png" alt="Corporate Headshots in West Palm Beach"   loading="lazy">
        </div>

        <div class="row row-cols-5" id="gallery">
            <?php

            $images = glob("assets/img/corporate-headshots/woodline/*.{jpg,jpeg,png,webp}", GLOB_BRACE);
            sort($images); // sort by filename
            $images = array_slice($images, 0, 5); // only first 6 images

            foreach($images as $img){

            $filename = basename($img);
            $alt = ucwords(str_replace('-', ' ', pathinfo($filename, PATHINFO_FILENAME)));

            echo '<div class="col gallery-item wow animate__animated animate__zoomInUp">';
            echo '<img src="'.$img.'" alt="'.$alt.'">';
            echo '</div>';

            }

            ?>
        </div>
        <!-- <p class="small-text">photographed by Maicol Osorio from Maicol Photography</p> -->

    </div>
</section>

 <section class="gallery-section">
    <div class="container">

        <div class="section-logo">
            <img src="assets/img/corporate-headshots/calypso-logo-fort-lauderdale.webp" alt="Corporate Headshots in West Palm Beach"   loading="lazy">
        </div>

        <div class="row cols-lg-5" id="gallery">
            <?php

            $images = glob("assets/img/corporate-headshots/calpso/*.{jpg,jpeg,png,webp}", GLOB_BRACE);
            sort($images); // sort by filename
            $images = array_slice($images, 0, 8); // only first 6 images

            foreach($images as $img){

            $filename = basename($img);
            $alt = ucwords(str_replace('-', ' ', pathinfo($filename, PATHINFO_FILENAME)));

            echo '<div class="col-6 col-md-3 col-lg-3 gallery-item wow animate__animated animate__zoomInUp">';
            echo '<img src="'.$img.'" alt="'.$alt.'">';
            echo '</div>';

            }

            ?>
        </div>
        <!-- <p class="small-text">photographed by Maicol Osorio from Maicol Photography</p> -->

    </div>
</section>


<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <div class="lightbox-close" id="closeBtn">&times;</div>
    <div class="arrow arrow-left" id="prev">&#10094;</div>
    <img id="lightbox-img" alt="">
    <div class="arrow arrow-right" id="next">&#10095;</div>
</div>



<section class="headshots-team">
  <div class="container">
    <div class="row">
      <h2>Headshots That Define How Your Team is Seen</h2>
      <p>The right headshot builds trust and commands attention. When your team looks aligned and intentional, clients read your business as organized, focused, and reliable. We create images that speak before the introduction so your people walk into every room with authority.</p>
    </div>
  </div>
</section>



<section class="contact-section">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
             

          <div class="brand-panelf">
                    <h2 class="title">
              Your Corporate  Headshot Photographer
              </h2>
               <p class="quote-text">Big decisions, big clients. Your team’s headshots need to look the part.</p>  

            <div class="profile-cardf">
              <div class="profile-image-wrapf">
                <img
                  src="assets/img/Ellipse-7.webp"
                  alt="Maicol Osorio"
                />
              </div>
               <h2 class="profile-namef">Maicol Osorio</h2>
              <p class="profile-rolef">Professional<br />Headshot Photographer</p>
              
            </div>
          </div>
        
        </div>

        <div class="col-lg-6">
          <div class="form-side">
            

            <form id="contactForm" class="needs-validation" novalidate>
              <div class="mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name:" required />
                <div class="invalid-feedback">Please enter your name.</div>
              </div>

              <div class="mb-3">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number:" required />
                <div class="invalid-feedback">Please enter your phone number.</div>
              </div>

              <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email:" required />
                <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>

              <div class="mb-3">
                <textarea class="form-control" id="message" name="message" placeholder="Message:" required></textarea>
                <div class="invalid-feedback">Please enter your message.</div>
              </div>

              <button type="submit" id="submitBtn" class="submit-btn">
                <span class="loading-spinner"></span>
                <span class="btn-text">Send</span>
              </button>

              <div id="statusMessage" class="status-box"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


<section class="headshot-section">
    <div class="container">
      <div class="section-heading">
            <h2>Explore more headshot  <span>experiences.</span></h2>
           
        </div>
      

      <div class="row">
        <!-- Column 1 -->
        <div class="col-lg-6 d-flex">
          <div class="headshot-card">
            <img
              src="assets/img/victor-ramos-professional-headshot-west-palm-beach-maicol-photography.jpg"
              alt="Professional Headshots"
            />
            <h3>Professional Headshots</h3>
            <p>
              HHeadshots for executives, entrepreneurs, and professionals who want their image to match the way they move today.
            </p>
            <div>
              <a href="model-headshots.php" class="btn btn-custom">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Column 2 -->
        <div class="col-lg-6 d-flex">
          <div class="headshot-card">
            <img
              src="assets/img/jessie-baxter-model-headshot-west-palm-beach-maicol-photography.webp"
              alt="Corporate Headshots"
            />
            <h3>Model Headshots</h3>
            <p>
              Editorial and commercial portfolios for talent who need images that belong in bigger markets.
            </p>
            <div>
              <a href="#corporate-headshots.php" class="btn btn-custom">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include 'footer.php'; ?>
