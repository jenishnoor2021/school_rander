<div class="container">
  <div class="footer-grid-4col">
    <!-- Brand Story Column -->
    <div class="footer-brand-deck">
      <div style="display: flex; align-items: center; gap: 0.85rem;">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Seven Steps Pre-School Logo" width="52" height="52" style="background: #fff; border-radius: 50%; padding: 4px;">
        <div>
          <span class="brand-title" style="font-size: 1.15rem;">SEVEN STEPS</span>
          <p style="margin: 0; color: var(--saffron-light); font-family: var(--font-handwritten); font-size: 0.95rem; font-weight: 700;">Sunrise Group - Surat</p>
        </div>
      </div>
      <p>
        Seven Steps Pre-School, including all of our schools, is committed to acting on our new vision, mission, and values statements. We nurture curious minds into compassionate future leaders.
      </p>
      <div class="footer-social-links">
        <a href="https://facebook.com" target="_blank" class="social-circle-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://instagram.com" target="_blank" class="social-circle-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://youtube.com" target="_blank" class="social-circle-btn" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <!-- Quick Explore Column -->
    <div class="footer-col">
      <h4>Explore</h4>
      <div class="footer-nav-links">
        <a href="{{ route('aboutUs') }}"><i class="fas fa-angle-right"></i> About Us</a>
        <a href="{{ route('admission') }}"><i class="fas fa-angle-right"></i> Admissions</a>
        <a href="{{ route('facilities') }}"><i class="fas fa-angle-right"></i> Facilities</a>
        <a href="{{ route('academic_activities') }}"><i class="fas fa-angle-right"></i> Activities</a>
        <a href="{{ route('event') }}"><i class="fas fa-angle-right"></i> Events</a>
        <a href="{{ route('gallery') }}"><i class="fas fa-angle-right"></i> Gallery</a>
      </div>
    </div>

    <!-- Campus Branches Column -->
    <div class="footer-col">
      <h4>Branches</h4>
      <div class="footer-nav-links">
        <a href="{{ route('branches') }}"><i class="fas fa-map-pin"></i> Pal Main Campus</a>
        <a href="{{ route('branches') }}"><i class="fas fa-map-pin"></i> Vesu Center</a>
        <a href="{{ route('branches') }}"><i class="fas fa-map-pin"></i> Adajan Center</a>
        <a href="{{ route('branches') }}"><i class="fas fa-map-pin"></i> Katargam Center</a>
        <a href="{{ route('branches') }}"><i class="fas fa-map-pin"></i> Varachha Center</a>
        <a href="{{ route('branches') }}"><i class="fas fa-map-pin"></i> Althan Center</a>
      </div>
    </div>

    <!-- Contact Info Column -->
    <div class="footer-col">
      <h4>Contact Us</h4>
      <div style="display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.9rem; color: rgba(255, 255, 255, 0.8);">
        <div style="display: flex; gap: 0.65rem;">
          <i class="fas fa-phone-alt" style="color: var(--saffron-light); margin-top: 0.2rem;"></i>
          <div>
            <a href="tel:+919879146666" style="color: #fff; font-weight: 600;">+91 98791 46666</a><br>
            <a href="tel:+919904419333" style="color: #fff; font-weight: 600;">+91 99044 19333</a>
          </div>
        </div>
        <div style="display: flex; gap: 0.65rem;">
          <i class="fas fa-envelope" style="color: var(--saffron-light); margin-top: 0.2rem;"></i>
          <a href="mailto:ssspre46666@gmail.com" style="color: #fff;">ssspre46666@gmail.com</a>
        </div>
        <div style="display: flex; gap: 0.65rem;">
          <i class="fas fa-map-marker-alt" style="color: var(--saffron-light); margin-top: 0.2rem;"></i>
          <span>Galaxy Imperia, Above District Bank, Pal Road, Surat.</span>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom-bar">
    <p>&copy; 2026 Seven Steps Pre-School. All Rights Reserved. Managed by <strong>Sunrise Group - Surat</strong>.</p>
    <div style="display: flex; gap: 1.25rem;">
      <a href="{{ route('policy') }}" style="color: rgba(255, 255, 255, 0.7);">Refund Policy</a>
      <a href="{{ route('circular') }}" style="color: rgba(255, 255, 255, 0.7);">Circulars</a>
      <a href="{{ route('career') }}" style="color: rgba(255, 255, 255, 0.7);">Career</a>
    </div>
  </div>
</div>