/* ============================================================
   VoxiaAI — Interactions
   ============================================================ */

(function () {
  'use strict';

  /* ==========================================================
     1. Hamburger menu (CLAUDE.md準拠の標準パターン)
     ========================================================== */
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      const isOpen = this.classList.toggle('active');
      mobileMenu.classList.toggle('active');
      this.setAttribute('aria-expanded', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }
    });
  }

  /* ==========================================================
     2. Header scroll state
     ========================================================== */
  const header = document.querySelector('.site-header');
  if (header) {
    const onScroll = () => {
      if (window.scrollY > 8) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ==========================================================
     3. Reveal on scroll (Intersection Observer)
     ========================================================== */
  const revealTargets = [
    '.sec-head',
    '.issue-card',
    '.feature-row',
    '.func-item',
    '.effect-card',
    '.case-card',
    '.flow-card',
    '.price-card',
    '.faq-item',
    '.cta-inner',
    '.hero-content',
    '.hero-visual',
    '.insight-card'
  ];

  const reveals = document.querySelectorAll(revealTargets.join(','));
  reveals.forEach((el, i) => {
    el.classList.add('reveal');
    if (el.parentElement && (
      el.matches('.issue-card') ||
      el.matches('.func-item') ||
      el.matches('.effect-card') ||
      el.matches('.case-card') ||
      el.matches('.flow-card') ||
      el.matches('.price-card') ||
      el.matches('.faq-item')
    )) {
      const siblings = Array.from(el.parentElement.children).filter(c => c.classList.contains('reveal'));
      const idx = siblings.indexOf(el);
      el.setAttribute('data-delay', String(Math.min(idx, 4)));
    }
  });

  const checkReveal = (el) => {
    if (el.classList.contains('is-visible')) return;
    const r = el.getBoundingClientRect();
    if (r.top < window.innerHeight * 0.92 && r.bottom > 0) {
      el.classList.add('is-visible');
    }
  };
  const checkAllReveals = () => reveals.forEach(checkReveal);

  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

    reveals.forEach((el) => io.observe(el));
  }
  // Fallback in case IO does not fire (preview env, certain headless browsers)
  window.addEventListener('scroll', checkAllReveals, { passive: true });
  window.addEventListener('load', checkAllReveals);
  setTimeout(checkAllReveals, 200);
  setTimeout(checkAllReveals, 1200);

  /* ==========================================================
     4. Number count-up (effects + hero meta)
     ========================================================== */
  const counters = document.querySelectorAll('em[data-count]');

  const animateCounter = (el) => {
    const target = parseFloat(el.getAttribute('data-count'));
    if (isNaN(target)) return;
    const raw = el.getAttribute('data-count');
    const isFloat = raw.indexOf('.') > -1;
    const duration = 1800;
    const start = Date.now();
    const tick = () => {
      const p = Math.min((Date.now() - start) / duration, 1);
      const eased = 1 - Math.pow(1 - p, 3);
      const value = target * eased;
      el.textContent = isFloat ? value.toFixed(1) : Math.round(value).toString();
      if (p < 1) setTimeout(tick, 32);
      else el.textContent = isFloat ? target.toFixed(1) : String(target);
    };
    tick();
  };

  const playedCounters = new WeakSet();
  const playCounterIfVisible = (el) => {
    if (playedCounters.has(el)) return;
    const r = el.getBoundingClientRect();
    if (r.top < window.innerHeight && r.bottom > 0) {
      playedCounters.add(el);
      animateCounter(el);
    }
  };
  const checkAllCounters = () => counters.forEach(playCounterIfVisible);

  if ('IntersectionObserver' in window && counters.length) {
    const io2 = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !playedCounters.has(entry.target)) {
          playedCounters.add(entry.target);
          animateCounter(entry.target);
          io2.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });
    counters.forEach((el) => io2.observe(el));
  }
  // Fallback: scroll-based + initial check (covers IO-unfriendly environments)
  window.addEventListener('scroll', checkAllCounters, { passive: true });
  window.addEventListener('load', checkAllCounters);
  setTimeout(checkAllCounters, 200);
  setTimeout(checkAllCounters, 1200);

  /* ==========================================================
     7. IVR flow stepping animation (Feature 01)
     ========================================================== */
  const ivrFlow = document.querySelector('[data-ivr-flow]');
  if (ivrFlow) {
    const steps = Array.from(ivrFlow.querySelectorAll('.flow-step'));
    let active = -1;
    let timer = null;

    const setActive = (i) => {
      steps.forEach((s, idx) => {
        s.classList.remove('is-active', 'is-done');
        if (idx < i) s.classList.add('is-done');
        if (idx === i) s.classList.add('is-active');
      });
    };

    const start = () => {
      if (timer) return;
      const tick = () => {
        active = (active + 1) % (steps.length + 1);
        if (active === steps.length) {
          steps.forEach((s) => s.classList.remove('is-active', 'is-done'));
        } else {
          setActive(active);
        }
      };
      tick();
      timer = setInterval(tick, 1700);
    };
    const stop = () => { if (timer) { clearInterval(timer); timer = null; } };

    let started = false;
    const checkIvr = () => {
      if (started) return;
      const r = ivrFlow.getBoundingClientRect();
      if (r.top < window.innerHeight && r.bottom > 0) {
        started = true;
        start();
      }
    };

    if ('IntersectionObserver' in window) {
      const io3 = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !started) { started = true; start(); }
        });
      }, { threshold: 0.3 });
      io3.observe(ivrFlow);
    }
    window.addEventListener('scroll', checkIvr, { passive: true });
    window.addEventListener('load', checkIvr);
    setTimeout(checkIvr, 200);
    setTimeout(checkIvr, 1200);
  }

  /* ==========================================================
     8. Chart.js — Weekly Insight (bar) & Auto-classify (doughnut)
     ========================================================== */
  const initCharts = () => {
    if (typeof Chart === 'undefined') return;

    Chart.defaults.font.family = '"Space Grotesk", "Noto Sans JP", sans-serif';
    Chart.defaults.font.size = 12;
    Chart.defaults.color = '#5a6b82';

    /* ---- Bar chart: Weekly Insight ---- */
    const barCanvas = document.getElementById('insightBarChart');
    if (barCanvas) {
      const ctx = barCanvas.getContext('2d');
      const grad = ctx.createLinearGradient(0, 0, 0, 220);
      grad.addColorStop(0, '#2c6bff');
      grad.addColorStop(1, '#00c2d1');

      const barChart = new Chart(barCanvas, {
        type: 'bar',
        data: {
          labels: ['料金', '仕様', '導入', 'サポート', '解約'],
          datasets: [{
            label: '件数',
            data: [42, 78, 55, 34, 64],
            backgroundColor: grad,
            borderRadius: { topLeft: 6, topRight: 6, bottomLeft: 2, bottomRight: 2 },
            borderSkipped: false,
            barThickness: 26,
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          animation: { duration: 1400, easing: 'easeOutQuart' },
          plugins: {
            legend: { display: false },
            tooltip: {
              backgroundColor: '#0a2540',
              padding: 10,
              titleColor: '#fff',
              bodyColor: '#fff',
              displayColors: false,
              cornerRadius: 8,
            }
          },
          scales: {
            x: {
              grid: { display: false },
              border: { display: false },
              ticks: { color: '#8794a8', font: { size: 11 } }
            },
            y: {
              beginAtZero: true,
              grid: { color: 'rgba(11,27,46,.06)', drawTicks: false },
              border: { display: false },
              ticks: { color: '#a9b6cf', font: { size: 10 }, padding: 8, maxTicksLimit: 4 }
            }
          }
        }
      });

      // Trigger animation on visibility (with fallback)
      let barPlayed = false;
      const playBar = () => {
        if (barPlayed) return;
        const r = barCanvas.getBoundingClientRect();
        if (r.top < window.innerHeight && r.bottom > 0) {
          barPlayed = true;
          barChart.update();
        }
      };
      if ('IntersectionObserver' in window) {
        const ioBar = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting && !barPlayed) {
              barPlayed = true;
              barChart.update();
              ioBar.disconnect();
            }
          });
        }, { threshold: 0.3 });
        ioBar.observe(barCanvas);
      }
      window.addEventListener('scroll', playBar, { passive: true });
      setTimeout(playBar, 300);
    }

    /* ---- Doughnut chart: Inquiry auto-classify ---- */
    const dCanvas = document.getElementById('insightDoughnut');
    if (dCanvas) {
      const colors = ['#2c6bff', '#00c2d1', '#7b8cff', '#5fd6e0', '#a9b6cf'];
      const doughnut = new Chart(dCanvas, {
        type: 'doughnut',
        data: {
          labels: ['料金・見積', '製品仕様', '導入相談', 'サポート', 'その他'],
          datasets: [{
            data: [32, 24, 18, 14, 12],
            backgroundColor: colors,
            borderColor: 'transparent',
            borderWidth: 0,
            hoverOffset: 8,
            spacing: 2,
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutout: '68%',
          animation: { animateRotate: true, animateScale: false, duration: 1500, easing: 'easeOutQuart' },
          plugins: {
            legend: { display: false },
            tooltip: {
              backgroundColor: '#0a2540',
              padding: 10,
              titleColor: '#fff',
              bodyColor: '#fff',
              cornerRadius: 8,
              callbacks: {
                label: (ctx) => ` ${ctx.label}: ${ctx.parsed}%`
              }
            }
          }
        }
      });

      let dPlayed = false;
      const playD = () => {
        if (dPlayed) return;
        const r = dCanvas.getBoundingClientRect();
        if (r.top < window.innerHeight && r.bottom > 0) {
          dPlayed = true;
          doughnut.update();
        }
      };
      if ('IntersectionObserver' in window) {
        const ioD = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting && !dPlayed) {
              dPlayed = true;
              doughnut.update();
              ioD.disconnect();
            }
          });
        }, { threshold: 0.3 });
        ioD.observe(dCanvas);
      }
      window.addEventListener('scroll', playD, { passive: true });
      setTimeout(playD, 300);
    }
  };

  if (document.readyState === 'complete') {
    initCharts();
  } else {
    window.addEventListener('load', initCharts);
  }

  /* ==========================================================
     5. FAQ accordion
     ========================================================== */
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach((item) => {
    const q = item.querySelector('.faq-q');
    const a = item.querySelector('.faq-a');
    if (!q || !a) return;

    q.addEventListener('click', () => {
      const isOpen = item.classList.toggle('is-open');
      q.setAttribute('aria-expanded', String(isOpen));
      if (isOpen) {
        a.style.maxHeight = a.scrollHeight + 'px';
      } else {
        a.style.maxHeight = '0px';
      }
    });
  });

  /* ==========================================================
     6. Smooth-scroll offset for fixed header
     ========================================================== */
  const navLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');
  navLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
      const id = link.getAttribute('href');
      if (!id || id === '#') return;
      const target = document.querySelector(id);
      if (!target) return;
      e.preventDefault();
      const headerH = header ? header.offsetHeight : 76;
      const top = target.getBoundingClientRect().top + window.scrollY - headerH + 1;
      window.scrollTo({ top, behavior: 'smooth' });
    });
  });

})();
