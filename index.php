<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wieam Aarika — Developer & Creator</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
  /* ═══════════════════════════════════════════════════════
   WIEAM AARIKA PORTFOLIO — Modern Dark Editorial Theme
   Fonts: Syne (display) + DM Sans (body)
   ═══════════════════════════════════════════════════════ */

/* ─── CSS VARIABLES ─── */
:root {
  --bg:        #0a0a0f;
  --bg-2:      #0f0f18;
  --bg-3:      #13131f;
  --surface:   #161622;
  --surface-2: #1c1c2e;
  --border:    rgba(255,255,255,0.07);
  --border-2:  rgba(255,255,255,0.12);

  --accent:    #6366f1;
  --accent-2:  #818cf8;
  --accent-3:  #4ade80;
  --accent-glow: rgba(99,102,241,0.25);

  --text:      #f0f0ff;
  --text-2:    #a0a0c0;
  --text-3:    #6060a0;

  --font-display: 'Syne', sans-serif;
  --font-body:    'DM Sans', sans-serif;

  --radius:    14px;
  --radius-lg: 22px;
  --transition: 0.3s cubic-bezier(0.4,0,0.2,1);
}

/* ─── RESET ─── */
*, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
html { scroll-behavior: smooth; }

body {
  font-family: var(--font-body);
  background: var(--bg);
  color: var(--text);
  overflow-x: hidden;
  cursor: none;
}

img { max-width: 100%; height: auto; display: block; }
a { color: inherit; text-decoration: none; }
ul { list-style: none; }

/* ─── SCROLLBAR ─── */
::-webkit-scrollbar { width: 4px; }
::-webkit-scrollbar-track { background: var(--bg); }
::-webkit-scrollbar-thumb { background: var(--accent); border-radius: 2px; }

/* ─── CUSTOM CURSOR ─── */
.cursor {
  position: fixed;
  top: -50px; left: -50px;
  z-index: 9999;
  width: 10px; height: 10px;
  background: var(--accent);
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
  transition: width 0.2s ease, height 0.2s ease, opacity 0.2s ease, background 0.2s ease;
}
.cursor-trail {
  position: fixed;
  top: -50px; left: -50px;
  z-index: 9998;
  width: 34px; height: 34px;
  border: 1.5px solid rgba(99,102,241,0.45);
  border-radius: 50%;
  pointer-events: none;
  will-change: transform;
}
.cursor.hover  { width: 22px; height: 22px; opacity: 0.6; background: var(--accent-2); }
.cursor-trail.hover { width: 44px; height: 44px; border-color: rgba(129,140,248,0.5); }

/* Only hide native cursor on true pointer (mouse) devices */
@media (pointer: fine) { body { cursor: none; } a, button { cursor: none; } }
@media (pointer: coarse) { .cursor, .cursor-trail { display: none; } }

/* ─── CONTAINER ─── */
.container { max-width: 1200px; margin: 0 auto; padding: 0 40px; }

/* ─── SECTION SHARED ─── */
section { padding: 120px 0; position: relative; }

.section-label {
  display: flex; align-items: center; gap: 12px;
  font-family: var(--font-body); font-size: 0.78rem;
  font-weight: 500; letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--text-3); margin-bottom: 20px;
}
.section-label span {
  font-family: var(--font-display); font-size: 0.7rem;
  color: var(--accent); background: rgba(99,102,241,0.12);
  border: 1px solid rgba(99,102,241,0.25);
  border-radius: 6px; padding: 2px 8px;
}

.section-title {
  font-family: var(--font-display); font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 700; color: var(--text);
  line-height: 1.15; margin-bottom: 20px;
}
.section-title em { color: var(--accent-2); font-style: normal; }

.section-desc {
  font-size: 1.05rem; color: var(--text-2); line-height: 1.7;
  max-width: 540px; margin-bottom: 60px;
}

/* ─── BUTTONS ─── */
.btn {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-body); font-size: 0.95rem; font-weight: 500;
  padding: 13px 26px; border-radius: 100px; border: none;
  cursor: pointer; transition: var(--transition); text-decoration: none;
  white-space: nowrap;
}
.btn--primary {
  background: var(--accent); color: #fff;
  box-shadow: 0 0 0 0 var(--accent-glow);
}
.btn--primary:hover {
  background: var(--accent-2);
  box-shadow: 0 0 0 8px transparent, 0 8px 32px rgba(99,102,241,0.4);
  transform: translateY(-2px);
}
.btn--ghost {
  background: transparent; color: var(--text-2);
  border: 1px solid var(--border-2);
}
.btn--ghost:hover { background: var(--surface); color: var(--text); transform: translateY(-2px); }
.btn--outline {
  background: transparent; color: var(--accent-2);
  border: 1px solid rgba(129,140,248,0.3);
}
.btn--outline:hover { background: rgba(99,102,241,0.1); transform: translateY(-2px); }
.btn--full { width: 100%; justify-content: center; border-radius: var(--radius); }


/* ══════════════════════════════════════════════
   NAVIGATION
══════════════════════════════════════════════ */
#header {
  position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
  padding: 0; transition: background 0.3s, backdrop-filter 0.3s;
}
#header.scrolled {
  background: rgba(10,10,15,0.85);
  backdrop-filter: blur(18px);
  border-bottom: 1px solid var(--border);
}

.nav {
  max-width: 1200px; margin: 0 auto; padding: 22px 40px;
  display: flex; align-items: center;
}

.nav__logo {
  font-family: var(--font-display); font-size: 1.5rem; font-weight: 800;
  color: var(--text); letter-spacing: -0.02em; margin-right: auto;
}
.nav__logo span { color: var(--accent); }

.nav__links {
  display: flex; align-items: center; gap: 4px;
}
.nav__link {
  font-size: 0.9rem; font-weight: 500; color: var(--text-2);
  padding: 8px 14px; border-radius: 8px;
  transition: var(--transition); position: relative;
}
.nav__link:hover, .nav__link.active { color: var(--text); background: var(--surface); }
.nav__link--cta {
  color: var(--accent-2); border: 1px solid rgba(129,140,248,0.25);
  background: rgba(99,102,241,0.08); margin-left: 8px;
}
.nav__link--cta:hover { background: rgba(99,102,241,0.18); color: var(--text); }

.nav__toggle { display: none; }


/* ══════════════════════════════════════════════
   HERO
══════════════════════════════════════════════ */
#hero {
  min-height: 100vh; display: flex; align-items: center;
  padding: 120px 0 80px; position: relative; overflow: hidden;
}

.hero__bg {
  position: absolute; inset: 0; pointer-events: none;
}
.hero__grid {
  position: absolute; inset: 0;
  background-image:
    linear-gradient(var(--border) 1px, transparent 1px),
    linear-gradient(90deg, var(--border) 1px, transparent 1px);
  background-size: 60px 60px;
  mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 30%, transparent 100%);
}
.hero__orb {
  position: absolute; border-radius: 50%; filter: blur(80px); opacity: 0.35;
  animation: orbFloat 8s ease-in-out infinite;
}
.hero__orb--1 { width: 600px; height: 600px; background: radial-gradient(circle, #6366f1, transparent 70%); top: -200px; right: -100px; animation-delay: 0s; }
.hero__orb--2 { width: 400px; height: 400px; background: radial-gradient(circle, #818cf8, transparent 70%); bottom: 0; left: -150px; animation-delay: -3s; opacity: 0.2; }
.hero__orb--3 { width: 300px; height: 300px; background: radial-gradient(circle, #4ade80, transparent 70%); top: 40%; left: 30%; animation-delay: -5s; opacity: 0.15; }

@keyframes orbFloat {
  0%, 100% { transform: translateY(0) scale(1); }
  50%       { transform: translateY(-30px) scale(1.05); }
}

.hero__content {
  max-width: 1200px; margin: 0 auto; padding: 0 40px;
  position: relative; z-index: 1;
}

.hero__eyebrow {
  display: inline-flex; align-items: center; gap: 10px;
  font-size: 0.82rem; font-weight: 500; letter-spacing: 0.08em;
  color: var(--accent-3);
  background: rgba(74,222,128,0.08); border: 1px solid rgba(74,222,128,0.2);
  border-radius: 100px; padding: 6px 14px;
  margin-bottom: 36px;
  animation: fadeUp 0.6s ease both;
}
.hero__dot {
  width: 7px; height: 7px; background: var(--accent-3);
  border-radius: 50%; animation: pulse 2s infinite;
}
@keyframes pulse {
  0%, 100% { box-shadow: 0 0 0 0 rgba(74,222,128,0.6); }
  50%       { box-shadow: 0 0 0 6px rgba(74,222,128,0); }
}

.hero__title {
  font-family: var(--font-display); font-weight: 800;
  font-size: clamp(3.5rem, 8vw, 7rem); line-height: 1;
  letter-spacing: -0.03em; margin-bottom: 28px;
  display: flex; flex-direction: column;
}
.hero__title-line {
  display: block; overflow: hidden;
  animation: slideReveal 0.9s cubic-bezier(0.4,0,0.2,1) both;
}
.hero__title-line:nth-child(2) { animation-delay: 0.12s; }
.hero__title-line:nth-child(3) { animation-delay: 0.24s; }
.hero__title-line--accent { color: var(--accent-2); }
@keyframes slideReveal {
  from { transform: translateY(110%); opacity: 0; }
  to   { transform: translateY(0);    opacity: 1; }
}

.hero__subtitle {
  font-size: clamp(1rem, 1.6vw, 1.2rem); color: var(--text-2);
  line-height: 1.7; max-width: 520px; margin-bottom: 40px;
  animation: fadeUp 0.8s 0.4s ease both;
}

.hero__actions { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 64px;
  animation: fadeUp 0.8s 0.55s ease both; }

.hero__stats {
  display: flex; align-items: center; gap: 32px;
  animation: fadeUp 0.8s 0.7s ease both;
}
.hero__stat-num {
  display: block; font-family: var(--font-display);
  font-size: 2rem; font-weight: 800; color: var(--text); line-height: 1;
}
.hero__stat-label { font-size: 0.78rem; color: var(--text-3); letter-spacing: 0.06em; }
.hero__stat-divider { width: 1px; height: 40px; background: var(--border-2); }

.hero__scroll {
  position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%);
  display: flex; flex-direction: column; align-items: center; gap: 10px;
  font-size: 0.72rem; letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--text-3); z-index: 1;
  animation: fadeUp 1s 1s ease both;
}
.hero__scroll-line {
  width: 1px; height: 50px;
  background: linear-gradient(to bottom, var(--text-3), transparent);
  animation: scrollLine 2s ease-in-out infinite;
}
@keyframes scrollLine {
  0%, 100% { opacity: 1; transform: scaleY(1); transform-origin: top; }
  50%       { opacity: 0.3; transform: scaleY(0.5); }
}

@keyframes fadeUp {
  from { transform: translateY(24px); opacity: 0; }
  to   { transform: translateY(0);    opacity: 1; }
}


/* ══════════════════════════════════════════════
   ABOUT
══════════════════════════════════════════════ */
#about { background: var(--bg-2); }

.about__grid {
  display: grid; grid-template-columns: 1fr 1.4fr;
  gap: 80px; align-items: center;
}

.about__image-wrap {
  position: relative; display: inline-block;
}
.about__img {
  width: 100%; max-width: 360px;
  border-radius: var(--radius-lg);
  object-fit: cover; aspect-ratio: 3/4;
  position: relative; z-index: 1;
}
.about__image-frame {
  position: absolute; top: 16px; left: 16px; right: -16px; bottom: -16px;
  border: 1.5px solid rgba(99,102,241,0.3); border-radius: var(--radius-lg);
  z-index: 0; transition: var(--transition);
}
.about__image-wrap:hover .about__image-frame {
  top: 12px; left: 12px; right: -12px; bottom: -12px;
  border-color: var(--accent);
}
.about__badge {
  position: absolute; bottom: 24px; right: -20px; z-index: 2;
  display: flex; align-items: center; gap: 8px;
  background: var(--bg); border: 1px solid var(--border-2);
  border-radius: 100px; padding: 10px 18px;
  font-size: 0.82rem; font-weight: 500; color: var(--text-2);
  box-shadow: 0 8px 32px rgba(0,0,0,0.4);
}
.about__badge i { color: var(--accent); }

.about__content-col { display: flex; flex-direction: column; gap: 0; }

.typewriter-wrap { margin: 16px 0 24px; }
.typewriter {
  font-family: var(--font-display); font-size: 1.1rem;
  font-weight: 600; color: var(--accent-2);
  border-right: 2px solid var(--accent);
  padding-right: 3px;
  animation: blink 1s step-end infinite;
}
@keyframes blink {
  50% { border-color: transparent; }
}

.about__text { color: var(--text-2); line-height: 1.8; font-size: 1rem; margin-bottom: 16px; }

.about__actions { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 32px; }


/* ══════════════════════════════════════════════
   PROJECTS
══════════════════════════════════════════════ */
#projects { background: var(--bg); }

.projects__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.proj-card {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex; flex-direction: column;
  transition: var(--transition);
  position: relative;
}
.proj-card::before {
  content: ''; position: absolute; inset: 0;
  border-radius: var(--radius-lg);
  background: linear-gradient(135deg, rgba(99,102,241,0.06), transparent 60%);
  opacity: 0; transition: var(--transition); pointer-events: none;
}
.proj-card:hover {
  transform: translateY(-6px);
  border-color: rgba(99,102,241,0.3);
  box-shadow: 0 20px 50px rgba(0,0,0,0.4), 0 0 0 1px rgba(99,102,241,0.1);
}
.proj-card:hover::before { opacity: 1; }

.proj-card--wide { grid-column: span 1; }

.proj-card__img-wrap {
  aspect-ratio: 16/9; overflow: hidden;
  margin: 10px 10px 0; border-radius: 12px; flex-shrink: 0;
  position: relative;
}
.proj-card__img {
  width: 100%; height: 100%; object-fit: cover;
  transition: transform 0.5s cubic-bezier(0.4,0,0.2,1);
}
.proj-card:hover .proj-card__img { transform: scale(1.06); }
.proj-card__img-overlay {
  position: absolute; inset: 0;
  background: linear-gradient(to bottom, transparent 50%, rgba(10,10,15,0.6));
  pointer-events: none;
}

.proj-card__body {
  padding: 20px 22px 22px;
  display: flex; flex-direction: column; flex: 1;
}
.proj-card__header {
  display: flex; align-items: flex-start;
  justify-content: space-between; gap: 12px; margin-bottom: 10px;
}
.proj-card__title {
  font-family: var(--font-display); font-size: 1.15rem;
  font-weight: 700; color: var(--text); line-height: 1.2;
}
.proj-card__links { display: flex; gap: 8px; flex-shrink: 0; }
.proj-icon-link {
  width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;
  color: var(--text-3); font-size: 0.85rem;
  border: 1px solid var(--border); border-radius: 8px;
  transition: var(--transition);
}
.proj-icon-link:hover {
  color: var(--text); background: var(--surface-2); border-color: var(--border-2);
}

.proj-card__desc {
  font-size: 0.875rem; color: var(--text-2); line-height: 1.65;
  flex: 1; margin-bottom: 16px;
}
.proj-card__tags { display: flex; flex-wrap: wrap; gap: 6px; }
.proj-tag {
  font-size: 0.68rem; font-weight: 700; letter-spacing: 0.08em;
  text-transform: uppercase; color: var(--accent-3);
  border: 1px solid rgba(74,222,128,0.3); border-radius: 6px;
  padding: 3px 9px; background: rgba(74,222,128,0.06);
  transition: var(--transition);
}
.proj-tag:hover { background: rgba(74,222,128,0.12); }


/* ══════════════════════════════════════════════
   SKILLS
══════════════════════════════════════════════ */
#skills { background: var(--bg-2); padding-bottom: 120px; }
#skills .container { margin-bottom: 60px; }

.skills__carousel-wrap { position: relative; overflow: hidden; padding: 10px 0; }
.skills__fade {
  position: absolute; top: 0; bottom: 0; width: 150px; z-index: 2; pointer-events: none;
}
.skills__fade--left  { left:  0; background: linear-gradient(to right,  var(--bg-2), transparent); }
.skills__fade--right { right: 0; background: linear-gradient(to left,   var(--bg-2), transparent); }

.skills__row { overflow: hidden; margin-bottom: 16px; }
.skills__track {
  display: flex; gap: 12px;
  width: max-content;
}
.skills__track--fwd { animation: trackFwd 30s linear infinite; }
.skills__track--rev { animation: trackRev 35s linear infinite; }
@keyframes trackFwd { from { transform: translateX(0); } to { transform: translateX(-50%); } }
@keyframes trackRev { from { transform: translateX(-50%); } to { transform: translateX(0); } }

.skill-pill {
  display: flex; align-items: center; gap: 10px;
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 100px; padding: 10px 18px 10px 12px;
  font-size: 0.875rem; font-weight: 500; color: var(--text-2);
  white-space: nowrap; transition: var(--transition); cursor: default;
}
.skill-pill:hover {
  background: var(--surface-2); border-color: var(--border-2);
  color: var(--text); transform: scale(1.04);
}
.skill-pill img {
  width: 22px; height: 22px; object-fit: contain; flex-shrink: 0;
}


/* ══════════════════════════════════════════════
   EVENTS / GALLERY
══════════════════════════════════════════════ */
#events { background: var(--bg); }

.events__masonry {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 16px; align-items: start;
}
.events__col { display: flex; flex-direction: column; gap: 16px; }
.events__col--offset { margin-top: 48px; }

.event-img-card {
  border-radius: var(--radius); overflow: hidden;
  border: 1px solid var(--border);
  position: relative; cursor: pointer;
}
.event-img-card img {
  width: 100%; height: 100%; object-fit: cover;
  transition: transform 0.5s ease;
  aspect-ratio: 4/3;
}
.event-img-card:nth-child(even) img { aspect-ratio: 3/4; }
.event-img-card:hover img { transform: scale(1.05); }
.event-img-card::after {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(to top, rgba(10,10,15,0.5), transparent 60%);
  opacity: 0; transition: var(--transition);
}
.event-img-card:hover::after { opacity: 1; }


/* ══════════════════════════════════════════════
   CONTACT
══════════════════════════════════════════════ */
#contact {
  background: var(--bg-2);
  border-top: 1px solid var(--border);
}

.contact__grid {
  display: grid; grid-template-columns: 1fr 1.2fr;
  gap: 80px; align-items: start;
}

.contact__details { margin: 36px 0; display: flex; flex-direction: column; gap: 16px; }
.contact__details li { display: flex; align-items: center; gap: 14px; color: var(--text-2); font-size: 0.95rem; }
.contact__details a { color: var(--text-2); transition: color 0.2s; }
.contact__details a:hover { color: var(--accent-2); }
.contact__icon {
  width: 36px; height: 36px; border-radius: 10px;
  background: rgba(99,102,241,0.12); border: 1px solid rgba(99,102,241,0.2);
  display: flex; align-items: center; justify-content: center;
  color: var(--accent-2); font-size: 0.85rem; flex-shrink: 0;
}
.contact__socials { display: flex; gap: 10px; }
.social-btn {
  width: 42px; height: 42px; border-radius: 10px;
  background: var(--surface); border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  color: var(--text-2); font-size: 1rem;
  transition: var(--transition);
}
.social-btn:hover { background: var(--accent); border-color: var(--accent); color: #fff; transform: translateY(-3px); }

.contact__form-wrap {
  background: var(--surface); border: 1px solid var(--border);
  border-radius: var(--radius-lg); padding: 40px;
}
.contact__form { display: flex; flex-direction: column; gap: 20px; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.form-field { display: flex; flex-direction: column; gap: 8px; }
.form-field label {
  font-size: 0.82rem; font-weight: 500; color: var(--text-2);
  letter-spacing: 0.04em; text-transform: uppercase;
}
.form-field input,
.form-field textarea {
  background: var(--bg); border: 1px solid var(--border);
  border-radius: var(--radius); color: var(--text);
  font-family: var(--font-body); font-size: 0.95rem;
  padding: 13px 16px; transition: var(--transition);
  outline: none;
}
.form-field input::placeholder,
.form-field textarea::placeholder { color: var(--text-3); }
.form-field input:focus,
.form-field textarea:focus {
  border-color: var(--accent);
  box-shadow: 0 0 0 3px var(--accent-glow);
}
.form-field textarea { height: 130px; resize: vertical; }


/* ══════════════════════════════════════════════
   FOOTER
══════════════════════════════════════════════ */
.footer {
  background: var(--bg); padding: 70px 0 30px;
  border-top: 1px solid var(--border);
}
.footer__grid {
  display: grid; grid-template-columns: 2fr 1fr 1fr 1fr;
  gap: 48px; margin-bottom: 56px;
}
.footer__logo {
  font-family: var(--font-display); font-size: 1.8rem;
  font-weight: 800; color: var(--text); display: block; margin-bottom: 16px;
}
.footer__logo em { color: var(--accent); font-style: normal; }
.footer__brand p { color: var(--text-3); font-size: 0.875rem; line-height: 1.7; max-width: 280px; }
.footer__col h4 {
  font-family: var(--font-display); font-size: 0.82rem;
  font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
  color: var(--text-3); margin-bottom: 18px;
}
.footer__col ul { display: flex; flex-direction: column; gap: 10px; }
.footer__col ul a { font-size: 0.875rem; color: var(--text-2); transition: color 0.2s; }
.footer__col ul a:hover { color: var(--text); }
.footer__socials { display: flex; gap: 10px; }
.footer__socials a {
  width: 36px; height: 36px; background: var(--surface);
  border: 1px solid var(--border); border-radius: 8px;
  display: flex; align-items: center; justify-content: center;
  color: var(--text-2); font-size: 0.9rem; transition: var(--transition);
}
.footer__socials a:hover { background: var(--accent); border-color: var(--accent); color: #fff; }
.footer__bottom {
  border-top: 1px solid var(--border); padding-top: 24px;
  font-size: 0.8rem; color: var(--text-3); text-align: center;
}


/* ══════════════════════════════════════════════
   SCROLL REVEAL
══════════════════════════════════════════════ */
[data-sr] {
  opacity: 0; transform: translateY(30px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}
[data-sr].visible { opacity: 1; transform: translateY(0); }


/* ══════════════════════════════════════════════
   RESPONSIVE
══════════════════════════════════════════════ */
@media (max-width: 1024px) {
  .projects__grid { grid-template-columns: repeat(2, 1fr); }
  .footer__grid { grid-template-columns: 1fr 1fr; gap: 40px; }
}

@media (max-width: 900px) {
  .about__grid { grid-template-columns: 1fr; gap: 60px; }
  .about__image-col { display: flex; justify-content: center; }
  .contact__grid { grid-template-columns: 1fr; gap: 48px; }
}

@media (max-width: 768px) {
  section { padding: 80px 0; }
  .container { padding: 0 24px; }

  .nav { padding: 18px 24px; }
  .nav__toggle {
    display: flex; flex-direction: column; justify-content: center;
    gap: 5px; width: 32px; height: 32px;
    background: none; border: none; cursor: none; padding: 0;
  }
  .nav__toggle span {
    display: block; height: 2px; background: var(--text);
    border-radius: 2px; transition: var(--transition);
  }
  .nav__toggle.open span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
  .nav__toggle.open span:nth-child(2) { opacity: 0; }

  .nav__links {
    display: none; position: absolute; top: 100%; left: 0; right: 0;
    flex-direction: column; gap: 4px; padding: 16px 24px;
    background: rgba(10,10,15,0.97); backdrop-filter: blur(18px);
    border-bottom: 1px solid var(--border);
  }
  .nav__links.open { display: flex; }
  .nav__link { padding: 12px 16px; }

  .hero__title { font-size: clamp(2.8rem, 10vw, 5rem); }
  .hero__stats { gap: 20px; }
  .hero__stat-num { font-size: 1.5rem; }

  .projects__grid { grid-template-columns: 1fr; }

  .events__masonry { grid-template-columns: 1fr 1fr; }
  .events__col:last-child { display: none; }
  .events__col--offset { margin-top: 24px; }

  .form-row { grid-template-columns: 1fr; }
  .contact__form-wrap { padding: 28px 24px; }

  .footer__grid { grid-template-columns: 1fr; gap: 32px; }
  .footer__brand p { max-width: 100%; }

  .about__badge { right: 0; }
}

@media (max-width: 480px) {
  .hero__eyebrow { font-size: 0.75rem; }
  .hero__actions { flex-direction: column; }
  .hero__scroll { display: none; }
  .events__masonry { grid-template-columns: 1fr; }
  .events__col--offset { margin-top: 0; }
  .events__col:last-child { display: flex; }
}

@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    animation-duration: 0.01ms !important;
    transition-duration: 0.01ms !important;
  }
}
    </style>
    
</head>
<body>

  <!-- Custom cursor -->
  <div class="cursor" id="cursor"></div>
  <div class="cursor-trail" id="cursorTrail"></div>

  <!-- ══════════════ NAVIGATION ══════════════ -->
  <header id="header">
    <nav class="nav">
      <a href="#hero" class="nav__logo">W<span>.</span>A</a>
      <button class="nav__toggle" id="navToggle" aria-label="Menu">
        <span></span><span></span>
      </button>
      <ul class="nav__links" id="navLinks">
        <li><a href="#hero" class="nav__link" data-text="Home">Home</a></li>
        <li><a href="#about" class="nav__link" data-text="About">About</a></li>
        <li><a href="#projects" class="nav__link" data-text="Projects">Projects</a></li>
        <li><a href="#skills" class="nav__link" data-text="Skills">Skills</a></li>
        <li><a href="#events" class="nav__link" data-text="Events">Events</a></li>
        <li><a href="#contact" class="nav__link nav__link--cta" data-text="Contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- ══════════════ HERO ══════════════ -->
  <section id="hero">
    <div class="hero__bg">
      <div class="hero__grid"></div>
      <div class="hero__orb hero__orb--1"></div>
      <div class="hero__orb hero__orb--2"></div>
      <div class="hero__orb hero__orb--3"></div>
    </div>
    <div class="hero__content">
      <div class="hero__eyebrow">
        <span class="hero__dot"></span>
        Available for work
      </div>
      <h1 class="hero__title">
        <span class="hero__title-line" data-reveal>Crafting</span>
        <span class="hero__title-line hero__title-line--accent" data-reveal>Digital</span>
        <span class="hero__title-line" data-reveal>Experiences</span>
      </h1>
      <p class="hero__subtitle" data-reveal>
        Junior developer building elegant web & mobile apps —<br>
        where clean code meets creative vision.
      </p>
      <div class="hero__actions" data-reveal>
        <a href="#projects" class="btn btn--primary">
          View My Work
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#contact" class="btn btn--ghost">Let's Talk</a>
      </div>
      <div class="hero__stats" data-reveal>
        <div class="hero__stat">
          <span class="hero__stat-num">20+</span>
          <span class="hero__stat-label">Projects Built</span>
        </div>
        <div class="hero__stat-divider"></div>
        <div class="hero__stat">
          <span class="hero__stat-num">12+</span>
          <span class="hero__stat-label">Tech Stacks</span>
        </div>
        <div class="hero__stat-divider"></div>
        <div class="hero__stat">
          <span class="hero__stat-num">∞</span>
          <span class="hero__stat-label">Curiosity</span>
        </div>
      </div>
    </div>
    <div class="hero__scroll">
      <span>Scroll</span>
      <div class="hero__scroll-line"></div>
    </div>
  </section>

  <!-- ══════════════ ABOUT ══════════════ -->
  <section id="about">
    <div class="container">
      <div class="section-label">
        <span>01</span> About Me
      </div>
      <div class="about__grid">
        <div class="about__image-col">
          <div class="about__image-wrap">
            <img src="./pictures/image.png" alt="Wiam AARIKA" class="about__img">
            <div class="about__image-frame"></div>
            <div class="about__badge">
              <i class="fas fa-code"></i>
              <span>Full-Stack Dev</span>
            </div>
            <div class="about__badge">
              <i class="fas fa-code"></i>
              <span>Mobile apps Developer</span>
            </div>
          </div>
        </div>
        <div class="about__content-col">
          <h2 class="section-title">Hi, I'm <em>Wiam AARIKA</em></h2>
          <div class="typewriter-wrap">
            <span id="typewriter" class="typewriter"></span>
          </div>
          <p class="about__text">
            I'm a passionate junior developer with a creative spirit. I love building elegant, functional mobile development   and I'm always learning new technologies to grow. I also have a strong interest in robotics and web applications.
          </p>
          <p class="about__text">
            Based in Rabat, Morocco — let's build the future together.
          </p>
          <div class="about__actions">
            <a href="#contact" class="btn btn--primary">Hire Me</a>
            <a href="cv.php" class="btn btn--outline">
              <i class="fas fa-download"></i> Download CV
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════ PROJECTS ══════════════ -->
  <section id="projects">
    <div class="container">
      <div class="section-label">
        <span>02</span> Projects
      </div>
      <h2 class="section-title">My Own <em>Projects</em></h2>
      <p class="section-desc">A selection of things I've built — from mobile apps to full-stack web platforms.</p>

      <div class="projects__grid">

        <div class="proj-card">
          <div class="proj-card__img-wrap">
            <img src="./pictures/kinderworld.png" alt="KinderWorld" class="proj-card__img">
            <div class="proj-card__img-overlay"></div>
          </div>
          <div class="proj-card__body">
            <div class="proj-card__header">
              <h3 class="proj-card__title">KinderWorld</h3>
              <div class="proj-card__links">
                <a href="#" class="proj-icon-link" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" class="proj-icon-link" title="Live"><i class="fas fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>
            <p class="proj-card__desc">Educational app for young children to learn letters, numbers, shapes, and colors in a fun interactive way.</p>
            <div class="proj-card__tags">
              <span class="proj-tag">Kotlin</span>
              <span class="proj-tag">Mobile</span>
            </div>
          </div>
        </div>

        <div class="proj-card">
          <div class="proj-card__img-wrap">
            <img src="./pictures/swiply.png" alt="Swiply" class="proj-card__img">
            <div class="proj-card__img-overlay"></div>
          </div>
          <div class="proj-card__body">
            <div class="proj-card__header">
              <h3 class="proj-card__title">Swiply</h3>
              <div class="proj-card__links">
                <a href="#" class="proj-icon-link" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" class="proj-icon-link" title="Live"><i class="fas fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>
            <p class="proj-card__desc">Social mobile app for making friends through a modern swipe-based system with smooth, engaging UX.</p>
            <div class="proj-card__tags">
              <span class="proj-tag">Kotlin</span>
              <span class="proj-tag">Social</span>
            </div>
          </div>
        </div>

        <div class="proj-card">
          <div class="proj-card__img-wrap">
            <img src="./pictures/rihlaapp.png" alt="Rihlaapp" class="proj-card__img">
            <div class="proj-card__img-overlay"></div>
          </div>
          <div class="proj-card__body">
            <div class="proj-card__header">
              <h3 class="proj-card__title">Rihlaapp</h3>
              <div class="proj-card__links">
                <a href="#" class="proj-icon-link" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" class="proj-icon-link" title="Live"><i class="fas fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>
            <p class="proj-card__desc">Personal organisation app to manage daily tasks and time with a clean, intuitive interface.</p>
            <div class="proj-card__tags">
              <span class="proj-tag">Flutter</span>
              <span class="proj-tag">Dart</span>
              <span class="proj-tag">Productivity</span>
            </div>
          </div>
        </div>

        <div class="proj-card">
          <div class="proj-card__img-wrap">
            <img src="./pictures/hydromatle.png" alt="HydroMate" class="proj-card__img">
            <div class="proj-card__img-overlay"></div>
          </div>
          <div class="proj-card__body">
            <div class="proj-card__header">
              <h3 class="proj-card__title">HydroMate</h3>
              <div class="proj-card__links">
                <a href="#" class="proj-icon-link" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" class="proj-icon-link" title="Live"><i class="fas fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>
            <p class="proj-card__desc">Android app to help users track daily water intake and stay hydrated throughout the day.</p>
            <div class="proj-card__tags">
              <span class="proj-tag">Kotlin</span>
              <span class="proj-tag">Android</span>
              <span class="proj-tag">Health</span>
            </div>
          </div>
        </div>

        <div class="proj-card">
          <div class="proj-card__img-wrap">
            <img src="./pictures/Bankify.png" alt="Bankify" class="proj-card__img">
            <div class="proj-card__img-overlay"></div>
          </div>
          <div class="proj-card__body">
            <div class="proj-card__header">
              <h3 class="proj-card__title">Bankify</h3>
              <div class="proj-card__links">
                <a href="#" class="proj-icon-link" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" class="proj-icon-link" title="Live"><i class="fas fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>
            <p class="proj-card__desc">Modern banking web app with advanced performance optimisation and strong security solutions.</p>
            <div class="proj-card__tags">
              <span class="proj-tag">Kotlin</span>
              <span class="proj-tag">Android</span>
              <span class="proj-tag">banking</span>
            </div>
          </div>
        </div>

        <div class="proj-card">
          <div class="proj-card__img-wrap">
            <img src="./pictures/taxibee.png" alt="TaxiBeex" class="proj-card__img">
            <div class="proj-card__img-overlay"></div>
          </div>
          <div class="proj-card__body">
            <div class="proj-card__header">
              <h3 class="proj-card__title">TaxiBeex</h3>
              <div class="proj-card__links">
                <a href="#" class="proj-icon-link" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" class="proj-icon-link" title="Live"><i class="fas fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>
            <p class="proj-card__desc">Smart ride-booking platform connecting passengers with drivers for fast, reliable transportation.</p>
            <div class="proj-card__tags">
              <span class="proj-tag">Kotlin</span>
              <span class="proj-tag">Android</span>
              <span class="proj-tag">Maps</span>
            </div>
          </div>
        </div>

        <div class="proj-card proj-card--wide">
          <div class="proj-card__img-wrap">
            <img src="./pictures/safeRide.png" alt="Safe Ride" class="proj-card__img">
            <div class="proj-card__img-overlay"></div>
          </div>
          <div class="proj-card__body">
            <div class="proj-card__header">
              <h3 class="proj-card__title">Safe Ride</h3>
              <div class="proj-card__links">
                <a href="#" class="proj-icon-link" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" class="proj-icon-link" title="Live"><i class="fas fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>
            <p class="proj-card__desc">Web platform promoting secure and reliable travel experiences for all users.</p>
            <div class="proj-card__tags">
              <span class="proj-tag">HTML5</span>
              <span class="proj-tag">PHP</span>
              <span class="proj-tag">MySQL</span>
            </div>
          </div>
        </div>
        <div class="proj-card proj-card--wide">
          <div class="proj-card__img-wrap">
            <img src="./pictures/tastyBite.png" alt="Tasty Bite" class="proj-card__img">
            <div class="proj-card__img-overlay"></div>
          </div>
          <div class="proj-card__body">
            <div class="proj-card__header">
              <h3 class="proj-card__title">Tasty Bite</h3>
              <div class="proj-card__links">
                <a href="#" class="proj-icon-link" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" class="proj-icon-link" title="Live"><i class="fas fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>
            <p class="proj-card__desc">Mobile app for discovering and cooking delicious food from different cultures.</p>
            <div class="proj-card__tags">
              <span class="proj-tag">Flutter</span>
              <span class="proj-tag">Dart</span>
              <span class="proj-tag">API</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ══════════════ SKILLS ══════════════ -->
  <section id="skills">
    <div class="container">
      <div class="section-label"><span>03</span> Skills</div>
      <h2 class="section-title">My <em>Tech Stack</em></h2>
    </div>
    <div class="skills__carousel-wrap">
      <div class="skills__fade skills__fade--left"></div>
      <div class="skills__fade skills__fade--right"></div>

      <div class="skills__row">
        <div class="skills__track skills__track--fwd">
          <div class="skill-pill"><img src="./pictures/mysql.png" alt="MySQL"><span>MySQL</span></div>
          <div class="skill-pill"><img src="./pictures/php.png" alt="PHP"><span>PHP</span></div>
          <div class="skill-pill"><img src="./pictures/html.png" alt="HTML5"><span>HTML5</span></div>
          <div class="skill-pill"><img src="./pictures/flutter-removebg-preview.png" alt="Flutter"><span>Flutter</span></div>
          <div class="skill-pill"><img src="./pictures/react.png" alt="React"><span>React</span></div>
          <div class="skill-pill"><img src="./pictures/pycharm.png" alt="PyCharm"><span>PyCharm</span></div>
          <div class="skill-pill"><img src="./pictures/js.png" alt="JavaScript"><span>JavaScript</span></div>
          <div class="skill-pill"><img src="./pictures/dart.png" alt="Dart"><span>Dart</span></div>
          <div class="skill-pill"><img src="./pictures/python-logo-png_seeklogo-273830-removebg-preview.png" alt="Python"><span>Python</span></div>
          <div class="skill-pill"><img src="./pictures/ko114k438-kotlin-logo-kotlin-logo-png-transparent-amp-svg-vector-freebie-supply-removebg-preview.png" alt="Kotlin"><span>Kotlin</span></div>
          <div class="skill-pill"><img src="./pictures/git.png" alt="Git"><span>Git</span></div>
          <div class="skill-pill"><img src="./pictures/vscode.png" alt="VSCode"><span>VSCode</span></div>
          <!-- duplicate for seamless loop -->
          <div class="skill-pill"><img src="./pictures/mysql.png" alt="MySQL"><span>MySQL</span></div>
          <div class="skill-pill"><img src="./pictures/php.png" alt="PHP"><span>PHP</span></div>
          <div class="skill-pill"><img src="./pictures/html.png" alt="HTML5"><span>HTML5</span></div>
          <div class="skill-pill"><img src="./pictures/flutter-removebg-preview.png" alt="Flutter"><span>Flutter</span></div>
          <div class="skill-pill"><img src="./pictures/react.png" alt="React"><span>React</span></div>
          <div class="skill-pill"><img src="./pictures/pycharm.png" alt="PyCharm"><span>PyCharm</span></div>
          <div class="skill-pill"><img src="./pictures/js.png" alt="JavaScript"><span>JavaScript</span></div>
          <div class="skill-pill"><img src="./pictures/dart.png" alt="Dart"><span>Dart</span></div>
          <div class="skill-pill"><img src="./pictures/python-logo-png_seeklogo-273830-removebg-preview.png" alt="Python"><span>Python</span></div>
          <div class="skill-pill"><img src="./pictures/ko114k438-kotlin-logo-kotlin-logo-png-transparent-amp-svg-vector-freebie-supply-removebg-preview.png" alt="Kotlin"><span>Kotlin</span></div>
          <div class="skill-pill"><img src="./pictures/git.png" alt="Git"><span>Git</span></div>
          <div class="skill-pill"><img src="./pictures/vscode.png" alt="VSCode"><span>VSCode</span></div>
        </div>
      </div>

      <div class="skills__row">
        <div class="skills__track skills__track--rev">
          <div class="skill-pill"><img src="./pictures/js.png" alt="JavaScript"><span>JavaScript</span></div>
          <div class="skill-pill"><img src="./pictures/dart.png" alt="Dart"><span>Dart</span></div>
          <div class="skill-pill"><img src="./pictures/python-logo-png_seeklogo-273830-removebg-preview.png" alt="Python"><span>Python</span></div>
          <div class="skill-pill"><img src="./pictures/ko114k438-kotlin-logo-kotlin-logo-png-transparent-amp-svg-vector-freebie-supply-removebg-preview.png" alt="Kotlin"><span>Kotlin</span></div>
          <div class="skill-pill"><img src="./pictures/git.png" alt="Git"><span>Git</span></div>
          <div class="skill-pill"><img src="./pictures/vscode.png" alt="VSCode"><span>VSCode</span></div>
          <div class="skill-pill"><img src="./pictures/mysql.png" alt="MySQL"><span>MySQL</span></div>
          <div class="skill-pill"><img src="./pictures/php.png" alt="PHP"><span>PHP</span></div>
          <div class="skill-pill"><img src="./pictures/html.png" alt="HTML5"><span>HTML5</span></div>
          <div class="skill-pill"><img src="./pictures/flutter-removebg-preview.png" alt="Flutter"><span>Flutter</span></div>
          <div class="skill-pill"><img src="./pictures/react.png" alt="React"><span>React</span></div>
          <div class="skill-pill"><img src="./pictures/pycharm.png" alt="PyCharm"><span>PyCharm</span></div>
          <!-- duplicate -->
          <div class="skill-pill"><img src="./pictures/js.png" alt="JavaScript"><span>JavaScript</span></div>
          <div class="skill-pill"><img src="./pictures/dart.png" alt="Dart"><span>Dart</span></div>
          <div class="skill-pill"><img src="./pictures/python-logo-png_seeklogo-273830-removebg-preview.png" alt="Python"><span>Python</span></div>
          <div class="skill-pill"><img src="./pictures/ko114k438-kotlin-logo-kotlin-logo-png-transparent-amp-svg-vector-freebie-supply-removebg-preview.png" alt="Kotlin"><span>Kotlin</span></div>
          <div class="skill-pill"><img src="./pictures/git.png" alt="Git"><span>Git</span></div>
          <div class="skill-pill"><img src="./pictures/vscode.png" alt="VSCode"><span>VSCode</span></div>
          <div class="skill-pill"><img src="./pictures/mysql.png" alt="MySQL"><span>MySQL</span></div>
          <div class="skill-pill"><img src="./pictures/php.png" alt="PHP"><span>PHP</span></div>
          <div class="skill-pill"><img src="./pictures/html.png" alt="HTML5"><span>HTML5</span></div>
          <div class="skill-pill"><img src="./pictures/flutter-removebg-preview.png" alt="Flutter"><span>Flutter</span></div>
          <div class="skill-pill"><img src="./pictures/react.png" alt="React"><span>React</span></div>
          <div class="skill-pill"><img src="./pictures/pycharm.png" alt="PyCharm"><span>PyCharm</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════ EVENTS ══════════════ -->
  <section id="events">
    <div class="container">
      <div class="section-label"><span>04</span> Competitions & Events</div>
      <h2 class="section-title">Beyond the <em>Screen</em></h2>
      <p class="section-desc">Moments from competitions, hackathons, and events that shaped my journey.</p>

      <div class="events__masonry">
        <div class="events__col">
          <div class="event-img-card"><img src="./pictures/me.jpg" alt="Event" loading="lazy"></div>
          <div class="event-img-card"><img src="./pictures/agadir.jpg" alt="Event" loading="lazy"></div>
          <div class="event-img-card"><img src="./pictures/forum.jpg" alt="Event" loading="lazy"></div>
          <div class="event-img-card"><img src="./pictures/stand.jpeg" alt="Event" loading="lazy"></div>
        </div>
        <div class="events__col events__col--offset">
          <div class="event-img-card"><img src="./pictures/certif.jpg" alt="Event" loading="lazy"></div>
          <div class="event-img-card"><img src="./pictures/stad1.jpg" alt="Event" loading="lazy"></div>
          <div class="event-img-card"><img src="./pictures/formatrice.jpeg" alt="Event" loading="lazy"></div>
          <div class="event-img-card"><img src="./pictures/stadier_caf.jpeg" alt="Event" loading="lazy"></div>
        </div>
        <div class="events__col">
          <div class="event-img-card"><img src="./pictures/chefstad.jpg" alt="Event" loading="lazy"></div>
          <div class="event-img-card"><img src="./pictures/compititio.jpg" alt="Event" loading="lazy"></div>
          <div class="event-img-card"><img src="./pictures/formatrice2.jpeg" alt="Event" loading="lazy"></div>
          <div class="event-img-card"><img src="./pictures/stand3.jpeg" alt="Event" loading="lazy"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════ CONTACT ══════════════ -->
  <section id="contact">
    <div class="container">
      <div class="section-label"><span>05</span> Contact</div>
      <div class="contact__grid">
        <div class="contact__info">
          <h2 class="section-title">Let's Build<br><em>Something Great</em></h2>
          <p class="about__text">Have a project in mind or just want to say hi? My inbox is open — I'd love to hear from you.</p>
          <ul class="contact__details">
            <li>
              <span class="contact__icon"><i class="fas fa-map-marker-alt"></i></span>
              <span>Salé, Rabat — Morocco</span>
            </li>
            <li>
              <span class="contact__icon"><i class="fas fa-envelope"></i></span>
              <a href="mailto:aarikawieam@gmail.com">aarikawieam@gmail.com</a>
            </li>
          </ul>
          <div class="contact__socials">
            <a href="https://www.linkedin.com/in/wiam-aarika-a2977432b/" class="social-btn" target="_blank">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com/wieam-ar" class="social-btn" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </div>
        </div>
        <div class="contact__form-wrap">
          <form id="contactForm" action="mail.php" method="POST" class="contact__form">
            <div class="form-row">
              <div class="form-field">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" placeholder="Jane Doe" required>
              </div>
              <div class="form-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="jane@example.com" required>
              </div>
            </div>
            <div class="form-field">
              <label for="phone">Phone (optional)</label>
              <input type="tel" id="phone" name="phone" placeholder="+212 600 000 000">
            </div>
            <div class="form-field">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Tell me about your project..." required></textarea>
            </div>
            <button type="submit" class="btn btn--primary btn--full">
              Send Message
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 8l10 0M8 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════ FOOTER ══════════════ -->
  <footer class="footer">
    <div class="container">
      <div class="footer__grid">
        <div class="footer__brand">
          <span class="footer__logo">W<em>.</em>A</span>
          <p>Building digital experiences with purpose and passion. Clean code, creative design, a touch of innovation.</p>
        </div>
        <div class="footer__col">
          <h4>Services</h4>
          <ul>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">App Prototyping</a></li>
            <li><a href="#">UI/UX Design</a></li>
            <li><a href="#">Frontend Development</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Navigate</h4>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Connect</h4>
          <div class="footer__socials">
            <a href="https://www.linkedin.com/in/wiam-aarika-a2977432b/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/wieam-ar" target="_blank"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <p>© 2025 Wiam AARIKA — All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script >
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
document.querySelectorAll('a, button, input, textarea, .proj-card, .event-img-card, .skill-pill').forEach(el => {
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
  </script>
</body>
</html>