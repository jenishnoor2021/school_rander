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
      <h1>Pre-Primary Admission</h1>
      <div class="breadcrumb-pill-trail">
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
        <span>Admission & Inquiry</span><span>Admission</span>
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
      <span class="section-tag"><i class="fas fa-door-open"></i> Enroll Your Child</span>
      <h2>Admissions Open for 2025 - 2026</h2>
      <p>Start your child's journey in an environment filled with wonder, play, and modern educational excellence.</p>
    </div>

    <!-- 4-Step Admission Journey -->
    <div class="admission-roadmap-grid">
      <div class="milestone-step-card m-step-1 reveal-pop">
        <div class="milestone-number-pin">1</div>
        <h3>Step 1: Inquiry & Prospectus</h3>
        <p>Submit an online inquiry or visit any of our 6 campuses in Surat to collect the welcome brochure.</p>
      </div>
      <div class="milestone-step-card m-step-2 reveal-pop">
        <div class="milestone-number-pin">2</div>
        <h3>Step 2: Campus Walkthrough</h3>
        <p>Tour our classrooms, play arenas, and meet our friendly educators for a personalized interaction.</p>
      </div>
      <div class="milestone-step-card m-step-3 reveal-pop">
        <div class="milestone-number-pin">3</div>
        <div class="milestone-step-icon" style="display:none;"></div>
        <h3>Step 3: Document Verification</h3>
        <p>Submit the birth certificate, child photograph, and Aadhaar card copies for simple confirmation.</p>
      </div>
      <div class="milestone-step-card m-step-4 reveal-pop">
        <div class="milestone-number-pin">4</div>
        <h3>Step 4: Welcome to School!</h3>
        <p>Receive your child's student kit, uniform, calendar, and embark on this unforgettable adventure.</p>
      </div>
    </div>

    <!-- Criteria & Documents Cards -->
    <div class="editorial-split-layout">
      <!-- Criteria -->
      <div class="facility-explorer-card reveal-pop" style="border-top: 5px solid var(--saffron);">
        <span class="section-tag"><i class="fas fa-child"></i> Age Criteria</span>
        <h3 style="margin-top: 0.5rem;">Age Eligibility (As on 1st June)</h3>
        <ul class="wonder-list-items">
          <li><i class="fas fa-check-circle" style="color: var(--saffron);"></i> <span><strong>Play Group:</strong> 2 years to 2.5 years</span></li>
          <li><i class="fas fa-check-circle" style="color: var(--saffron);"></i> <span><strong>Nursery:</strong> Minimum 3 years attained by 1st June</span></li>
          <li><i class="fas fa-check-circle" style="color: var(--saffron);"></i> <span><strong>Junior KG:</strong> 4 years attained by 1st June</span></li>
          <li><i class="fas fa-check-circle" style="color: var(--saffron);"></i> <span><strong>Senior KG:</strong> 5 years attained by 1st June</span></li>
        </ul>
      </div>

      <!-- Documents -->
      <div class="facility-explorer-card reveal-pop" style="border-top: 5px solid var(--mint);">
        <span class="section-tag" style="background: var(--bg-pill-mint); color: var(--mint); border-color: rgba(16, 185, 129, 0.4);">
          <i class="fas fa-folder-open"></i> Checklist
        </span>
        <h3 style="margin-top: 0.5rem;">Required Documents</h3>
        <ul class="wonder-list-items">
          <li><i class="fas fa-file-alt" style="color: var(--mint);"></i> <span>Original Birth Certificate & 2 self-attested photocopies</span></li>
          <li><i class="fas fa-camera" style="color: var(--mint);"></i> <span>3 recent passport-size photographs of the student</span></li>
          <li><i class="fas fa-user-friends" style="color: var(--mint);"></i> <span>1 passport photograph each of Father & Mother / Guardian</span></li>
          <li><i class="fas fa-id-card" style="color: var(--mint);"></i> <span>Aadhaar Card xerox copy of the student and parents</span></li>
        </ul>
      </div>
    </div>

    <div style="text-align: center; margin-top: 3rem;" class="reveal-pop">
      <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-primary">
        <i class="fas fa-edit"></i> Fill Online Admission Inquiry Form
      </a>
    </div>
  </div>
</section>

@endsection