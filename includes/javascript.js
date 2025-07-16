
// === GLOBAL VARIABLES ===
const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ".split("");
const floatingLettersContainer = document.getElementById("floating-letters");
const letterElements = [];
const TOTAL_LETTERS = 40; // Reduced from 80 for performance

// === CREATE FLOATING LETTERS ===
function createFloatingLetters() {
  for (let i = 0; i < TOTAL_LETTERS; i++) {
    const letter = document.createElement("div");
    letter.className = "letter";
    letter.textContent = letters[Math.floor(Math.random() * letters.length)];
    letter.style.left = Math.random() * 100 + "%";
    letter.style.top = Math.random() * 100 + "%";
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

// === MOUSE TRACKING EFFECT ===
let mouseX = 0, mouseY = 0;
let mouseMoveQueued = false;

document.addEventListener("mousemove", (e) => {
  mouseX = (e.clientX / window.innerWidth) * 100;
  mouseY = (e.clientY / window.innerHeight) * 100;

  if (!mouseMoveQueued) {
    mouseMoveQueued = true;
    requestAnimationFrame(updateLetterPositions);
  }
});

function updateLetterPositions() {
  letterElements.forEach((letterObj) => {
    const letter = letterObj.element;
    const dx = mouseX - letterObj.x;
    const dy = mouseY - letterObj.y;
    const distance = Math.sqrt(dx * dx + dy * dy);

    if (distance < 20) {
      const angle = Math.atan2(dy, dx) * (180 / Math.PI);
      const push = Math.max(0, 20 - distance) * 0.5;
      const newX = letterObj.x - Math.cos(angle * Math.PI / 180) * push;
      const newY = letterObj.y - Math.sin(angle * Math.PI / 180) * push;

      letter.style.transform = `
        translate(${newX - letterObj.x}vw, ${newY - letterObj.y}vh)
        rotate(${letterObj.originalRotation + angle}deg)
        scale(${1 + (20 - distance) * 0.02})
      `;
      letter.classList.add("active");
    } else {
      letter.style.transform = `rotate(${letterObj.originalRotation}deg)`;
      letter.classList.remove("active");
    }
  });

  mouseMoveQueued = false;
}

// === FLOATING ANIMATION LOOP ===
let animationId;
function animateLetters() {
  const time = Date.now() * 0.001;
  letterElements.forEach((letterObj, i) => {
    const letter = letterObj.element;
    if (!letter.classList.contains("active")) {
      const floatX = Math.cos(time * 0.5 + i) * 1;
      const floatY = Math.sin(time + i) * 2;
      letter.style.transform = `
        translate(${floatX}px, ${floatY}px)
        rotate(${letterObj.originalRotation + Math.sin(time + i) * 5}deg)
      `;
    }
  });
  animationId = requestAnimationFrame(animateLetters);
}

// === TYPEWRITER ===
class TypeWriter {
  constructor(element, texts, speed = 90) {
    this.element = element;
    this.texts = texts;
    this.speed = speed;
    this.textIndex = 0;
    this.charIndex = 0;
    this.isDeleting = false;
    this.currentText = "";
    this.type();
  }

  type() {
    const fullText = this.texts[this.textIndex];
    this.currentText = this.isDeleting
      ? fullText.substring(0, this.charIndex--)
      : fullText.substring(0, this.charIndex++);

    this.element.textContent = this.currentText;

    let typeSpeed = this.isDeleting ? this.speed / 2 : this.speed;
    if (!this.isDeleting && this.charIndex === fullText.length) {
      typeSpeed = 2000; this.isDeleting = true;
    } else if (this.isDeleting && this.charIndex === 0) {
      this.isDeleting = false;
      this.textIndex = (this.textIndex + 1) % this.texts.length;
      typeSpeed = 500;
    }
    setTimeout(() => this.type(), typeSpeed);
  }
}

// === SCROLL SMOOTH ===
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({ behavior: "smooth" });
    }
  });
});

// === RIPPLE EFFECT ===
document.querySelectorAll(".skill-item").forEach((item) => {
  item.addEventListener("click", (e) => {
    const rect = item.getBoundingClientRect();
    const ripple = document.createElement("div");
    ripple.className = "ripple";
    ripple.style.left = `${e.clientX - rect.left}px`;
    ripple.style.top = `${e.clientY - rect.top}px`;
    item.appendChild(ripple);
    setTimeout(() => ripple.remove(), 1000); // from 10s to 1s
  });
});

// === CSS for ripple effect ===
const rippleCSS = document.createElement("style");
rippleCSS.textContent = `
  .ripple {
    position: absolute;
    width: 20px;
    height: 20px;
    background: rgba(255,255,255,0.4);
    border-radius: 50%;
    transform: scale(0);
    animation: ripple 0.8s ease-out;
    pointer-events: none;
    margin-left: -10px;
    margin-top: -10px;
  }
  @keyframes ripple {
    to {
      transform: scale(8);
      opacity: 0;
    }
  }
`;
document.head.appendChild(rippleCSS);

// === RESPONSIVE CAROUSEL ANIMATION SPEED ===
function adjustAnimationSpeed() {
  const width = window.innerWidth;
  const row1 = document.querySelector(".row-1 .carousel-track");
  const row2 = document.querySelector(".row-2 .carousel-track");

  if (!row1 || !row2) return;

  if (width <= 480) {
    row1.style.animationDuration = "8s";
    row2.style.animationDuration = "10s";
  } else if (width <= 768) {
    row1.style.animationDuration = "12s";
    row2.style.animationDuration = "14s";
  } else {
    row1.style.animationDuration = "15s";
    row2.style.animationDuration = "18s";
  }
}
adjustAnimationSpeed();
window.addEventListener("resize", adjustAnimationSpeed);

// === TYPEWRITER INIT ===
document.addEventListener("DOMContentLoaded", () => {
  createFloatingLetters();
  animateLetters();
  new TypeWriter(document.getElementById("typewriter"), [
    "I'm a Full-Stack Developer |",
    "I'm a Web Developer |",
    "I'm a Mobile Developer |",
    "I'm a Problem Solver |",
    "I'm a Creative Coder |",
  ]);
});

