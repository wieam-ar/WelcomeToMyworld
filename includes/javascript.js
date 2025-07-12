// Create floating letters
const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ".split("");
const floatingLettersContainer = document.getElementById("floating-letters");
const letterElements = [];

// Generate random letters across the screen
function createFloatingLetters() {
  for (let i = 0; i < 80; i++) {
    const letter = document.createElement("div");
    letter.className = "letter";
    letter.textContent = letters[Math.floor(Math.random() * letters.length)];

    // Random position
    letter.style.left = Math.random() * 100 + "%";
    letter.style.top = Math.random() * 100 + "%";

    // Random rotation
    letter.style.transform = `rotate(${Math.random() * 360}deg)`;

    floatingLettersContainer.appendChild(letter);
    letterElements.push({
      element: letter,
      x: parseFloat(letter.style.left),
      y: parseFloat(letter.style.top),
      originalRotation: Math.random() * 360,
    });
  }
}

// Mouse movement interaction
let mouseX = 0;
let mouseY = 0;

document.addEventListener("mousemove", (e) => {
  mouseX = (e.clientX / window.innerWidth) * 100;
  mouseY = (e.clientY / window.innerHeight) * 100;

  letterElements.forEach((letterObj, index) => {
    const letter = letterObj.element;
    const letterX = letterObj.x;
    const letterY = letterObj.y;

    // Calculate distance from mouse
    const distance = Math.sqrt(
      Math.pow(mouseX - letterX, 2) + Math.pow(mouseY - letterY, 2)
    );

    // If mouse is close, make letter react
    if (distance < 20) {
      const angle =
        Math.atan2(mouseY - letterY, mouseX - letterX) * (180 / Math.PI);
      const pushDistance = Math.max(0, 20 - distance) * 0.5;

      // Calculate new position (push away from mouse)
      const newX = letterX - Math.cos((angle * Math.PI) / 180) * pushDistance;
      const newY = letterY - Math.sin((angle * Math.PI) / 180) * pushDistance;

      // Apply transformation
      letter.style.transform = `
                        translate(${newX - letterX}vw, ${newY - letterY}vh) 
                        rotate(${letterObj.originalRotation + angle}deg) 
                        scale(${1 + (20 - distance) * 0.02})
                    `;

      // Add active class for glow effect
      letter.classList.add("active");
    } else {
      // Reset to original position and rotation
      letter.style.transform = `rotate(${letterObj.originalRotation}deg)`;
      letter.classList.remove("active");
    }
  });
});

// Subtle floating animation
function animateLetters() {
  letterElements.forEach((letterObj, index) => {
    const letter = letterObj.element;
    const time = Date.now() * 0.001;
    const floatY = Math.sin(time + index) * 2;
    const floatX = Math.cos(time * 0.5 + index) * 1;

    if (!letter.classList.contains("active")) {
      letter.style.transform = `
                        translate(${floatX}px, ${floatY}px) 
                        rotate(${
                          letterObj.originalRotation +
                          Math.sin(time + index) * 5
                        }deg)
                    `;
    }
  });
  requestAnimationFrame(animateLetters);
}

// Initialize
createFloatingLetters();
animateLetters();

// Regenerate letters periodically
setInterval(() => {
  letterElements.forEach((letterObj) => {
    if (Math.random() < 0.1) {
      // 10% chance to change letter
      letterObj.element.textContent =
        letters[Math.floor(Math.random() * letters.length)];
    }
  });
}, 3000);
class TypeWriter {
  constructor(element, texts, speed = 100) {
    this.element = element;
    this.texts = texts;
    this.speed = speed;
    this.textIndex = 0;
    this.charIndex = 0;
    this.isDeleting = false;
    this.currentText = "";
    this.start();
  }

  start() {
    this.type();
  }

  type() {
    const fullText = this.texts[this.textIndex];

    if (this.isDeleting) {
      this.currentText = fullText.substring(0, this.charIndex - 1);
      this.charIndex--;
    } else {
      this.currentText = fullText.substring(0, this.charIndex + 1);
      this.charIndex++;
    }

    this.element.textContent = this.currentText;

    let typeSpeed = this.speed;

    if (this.isDeleting) {
      typeSpeed /= 2; // Faster when deleting
    }

    if (!this.isDeleting && this.charIndex === fullText.length) {
      // Finished typing, pause before deleting
      typeSpeed = 2000;
      this.isDeleting = true;
    } else if (this.isDeleting && this.charIndex === 0) {
      // Finished deleting, move to next text
      this.isDeleting = false;
      this.textIndex = (this.textIndex + 1) % this.texts.length;
      typeSpeed = 500; // Pause before typing next text
    }

    setTimeout(() => this.type(), typeSpeed);
  }
}

// Initialize typewriter effect when page loads
document.addEventListener("DOMContentLoaded", function () {
  const typewriterElement = document.getElementById("typewriter");
  const texts = [
    "I'm a Full-Stack Developer |",
    "I'm a Web Developer |",
    "I'm a Mobile Developer |",
    "I'm a Problem Solver |",
    "I'm a Creative Coder |",
  ];

  new TypeWriter(typewriterElement, texts, 90);
});

// Add smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
      });
    }
  });
});
// Enhanced interactions for modern feel
const skillItems = document.querySelectorAll(".skill-item");
const carouselRows = document.querySelectorAll(".carousel-row");

// Pause animation on hover for each row
carouselRows.forEach((row) => {
  const track = row.querySelector(".carousel-track");

  row.addEventListener("mouseenter", () => {
    track.style.animationPlayState = "paused";
  });

  row.addEventListener("mouseleave", () => {
    track.style.animationPlayState = "running";
  });
});

// Enhanced click interaction with modern ripple effect
skillItems.forEach((item) => {
  item.addEventListener("click", (e) => {
    const rect = item.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const ripple = document.createElement("div");
    ripple.style.position = "absolute";
    ripple.style.borderRadius = "50%";
    ripple.style.background = "rgba(255, 255, 255, 0.4)";
    ripple.style.transform = "scale(0)";
    ripple.style.animation = "ripple 0.8s cubic-bezier(0.25, 0.8, 0.25, 1)";
    ripple.style.left = x + "px";
    ripple.style.top = y + "px";
    ripple.style.width = "20px";
    ripple.style.height = "20px";
    ripple.style.marginLeft = "-10px";
    ripple.style.marginTop = "-10px";
    ripple.style.pointerEvents = "none";

    item.appendChild(ripple);

    setTimeout(() => {
      ripple.remove();
    }, 10000);
  });
});

// Add ripple animation to CSS
const style = document.createElement("style");
style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(8);
                    opacity: 0;
                }
            }
        `;
document.head.appendChild(style);

// Responsive animation speed adjustment
function adjustAnimationSpeed() {
  const width = window.innerWidth;
  const row1Track = document.querySelector(".row-1 .carousel-track");
  const row2Track = document.querySelector(".row-2 .carousel-track");

  if (width <= 480) {
    row1Track.style.animationDuration = "8s";
    row2Track.style.animationDuration = "10s";
  } else if (width <= 768) {
    row1Track.style.animationDuration = "12s";
    row2Track.style.animationDuration = "14s";
  } else {
    row1Track.style.animationDuration = "15s";
    row2Track.style.animationDuration = "18s";
  }
}

// Initialize and handle resize
adjustAnimationSpeed();
window.addEventListener("resize", adjustAnimationSpeed);

// Add intersection observer for enhanced performance
const observerOptions = {
  threshold: 0.1,
  rootMargin: "50px",
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.animationPlayState = "running";
    } else {
      entry.target.style.animationPlayState = "paused";
    }
  });
}, observerOptions);

document.querySelectorAll(".carousel-track").forEach((track) => {
  observer.observe(track);
});

// Add click effects to project cards
document.querySelectorAll(".project-card").forEach((card) => {
  card.addEventListener("click", function () {
    this.style.transform = "scale(0.95)";
    this.style.background =
      "linear-gradient(135deg, rgba(138, 43, 226, 0.3), rgba(255, 107, 107, 0.3))";

    setTimeout(() => {
      this.style.transform = "";
      this.style.background = "";
    }, 200);
  });
});
// Add loading animation to random cards
function randomizeLoading() {
  document.querySelectorAll(".loading-bar").forEach((bar) => {
    const delay = Math.random() * 3;
    bar.style.animationDelay = delay + "s";
  });
}

randomizeLoading();
setInterval(randomizeLoading, 5000);
