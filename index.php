<?php
$page_title = "Professional Headshots in Palm Beach page | Maicol Photography";
$page_description = "Maicol Photography specializes in headshots, portraits, and personal branding for people who know that being seen is not enough. They want to be known. Real images. Real presence.
";
$canonical_url = "https://www.maicolphotography.com";
$og_image = "https://www.maicolphotography.com/assets/img/og-about.jpg";
$page_type = "website";

include "header.php";
?>

<section class="hero-section">
    <div class="image_contaner">
       <img src="assets/img/professional/photography-maicol.webp"
     alt="Be the standard, not the trend."
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

     <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 gx-4 gy-4" id="gallery">
<?php
$images = [
    "mary-paul-editor-palm-beach-post-maicol-photography.jpg",
    "mckenna-west-planning-project-manager-headshot-west-palm-beach-maicol-photography.webp"
];

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
        <img src="assets/img/professional/images/<?= $img ?>" class="img-fluid" alt="<?= $name ?>">
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

<section class="pricing-section wow animate__animated animate__fadeInUp" data-wow-duration="1s" id="booking">
    <div class="container">

      <!-- 1st Row: Heading + Paragraph -->
      <div class="row">
        <div class="section-heading">
            <h2>You've moved on.<br> <span>Your headshot should too. </span></h2>
            <p> rowth changes how you show up. Your headshot should keep up.</p>
        </div>
      </div>

      <!-- 2nd Row: 2 Columns -->
      <div class="row pricing-wrap g-0">
        <div class="col-lg-6">
          <div class="pricing-card left-card">
            <div class="plan-label">Elevated</div>
            <h2 class="plan-title">Your Presence</h2>
            <div class="plan-subtitle">The Executive Session</div>

            <div class="price">
              <span class="currency">$</span><span class="amount">695</span>
            </div>

            <ul class="feature-list">
              <li>
                <strong>The Strategy:</strong>
                <span>Pre-session consultation to define your executive presence and visual goals.</span>
              </li>
              <li>
                <strong>The Session:</strong>
                <span>Three hours of in-studio photography at West Palm Beach.</span>
              </li>
              <li>
                <strong>The Range:</strong>
                <span>Three to five looks with professional direction throughout.</span>
              </li>
              <li>
                <strong>The Service:</strong>
                <span>Immediate on-site image selection following the shoot.</span>
              </li>
              <li>
                <strong>The Selection:</strong>
                <span>Three retouched images included. Additional images at $100 each.</span>
              </li>
            </ul>

            <a href="https://photosbymaicol.as.me/executive" class="btn btn-book">Book Your Experience</a>
            <div class="bottom-note">Define what you stand for.</div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="pricing-card right-card">
            <div class="plan-label">Entry</div>
            <h2 class="plan-title">Your Identity</h2>
            <div class="plan-subtitle">The Modern Headshot</div>

            <div class="price">
              <span class="currency">$</span><span class="amount">275</span>
            </div>

           <ul class="feature-list">
              <li>
                <strong>The Strategy:</strong>
                <span>Comprehensive prep guide to define look and tone.</span>
              </li>
              <li>
                <strong>The Session:</strong>
                <span>One hour of in-studio photography at West Palm Beach.</span>
              </li>
              <li>
                <strong>The Range:</strong>
                <span>Up to two outfit changes with guided posing during the session.</span>
              </li>
              <li>
                <strong>The Service:</strong>
                <span>Immediate on-site image selection following the shoot.</span>
              </li>
              <li>
                <strong>The Selection:</strong>
                <span>Images purchased individually at $100 per image.</span>
              </li>
            </ul>

            <a href="https://photosbymaicol.as.me/modern" class="btn btn-book">Book Your Experience</a>
            <div class="bottom-note">Tell them who you are.</div>
          </div>
        </div>
      </div>

    </div>
</section>

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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3564.35315836176!2d-80.0622186!3d26.7011625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e779fdd8bf1edd%3A0xa1d945eea64b713f!2sMaicol%20Photography!5e0!3m2!1sen!2sbd!4v1772818362236!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

      <!-- 3rd Row -->
      <div class="row">
        <div class="col-12">
          <h3 class="locations-title">Model Headshots In Palm Beach County And Beyond</h3>
        </div>

        <div class="col-md-4">
          <ul class="location-list">
            <li><i class="fa-solid fa-location-dot"></i>West Palm Beach</li>
            <li><i class="fa-solid fa-location-dot"></i> Palm Beach</li>
            <li><i class="fa-solid fa-location-dot"></i> Palm Beach Gardens</li>
          </ul>
        </div>

        <div class="col-md-4">
          <ul class="location-list">
            <li><i class="fa-solid fa-location-dot"></i> Jupiter</li>
            <li><i class="fa-solid fa-location-dot"></i> Wellington</li>
            <li><i class="fa-solid fa-location-dot"></i> Lake Worth</li>
          </ul>
        </div>

        <div class="col-md-4">
          <ul class="location-list">
            <li><i class="fa-solid fa-location-dot"></i> Boynton Beach</li>
            <li><i class="fa-solid fa-location-dot"></i> Delray Beach</li>
            <li><i class="fa-solid fa-location-dot"></i> Boca Raton</li>
          </ul>
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
              src="https://www.maicolphotography.com/wp-content/uploads/2025/07/jessie-baxter-model-headshot-west-palm-beach-maicol-photography.jpg"
              alt="Professional Headshots"
            />
            <h3>Professional Headshots</h3>
            <p>
              Headshots for executives, entrepreneurs, and professionals who want
              their image to match the way they move today.
            </p>
            <div>
              <a href="model.php" class="btn btn-custom">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Column 2 -->
        <div class="col-lg-6 d-flex">
          <div class="headshot-card">
            <img
              src="https://www.maicolphotography.com/wp-content/uploads/2025/11/the-experience-douglas-elliman-group-maicol-photography.jpg"
              alt="Corporate Headshots"
            />
            <h3>Corporate Headshots</h3>
            <p>
              Headshots for companies, firms, and teams who take their image as
              seriously as their work.
            </p>
            <div>
              <a href="#corporate" class="btn btn-custom">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php include 'footer.php'; ?>