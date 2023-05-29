// JavaScript dla obsługi kliknięcia na hamburgerze
function toggleMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('open');
  }
  


const galleryItems = document.querySelectorAll(".gallery-image");
const lightbox = document.getElementById("lightbox");
const lightboxImage = document.getElementById("lightbox-image");

galleryItems.forEach(function(item) {
  item.addEventListener("click", function() {
    console.log('item');
    const imageSource = this.getAttribute("data-src");
    lightboxImage.src = imageSource;
    lightbox.style.display = "flex";
  });
});

lightbox.addEventListener("click", function() {
  lightbox.style.display = "none";
});