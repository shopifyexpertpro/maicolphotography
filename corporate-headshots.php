<?php
$page_title = "Corporate Headshots in Palm Beach page | Maicol Photography";
$page_description = "Your headshot is your casting card. It needs to show your type, your energy, and your range in one glance.";
$canonical_url = "https://www.maicolphotography.com";
$og_image = "https://www.maicolphotography.com/assets/img/og-about.jpg";
$page_type = "website";

include "header.php";
?>

<section class="model-hero-section">
    <div class="image_contaner">
       <img src="assets/img/corporate-headshots/the-starboard-group-maicol-photography.webp"
     alt="You are the brand. Let them see it"
     loading="lazy">
    </div>

    <div class="hero-heading" style="color:var(--navy">
        <h1>Corporate Headshots in <span>West Palm Beach</span></h1>
        <p>Your team is the brand. Let them look like it.</p>
    </div>
</section>

<section class="infinity-slider">
    <div class="slider">
  <div class="slide-track">
    <img src="assets/img/corporate-headshots/clc-law-firm-logo-west-palm-beach-florida.webp" alt="">
    <img src="assets/img/corporate-headshots/woodline-partners-logo-florida.png" alt="">
    <img src="assets/img/corporate-headshots/calypso-logo-fort-lauderdale.webp" alt="">

    <!-- duplicate for infinite effect -->
    <img src="assets/img/corporate-headshots/clc-law-firm-logo-west-palm-beach-florida.webp" alt="">
    <img src="assets/img/corporate-headshots/woodline-partners-logo-florida.png" alt="">
    <img src="assets/img/corporate-headshots/calypso-logo-fort-lauderdale.webp" alt="">
  </div>
</div>
</section>

<section class="about-section wow fadeInUp">
    <div class="container-fluid">
        <div class="row">
            <h1 class="main-title">Brands that invest in how their people are seen.</h1>
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

        <div class="row g-2 row-cols-5" id="gallery">
            <?php

            $images = glob("assets/img/corporate-headshots/CLC/*.{jpg,jpeg,png,webp}", GLOB_BRACE);
            sort($images); // sort by filename
            $images = array_slice($images, 0, 6); // only first 6 images

            foreach($images as $img){

            $filename = basename($img);
            $alt = ucwords(str_replace('-', ' ', pathinfo($filename, PATHINFO_FILENAME)));

            echo '<div class=" gallery-item wow animate__animated animate__zoomInUp">';
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

        <div class="row g-2 row-cols-5" id="gallery">
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

        <div class="row g-4 cols-lg-5" id="gallery">
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







<section class="contact-section">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-5">
          <div class="brand-panel">
            <div class="quote-box">
              <p class="quote-text">
               "Your headshot is your casting card. It needs to show your type, your energy, and your range in one glance."
              </p>
            </div>

            <div class="profile-card">
              <div class="profile-image-wrap">
                <img
                  src="assets/img/Ellipse-7.webp"
                  alt="Maicol Osorio"
                />
              </div>
              <h2 class="profile-name">Maicol Osorio</h2>
              <p class="profile-role">Professional<br />Headshot Photographer</p>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="form-side">
            <h1 class="hero-title">
              Let’s talk about 
              In <span style="color:var(--gold);">your portfolio.</span>
            </h1>
            <p class="hero-subtitle">Use the form to tell me what you’re booking for and where you’re headed. I’ll follow up personally so we can plan a headshot session that supports your casting goals.</p>

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
