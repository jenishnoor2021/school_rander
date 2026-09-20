/**
 * SEVEN STEPS PRE-SCHOOL - THE WONDER CANVAS ANIMATION & INTERACTION ENGINE
 * Modern, Lightweight, Accessible, High Performance
 */

document.addEventListener('DOMContentLoaded', () => {
  initPagePreloader();
  initStickyHeader();
  initMobileNavigation();
  initScrollReveal();
  initScrollRocket();
  initLightboxModal();
  initStatsCounters();
  initHeroParallax();
  initFormFeedback();
});

/* --------------------------------------------------------------------------
   1. Page Preloader Entrance
   -------------------------------------------------------------------------- */
function initPagePreloader() {
  const preloader = document.querySelector('.page-preloader');
  if (!preloader) return;

  const isVisited = sessionStorage.getItem('wonder_visited');
  const delay = isVisited ? 150 : 500;

  setTimeout(() => {
    preloader.classList.add('fade-out');
    sessionStorage.setItem('wonder_visited', 'true');
  }, delay);
}

/* --------------------------------------------------------------------------
   2. Sticky Header Behavior
   -------------------------------------------------------------------------- */
function initStickyHeader() {
  const header = document.querySelector('.site-header');
  if (!header) return;

  let lastScrollY = window.scrollY;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
    lastScrollY = window.scrollY;
  }, { passive: true });
}

/* --------------------------------------------------------------------------
   3. Mobile Navigation Drawer & Accordions
   -------------------------------------------------------------------------- */
function initMobileNavigation() {
  const openBtn = document.querySelector('.mobile-menu-btn');
  const closeBtn = document.querySelector('.drawer-close-btn');
  const drawer = document.querySelector('.mobile-nav-drawer');
  const backdrop = document.querySelector('.mobile-nav-backdrop');

  if (!drawer || !backdrop) return;

  const openDrawer = () => {
    drawer.classList.add('active');
    backdrop.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  const closeDrawer = () => {
    drawer.classList.remove('active');
    backdrop.classList.remove('active');
    document.body.style.overflow = '';
  };

  if (openBtn) openBtn.addEventListener('click', openDrawer);
  if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
  backdrop.addEventListener('click', closeDrawer);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && drawer.classList.contains('active')) {
      closeDrawer();
    }
  });

  // Accordion Dropdowns inside Drawer
  const accordionToggles = document.querySelectorAll('.has-drawer-accordion > .drawer-link');
  accordionToggles.forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      const parent = toggle.closest('.has-drawer-accordion');
      const accordion = parent.querySelector('.drawer-accordion');
      const icon = toggle.querySelector('.toggle-icon');

      if (accordion) {
        const isOpen = accordion.classList.contains('open');
        accordion.classList.toggle('open', !isOpen);
        if (icon) {
          icon.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
        }
      }
    });
  });
}

/* --------------------------------------------------------------------------
   4. Native Scroll Reveal Engine
   -------------------------------------------------------------------------- */
function initScrollReveal() {
  const elements = document.querySelectorAll('.reveal-pop');
  if (!elements.length) return;

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          obs.unobserve(entry.target);
        }
      });
    }, {
      root: null,
      threshold: 0.1,
      rootMargin: '0px 0px -40px 0px'
    });

    elements.forEach((el, i) => {
      // Automatic small stagger delay for adjacent cards
      const delay = (i % 4) * 0.1;
      el.style.transitionDelay = `${delay}s`;
      observer.observe(el);
    });
  } else {
    elements.forEach(el => el.classList.add('revealed'));
  }
}

/* --------------------------------------------------------------------------
   5. Rocket Scroll-to-Top
   -------------------------------------------------------------------------- */
function initScrollRocket() {
  const rocketBtn = document.querySelector('.rocket-top-btn');
  if (!rocketBtn) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 350) {
      rocketBtn.classList.add('visible');
    } else {
      rocketBtn.classList.remove('visible');
    }
  }, { passive: true });

  rocketBtn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
}

/* --------------------------------------------------------------------------
   6. Fullscreen Lightbox Modal
   -------------------------------------------------------------------------- */
function initLightboxModal() {
  const lightbox = document.querySelector('.wonder-lightbox-modal');
  if (!lightbox) return;

  const lightboxImg = lightbox.querySelector('.lightbox-render-img');
  const lightboxVideo = lightbox.querySelector('.lightbox-video-frame');
  const lightboxCaption = lightbox.querySelector('.lightbox-caption-text');
  const closeBtn = lightbox.querySelector('.lightbox-close-trigger');

  const closeLightbox = () => {
    lightbox.classList.remove('active');
    if (lightboxImg) lightboxImg.src = '';
    if (lightboxVideo) lightboxVideo.src = '';
    document.body.style.overflow = '';
  };

  const openImage = (src, caption) => {
    if (lightboxVideo) lightboxVideo.style.display = 'none';
    if (lightboxImg) {
      lightboxImg.style.display = 'block';
      lightboxImg.src = src;
      lightboxImg.alt = caption || 'Enlarged Preview';
    }
    if (lightboxCaption) lightboxCaption.textContent = caption || '';
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  const openVideo = (videoUrl, caption) => {
    if (lightboxImg) lightboxImg.style.display = 'none';
    if (lightboxVideo) {
      lightboxVideo.style.display = 'block';
      lightboxVideo.src = videoUrl;
    }
    if (lightboxCaption) lightboxCaption.textContent = caption || '';
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
  };

  // Bind clicks on gallery cards
  document.querySelectorAll('[data-lightbox-src]').forEach(card => {
    card.addEventListener('click', (e) => {
      e.preventDefault();
      const src = card.getAttribute('data-lightbox-src');
      const caption = card.getAttribute('data-lightbox-caption') || card.querySelector('img')?.alt;
      const isVideo = card.getAttribute('data-lightbox-type') === 'video';

      if (isVideo) {
        openVideo(src, caption);
      } else {
        openImage(src, caption);
      }
    });
  });

  if (closeBtn) closeBtn.addEventListener('click', closeLightbox);

  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && lightbox.classList.contains('active')) {
      closeLightbox();
    }
  });
}

/* --------------------------------------------------------------------------
   7. Animated Stats Counters
   -------------------------------------------------------------------------- */
function initStatsCounters() {
  const counterElements = document.querySelectorAll('.counter-figure');
  if (!counterElements.length) return;

  let hasRun = false;
  const runCounters = () => {
    counterElements.forEach(item => {
      const target = parseInt(item.getAttribute('data-count'), 10) || 0;
      const duration = 2000;
      const start = performance.now();

      const update = (now) => {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        const easeOut = 1 - Math.pow(1 - progress, 3);
        const current = Math.floor(easeOut * target);

        item.textContent = current.toLocaleString('en-US');

        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          item.textContent = target.toLocaleString('en-US');
        }
      };

      requestAnimationFrame(update);
    });
  };

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting && !hasRun) {
        hasRun = true;
        runCounters();
      }
    }, { threshold: 0.2 });

    observer.observe(counterElements[0].closest('.stats-deck-container') || counterElements[0]);
  } else {
    runCounters();
  }
}

/* --------------------------------------------------------------------------
   8. Interactive Hero Parallax Physics (Desktop Only)
   -------------------------------------------------------------------------- */
function initHeroParallax() {
  const heroSection = document.querySelector('.wonder-hero-section');
  if (!heroSection || window.innerWidth < 992) return;

  const doodles = heroSection.querySelectorAll('.doodle-element, .hero-sticker-badge');
  if (!doodles.length) return;

  heroSection.addEventListener('mousemove', (e) => {
    const rect = heroSection.getBoundingClientRect();
    const x = (e.clientX - rect.left) / rect.width - 0.5;
    const y = (e.clientY - rect.top) / rect.height - 0.5;

    doodles.forEach((el, i) => {
      const speed = (i + 1) * 8;
      el.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
    });
  });

  heroSection.addEventListener('mouseleave', () => {
    doodles.forEach(el => {
      el.style.transform = '';
    });
  });
}

/* --------------------------------------------------------------------------
   9. Form Feedback Interactivity
   -------------------------------------------------------------------------- */
function initFormFeedback() {
  const forms = document.querySelectorAll('.interactive-form');
  forms.forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      if (submitBtn) {
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = `<i class="fas fa-check-circle"></i> Submitted Successfully!`;
        submitBtn.style.background = 'var(--mint-gradient)';

        setTimeout(() => {
          alert('Thank you! Your information has been received. Our Seven Steps admissions counselor will contact you shortly.');
          form.reset();
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
          submitBtn.style.background = '';
        }, 600);
      }
    });
  });
}
