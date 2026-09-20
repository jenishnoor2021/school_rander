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
  initHomePopupModal();
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
   9. Form Submission Engine (Client Validation, Button Loader & AJAX Feedback)
   -------------------------------------------------------------------------- */
function initFormFeedback() {
  const forms = document.querySelectorAll('.interactive-form');
  if (!forms.length) return;

  forms.forEach(form => {
    // Clear field-specific validation errors dynamically on user input
    form.querySelectorAll('input, select, textarea').forEach(input => {
      input.addEventListener('input', () => clearFieldError(input));
      input.addEventListener('change', () => clearFieldError(input));
    });

    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      // Clear all existing alerts and field errors
      clearAllFormErrors(form);

      // 1. Perform Client-Side Validation
      const isValid = validateForm(form);
      if (!isValid) {
        showFormAlert(form, 'error', 'Please check the required fields highlighted in red below.');
        return;
      }

      // 2. Put Button into Loading State
      const submitBtn = form.querySelector('button[type="submit"]');
      let originalBtnHtml = '';
      if (submitBtn) {
        originalBtnHtml = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.classList.add('btn-loading');
        submitBtn.innerHTML = '<span class="btn-spinner"><i class="fas fa-spinner fa-spin"></i></span><span class="btn-text">Submitting... Please wait</span>';
      }

      // 3. Submit Form Data via AJAX (Fetch API)
      const formData = new FormData(form);
      const actionUrl = form.getAttribute('action') || window.location.href;
      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') 
                        || form.querySelector('input[name="_token"]')?.value 
                        || '';

      try {
        const response = await fetch(actionUrl, {
          method: 'POST',
          body: formData,
          headers: {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': csrfToken
          }
        });

        const data = await response.json().catch(() => null);

        if (response.ok && data && (data.status === 'success' || data.success)) {
          // Success Feedback
          showFormAlert(form, 'success', data.message || 'Your information has been saved successfully!');
          form.reset();
        } else if (response.status === 422 && data && data.errors) {
          // Backend Validation Errors (HTTP 422)
          handleServerValidationErrors(form, data.errors);
          const errorMsg = data.message || 'Please correct the highlighted fields and submit again.';
          showFormAlert(form, 'error', errorMsg);
        } else {
          // Generic Failure
          const errorMsg = (data && data.message) 
            ? data.message 
            : 'We were unable to save your information. Please check your internet connection or call our office.';
          showFormAlert(form, 'error', errorMsg);
        }
      } catch (err) {
        console.error('Submission failed:', err);
        showFormAlert(form, 'error', 'Network error encountered while submitting. Please check your connection or contact our office directly.');
      } finally {
        // Restore Submit Button State
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.classList.remove('btn-loading');
          submitBtn.innerHTML = originalBtnHtml;
        }
      }
    });
  });
}

/**
 * Client-Side Form Validation Rules
 */
function validateForm(form) {
  let hasErrors = false;
  let firstInvalidInput = null;

  const markInvalid = (input, message) => {
    hasErrors = true;
    input.classList.add('is-invalid');

    // Check if error message already exists
    let parent = input.closest('.form-field-group');
    if (parent && !parent.querySelector('.form-field-error')) {
      const errorDiv = document.createElement('div');
      errorDiv.className = 'form-field-error';
      errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> <span>${message}</span>`;
      parent.appendChild(errorDiv);
    }

    if (!firstInvalidInput) {
      firstInvalidInput = input;
    }
  };

  // Validate Name fields
  const nameFields = form.querySelectorAll('input[name="fname"], input[name="username"], input[name="taken_by"]');
  nameFields.forEach(input => {
    const val = input.value.trim();
    if (input.hasAttribute('required') && !val) {
      markInvalid(input, 'Please enter full name.');
    } else if (val && val.length < 2) {
      markInvalid(input, 'Name must be at least 2 characters long.');
    }
  });

  // Validate Phone fields
  const phoneFields = form.querySelectorAll('input[name="phone"]');
  phoneFields.forEach(input => {
    const val = input.value.trim().replace(/\D/g, '');
    if (input.hasAttribute('required') && !val) {
      markInvalid(input, 'Please enter a 10-digit mobile number.');
    } else if (val && !/^[0-9]{10}$/.test(val)) {
      markInvalid(input, 'Please enter a valid 10-digit mobile number (numbers only).');
    }
  });

  // Validate Email fields
  const emailFields = form.querySelectorAll('input[type="email"], input[name="email"]');
  emailFields.forEach(input => {
    const val = input.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (input.hasAttribute('required') && !val) {
      markInvalid(input, 'Please enter a valid email address.');
    } else if (val && !emailRegex.test(val)) {
      markInvalid(input, 'Please enter a valid email format (e.g. name@example.com).');
    }
  });

  // Validate Date of Birth
  const dobFields = form.querySelectorAll('input[name="dob"]');
  dobFields.forEach(input => {
    if (input.hasAttribute('required') && !input.value.trim()) {
      markInvalid(input, 'Please select the date of birth.');
    }
  });

  // Validate Select Dropdowns
  const selectFields = form.querySelectorAll('select[required]');
  selectFields.forEach(select => {
    if (!select.value || select.value === '') {
      markInvalid(select, 'Please select an option.');
    }
  });

  // Validate Textarea details
  const textareas = form.querySelectorAll('textarea[required]');
  textareas.forEach(textarea => {
    const val = textarea.value.trim();
    if (!val) {
      markInvalid(textarea, 'Please fill in this required field.');
    } else if (val.length < 5) {
      markInvalid(textarea, 'Please provide more details (minimum 5 characters).');
    }
  });

  // Validate File uploads (if any selected)
  const fileInputs = form.querySelectorAll('input[type="file"]');
  fileInputs.forEach(fileInput => {
    if (fileInput.files && fileInput.files[0]) {
      const file = fileInput.files[0];
      const allowedExt = ['pdf', 'doc', 'docx'];
      const fileExt = file.name.split('.').pop().toLowerCase();
      const maxSize = 5 * 1024 * 1024; // 5MB

      if (!allowedExt.includes(fileExt)) {
        markInvalid(fileInput, 'Allowed file formats are .pdf, .doc, and .docx only.');
      } else if (file.size > maxSize) {
        markInvalid(fileInput, 'File size must not exceed 5MB.');
      }
    }
  });

  if (firstInvalidInput) {
    firstInvalidInput.focus();
    firstInvalidInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }

  return !hasErrors;
}

/**
 * Clear errors on specific field
 */
function clearFieldError(input) {
  input.classList.remove('is-invalid');
  const parent = input.closest('.form-field-group');
  if (parent) {
    const errorDiv = parent.querySelector('.form-field-error');
    if (errorDiv) errorDiv.remove();
  }
}

/**
 * Clear all errors across the form
 */
function clearAllFormErrors(form) {
  form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
  form.querySelectorAll('.form-field-error').forEach(el => el.remove());
  const alertBox = form.closest('.workbook-form-card')?.querySelector('.form-alert-box') 
                   || form.querySelector('.form-alert-box');
  if (alertBox) {
    alertBox.innerHTML = '';
  }
}

/**
 * Handle Backend Validation Errors (HTTP 422)
 */
function handleServerValidationErrors(form, errors) {
  let firstEl = null;

  for (const [field, messages] of Object.entries(errors)) {
    const input = form.querySelector(`[name="${field}"]`);
    if (input) {
      input.classList.add('is-invalid');
      const parent = input.closest('.form-field-group');
      if (parent && !parent.querySelector('.form-field-error')) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'form-field-error';
        errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> <span>${messages[0]}</span>`;
        parent.appendChild(errorDiv);
      }
      if (!firstEl) firstEl = input;
    }
  }

  if (firstEl) {
    firstEl.focus();
    firstEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
}

/**
 * Display Floating Form Alert (Success / Error)
 */
function showFormAlert(form, type, message) {
  const alertBox = form.closest('.workbook-form-card')?.querySelector('.form-alert-box') 
                   || form.querySelector('.form-alert-box');
  if (!alertBox) {
    alert(message);
    return;
  }

  const isSuccess = type === 'success';
  const alertClass = isSuccess ? 'form-alert-success' : 'form-alert-error';
  const iconClass = isSuccess ? 'fa-check-circle' : 'fa-exclamation-circle';
  const title = isSuccess ? 'Success!' : 'Notice';

  alertBox.innerHTML = `
    <div class="form-alert ${alertClass}">
      <i class="fas ${iconClass} alert-icon"></i>
      <div class="form-alert-content">
        <div class="form-alert-title">${title}</div>
        <div>${message}</div>
      </div>
      <button type="button" class="form-alert-close" aria-label="Close" onclick="this.parentElement.remove();">&times;</button>
    </div>
  `;

  alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

/* --------------------------------------------------------------------------
   10. Homepage Announcement Popup Modal Controller
   -------------------------------------------------------------------------- */
function initHomePopupModal() {
  const modal = document.getElementById('homeAnnouncementModal');
  if (!modal) return;

  const openModal = () => {
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
  };

  const closeModal = () => {
    modal.classList.remove('show');
    document.body.style.overflow = '';
  };

  // Open modal smoothly when page loads
  setTimeout(openModal, 600);

  const closeBtn = document.getElementById('closePopupBtn');
  const dismissBtn = document.getElementById('dismissPopupText');
  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  if (dismissBtn) dismissBtn.addEventListener('click', closeModal);

  // Close when clicking outside on dark backdrop
  modal.addEventListener('click', (e) => {
    if (e.target === modal) closeModal();
  });

  // Close on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('show')) {
      closeModal();
    }
  });
}


