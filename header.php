<?php
/**
 * header.php (SEO-friendly, dynamic)
 * Use this in every page:
 *   $page_title, $page_description, $canonical_url, $og_image, $page_type, $noindex
 *   then include 'header.php';
 */

// Defaults (safe fallbacks)
$site_name        = "Maicol Photography";
$site_url         = "https://www.maicolphotography.com/";
$default_title    = $site_name . " | Be recognized, not introduced.";
$default_desc     = "Maicol Photography is a luxury portrait studio serving professionals across West Palm Beach, Palm Beach County, and South Florida. The brand blends NYC edge with Palm Beach sophistication, grounded in presence, clarity, and identity. The tone is confident,
emotionally aware, and unapologetically direct.";
$default_og_image = $site_url . "assets/img/og-image.jpg";
$default_favicon  = $site_url . "assets/img/favicon.png";
$theme_color      = "#0A1A2F";

// Dynamic values (from page), with fallbacks
$page_title       = $page_title       ?? $default_title;
$page_description = $page_description ?? $default_desc;
$canonical_url    = $canonical_url    ?? $site_url;
$og_image         = $og_image         ?? $default_og_image;

// Optional controls
$page_type        = $page_type        ?? "website"; // "website" or "article"
$noindex          = $noindex          ?? false;     // true for private/thank-you pages

// Basic escaping (prevent broken HTML if title/desc contains quotes)
function esc_attr($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Primary SEO -->
<title><?= esc_attr($page_title) ?></title>
<meta name="title" content="<?= esc_attr($page_title) ?>">
<meta name="description" content="<?= esc_attr($page_description) ?>">
<meta name="author" content="<?= esc_attr($site_name) ?>">
<meta name="robots" content="<?= $noindex ? 'noindex,nofollow' : 'index,follow' ?>">

<!-- Optional (keywords not very important today, but fine to keep) -->
<meta name="keywords" content="Maicol Photography, professional photographer, wedding photography, portrait photography, event photography, photography services">

<!-- Canonical -->
<link rel="canonical" href="<?= esc_attr($canonical_url) ?>">

<!-- Open Graph -->
<meta property="og:type" content="<?= esc_attr($page_type) ?>">
<meta property="og:site_name" content="<?= esc_attr($site_name) ?>">
<meta property="og:url" content="<?= esc_attr($canonical_url) ?>">
<meta property="og:title" content="<?= esc_attr($page_title) ?>">
<meta property="og:description" content="<?= esc_attr($page_description) ?>">
<meta property="og:image" content="<?= esc_attr($og_image) ?>">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= esc_attr($page_title) ?>">
<meta name="twitter:description" content="<?= esc_attr($page_description) ?>">
<meta name="twitter:image" content="<?= esc_attr($og_image) ?>">

<!-- Theme / Icons -->
<meta name="theme-color" content="<?= esc_attr($theme_color) ?>">
<link rel="icon" type="image/png" href="<?= esc_attr($default_favicon) ?>">

<!-- Performance -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<!-- Animate.css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

<!-- Main CSS -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/model-headshots.css" rel="stylesheet">
<link href="assets/css/corporate-headshots.css" rel="stylesheet">
<link href="assets/css/about-us.css" rel="stylesheet">
<link href="assets/css/pagesstyle.css" rel="stylesheet">
<link href="assets/css/blogs.css" rel="stylesheet">


<!-- Structured Data (Organization/Service) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Maicol Photography",
  "url": "https://www.maicolphotography.com/",
  "logo": "https://www.maicolphotography.com/assets/img/logo.png",
  "image": "<?= esc_attr($default_og_image) ?>",
  "description": "Professional photography services including weddings, portraits, events and commercial photography.",
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "US"
  },
  "sameAs": [
    "https://facebook.com/",
    "https://instagram.com/",
    "https://twitter.com/"
  ]
}
</script>

</head>


<body>

<header class="site-header">
  <div class="contact-row">

  <div class="contact-item">
    <i class="fas fa-envelope icon"></i>
    <a href="mailto:photos@maicolphotography.com" class="text">
      photos@maicolphotography.com
    </a>
  </div>

  <div class="contact-item">
    <i class="fas fa-phone icon"></i>
    <a href="tel:+15612310580" class="text">
      (561) 231-0580
    </a>
  </div>

  <div class="contact-item">
    <i class="fas fa-map-marker-alt icon"></i>
    <span class="text">
      1016 Clare Ave, STE 5, West Palm Beach, FL 33401
    </span>
  </div>

</div>
  <div class="container-fluid">
     <nav class="navbar navbar-expand-lg maicol-navbar">

      <!-- LOGO -->
      <a class="navbar-brand" href="index.php">
        <img class="brand-logo" src="assets/img/loggo.webp" alt="Maicol Photography Logo">
      </a>

      <!-- SOCIAL ICONS -->
      <div class="social d-flex align-items-center">
        <a href="https://www.instagram.com/maicolheadshots"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.facebook.com/maicolheadshots"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com/in/mosorio/"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>

      <!-- DESKTOP CTA -->
      <a class="cta-btn-header  maicol-cta d-none d-lg-inline-flex"
         href="index.php#booking">
        Book Your Experience
      </a>

      <!-- MOBILE HAMBURGER -->
      <button class="navbar-toggler border-0 shadow-none"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- MENU -->
      <div class="collapse navbar-collapse justify-content-center" id="mainNav">

        <div class="main-menu">

          <a href="index.php">Professional Headshots</a>

          <a href="model-headshots.php">Model Headshots</a>

          <a href="corporate-headshots.php">Corporate Headshots</a>

          <!-- MOBILE CTA -->
          <a class="cta-btn-header d-lg-none mt-3"
             href="index.php#booking">
             Book Your Experience
          </a>

        </div>

      </div>

    </nav>

  </div>
</header>
