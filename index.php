<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>3 أخطاء تخرب عليك صفحة الهبوط</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;700;900&display=swap" rel="stylesheet"/>
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }

  html, body {
    width: 100%;
    height: 100%;
    overflow: hidden;
    font-family: 'IBM Plex Sans Arabic', sans-serif;
  }

  /* ── BACKGROUND ── */
  body {
    background-color: #f8f8f8;
    background-image: linear-gradient(0deg, transparent 24%, rgba(0,0,0,.03) 25%, rgba(0,0,0,.03) 26%, transparent 27%, transparent 74%, rgba(0,0,0,.03) 75%, rgba(0,0,0,.03) 76%, transparent 77%, transparent);
    background-size: 100% 4px;
  }

  /* Scanline overlay */
  body::before {
    content: '';
    position: fixed;
    inset: 0;
    background: repeating-linear-gradient(to bottom, transparent 0px, transparent 3px, rgba(0,0,0,0.05) 3px, rgba(0,0,0,0.05) 4px);
    pointer-events: none;
    z-index: 999;
    animation: scanlineFlicker 0.1s steps(1) infinite;
  }

  /* Background shake */
  body::after {
    content: '';
    position: fixed;
    inset: -4px;
    background: inherit;
    z-index: -1;
    animation: bgShake 0.13s linear infinite;
  }

  /* ── SLIDESHOW CONTAINER ── */
  #slideshow {
    position: relative;
    width: 100%;
    height: 100vh;
    height: 100dvh;
    overflow: hidden;
  }

  /* ── EACH SLIDE ── */
  .slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    padding: 36px 24px 24px 24px;
    direction: rtl;
    z-index: 0;
    pointer-events: none;
    opacity: 0;
    transform: translateX(100%);
    transition: none;
  }

  .slide.active {
    opacity: 1;
    transform: translateX(0);
    z-index: 10;
    pointer-events: all;
  }

  .slide.enter {
    animation: slidePageIn 0.55s cubic-bezier(0.22,1,0.36,1) forwards;
  }

  .slide.exit {
    animation: slidePageOut 0.55s cubic-bezier(0.22,1,0.36,1) forwards;
    z-index: 9;
    pointer-events: none;
  }

  @keyframes slidePageIn {
    0%   { opacity: 0; transform: translateX(100%); }
    100% { opacity: 1; transform: translateX(0); }
  }

  @keyframes slidePageOut {
    0%   { opacity: 1; transform: translateX(0); }
    100% { opacity: 0; transform: translateX(-60%); }
  }

  /* ── BACKGROUND ANIMATIONS ── */
  @keyframes bgShake {
    0%   { transform: translate(0px,   0px); }
    15%  { transform: translate(-1px,  1px); }
    30%  { transform: translate(1px,  -1px); }
    45%  { transform: translate(-1px,  0px); }
    60%  { transform: translate(1px,   1px); }
    75%  { transform: translate(0px,  -1px); }
    90%  { transform: translate(-1px,  1px); }
    100% { transform: translate(0px,   0px); }
  }

  @keyframes scanlineFlicker {
    0%,100% { opacity: 1; }
    50%     { opacity: 0.6; }
  }

  /* ── TEXT ANIMATIONS ── */
  @keyframes slideFromLeft {
    0%   { opacity: 0; transform: translateX(-80px); }
    100% { opacity: 1; transform: translateX(0); }
  }

  @keyframes underlineGrow {
    0%   { width: 0; }
    100% { width: 100%; }
  }

  /* ── IMAGE ANIMATION — slide from bottom only, no vibrate ── */
  @keyframes slideFromBottom {
    0%   { opacity: 0; transform: translateY(80px) scale(0.9); }
    100% { opacity: 1; transform: translateY(0) scale(1); }
  }

  @keyframes glowPulse {
    0%, 100% { box-shadow: 0 0 15px 5px rgba(59,130,246,0.3); }
    50%       { box-shadow: 0 0 28px 12px rgba(59,130,246,0.6); }
  }

  /* ── CARD FADE IN ── */
  @keyframes cardFadeIn {
    0%   { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  /* ── REUSABLE CLASSES ── */
  .line-1 { opacity: 0; }
  .line-2 { opacity: 0; }

  .underline-anim {
    display: block;
    height: 5px;
    border-radius: 9999px;
    width: 0;
    margin-top: 3px;
  }
  .underline-yellow { background: #facc15; }
  .underline-blue   { background: #2563eb; }
  .underline-green  { background: #22c55e; }

  .icon-q {
    box-shadow: 0 0 15px 5px rgba(59,130,246,0.3);
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    min-width: 40px;
    min-height: 40px;
    border-radius: 9999px;
    background: #3b82f6;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .img-wrapper {
    opacity: 0;
    margin-top: 80px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .card-item {
    opacity: 0;
  }
</style>
</head>

<body>

<div id="slideshow">

  <!-- ═══════════════════════════════════════════ -->
  <!--  SLIDE 0 — EMPTY PAGE                       -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="slide active" id="slide-0">
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!--  SLIDE 1 — 3 أخطاء تخرب عليك صفحة الهبوط  -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="slide" id="slide-1">
    <section style="width:100%;text-align:right;direction:rtl;">
      <div class="line-1" id="s1-l1" style="display:flex;flex-direction:row;align-items:center;justify-content:flex-start;gap:10px;flex-wrap:nowrap;">
        <h1 style="font-size:clamp(2.4rem,10.5vw,3.8rem);font-weight:900;color:#1f2937;line-height:1.15;white-space:nowrap;direction:rtl;">3 أخطاء</h1>
        <div class="icon-q" style="animation:glowPulse 2s ease-in-out 2s infinite;">
          <span style="color:white;font-size:1.25rem;font-weight:900;">!</span>
        </div>
      </div>
      <div class="line-2" id="s1-l2" style="display:flex;flex-direction:row;align-items:baseline;justify-content:flex-start;gap:10px;flex-wrap:wrap;margin-top:8px;direction:rtl;">
        <div style="position:relative;display:inline-block;">
          <span style="font-size:clamp(2.1rem,9vw,3.3rem);font-weight:900;color:#facc15;line-height:1.15;white-space:nowrap;display:block;">تخرب عليك</span>
          <span class="underline-anim underline-yellow" id="s1-ul1"></span>
        </div>
        <div style="position:relative;display:inline-block;">
          <span style="font-size:clamp(2.1rem,9vw,3.3rem);font-weight:900;color:#2563eb;line-height:1.15;white-space:nowrap;display:block;">صفحة الهبوط</span>
          <span class="underline-anim underline-blue" id="s1-ul2"></span>
        </div>
      </div>
    </section>
    <div class="img-wrapper" id="s1-img">
      <img src="https://raw.githubusercontent.com/alnazeerabdo/vedioimages/main/%D8%B5%D9%88%D8%B1%D8%A9_%D8%A7%D9%84%D8%A8%D8%AF%D8%A7%D9%8A%D8%A9-removebg-preview.png" alt="صورة البداية" style="width:clamp(220px,70vw,320px);height:auto;object-fit:contain;filter:drop-shadow(0 20px 30px rgba(0,0,0,0.25));"/>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!--  SLIDE 2 — تشتت الانتباه                   -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="slide" id="slide-2">
    <section style="width:100%;text-align:right;direction:rtl;">
      <div class="line-1" id="s2-l1" style="display:flex;flex-direction:row;align-items:center;justify-content:flex-start;gap:10px;flex-wrap:nowrap;">
        <h1 style="font-size:clamp(2.4rem,10.5vw,3.8rem);font-weight:900;color:#1f2937;line-height:1.15;white-space:nowrap;direction:rtl;">الخطأ الأول</h1>
        <div class="icon-q">
          <span style="color:white;font-size:1.25rem;font-weight:900;">١</span>
        </div>
      </div>
      <div class="line-2" id="s2-l2" style="display:flex;flex-direction:row;align-items:baseline;justify-content:flex-start;gap:10px;flex-wrap:wrap;margin-top:8px;direction:rtl;">
        <div style="position:relative;display:inline-block;">
          <span style="font-size:clamp(2.1rem,9vw,3.3rem);font-weight:900;color:#facc15;line-height:1.15;white-space:nowrap;display:block;">تشتت</span>
          <span class="underline-anim underline-yellow" id="s2-ul1"></span>
        </div>
        <div style="position:relative;display:inline-block;">
          <span style="font-size:clamp(2.1rem,9vw,3.3rem);font-weight:900;color:#2563eb;line-height:1.15;white-space:nowrap;display:block;">الانتباه</span>
          <span class="underline-anim underline-blue" id="s2-ul2"></span>
        </div>
      </div>
    </section>
    <div class="img-wrapper" id="s2-img">
      <img src="https://raw.githubusercontent.com/alnazeerabdo/vedioimages/main/%D8%AB%D8%A7%D9%86%D9%8A_%D8%A7%D8%B3%D9%84%D8%A7%D9%8A_-removebg-preview.png" alt="تشتت الانتباه" style="width:clamp(220px,70vw,320px);height:auto;object-fit:contain;filter:drop-shadow(0 20px 30px rgba(0,0,0,0.25));"/>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!--  SLIDE 3 — عدم وضوح الـ CTA                -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="slide" id="slide-3">
    <section style="width:100%;text-align:right;direction:rtl;">
      <div class="line-1" id="s3-l1" style="display:flex;flex-direction:row;align-items:center;justify-content:flex-start;gap:10px;flex-wrap:nowrap;">
        <h1 style="font-size:clamp(2.4rem,10.5vw,3.8rem);font-weight:900;color:#1f2937;line-height:1.15;white-space:nowrap;direction:rtl;">الخطأ الثاني</h1>
        <div class="icon-q">
          <span style="color:white;font-size:1.25rem;font-weight:900;">٢</span>
        </div>
      </div>
      <div class="line-2" id="s3-l2" style="display:flex;flex-direction:row;align-items:baseline;justify-content:flex-start;gap:10px;flex-wrap:wrap;margin-top:8px;direction:rtl;">
        <div style="position:relative;display:inline-block;">
          <span style="font-size:clamp(2.1rem,9vw,3.3rem);font-weight:900;color:#facc15;line-height:1.15;white-space:nowrap;display:block;">عدم وضوح</span>
          <span class="underline-anim underline-yellow" id="s3-ul1"></span>
        </div>
        <div style="position:relative;display:inline-block;">
          <span style="font-size:clamp(2.1rem,9vw,3.3rem);font-weight:900;color:#2563eb;line-height:1.15;white-space:nowrap;display:block;">الـ CTA</span>
          <span class="underline-anim underline-blue" id="s3-ul2"></span>
        </div>
      </div>
    </section>
    <div class="img-wrapper" id="s3-img">
      <img src="https://raw.githubusercontent.com/alnazeerabdo/vedioimages/main/%D8%B5%D9%88%D8%B1%D8%A9_%D8%A7%D9%84%D8%A7%D8%AE%D8%AA%D9%8A%D8%A7%D8%B1-removebg-preview.png" alt="عدم وضوح CTA" style="width:clamp(220px,70vw,320px);height:auto;object-fit:contain;filter:drop-shadow(0 20px 30px rgba(0,0,0,0.25));"/>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!--  SLIDE 4 — بطء تحميل الصفحة                -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="slide" id="slide-4">
    <section style="width:100%;text-align:right;direction:rtl;">
      <div class="line-1" id="s4-l1" style="display:flex;flex-direction:row;align-items:center;justify-content:flex-start;gap:10px;flex-wrap:nowrap;">
        <h1 style="font-size:clamp(2.4rem,10.5vw,3.8rem);font-weight:900;color:#1f2937;line-height:1.15;white-space:nowrap;direction:rtl;">الخطأ الثالث</h1>
        <div class="icon-q">
          <span style="color:white;font-size:1.25rem;font-weight:900;">٣</span>
        </div>
      </div>
      <div class="line-2" id="s4-l2" style="display:flex;flex-direction:row;align-items:baseline;justify-content:flex-start;gap:10px;flex-wrap:wrap;margin-top:8px;direction:rtl;">
        <div style="position:relative;display:inline-block;">
          <span style="font-size:clamp(2.1rem,9vw,3.3rem);font-weight:900;color:#facc15;line-height:1.15;white-space:nowrap;display:block;">بطء</span>
          <span class="underline-anim underline-yellow" id="s4-ul1"></span>
        </div>
        <div style="position:relative;display:inline-block;">
          <span style="font-size:clamp(2.1rem,9vw,3.3rem);font-weight:900;color:#2563eb;line-height:1.15;white-space:nowrap;display:block;">تحميل الصفحة</span>
          <span class="underline-anim underline-blue" id="s4-ul2"></span>
        </div>
      </div>
    </section>
    <div class="img-wrapper" id="s4-img">
      <img src="https://raw.githubusercontent.com/alnazeerabdo/vedioimages/main/%D8%B5%D9%88%D8%B1%D8%A9_%D8%A7%D9%84%D8%B3%D8%B1%D8%B9%D8%A9-removebg-preview.png" alt="بطء التحميل" style="width:clamp(220px,70vw,320px);height:auto;object-fit:contain;filter:drop-shadow(0 20px 30px rgba(0,0,0,0.25));"/>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!--  SLIDE 5 — 3 cards (auto fade one by one)  -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="slide" id="slide-5">
    <div style="width:100%;height:100%;display:flex;flex-direction:column;justify-content:center;align-items:center;gap:20px;">
      <div class="card-item" id="s5-c1" style="width:100%;max-width:340px;border-radius:16px;overflow:hidden;box-shadow:0 8px 32px rgba(0,0,0,0.18);">
        <img src="https://raw.githubusercontent.com/alnazeerabdo/vedioimages/main/%D8%B5%D9%81%D8%AD%D8%A9%201.jpg" alt="صفحة 1" style="width:100%;height:auto;display:block;"/>
      </div>
      <div class="card-item" id="s5-c2" style="width:100%;max-width:340px;border-radius:16px;overflow:hidden;box-shadow:0 8px 32px rgba(0,0,0,0.18);">
        <img src="https://raw.githubusercontent.com/alnazeerabdo/vedioimages/main/%D8%B5%D9%81%D8%AD%D8%A9%202.jpg" alt="صفحة 2" style="width:100%;height:auto;display:block;"/>
      </div>
      <div class="card-item" id="s5-c3" style="width:100%;max-width:340px;border-radius:16px;overflow:hidden;box-shadow:0 8px 32px rgba(0,0,0,0.18);">
        <img src="https://raw.githubusercontent.com/alnazeerabdo/vedioimages/main/%D8%B5%D9%81%D8%AD%D8%A9%203.jpg" alt="صفحة 3" style="width:100%;height:auto;display:block;"/>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!--  SLIDE 6 — تعال اساعدك حالا               -->
  <!-- ═══════════════════════════════════════════ -->
  <div class="slide" id="slide-6">
    <section style="width:100%;text-align:right;direction:rtl;">
      <div class="line-1" id="s6-l1" style="display:flex;flex-direction:row;align-items:center;justify-content:flex-start;gap:10px;flex-wrap:nowrap;">
        <h1 style="font-size:clamp(2.4rem,10.5vw,3.8rem);font-weight:900;color:#1f2937;line-height:1.15;white-space:nowrap;direction:rtl;">تعال</h1>
        <div class="icon-q" style="background:#22c55e;box-shadow:0 0 15px 5px rgba(34,197,94,0.4);">
          <span style="color:white;font-size:1.25rem;font-weight:900;">✓</span>
        </div>
      </div>
      <div class="line-2" id="s6-l2" style="display:flex;flex-direction:row;align-items:baseline;justify-content:flex-start;gap:10px;flex-wrap:wrap;margin-top:8px;direction:rtl;">
        <div style="position:relative;display:inline-block;">
          <span style="font-size:clamp(2.1rem,9vw,3.3rem);font-weight:900;color:#facc15;line-height:1.15;white-space:nowrap;display:block;">اساعدك</span>
          <span class="underline-anim underline-yellow" id="s6-ul1"></span>
        </div>
        <div style="position:relative;display:inline-block;">
          <span style="font-size:clamp(2.1rem,9vw,3.3rem);font-weight:900;color:#22c55e;line-height:1.15;white-space:nowrap;display:block;">حالا</span>
          <span class="underline-anim underline-green" id="s6-ul2"></span>
        </div>
      </div>
    </section>
    <div class="img-wrapper" id="s6-img">
      <img src="https://raw.githubusercontent.com/alnazeerabdo/vedioimages/main/%D8%B5%D9%88%D8%B1%D8%AA%D9%8A-removebg-preview.png" alt="تعال اساعدك" style="width:clamp(220px,70vw,320px);height:auto;object-fit:contain;filter:drop-shadow(0 20px 30px rgba(0,0,0,0.25));"/>
    </div>
  </div>

</div><!-- end slideshow -->

<script>
  const TOTAL = 7;
  let current = 0;
  let animating = false;

  /* ─── run entrance animations for a given slide index ─── */
  function runAnims(idx) {

    // slide-0 is empty — nothing to animate
    if (idx === 0) return;

    if (idx === 5) {
      // Cards page — fade in one by one with stagger (autoplay)
      animEl('s5-c1', { anim: 'cardFadeIn 0.9s cubic-bezier(0.22,1,0.36,1) 0.3s forwards' });
      animEl('s5-c2', { anim: 'cardFadeIn 0.9s cubic-bezier(0.22,1,0.36,1) 1.1s forwards' });
      animEl('s5-c3', { anim: 'cardFadeIn 0.9s cubic-bezier(0.22,1,0.36,1) 1.9s forwards' });
      return;
    }

    const p = 's' + idx;
    animEl(p+'-l1',  { anim: 'slideFromLeft 0.9s cubic-bezier(0.22,1,0.36,1) 0.3s forwards' });
    animEl(p+'-l2',  { anim: 'slideFromLeft 0.9s cubic-bezier(0.22,1,0.36,1) 0.95s forwards' });
    animEl(p+'-ul1', { anim: 'underlineGrow 0.7s cubic-bezier(0.22,1,0.36,1) 1.5s forwards', prop: 'width' });
    animEl(p+'-ul2', { anim: 'underlineGrow 0.7s cubic-bezier(0.22,1,0.36,1) 1.65s forwards', prop: 'width' });
    // image: slide from bottom only — no vibrate
    animEl(p+'-img', { anim: 'slideFromBottom 1.1s cubic-bezier(0.22,1,0.36,1) 2.2s forwards' });
  }

  function animEl(id, opts) {
    const el = document.getElementById(id);
    if (!el) return;
    if (opts.prop === 'width') {
      el.style.width = '0';
    } else {
      el.style.opacity = '0';
    }
    void el.offsetWidth;
    el.style.animation = opts.anim;
    if (opts.prop !== 'width') {
      el.style.animationFillMode = 'forwards';
    }
  }

  /* ─── reset animations for a slide (before re-entry) ─── */
  function resetAnims(idx) {
    if (idx === 0) return;
    const ids = idx === 5
      ? ['s5-c1','s5-c2','s5-c3']
      : ['s'+idx+'-l1','s'+idx+'-l2','s'+idx+'-ul1','s'+idx+'-ul2','s'+idx+'-img'];

    ids.forEach(id => {
      const el = document.getElementById(id);
      if (!el) return;
      el.style.animation = 'none';
      if (id.includes('ul')) { el.style.width = '0'; }
      else { el.style.opacity = '0'; }
    });
  }

  /* ─── advance to next slide ─── */
  function nextSlide() {
    if (animating || current >= TOTAL - 1) return;
    animating = true;

    const outEl = document.getElementById('slide-' + current);
    const inIdx = current + 1;
    const inEl  = document.getElementById('slide-' + inIdx);

    resetAnims(inIdx);

    inEl.style.transform = 'translateX(100%)';
    inEl.style.opacity   = '0';
    inEl.style.zIndex    = '10';
    outEl.style.zIndex   = '9';

    outEl.classList.add('exit');
    outEl.classList.remove('active');

    inEl.classList.add('active', 'enter');

    inEl.addEventListener('animationend', function handler() {
      inEl.removeEventListener('animationend', handler);
      outEl.classList.remove('exit','active');
      outEl.style.transform = '';
      outEl.style.opacity   = '';
      outEl.style.zIndex    = '';
      inEl.classList.remove('enter');
      inEl.style.transform  = '';
      inEl.style.opacity    = '';
      inEl.style.zIndex     = '';

      current = inIdx;
      runAnims(current);
      animating = false;
    }, { once: true });
  }

  /* ─── tap / click anywhere ─── */
  document.getElementById('slideshow').addEventListener('click', nextSlide);
  document.getElementById('slideshow').addEventListener('touchend', function(e) {
    e.preventDefault();
    nextSlide();
  }, { passive: false });

  /* ─── kick off first slide animations ─── */
  window.addEventListener('load', () => {
    runAnims(0);
  });
</script>

</body>
</html>
