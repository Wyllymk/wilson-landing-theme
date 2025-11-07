/**
 * Landing Page Scripts
 * Handles video player and scroll animations
 */

(function () {
  "use strict";

  // ========================================
  // YouTube Video Player
  // ========================================
  const initVideoPlayer = () => {
    const playButton = document.getElementById("playButton");
    const thumbnail = document.getElementById("thumbnail");
    const videoIframe = document.getElementById("videoIframe");

    if (!playButton || !thumbnail || !videoIframe) return;

    // Replace with your actual YouTube video ID
    const youtubeVideoId = "mUGYPlAgJPw";

    playButton.addEventListener("click", function () {
      const iframe = document.createElement("iframe");
      iframe.setAttribute("src", `https://www.youtube.com/embed/${youtubeVideoId}?autoplay=1&rel=0`);
      iframe.setAttribute("frameborder", "0");
      iframe.setAttribute("allow", "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture");
      iframe.setAttribute("allowfullscreen", "");

      videoIframe.appendChild(iframe);
      thumbnail.style.display = "none";
      playButton.style.display = "none";
      videoIframe.style.display = "block";
    });
  };

  // ========================================
  // Intersection Observer for Animations
  // ========================================
  const initScrollAnimations = () => {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: "0px 0px -50px 0px",
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate");
        }
      });
    }, observerOptions);

    // Observe all animatable elements
    const animatableElements = document.querySelectorAll(".features__item-content, " + ".testimonial, " + ".content-section__image, " + ".content-section__text, " + ".use-cases__item");

    animatableElements.forEach((el) => {
      observer.observe(el);
    });
  };

  // ========================================
  // Initialize on DOM Ready
  // ========================================
  const init = () => {
    initVideoPlayer();
    initScrollAnimations();
  };

  // Run when DOM is ready
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
