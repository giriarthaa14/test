function handleCookieAction(action) {
  // Optionally store the action in localStorage or cookies
  console.log(`User selected: ${action}`);
              
  // Hide the cookie banner
  const banner = document.getElementById('cookie-banner');
  if (banner) {
  banner.style.display = 'none';
  }
  
  function handleCookieAction(action) {
  // Optionally store the action in localStorage or cookies
  console.log(`User selected: ${action}`);
          
  // Hide the cookie banner
  const banner = document.getElementById('cookie-banner');
  if (banner) {
  banner.style.display = 'none';
          
  }
  
  }
  
  }
  const slides = document.getElementById('slides');
      const prev = document.getElementById('prev');
      const next = document.getElementById('next');
  
      let currentIndex = 0;
  
      // Function to show the next slide
      function showNextSlide() {
          currentIndex = (currentIndex + 1) % 3; // Assuming three slides
          slides.scrollTo({
            left: currentIndex * window.innerWidth, // Scroll horizontally
            behavior: 'smooth' // Smooth scroll
          });
      }
  
      // Function to show the previous slide
      function showPrevSlide() {
          currentIndex = (currentIndex - 1 + 3) % 3;
          slides.scrollTo({
            left: currentIndex * window.innerWidth, // Scroll horizontally
            behavior: 'smooth' // Smooth scroll
          });
      }
  
      // Auto-slide every 5 seconds
      setInterval(showNextSlide, 5000);
  
      // Event listeners for buttons
      next.addEventListener('click', showNextSlide);
      prev.addEventListener('click', showPrevSlide);

      document.getElementById("year").textContent = new Date().getFullYear();