<?php
$page_title = "Contact page | Maicol Photography";
$page_description = "Maicol Photography specializes in headshots, portraits, and personal branding for people who know that being seen is not enough. They want to be known. Real images. Real presence.
";
$canonical_url = "https://www.maicolphotography.com";
$og_image = "https://www.maicolphotography.com/assets/img/og-about.jpg";
$page_type = "website";

include "header.php";
?>

<?php
$heading = "Terms of Service - Maicol Photography";
$short_desc = "Booking a session with Maicol Photography means you agree to the following.";
$image = "assets/img/Mask-Group-47@2x-1-scaled.webp";
include 'banner.php';
?>

<style>

  
    .intro-text {
      text-align: center;
      font-size: 20px;
      margin-bottom: 70px;
      color: var(--navy);
    }

  
    .terms-block {
      margin-bottom: 28px;
    }

    .terms-block h2 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 14px;
      color: var(--navy);
    }

    .terms-block ul {
      margin: 0;
      padding-left: 34px;
    }

    .terms-block ul li {
      font-size: 20px;
      line-height: 1.6;
      margin-bottom: 2px;
    }

    .final-words p {
      font-size: 20px;
      line-height: 1.7;
      margin-bottom: 0;
      color:var(--characoal);
    }

    @media (max-width: 768px) {
      .intro-text {
        font-size: 18px;
        margin-bottom: 40px;
      }

      .terms-block h2 {
        font-size: 24px;
      }

      .terms-block ul li,
      .final-words p {
        font-size: 16px;
      }
    }
  
</style>

  <section class="terms-section">
    <div class="container">
      

      <div class="terms-content">

        <div class="terms-block">
          <h2>Booking &amp; Rescheduling:</h2>
          <ul>
            <li>Your session time is reserved for you. Rescheduling within 48 hours adds a rescheduling fee.</li>
            <li>No-shows or last-minute cancellations forfeit the session fee.</li>
            <li>Be on time. Late arrivals cut into your session, not the schedule.</li>
          </ul>
        </div>

        <div class="terms-block">
          <h2>Payments:</h2>
          <ul>
            <li>Session fees are due at booking.</li>
            <li>Final images are $100 each, fully retouched, and must be paid in full before delivery.</li>
            <li>Additional services such as makeup, styling, or on-location shoots are billed separately.</li>
          </ul>
        </div>

        <div class="terms-block">
          <h2>Images and Copyright:</h2>
          <ul>
            <li>All images are the property of Maicol Photography, LLC (including Maicol Photography and Maicol Headshots).</li>
            <li>You receive licensed usage for personal and professional purposes: LinkedIn, website, marketing, and print.</li>
            <li>Images cannot be sold, altered, or given to third parties without written approval.</li>
            <li>Photographer retains the right to use images for portfolio, brand, and promotion unless copyright is purchased outright.</li>
          </ul>
        </div>

        <div class="terms-block">
          <h2>Studio and Session Conduct:</h2>
          <ul>
            <li>Respect the space. Overtime or damages are billed directly to your account.</li>
            <li>Guests are your responsibility. Pets and children under 12 require advance approval.</li>
            <li>Keep noise and behavior professional. Do not disrupt other clients or staff.</li>
            <li>For on-location sessions, I am fully insured. You must provide adequate space for gear, lighting, and backdrops.</li>
          </ul>
        </div>

        <div class="terms-block">
          <h2>Liability:</h2>
          <ul>
            <li>Maicol Photography is not responsible for lost belongings, injuries, or technical failures beyond control.</li>
            <li>If files are lost or destroyed, liability is limited to rescheduling a new session.</li>
          </ul>
        </div>

        <div class="terms-block final-words">
          <h2>Final Words:</h2>
          <p>
            These terms exist to protect both you and the work. Every session is handled with professionalism,
            discretion, and care. You show up ready, and I deliver portraits at the level you deserve.
          </p>
        </div>

      </div>
    </div>
  </section>





<?php include 'footer.php'; ?>