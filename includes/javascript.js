/* ═══════════════════════════════════════════════
   PORTFOLIO JS — Modern Edition
   ═══════════════════════════════════════════════ */

// ── CURSOR ──────────────────────────────────────
const cursor      = document.getElementById('cursor');
const cursorTrail = document.getElementById('cursorTrail');
let mx = -100, my = -100;
let tx = -100, ty = -100;
let cursorVisible = false;

document.addEventListener('mousemove', (e) => {
  mx = e.clientX;
  my = e.clientY;
  if (!cursorVisible) {
    cursorVisible = true;
    if (cursor)      cursor.style.opacity = '1';
    if (cursorTrail) cursorTrail.style.opacity = '1';
  }
  // Dot follows immediately
  if (cursor) cursor.style.transform = `translate(calc(${mx}px - 50%), calc(${my}px - 50%))`;
});

// Trail follows with lag
function animateCursorTrail() {
  tx += (mx - tx) * 0.12;
  ty += (my - ty) * 0.12;
  if (cursorTrail) {
    cursorTrail.style.transform = `translate(calc(${tx}px - 50%), calc(${ty}px - 50%))`;
  }
  requestAnimationFrame(animateCursorTrail);
}
animateCursorTrail();

// Hover state on interactive elements
document.querySelectorAll('a, button, .proj-card, .event-img-card, .skill-pill').forEach(el => {
  el.addEventListener('mouseenter', () => {
    cursor?.classList.add('hover');
    cursorTrail?.classList.add('hover');
  });
  el.addEventListener('mouseleave', () => {
    cursor?.classList.remove('hover');
    cursorTrail?.classList.remove('hover');
  });
});


// ── HEADER SCROLL ────────────────────────────────
const header = document.getElementById('header');
let lastScroll = 0;
window.addEventListener('scroll', () => {
  const y = window.scrollY;
  if (y > 60) header.classList.add('scrolled');
  else        header.classList.remove('scrolled');
  lastScroll = y;
}, { passive: true });


// ── NAV: MOBILE TOGGLE ───────────────────────────
const navToggle = document.getElementById('navToggle');
const navLinks  = document.getElementById('navLinks');
navToggle?.addEventListener('click', () => {
  navToggle.classList.toggle('open');
  navLinks.classList.toggle('open');
});
navLinks?.querySelectorAll('.nav__link').forEach(l => {
  l.addEventListener('click', () => {
    navToggle.classList.remove('open');
    navLinks.classList.remove('open');
  });
});


// ── NAV: ACTIVE LINK ON SCROLL ───────────────────
const sections   = document.querySelectorAll('section[id]');
const allNavLinks = document.querySelectorAll('.nav__link[href^="#"]');

const navObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      allNavLinks.forEach(l => l.classList.remove('active'));
      const active = document.querySelector(`.nav__link[href="#${e.target.id}"]`);
      active?.classList.add('active');
    }
  });
}, { threshold: 0.45 });

sections.forEach(s => navObserver.observe(s));


// ── SMOOTH SCROLL ────────────────────────────────
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', function(e) {
    const target = document.querySelector(this.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    target.scrollIntoView({ behavior: 'smooth' });
  });
});


// ── SCROLL REVEAL ────────────────────────────────
const srElements = document.querySelectorAll(
  '#about .about__grid, #projects .proj-card, #skills, #events .event-img-card, #contact .contact__grid, .footer__grid'
);

srElements.forEach((el, i) => {
  el.setAttribute('data-sr', '');
  el.style.transitionDelay = (i * 0.06) + 's';
});

const srObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      srObserver.unobserve(e.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('[data-sr]').forEach(el => srObserver.observe(el));


// ── TYPEWRITER ───────────────────────────────────
class TypeWriter {
  constructor(el, texts, speed = 85) {
    this.el = el;
    this.texts = texts;
    this.speed = speed;
    this.idx = 0;
    this.char = 0;
    this.deleting = false;
    this.tick();
  }
  tick() {
    const full = this.texts[this.idx];
    this.el.textContent = this.deleting
      ? full.slice(0, --this.char)
      : full.slice(0, ++this.char);

    let wait = this.deleting ? this.speed / 2 : this.speed;
    if (!this.deleting && this.char === full.length) { wait = 1800; this.deleting = true; }
    else if (this.deleting && this.char === 0) {
      this.deleting = false;
      this.idx = (this.idx + 1) % this.texts.length;
      wait = 400;
    }
    setTimeout(() => this.tick(), wait);
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const tw = document.getElementById('typewriter');
  if (tw) {
    new TypeWriter(tw, [
      'Full-Stack Developer',
      'Mobile Developer',
      'UI/UX Enthusiast',
      'Problem Solver',
      'Creative Coder',
    ]);
  }
});


// ── CARD TILT (subtle) ───────────────────────────
document.querySelectorAll('.proj-card').forEach(card => {
  card.addEventListener('mousemove', (e) => {
    const rect  = card.getBoundingClientRect();
    const cx    = rect.left + rect.width  / 2;
    const cy    = rect.top  + rect.height / 2;
    const dx    = (e.clientX - cx) / (rect.width  / 2);
    const dy    = (e.clientY - cy) / (rect.height / 2);
    card.style.transform = `translateY(-6px) rotateY(${dx * 4}deg) rotateX(${-dy * 4}deg)`;
    card.style.transition = 'transform 0.1s ease';
  });
  card.addEventListener('mouseleave', () => {
    card.style.transform = '';
    card.style.transition = 'transform 0.4s cubic-bezier(0.4,0,0.2,1)';
  });
});


// ── SKILLS CAROUSEL PAUSE ON HOVER ───────────────
document.querySelectorAll('.skills__track').forEach(track => {
  track.addEventListener('mouseenter', () => track.style.animationPlayState = 'paused');
  track.addEventListener('mouseleave', () => track.style.animationPlayState = 'running');
});


// ── EVENT IMAGES LIGHTBOX (simple) ───────────────
const evtCards = document.querySelectorAll('.event-img-card');
let lightbox = null;

evtCards.forEach(card => {
  card.addEventListener('click', () => {
    const src = card.querySelector('img').src;
    if (!lightbox) {
      lightbox = document.createElement('div');
      lightbox.style.cssText = `
        position:fixed;inset:0;z-index:9000;background:rgba(0,0,0,0.92);
        display:flex;align-items:center;justify-content:center;
        cursor:pointer;backdrop-filter:blur(8px);
        animation:fadeIn 0.2s ease;
      `;
      lightbox.innerHTML = `<img style="max-width:90vw;max-height:90vh;border-radius:12px;box-shadow:0 24px 80px rgba(0,0,0,0.6);" src="">`;
      document.head.insertAdjacentHTML('beforeend','<style>@keyframes fadeIn{from{opacity:0}to{opacity:1}}</style>');
      document.body.appendChild(lightbox);
      lightbox.addEventListener('click', () => { lightbox.remove(); lightbox = null; });
    }
    lightbox.querySelector('img').src = src;
    document.body.appendChild(lightbox);
  });
});


// ── FORM SUBMIT FEEDBACK ─────────────────────────
const form = document.getElementById('contactForm');
form?.addEventListener('submit', (e) => {
  const btn = form.querySelector('button[type="submit"]');
  btn.innerHTML = `<svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="animation:spin 0.8s linear infinite"><path d="M8 1.5A6.5 6.5 0 1 1 1.5 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg> Sending…`;
  btn.disabled = true;
  document.head.insertAdjacentHTML('beforeend','<style>@keyframes spin{to{transform:rotate(360deg)}}</style>');
});