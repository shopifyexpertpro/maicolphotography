<?php
$page_title = "Professional Headshots in Palm Beach | Maicol Photography";
$page_description = "Professional headshots for Palm Beach professionals. Minutes from Palm Beach Island. Your image carries weight here. Make sure it speaks first. Book your session.";
$canonical_url = "maicolphotography.com/professional-headshots-palm-beach";
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
            <h2 class="main-title">Be the standard, not a trend.</h2>
            <h1 class="sub-title">Professional Headshots in Palm Beach</h1>
            <div class="button_cta">
                <a href="#booking">Book Your Experience</a>
            </div>
            <p class="short_description">
              Palm Beach • Palm Beach County • South Florida • Studio or On-Site
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
          <h2 class="text-white">Be Recognized.</h2>
        </div>
      <!-- Second Row: 3 Columns -->
      <div class="row features-row">
        <div class="col-lg-4 col-md-6 feature-col wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
          <div class="feature-number">01</div>
          <h3 class="feature-title">Command Respect</h3>
          <p class="feature-text text-white">
            Ensure your reputation precedes you.
          </p>
        </div>

        <div class="col-lg-4 col-md-6 feature-col wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
          <div class="feature-number">02</div>
          <h3 class="feature-title">Curate Perception</h3>
          <p class="feature-text text-white">
            Maintain a refined image that resonates in every circle.
          </p>
        </div>

        <div class="col-lg-4 col-md-12 feature-col wow animate__animated animate__fadeInUp" data-wow-delay="0.5s">
          <div class="feature-number">03</div>
          <h3 class="feature-title">Confirm Credibilit</h3>
          <p class="feature-text text-white">
           Align your digital prestige with your actual standing.
          </p>
        </div>
      </div>
    </div>
</section>


<section id="recognized-section">
  <div class="recognized-container">

    <h2 class="recognized-title wow animate__animated animate__fadeInUp" data-wow-duration="1s">
      “Am I doing this right?” to “I am recognized.”
    </h2>

    <p class="recognized-sub wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
      Most people tense up when the camera comes out. They try too hard. The result looks, at best, uncomfortable.
    </p>

    <div class="recognized-divider wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
      <span>NOT HERE.</span>
      <div class="line"></div>
    </div>

    <p class="recognized-text wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
      I take the lead so you can let go. I guide you out of your head and into your element to capture your absolute best. We don’t just look for one lucky shot. We capture the full range of your confidence. The goal is a collection of images that defines who you are, tells your story, and establishes your reputation.
    </p>

  </div>
</section>

<section class="gallery-section">
    <div class="container-fluid">

        <div class="section-heading">
            <h2>The faces of <span>Palm Beach </span></h2>
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
            <p>Hear it from the professionals who stepped in front of my camera..</p>
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
include 'product-3.php' 
 ?>


<?php 
include 'faq-section.php' 
 ?>


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
              In <span style="color:var(--gold);">Palm Beach</span>
            </h1>
            <p class="hero-subtitle">Tell me what you need. I’ll handle the rest.</p>

           <?php include 'from.php' ?>



          </div>
        </div>
      </div>
    </div>
</section>

<?php
$heading_title = "Palm Beach";

include 'location.php';
?>

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