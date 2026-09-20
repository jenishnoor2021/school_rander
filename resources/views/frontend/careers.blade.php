@extends('layouts.front')
@section('content')

<!-- Storybook Wonder Subpage Banner -->
<section class="subpage-wonder-banner">
  <!-- Floating Background Doodles -->
  <div class="doodle-element doodle-star" style="top: 15%; left: 8%; opacity: 0.6;" aria-hidden="true">
    <i class="fas fa-star" style="color: var(--honey-light); font-size: 1.5rem;"></i>
  </div>
  <div class="doodle-element doodle-star" style="bottom: 20%; right: 10%; opacity: 0.6;" aria-hidden="true">
    <i class="fas fa-star" style="color: var(--saffron-light); font-size: 1.25rem;"></i>
  </div>

  <div class="container">
    <div class="reveal-pop">
      <h1>Careers at Seven Steps</h1>
      <div class="breadcrumb-pill-trail">
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
        <span>Admission & Inquiry</span><span>Career</span>
      </div>
    </div>
  </div>
</section>

<!-- Storybook Wave Divider -->
<div class="storybook-wave wave-cream" aria-hidden="true">
  <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
    <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
  </svg>
</div>


<section class="section-py bg-white">
  <div class="container">
    <div class="section-header reveal-pop">
      <span class="section-tag"><i class="fas fa-heart"></i> Join Our Family</span>
      <h2>Work With Seven Steps Pre-School</h2>
      <p>Passionate about nurturing future minds? We provide supportive culture, modern teaching tools, and continuous professional growth.</p>
    </div>

    <!-- Current Openings -->
    <div class="career-openings-grid">
      <div class="facility-explorer-card reveal-pop" style="border-top: 4px solid var(--saffron);">
        <span class="campus-pill-badge">Full Time</span>
        <h3>Pre-Primary Teacher</h3>
        <p>Qualified NTT / ECCEd / Montessori trained teachers with fluent English communication and warm bonding with little learners.</p>
        <div style="font-size: 0.85rem; color: var(--text-muted);"><i class="fas fa-map-marker-alt"></i> Pal, Vesu, Adajan Campuses</div>
      </div>

      <div class="facility-explorer-card reveal-pop" style="border-top: 4px solid var(--mint);">
        <span class="campus-pill-badge" style="background: var(--bg-pill-mint); color: var(--mint);">Full Time</span>
        <h3>Art, Craft & Music Educator</h3>
        <p>Creative instructors skilled in finger painting, clay modelling, rhymes, and kindergarten dramatics to lead lively studios.</p>
        <div style="font-size: 0.85rem; color: var(--text-muted);"><i class="fas fa-map-marker-alt"></i> All Surat Campuses</div>
      </div>

      <div class="facility-explorer-card reveal-pop" style="border-top: 4px solid var(--honey-dark);">
        <span class="campus-pill-badge" style="background: var(--bg-pill-honey); color: var(--honey-dark);">Full Time</span>
        <h3>Center Counselor & Admin</h3>
        <p>Proactive professionals with excellent interpersonal skills, handling parent counseling, admissions, and campus operations.</p>
        <div style="font-size: 0.85rem; color: var(--text-muted);"><i class="fas fa-map-marker-alt"></i> Head Office, Pal Road</div>
      </div>
    </div>

    <!-- Application Form -->
    <div class="workbook-form-card reveal-pop">
      <div class="washi-tape"></div>
      <h3 style="font-family: var(--font-display); color: var(--navy); font-size: 1.5rem; text-align: center; margin-bottom: 1.5rem;">
        Quick Teacher Application
      </h3>

      <div class="form-alert-box" id="careerAlertBox">
        @if(session('success'))
        <div class="form-alert form-alert-success">
          <i class="fas fa-check-circle alert-icon"></i>
          <div class="form-alert-content">
            <div class="form-alert-title">Success!</div>
            {{ session('success') }}
          </div>
          <button type="button" class="form-alert-close" onclick="this.parentElement.remove();">&times;</button>
        </div>
        @endif
        @if(session('alert'))
        <div class="form-alert form-alert-success">
          <i class="fas fa-check-circle alert-icon"></i>
          <div class="form-alert-content">
            <div class="form-alert-title">Success!</div>
            {{ session('alert') }}
          </div>
          <button type="button" class="form-alert-close" onclick="this.parentElement.remove();">&times;</button>
        </div>
        @endif
        @if(isset($errors) && $errors->any())
        <div class="form-alert form-alert-error">
          <i class="fas fa-exclamation-circle alert-icon"></i>
          <div class="form-alert-content">
            <div class="form-alert-title">Please review the following errors:</div>
            <ul style="margin: 0.25rem 0 0 1rem; padding: 0;">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          <button type="button" class="form-alert-close" onclick="this.parentElement.remove();">&times;</button>
        </div>
        @endif
      </div>

      <form class="interactive-form" id="careerApplicationForm" action="{{ route('storecareer') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-grid-2col">
          <div class="form-field-group">
            <label class="form-field-label">Full Name *</label>
            <input type="text" name="fname" class="form-input-styled" placeholder="Enter your full name" value="{{ old('fname') }}" required>
          </div>
          <div class="form-field-group">
            <label class="form-field-label">Mobile Number *</label>
            <input type="tel" name="phone" class="form-input-styled" placeholder="10-digit mobile number" pattern="[0-9]{10}" maxlength="10" value="{{ old('phone') }}" required>
          </div>
          <div class="form-field-group">
            <label class="form-field-label">Email Address *</label>
            <input type="email" name="email" class="form-input-styled" placeholder="name@example.com" value="{{ old('email') }}" required>
          </div>
          <div class="form-field-group">
            <label class="form-field-label">Position Applied For *</label>
            <select name="subject" class="form-input-styled" required>
              <option value="">Select Position</option>
              <option value="Pre-Primary Teacher" {{ old('subject') == 'Pre-Primary Teacher' ? 'selected' : '' }}>Pre-Primary Teacher</option>
              <option value="Art & Music Educator" {{ old('subject') == 'Art & Music Educator' ? 'selected' : '' }}>Art & Music Educator</option>
              <option value="Center Counselor" {{ old('subject') == 'Center Counselor' ? 'selected' : '' }}>Center Counselor</option>
              <option value="Other Staff" {{ old('subject') == 'Other Staff' ? 'selected' : '' }}>Other Staff</option>
            </select>
          </div>
          <div class="form-field-group full-width">
            <label class="form-field-label">Upload Resume / CV (PDF, DOC, DOCX - Max 5MB)</label>
            <input type="file" name="file" class="form-input-styled" accept=".pdf,.doc,.docx">
            <div class="file-input-help-text">Accepted formats: .pdf, .doc, .docx (Max 5MB)</div>
          </div>
          <div class="form-field-group full-width">
            <label class="form-field-label">Experience & Qualifications</label>
            <textarea name="detail" class="form-input-styled" rows="3" placeholder="Briefly describe your educational background and teaching experience...">{{ old('detail') }}</textarea>
          </div>
        </div>
        <div style="text-align: center; margin-top: 1.5rem;">
          <button type="submit" class="btn-wonder btn-wonder-primary" style="padding: 0.95rem 2.5rem; font-size: 1.08rem;">
            <span class="btn-text"><i class="fas fa-paper-plane"></i> Send Application</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection