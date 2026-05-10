/* ============================================================
   xVoice — Interactions
   ============================================================ */

(function () {
  'use strict';

  /* ==========================================================
     1. Hamburger menu
     ========================================================== */
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (hamburger && mobileMenu) {
    let scrollY = 0;
    const lockScroll = () => {
      scrollY = window.scrollY;
      document.body.style.position = 'fixed';
      document.body.style.top = -scrollY + 'px';
      document.body.style.left = '0';
      document.body.style.right = '0';
      document.body.style.overflow = 'hidden';
    };
    const unlockScroll = () => {
      document.body.style.position = '';
      document.body.style.top = '';
      document.body.style.left = '';
      document.body.style.right = '';
      document.body.style.overflow = '';
      window.scrollTo(0, scrollY);
    };
    const closeMenu = () => {
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('active');
      hamburger.setAttribute('aria-expanded', 'false');
      unlockScroll();
    };

    hamburger.addEventListener('click', function () {
      const isOpen = this.classList.toggle('active');
      mobileMenu.classList.toggle('active');
      this.setAttribute('aria-expanded', isOpen);
      if (isOpen) lockScroll(); else unlockScroll();
    });

    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
        closeMenu();
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
    '.issue-check',
    '.issue-bridge',
    '.reason-hero',
    '.reason-card',
    '.benefit-card',
    '.feature-row',
    '.support-card',
    '.flow-card',
    '.faq-item',
    '.cta-inner',
    '.hero-content',
    '.hero-visual'
  ];

  const reveals = document.querySelectorAll(revealTargets.join(','));
  reveals.forEach((el) => {
    el.classList.add('reveal');
    if (el.parentElement && (
      el.matches('.issue-check') ||
      el.matches('.reason-card') ||
      el.matches('.benefit-card') ||
      el.matches('.support-card') ||
      el.matches('.flow-card') ||
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
  window.addEventListener('scroll', checkAllReveals, { passive: true });
  window.addEventListener('load', checkAllReveals);
  setTimeout(checkAllReveals, 200);
  setTimeout(checkAllReveals, 1200);

  /* ==========================================================
     4. Number count-up
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
      const formatted = isFloat ? value.toFixed(1) : Math.round(value).toLocaleString('en-US');
      el.textContent = formatted;
      if (p < 1) setTimeout(tick, 32);
      else el.textContent = isFloat ? target.toFixed(1) : Math.round(target).toLocaleString('en-US');
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
  window.addEventListener('scroll', checkAllCounters, { passive: true });
  window.addEventListener('load', checkAllCounters);
  setTimeout(checkAllCounters, 200);
  setTimeout(checkAllCounters, 1200);

  /* ==========================================================
     5. IVR flow stepping animation (Feature 01)
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

    let started = false;
    if ('IntersectionObserver' in window) {
      const io3 = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !started) { started = true; start(); }
        });
      }, { threshold: 0.3 });
      io3.observe(ivrFlow);
    }
    const checkIvr = () => {
      if (started) return;
      const r = ivrFlow.getBoundingClientRect();
      if (r.top < window.innerHeight && r.bottom > 0) {
        started = true;
        start();
      }
    };
    window.addEventListener('scroll', checkIvr, { passive: true });
    window.addEventListener('load', checkIvr);
    setTimeout(checkIvr, 200);
    setTimeout(checkIvr, 1200);
  }

  /* ==========================================================
     5b. Relay flow stepping (FEATURE 01: person → AI → person)
     ========================================================== */
  const relayFlow = document.querySelector('[data-relay-flow]');
  if (relayFlow) {
    const nodes = Array.from(relayFlow.querySelectorAll('.relay-node'));
    const links = Array.from(relayFlow.querySelectorAll('.relay-link'));
    const status = relayFlow.parentElement && relayFlow.parentElement.querySelector('.relay-status');
    let active = -1;
    let timer = null;
    let started = false;

    const total = nodes.length + 2;

    const tick = () => {
      active = (active + 1) % total;
      if (active === total - 1) {
        nodes.forEach((n) => n.classList.remove('is-active', 'is-done'));
        links.forEach((l) => l.classList.remove('is-active'));
        if (status) status.classList.remove('is-shown');
        return;
      }
      nodes.forEach((n, idx) => {
        n.classList.remove('is-active', 'is-done');
        if (idx < active) n.classList.add('is-done');
        if (idx === active) n.classList.add('is-active');
      });
      links.forEach((l, idx) => {
        l.classList.toggle('is-active', idx < active);
      });
      if (status) {
        status.classList.toggle('is-shown', active >= nodes.length);
      }
    };

    const start = () => {
      if (started) return;
      started = true;
      tick();
      timer = setInterval(tick, 1500);
    };

    if ('IntersectionObserver' in window) {
      const ioR = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !started) start();
        });
      }, { threshold: 0.3 });
      ioR.observe(relayFlow);
    } else {
      start();
    }
  }

  /* ==========================================================
     6. FAQ accordion
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
     7. Call sequence (reveal + typewriter chain — plays once)
        Supports multiple [data-call-cycle] instances (FV + FEATURE 02)
     ========================================================== */
  const callCycles = document.querySelectorAll('[data-call-cycle]');
  const reduceMotionCycle = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const waitCycle = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

  callCycles.forEach((callCycle) => {
    const steps = Array.from(callCycle.querySelectorAll('[data-step]'))
      .sort((a, b) => Number(a.dataset.step) - Number(b.dataset.step));
    if (!steps.length) return;

    const reveal = (el) => {
      if (!el) return;
      el.classList.remove('is-collapsed');
      void el.offsetHeight;
      el.classList.add('is-fade-in');
    };

    const typewriter = async (el, speed = 65) => {
      if (!el) return;
      const fullText = el.dataset.typewriter || '';
      el.textContent = '';
      if (reduceMotionCycle) {
        el.textContent = fullText;
        el.classList.add('is-typed');
        return;
      }
      for (let i = 0; i < fullText.length; i++) {
        el.textContent += fullText.charAt(i);
        await waitCycle(speed);
      }
      el.classList.add('is-typed');
    };

    let played = false;
    const runOnce = async () => {
      if (played) return;
      played = true;

      for (let i = 0; i < steps.length; i++) {
        reveal(steps[i]);
        await waitCycle(650);
        const typedEl = steps[i].querySelector('[data-typewriter]');
        if (typedEl) {
          const speed = i === 0 ? 65 : 55;
          await typewriter(typedEl, speed);
          await waitCycle(i === steps.length - 1 ? 0 : 900);
        } else {
          await waitCycle(700);
        }
      }
    };

    if ('IntersectionObserver' in window) {
      const cycleIo = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !played) {
            runOnce();
            cycleIo.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });
      cycleIo.observe(callCycle);
    } else {
      runOnce();
    }
  });

  /* ==========================================================
     7b. Floating CTA (sticky button, hides over CTA section)
     ========================================================== */
  const floatingCta = document.querySelector('[data-floating-cta]');
  if (floatingCta) {
    const ctaSection = document.querySelector('#contact');
    let ctaInView = false;

    const updateVisibility = () => {
      const showByScroll = window.scrollY > window.innerHeight * 0.6;
      if (showByScroll && !ctaInView) {
        floatingCta.classList.add('is-visible');
        floatingCta.classList.remove('is-near-cta');
      } else if (ctaInView) {
        floatingCta.classList.add('is-near-cta');
      } else {
        floatingCta.classList.remove('is-visible', 'is-near-cta');
      }
    };

    if ('IntersectionObserver' in window && ctaSection) {
      const ctaIo = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          ctaInView = entry.isIntersecting;
          updateVisibility();
        });
      }, { threshold: 0.05 });
      ctaIo.observe(ctaSection);
    }
    window.addEventListener('scroll', updateVisibility, { passive: true });
    updateVisibility();
  }

  /* ==========================================================
     8. Smooth-scroll offset for fixed header
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
