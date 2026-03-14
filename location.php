<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>

.location-section {
  margin:0px auto;
  background: var(--snow);
}

.section-title {
   margin-bottom: 22px;
   text-align:center;
}

.section-text {
  margin: 0 auto 28px;
  color: var(--characoal);
  text-align:center;
}

.contact-line {
  max-width: 1100px;
  margin: 0 auto 36px;
  text-align: center;
  font-size: 1.02rem;
  line-height: 1.9;
  color: var(--characoal);
}

.contact-line strong {
  font-weight: 700;
}

.contact-line a {
  color: var(--pink);
  text-decoration: none;
  transition: all 0.3s ease;
}

.contact-line a:hover {
  color: var(--navy);
  text-decoration: underline;
}

.map-card {
  background: var(--navy);
  border-radius: 10px;
  padding: 15px;
  overflow: hidden;
  box-shadow: 0 12px 35px rgba(10, 26, 47, 0.12);
  margin-bottom: 60px;
}

.map-row {
  --bs-gutter-x: 15px;
  --bs-gutter-y: 15px;
}

.image-box,
.map-box {
  border-radius: 10px;
  overflow: hidden;
  background: var(--white);
  height: 100%;
}

.image-box {
  position: relative;
  min-height: 360px;
  display: flex;
  flex-direction: column;
  background:var(--navy);
}

.image-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  flex: 1 1 auto;
}

.parking-badge {
  width: 100%;
  background: var(--parking-blue);
  color: var(--white);
  font-weight: 700;
  font-size: 1.1rem;
  padding: 16px 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
}

.parking-icon {
  width: 48px;
  height: 48px;
  border: 3px solid var(--white);
  border-radius: 8px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-weight: 900;
  font-size: 1.45rem;
}

.map-box iframe {
  width: 100%;
  height: 100%;
  min-height: 360px;
  border: 0;
}

.locations-title {
  text-align: center;
  color: var(--navy);
  font-size: clamp(1.8rem, 3vw, 2.5rem);
  font-weight: 600;
  margin-bottom: 36px;
}

.location-column {
  display: flex;
  flex-direction: column;
  gap: 18px;
  align-items: flex-start; /* keeps left alignment */
}

.location-link {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  color: var(--characoal);
  text-decoration: none;
  font-size: 1.5rem;
  font-weight: 500;
  line-height: 1.4;
  transition: all 0.3s ease;
}

.location-link i {
  color: var(--gold);
  font-size: 1.15rem;
}

.location-link:hover {
  color: var(--navy);
  transform: translateX(4px);
}

.location-link:hover i {
  color: var(--navy);
}

</style>


<section class="location-section">
<div class="container">
    <div class="section-heading">
          <h2> Your professional headshot experience in <span> <?php echo $heading_title; ?></span></h2>
          <p >
            Conveniently located just minutes from the Royal Park Bridge, my studio offers a private,
            professional space away from the island’s bustle. Easy access from Worth Avenue and South Ocean Blvd
            ensures you can get in, get the perfect shot, and get back to your day.
            </p>
        </div>


<div class="contact-line">
<strong>Maicol Photography</strong> |
1016 Clare Ave, STE 5, West Palm Beach, FL 33401 |
<a href="tel:+15612310580">(561) 231-0580</a> |
<a href="sms:+15612310580">Text Me</a> |
<a href="mailto:photos@maicolphotography.com">photos@maicolphotography.com</a>
</div>


<div class="map-card">
<div class="row map-row">

<div class="col-lg-4">
<div class="image-box">
<img src="https://www.maicolphotography.com/wp-content/uploads/2024/05/TheStudio1016.jpeg" alt="Maicol Photography Studio">

<div class="parking-badge">
<span class="parking-icon">P</span>
<span>FREE PARKING</span>
</div>
</div>
</div>

<div class="col-lg-8">
<div class="map-box">

<iframe
src="https://www.google.com/maps?q=Maicol+Photography,West+Palm+Beach&z=18&output=embed"
loading="lazy">
</iframe>

</div>
</div>

</div>
</div>


<h3 class="locations-title">
Serving professionals across Palm Beach County
</h3>


<div class="row justify-content-center">

<div class="col-md-6 col-lg-4">
<div class="location-column">

<a class="location-link" href="index.php">
<i class="bi bi-geo-alt-fill"></i>
<span>West Palm Beach</span>
</a>

<a class="location-link" href="/professional-headshots-in-palm-beach.php/">
<i class="bi bi-geo-alt-fill"></i>
<span>Palm Beach</span>
</a>

<a class="location-link" href="/palm-beach-gardens-headshots/">
<i class="bi bi-geo-alt-fill"></i>
<span>Palm Beach Gardens</span>
</a>

</div>
</div>


<div class="col-md-6 col-lg-4">
<div class="location-column">

<a class="location-link" href="/boca-raton-headshots/">
<i class="bi bi-geo-alt-fill"></i>
<span>Boca Raton</span>
</a>

<a class="location-link" href="/jupiter-headshots/">
<i class="bi bi-geo-alt-fill"></i>
<span>Jupiter</span>
</a>

<a class="location-link" href="/wellington-headshots/">
<i class="bi bi-geo-alt-fill"></i>
<span>Wellington</span>
</a>

</div>
</div>


<div class="col-md-6 col-lg-4">
<div class="location-column">

<a class="location-link" href="/index.php/">
<i class="bi bi-geo-alt-fill"></i>
<span>Delray Beach</span>
</a>

<a class="location-link" href="/royal-palm-beach-headshots/">
<i class="bi bi-geo-alt-fill"></i>
<span>Royal Palm Beach</span>
</a>

<a class="location-link" href="/boynton-beach-headshots/">
<i class="bi bi-geo-alt-fill"></i>
<span>Boynton Beach</span>
</a>

</div>
</div>

</div>

</div>
</section>