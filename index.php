<?php
$page_title = "Professional Headshots in West Palm Beach | Maicol Photography";
$page_description = "Professional headshots in West Palm Beach for people who lead with presence. Stop hiding in a thumbnail. Show them who you are.";
$canonical_url = "https://www.maicolphotography.com";
$og_image = "https://www.maicolphotography.com/assets/img/og-about.jpg";
$page_type = "website";

include "header.php";
?>

<section class="hero-section">
    <div class="image_contaner">
       <img src="assets/img/professional/professional-headshots-west-palm-beach-hero-1920x960-nogutter-HIRES.webp"
     alt="professional-headshots-west-palm-beach-hero-1920x960-nogutter-HIRES"
     loading="lazy">
    </div>

</section>
<section class="about-section" >
    <div class="container">
        <div class="row">
            <h2 class="main-title">Be recognized, not introduced.</h2>
            <h1 class="sub-title">Professional Headshots in West Palm Beach</h1>
            <div class="button_cta">
                <a href="#booking">Book Your Experience</a>
            </div>
            <p class="short_description">
               West Palm Beach • Palm Beach County • South Florida • Studio or On-Site 
            </p>
        </div>
    </div>
    
</section>


<section class="branding-section wow animate__animated animate__fadeInUp" data-wow-duration="1s">
    <div class="container">
      <!-- First Row: Video -->
      <div class="video-wrapper">
        <div class="video-box">
          <video id="heroVideo" poster="your-poster-image.jpg" muted loop playsinline>
            <source src="assets/img/professional/Maicol-Hero-video.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>

          <button class="video-control" id="videoToggle" aria-label="Play video">
            <span id="videoIcon">
              <!-- Play icon -->
              <svg viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"></path>
              </svg>
            </span>
            <span class="video-time" id="videoLabel">0:00 / 0:18</span>
          </button>
        </div>
      </div>
        <div class="row text-center pt-5">
          <h2 class="text-white">Why Your Headshot Matters</h2>
        </div>
      <!-- Second Row: 3 Columns -->
      <div class="row features-row">
        <div class="col-lg-4 col-md-6 feature-col wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
          <div class="feature-number">01</div>
          <h3 class="feature-title">Establish Presence</h3>
          <p class="feature-text">
            Define who you are before you walk into the room. Your image speaks first.
          </p>
        </div>

        <div class="col-lg-4 col-md-6 feature-col wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
          <div class="feature-number">02</div>
          <h3 class="feature-title">Control Perception</h3>
          <p class="feature-text">
            Shape how others see you. Stop leaving your first impression to chance.
          </p>
        </div>

        <div class="col-lg-4 col-md-12 feature-col wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
          <div class="feature-number">03</div>
          <h3 class="feature-title">Build Trust</h3>
          <p class="feature-text">
            Align your profile with your reality. Look like the professional you already are.
          </p>
        </div>
      </div>
    </div>
</section>

<section id="recognized-section">
  <div class="recognized-container">

    <h2 class="recognized-title wow animate__animated animate__fadeInUp" data-wow-duration="1s">
      "Am I doing this right?" to "I am recognized."
    </h2>

    <p class="recognized-sub wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
      Most people tense up when the camera comes out. They try too hard. The result looks, at best, uncomfortable.
    </p>

    <div class="recognized-divider wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
      <span>NOT HERE.</span>
      <div class="line"></div>
    </div>

    <p class="recognized-text wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
      I take the lead so you can let go. I guide you out of your head and into your element to capture your absolute best. We don't just look for one lucky shot. We capture the full range of your confidence. The goal is a collection of images that defines who you are, tells
      your story, and establishes your reputation.
    </p>

  </div>
</section>

<section class="gallery-section">
    <div class="container-fluid">

        <div class="section-heading">
            <h2>The faces of <span>West Palm Beach </span></h2>
            <p>The professionals setting the standard in West Palm Beach and Palm Beach County.</p>
        </div>

     <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5" id="gallery">
      <?php
      $images = [
          "mary-paul-editor-palm-beach-post-maicol-photography.webp",
          "gavin-guinan-executive-headshot-west-palm-beach-maicol-photography.webp",
          "cristeta-comerford-chef-headshot-west-palm-beach-maicol-photography.webp",
          "josh-remillard-executive-headshot-palm-beach-gardens-maicol-photography.webp",
          "adiana-nicodinescu-luxury-rental-headshot-west-palm-beach-maicol-photography.webp",
          "robert-sherman-professional-headshot-west-palm-beach.webp",
          "mckenna-west-planning-project-manager-headshot-west-palm-beach-maicol-photography.webp",
          "seth-dillon-ceo-babylon-bee-headshot-west-palm-beach-maicol-photography.webp",
          "vicki-belleus-professional-headshots-west-palm-beach-maicol-photography.webp",
          "victor-ramos-professional-headshot-west-palm-beach-maicol-photography.webp"
      ];

      $url = "assets/img/professional/images/";



      function studio_headshots_photography_alt($filename) {
          $name = pathinfo($filename, PATHINFO_FILENAME);
          $name = str_replace(['-', '_'], ' ', $name);
          return ucwords($name);
      }

      foreach ($images as $index => $img) {

          $filename = basename($img);
          $name = studio_headshots_photography_alt($filename);
          $itemDelay = number_format((($index % 5) * 0.1), 1);
      ?>
          <div class="col gallery-item wow animate__animated animate__zoomInUp" data-wow-delay="<?= $itemDelay ?>s">
              <img src="<?php echo $url ?><?= $img ?>" class="img-fluid" alt="<?= $name ?>">
              <p class="text-center mt-2 small"><?= $name ?></p>
          </div>
      <?php } ?>
      </div>

    </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <div class="lightbox-close" id="closeBtn">&times;</div>
    <div class="arrow arrow-left" id="prev">&#10094;</div>
    <img id="lightbox-img" alt="">
    <div class="arrow arrow-right" id="next">&#10095;</div>
</div>

<section class="reviews-section wow animate__animated animate__fadeInUp" data-wow-duration="1s">
  <div class="container-fluid">
    
    <!-- Row 1: Heading + Paragraph -->
    <div class="row">
       <div class="section-heading">
            <h2>Proof not promises.<br> <span>What clients say. </span></h2>
            <p> Hear it from the professionals who stepped in front of my camera.</p>
        </div>
    </div>

    <!-- Row 2: Google Reviews Widget -->
    <div class="row justify-content-center px-5">
      <div class="col-12">
         <!-- Trustindex Google Reviews Widget -->
        <div class="ti-widget">
         <script defer async src='https://cdn.trustindex.io/loader.js?54af770574b3878a737655a7ed2'></script>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="gallery-section-two wow animate__animated animate__fadeInUp" data-wow-duration="1s">

  <!-- 1st Row -->
  <!-- <div class="container text-center">
    <div class="section-heading">
            <h2>Professional Headshot <span>Portfolio </span></h2>
            <p> Modern professional portraits designed for executives, founders, and personal branding.</p>
        </div>
  </div> -->

  <!-- 2nd Row -->
  <div class="gallery-row-two">

    <div class="gallery-item-two">
      <img src="assets/img/professional/haley-busch-marketing-headshots-william-k-busch-brewing-maicol-photography.webp" alt="Be the standard, not the trend." loading="lazy">
      <div class="overlay"></div>
    </div>

    <div class="gallery-item-two">
      <img src="assets/img/professional/max-eulenhoefer-realtor-west-palm-beach-collage-maicol-photography.webp" alt="Be the standard, not the trend." loading="lazy">
      <div class="overlay"></div>
    </div>

    <div class="gallery-item-two">
      <img src="assets/img/professional/robin-remick-realtor-palm-beach-collage-maicol-photography.webp" alt="Be the standard, not the trend." loading="lazy">
      <div class="overlay"></div>
    </div>

  </div>

</section>

<?php 
include 'product.php' 
 ?>

<?php 
include 'faq-section.php' 
 ?>
<section class="ready-section">
  <div class="container-fluid px-0">
    <div class="ready-box">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-7">
          <div class="ready-content">
            <span class="ready-label">READY TO BEGIN</span>
            <h2>Your image should match who you are today.</h2>
          </div>
        </div>

        <div class="col-lg-4 col-md-5 text-md-end text-start mt-4 mt-md-0">
          <a href="#booking" class="ready-btn">BOOK YOUR EXPERIENCE</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-section">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-5">
          <div class="brand-panel">
            <div class="quote-box">
              <p class="quote-text">
                “Show up as who you are today. And let others adjust to it.”
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
              I'm Maicol Osorio.<br />
              Your Headshot Photographer<br />
              In <span style="color:var(--gold);">West Palm Beach</span>
            </h1>
            <p class="hero-subtitle">Tell me what you need. I’ll handle the rest.</p>

           <?php include 'from.php' ?>



          </div>
        </div>
      </div>
    </div>
</section>

<section class="location-section">
    <div class="container">

      <!-- 1st Row -->
      <div class="row">
        <div class="col-12">
          <div class="section-heading">
            <h2>Where to Get Model Headshots in <span>West Palm Beach </span></h2>
            <p>  Maicol Photography is minutes from I-95 and Okeechobee Blvd in West Palm Beach. Models and performers travel from Palm Beach, Palm Beach Gardens, Jupiter, Wellington, Boca Raton, and across South Florida for headshots that book work.
            Ready to upgrade your portfolio? Show up ready to be remembered.</p>
        </div>

          <div class="contact-info">
            <span>
              <strong>Maicol Photography</strong>
            </span>

            <span class="divider">|</span>

            <span>
              <i class="bi bi-geo-alt-fill me-2"></i>
              1016 Clare Ave, STE 5, West Palm Beach, FL 33401
            </span>

            <span class="divider">|</span>

            <a href="tel:5612310580">
              <i class="bi bi-telephone-fill me-2"></i>
              (561) 231-0580
            </a>

            <span class="divider">|</span>

            <a href="mailto:photos@maicolphotography.com">
              <i class="bi bi-envelope-fill me-2"></i>
              photos@maicolphotography.com
            </a>
          </div>
        </div>
      </div>

      <!-- 2nd Row -->
      <div class="row media-box">
        
        <div class="col-lg-12">
          <div class="map-box">
  <iframe
    src="https://www.google.com/maps?q=Maicol+Photography,West+Palm+Beach&z=18&output=embed"
    width="100%"
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy">
  </iframe>
</div>
        </div>
      </div>

      <!-- 3rd Row -->
      <div class="row">
  <div class="col-12">
    <h3 class="locations-title">Serving professionals across Palm Beach County</h3>
  </div>

  

 

  
</div>
 <?php include 'all-beach-link.php' ?>
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
              src="assets/img/jessie-baxter-model-headshot-west-palm-beach-maicol-photography.webp"
              alt="Professional Headshots"
            />
            <h3><a href="model-headshots.php">Model Headshots</a></h3>
            <p>
             Editorial and commercial portfolios for talent who need images that belong in bigger markets.
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
              src="assets/img/the-experience-douglas-elliman-group-maicol-photography.webp"
              alt="Corporate Headshots"
            />
            <h3><a href="corporate-headshots.php">Corporate Headshots</a></h3>
            <p>
              Headshots for companies, firms, and teams who take their image as
              seriously as their work.
            </p>
            <div>
              <a href="corporate-headshots.php" class="btn btn-custom">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php include 'footer.php'; ?>