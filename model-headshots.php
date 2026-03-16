<?php
$page_title = "Model Headshots in West Palm Beach | Maicol Photography";
$page_description = "Model headshots in West Palm Beach. Your look is your pitch. We build a set that shows type, energy, and range so casting knows who walks in. Book your session.";
$canonical_url = "https://www.maicolphotography.com/professional-headshots/model-headshots";
$og_image = "https://www.maicolphotography.com/assets/img/og-about.jpg";
$page_type = "website";

include "header.php";
?>

<section class="model-hero-section">
    <div class="image_contaner">
       <img src="assets/img/model-headshots/sanchellexo-model-smiling-headshot-afro-glam-west-palm-beach-maicol-photography.webp"
     alt="You are the brand. Let them see it"
     loading="lazy">
    </div>

    <div class="hero-heading">
        <h1>Model Headshots in <span>West Palm Beach</span></h1>
        <p>You are the brand. Let them see it.</p>
    </div>
</section>


<section class="about-section wow fadeInUp">
    <div class="container">
        <div class="row">
            <h3 class="main-title">Does your headshot get you booked or keep you off the list?</h3>
            <h1 class="sub-title">Model Headshots in West Palm Beach</h1>
            <div class="button_cta">
                <a href="#booking">SCHEDULE YOUR EXPERIENCE</a>
            </div>
            <p class="short_description">
              In this industry, your look is your pitch. One headshot can move you forward or let someone else take the spot. Your image has to show type, energy, and range in a single frame. It needs to look like you on your best working day, so casting can trust who walks into the room.
            </p>
        </div>
    </div>
    
</section>





 <section class="gallery-section">
    <div class="container-fluid">

        <div class="section-heading">
            <h2>The Faces of  <span>West Palm Beach Talent </span></h2>
            <p>You spend time curating your look for casting directors. Does your headshot keep up with who you are today, or does it feel pedestrian?</p>
        </div>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5" id="gallery">
           <?php
      $images2 = [
          "amone-bane-entertainer-headshot-west-palm-beach-maicol-photography.webp",
          "makeup-artist-headshot-west-palm-beach-maicol-photography.webp",
          "daniel-martinez-model-headshot-orlando-maicol-photography.webp",
          "claudia-fernandes-model-headshot-west-palm-beach-maicol-photography-claudia-fernandes.webp",
          "thurman-brown-male-model-headshot-west-palm-beach-maicol-photography.webp",
          "claire-boutte-dancer-headshot-west-palm-beach-maicol-photography.webp",
          "sebastian-torna-muscian-headshots-west-palm-beach-maicol-photography.webp",
          "yoga-model-heashot-west-palm-beach-maicol-photography.webp",
          
          "jt-stockman-comedian-headshot-fortlauderdale-maicol-photography.webp",
          "mature-actress-headshot-westpalm-beach-maicol-photography.webp"
          
      ];

      $url = "assets/img/model-headshots/gallery/";



      function studio_headshot($filename) {
          $name = pathinfo($filename, PATHINFO_FILENAME);
          $name = str_replace(['-', '_'], ' ', $name);
          return ucwords($name);
      }

      foreach ($images2 as $index => $img) {

          $filename = basename($img);
          $name = studio_headshot($filename);
          $itemDelay = number_format((($index % 5) * 0.1), 1);
      ?>
          <div class="col gallery-item wow animate__animated animate__zoomInUp" data-wow-delay="<?= $itemDelay ?>s">
              <img src="<?php echo $url ?><?= $img ?>" class="img-fluid" alt="<?= $name ?>">
              <p class="text-center mt-2 small"><?= $name ?></p>
          </div>
      <?php } ?>
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

<section class="brand-section">
  <div class="container-fluid">
    <div class="brand-grid">

      <!-- LEFT CONTENT -->
      <div class="brand-content">

        <h2>
          You’re not here to blend in.<br>
          <span>You’re here to be remembered.</span>
        </h2>

        <p>
          Your headshot should hold attention when you’re not in the room.
          It needs to feel like you, read clearly to casting, and make them
          want to see more. That is the image we create together.
        </p>

        <a href="#booking" class="brand-btn">
          Schedule Your Experience
        </a>

      </div>

      <!-- RIGHT IMAGES -->
      <div class="brand-images">

        

        <div class="side-images">
          <!-- <img src="assets/img/model-headshots/sanchellexo-model-smiling-headshot-afro-glam-west-palm-beach-maicol-photography.webp" alt="Capture Your Confidence">
          <img src="assets/img/model-headshots/gallery-2/sanchellexo-model-portrait-framing-afro-green-blouse-west-palm-beach-maicol-photography.webp" alt="Capture Your Confidence">
          <img src="assets/img/model-headshots/gallery-2/sanchellexo-studio-headshot-afro-green-blouse-west-palm-beach-maicol-photographyr.webp" alt="Capture Your Confidence"> -->
        </div>

        <div class="main-image">
          <img src="assets/img/model-headshots/Group-428-1-1-1474x1536.png"  alt="Capture Your Confidence">
        </div>

      </div>

    </div>
  </div>
</section>

<?php
include 'slider.php'
?>

<section id="booking" class="booking-section">
  <div class="container">
    <div class="row">
      <div class="section-heading">
        <h2>Step into your <span>next shot</span></h2>
        <p>You’ve done the work. You’ve evolved. Now your headshot needs to catch up. This is not about starting over. It is about showing up for the roles you are ready to own.</p>
      </div>
    </div>

    <div class="row">
      <iframe src="https://app.acuityscheduling.com/schedule.php?owner=32483838&appointmentType=category:The%20Models" width="100%" height="800" frameBorder="0" allow="payment"></iframe>																																	<script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
			
    </div>

  </div>
</section>

<?php 
include 'model-product.php' 
 ?>


<section class="gallery-section-two">

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
      <img src="assets/img/model-headshots/dee-street-graffiti-artist-portrait-collage-west-palm-beach-maicol-photography.webp" alt="Be the standard, not the trend." loading="lazy">
      <div class="overlay"></div>
    </div>

    <div class="gallery-item-two">
      <img src="assets/img/model-headshots/editorial-glam-headshot-portrait-collage-west-palm-beach-maicol-photography.jpg" alt="You are the brand. Let them see it" loading="lazy">
      <div class="overlay"></div>
    </div>

    <div class="gallery-item-two">
      <img src="assets/img/model-headshots/branding-portraits-west-palm-beach-maicol-photography-kyle-thomas-marquez.webp" alt="You are the brand. Let them see it" loading="lazy">
      <div class="overlay"></div>
    </div>

  </div>

   <!-- <p class="small-text">photographed by Maicol Osorio from Maicol Photography</p> -->


</section>

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
            <p>  Maicol Photography is minutes from I-95 and Okeechobee Blvd in West Palm Beach. Models and performers travel from Palm Beach, Palm Beach Gardens, Jupiter, Wellington, Boca Raton, and across South Florida for headshots that book work. Ready to upgrade your portfolio? Show up ready to be remembered.</p>
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
      <div class="row media-box g-4 align-items-stretch">
        <div class="col-lg-5">
          <div class="left-card" style="background:var(--navy)">
            <img src="assets/img/about-us/MaicolPhotography-Studio.webp" alt="Studio location">
            <div class="left-card-bottom">
              <h4>FREE PARKING</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="map-box">
          <iframe
            src="https://www.google.com/maps?q=Maicol+Photography,West+Palm+Beach&z=19&output=embed"
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
          <h3 class="locations-title">Model Headshots In Palm Beach County And Beyond</h3>
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
              src="assets/img/victor-ramos-professional-headshot-west-palm-beach-maicol-photography.jpg"
              alt="Professional Headshots"
            />
            <h3>Professional Headshots</h3>
            <p>
              HHeadshots for executives, entrepreneurs, and professionals who want their image to match the way they move today.
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
              src="assets/img/the-experience-douglas-elliman-group-maicol-photography.webp"
              alt="Corporate Headshots"
            />
            <h3>Corporate Headshots</h3>
            <p>
              Headshots for companies, firms, and teams who take their image as seriously as their work.
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
