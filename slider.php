<?php
$studio_headshots_photography_images = [
    "sanchellexo-model-portrait-soft-smile-afro-west-palm-beach-maicol-photography.webp",
    "sanchellexo-model-portrait-framing-afro-green-blouse-west-palm-beach-maicol-photography.webp",
    "sanchellexo-model-headshot-afro-hands-up-west-palm-beach-maicol-photography.webp",
    "sanchellexo-model-smiling-portrait-side-angle-afro-west-palm-beach-maicol-photography.webp",
    "sanchellexo-studio-headshot-afro-green-blouse-west-palm-beach-maicol-photography.webp"
];

function studio_headshots_photography_alt($filename) {
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $name = str_replace(['-', '_'], ' ', $name);
    return ucwords($name);
}
?>



<section id="studio-headshots-photography" class="studio-headshots-photography-section px-0">
    <div class="container-fluid px-0">
        
        <!-- First Row: Heading Only -->
        <div class="row g-0">
            <div class="col-12">
                <div class="section-heading text-center py-5">
                    <h2>Model Portfolio Photography  <span>South Florida </span></h2>
                    <p>Your headshots need to show range. One look does not book you.<br>
Together, we create a set that shows how you move so every frame feels like you and reads for the roles you actually want.</p>
                </div>
            </div>
        </div>

        <!-- Second Row: Gallery -->
        <div class="row row-cols-5 g-4 studio-headshots-photography-gallery">
            <?php foreach ($studio_headshots_photography_images as $index => $image): ?>
                <div class="col">
                    <div 
                        class="studio-headshots-photography-item"
                        data-bs-toggle="modal"
                        data-bs-target="#studioHeadshotsPhotographyModal"
                        data-slide-to="<?php echo $index; ?>"
                    >
                        <img 
                            src="assets/img/model-headshots/gallery-2/<?php echo $image; ?>" 
                            alt="<?php echo studio_headshots_photography_alt($image); ?>" 
                            class="img-fluid w-100"
                        >
                        <div class="studio-headshots-photography-overlay">
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
         <!-- <p class="small-text">photographed by Maicol Osorio from Maicol Photography</p> -->

    </div>
</section>

<!-- Modal with Slider -->
<div class="modal fade studio-headshots-photography-modal" id="studioHeadshotsPhotographyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-0 bg-transparent">
            <button type="button" class="btn-close btn-close-white studio-headshots-photography-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
            <div id="studioHeadshotsPhotographyCarousel" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    <?php foreach ($studio_headshots_photography_images as $index => $image): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img 
                                src="assets/img/model-headshots/<?php echo $image; ?>" 
                                class="d-block w-100 studio-headshots-photography-popup-image" 
                                alt="<?php echo studio_headshots_photography_alt($image); ?>"
                            >
                        </div>
                    <?php endforeach; ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#studioHeadshotsPhotographyCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#studioHeadshotsPhotographyCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<style>
#studio-headshots-photography {
    width: 100%;
    background: #fff;
    overflow: hidden;
   
}






.studio-headshots-photography-gallery .col-12,
.studio-headshots-photography-gallery .col-sm-6,
.studio-headshots-photography-gallery .col-lg-3 {
    padding: 0;
}

.studio-headshots-photography-item {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    height: 100%;
}

.studio-headshots-photography-item img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
}

.studio-headshots-photography-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.45);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    opacity: 0;
    visibility: hidden;
    transition: all 0.35s ease;
    padding: 20px;
}

.studio-headshots-photography-overlay-content h5 {
    color: #fff;
    font-size: 20px;
    margin-bottom: 8px;
    transform: translateY(15px);
    transition: all 0.35s ease;
}

.studio-headshots-photography-overlay-content span {
    color: #fff;
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transform: translateY(15px);
    display: inline-block;
    transition: all 0.35s ease;
}

.studio-headshots-photography-item:hover img {
    transform: scale(1.08);
}

.studio-headshots-photography-item:hover .studio-headshots-photography-overlay {
    opacity: 1;
    visibility: visible;
}

.studio-headshots-photography-item:hover .studio-headshots-photography-overlay-content h5,
.studio-headshots-photography-item:hover .studio-headshots-photography-overlay-content span {
    transform: translateY(0);
}

.studio-headshots-photography-modal .modal-dialog {
    max-width: 1200px;
}

.studio-headshots-photography-modal .modal-content {
    box-shadow: none;
}

.studio-headshots-photography-popup-image {
    max-height: 85vh;
    object-fit: contain;
    background: #000;
}

.studio-headshots-photography-close {
    position: absolute;
    top: -45px;
    right: 0;
    z-index: 20;
    font-size: 18px;
}

.studio-headshots-photography-modal .carousel-control-prev,
.studio-headshots-photography-modal .carousel-control-next {
    width: 8%;
}

.studio-headshots-photography-modal .carousel-control-prev-icon,
.studio-headshots-photography-modal .carousel-control-next-icon {
    background-size: 70% 70%;
    background-color: rgba(0, 0, 0, 0.45);
    border-radius: 50%;
    padding: 22px;
}

@media (max-width: 991px) {
    .studio-headshots-photography-item img {
        height: auto;
    }

   
}

@media (max-width: 575px) {
    #studio-headshots-photography {
    
    padding:50px 0px;
}

   
   
}
</style>



<script>
document.addEventListener("DOMContentLoaded", function () {
    const galleryItems = document.querySelectorAll(".studio-headshots-photography-item");
    const carouselElement = document.querySelector("#studioHeadshotsPhotographyCarousel");
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: false,
        ride: false
    });

    galleryItems.forEach(function(item) {
        item.addEventListener("click", function() {
            const slideIndex = parseInt(this.getAttribute("data-slide-to"), 10);
            carousel.to(slideIndex);
        });
    });
});
</script>