new WOW().init();



document.addEventListener("DOMContentLoaded", function () {

  const currentLocation = window.location.pathname;
  const menuItems = document.querySelectorAll(".main-menu a");

  menuItems.forEach(link => {

    const linkPath = new URL(link.href).pathname;

    if (currentLocation === linkPath) {
      link.classList.add("active");
    }

  });

});



// video section


document.addEventListener("DOMContentLoaded", function () {

const video = document.getElementById("heroVideo");
const toggleBtn = document.getElementById("videoToggle");
const label = document.getElementById("videoLabel");
const icon = document.getElementById("videoIcon");

video.muted = true;
video.loop = true;
video.play();

const playIcon = `
<svg viewBox="0 0 24 24">
<path d="M8 5v14l11-7z"></path>
</svg>`;

const pauseIcon = `
<svg viewBox="0 0 24 24">
<path d="M6 5h4v14H6zm8 0h4v14h-4z"></path>
</svg>`;

// format time
function formatTime(sec){
const minutes = Math.floor(sec / 60);
const seconds = Math.floor(sec % 60).toString().padStart(2,"0");
return minutes + ":" + seconds;
}

// set duration when loaded
video.addEventListener("loadedmetadata", function(){
label.textContent = `0:00 / ${formatTime(video.duration)}`;
});

// update timer
video.addEventListener("timeupdate", function(){
label.textContent = `${formatTime(video.currentTime)} / ${formatTime(video.duration)}`;
});

// play pause toggle
toggleBtn.addEventListener("click", function(){

if(video.paused){
video.play();
icon.innerHTML = pauseIcon;
}else{
video.pause();
icon.innerHTML = playIcon;
}

});

// reset icon when loop restarts
video.addEventListener("ended", function(){
video.currentTime = 0;
video.play();
icon.innerHTML = pauseIcon;
});

});


// gallery section
 

const galleryImages = document.querySelectorAll('#gallery img');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');

const next = document.getElementById('next');
const prev = document.getElementById('prev');
const closeBtn = document.getElementById('closeBtn');

let index = 0;

galleryImages.forEach((img, i) => {
    img.addEventListener('click', () => {
        index = i;
        showImage();
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
});

function showImage(){
    lightboxImg.src = galleryImages[index].src;
    lightboxImg.alt = galleryImages[index].alt;
}

next.onclick = () => {
    index = (index + 1) % galleryImages.length;
    showImage();
};

prev.onclick = () => {
    index = (index - 1 + galleryImages.length) % galleryImages.length;
    showImage();
};

closeBtn.onclick = () => {
    lightbox.classList.remove('active');
    document.body.style.overflow = '';
};

lightbox.onclick = (e) => {
    if(e.target === lightbox){
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }
};

document.addEventListener('keydown', (e) => {
    if(!lightbox.classList.contains('active')) return;

    if(e.key === "ArrowRight"){
        next.click();
    }

    if(e.key === "ArrowLeft"){
        prev.click();
    }

    if(e.key === "Escape"){
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }
});


// form submit

    // Replace with your deployed Google Apps Script Web App URL
    const WEB_APP_URL = 'https://script.google.com/macros/s/AKfycbwcYzSoAsIgzEuS2FNgaWiTn92GA1r32AjcJ_ePZpRJwcRuhbs3iA1pDXB_XYrEJapw/exec';

    const contactForm = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const statusMessage = document.getElementById('statusMessage');

    function setStatus(message, type) {
      statusMessage.textContent = message;
      statusMessage.className = 'status-box';
      statusMessage.classList.add(type === 'success' ? 'status-success' : 'status-error');
    }

    function toggleLoading(isLoading) {
      submitBtn.disabled = isLoading;
      submitBtn.classList.toggle('loading', isLoading);
      submitBtn.querySelector('.btn-text').textContent = isLoading ? 'Sending...' : 'Send';
    }

    contactForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      e.stopPropagation();

      if (!contactForm.checkValidity()) {
        contactForm.classList.add('was-validated');
        setStatus('Please fill in all required fields correctly.', 'error');
        return;
      }

      toggleLoading(true);
      statusMessage.className = 'status-box';
      statusMessage.textContent = '';

      const formData = {
        name: document.getElementById('name').value.trim(),
        phone: document.getElementById('phone').value.trim(),
        email: document.getElementById('email').value.trim(),
        message: document.getElementById('message').value.trim()
      };

      try {
        const response = await fetch(WEB_APP_URL, {
          method: 'POST',
          headers: {
            'Content-Type': 'text/plain;charset=utf-8'
          },
          body: JSON.stringify(formData)
        });

        const rawText = await response.text();
        let result;

        try {
          result = rawText ? JSON.parse(rawText) : { success: false, message: 'Empty response from server.' };
        } catch (parseError) {
          console.error('Invalid JSON response:', rawText);
          throw new Error('Server did not return valid JSON. Check your Google Apps Script deployment and response.');
        }

        if (result.success) {
          setStatus('Thank you. Your message has been sent successfully.', 'success');
          contactForm.reset();
          contactForm.classList.remove('was-validated');
        } else {
          throw new Error(result.message || 'Submission failed.');
        }
      } catch (error) {
        setStatus(error.message || 'Something went wrong. Please try again.', 'error');
      } finally {
        toggleLoading(false);
      }
    });



    // Model Headshots
const heroImg = document.querySelector(".image_contaner img");

window.addEventListener("scroll", () => {

    const scrollY = window.scrollY;
    heroImg.style.transform = `translateY(${scrollY * 0.35}px)`;

});


// sticky header



  window.addEventListener("scroll", function () {
    const header = document.querySelector(".site-header");

    if (window.scrollY > 100) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  });
