
var swiper; // Declare the swiper variable

function initializeSwiper() {
  swiper = new Swiper(".mySwiper", {
    slidesPerView: 3, // Default number of slides per view
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}

// Initialize the Swiper on page load
initializeSwiper();

// Check for window width and adjust Swiper settings as needed
function updateSwiper() {
  if (window.innerWidth <= 400) {
    // For screens with a width of 400px or smaller
    if (swiper) {
      swiper.destroy(); // Destroy the existing Swiper instance
    }

    swiper = new Swiper(".mySwiper", {
      slidesPerView: 1, // Show only one slide in full width
      centeredSlides: true,
      spaceBetween: 0, // No space between slides
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    // Hide navigation buttons for screens with width <= 400px
    var nextButton = document.querySelector(".swiper-button-next");
    var prevButton = document.querySelector(".swiper-button-prev");
    if (nextButton) {
      nextButton.style.display = "none"; // Hide the next button
    }
    if (prevButton) {
      prevButton.style.display = "none"; // Hide the previous button
    }
  } else {
    // For screens wider than 400px
    if (swiper) {
      swiper.destroy(); // Destroy the existing Swiper instance
    }

    swiper = new Swiper(".mySwiper", {
      slidesPerView: 3, // Default number of slides per view
      centeredSlides: true,
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
}
// Attach event listener to window resize
window.addEventListener("resize", updateSwiper);

// Call updateSwiper initially to set the Swiper configuration
updateSwiper();