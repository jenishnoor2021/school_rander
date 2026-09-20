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
         <h1>Admission Inquiry</h1>
         <div class="breadcrumb-pill-trail">
            <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
            <a href="{{ route('admission') }}">Admission & Inquiry</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Admission Inquiry</span>
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
      <div class="workbook-form-card reveal-pop">
         <div class="washi-tape"></div>
         <div class="section-header" style="margin-bottom: 2rem;">
            <span class="section-tag"><i class="fas fa-pencil-alt"></i> Online Application</span>
            <h2>Admission Inquiry Form (2025 - 2026)</h2>
            <p>Please provide the basic details below. Our admissions counselor will contact you within 24 hours.</p>
         </div>

         <form class="interactive-form" action="{{ route('storeInquiry') }}" method="POST">
            @csrf
            <div class="form-grid-2col">
               <div class="form-field-group">
                  <label class="form-field-label"><i class="fas fa-user"></i> Child's Full Name *</label>
                  <input type="text" name="fname" class="form-input-styled" placeholder="Enter student's full name" required>
               </div>

               <div class="form-field-group">
                  <label class="form-field-label"><i class="fas fa-calendar-alt"></i> Date of Birth *</label>
                  <input type="date" name="dob" class="form-input-styled" required>
               </div>

               <div class="form-field-group">
                  <label class="form-field-label"><i class="fas fa-venus-mars"></i> Gender *</label>
                  <select name="cast" class="form-input-styled" required>
                     <option value="">Select Gender</option>
                     <option value="Boy">Boy</option>
                     <option value="Girl">Girl</option>
                  </select>
               </div>

               <div class="form-field-group">
                  <label class="form-field-label"><i class="fas fa-graduation-cap"></i> Grade Applying For *</label>
                  <select name="subject" class="form-input-styled" required>
                     <option value="">Select Grade</option>
                     <option value="Play Group">Play Group (2+ Years)</option>
                     <option value="Nursery">Nursery (3+ Years)</option>
                     <option value="Junior KG">Junior KG (4+ Years)</option>
                     <option value="Senior KG">Senior KG (5+ Years)</option>
                  </select>
               </div>

               <div class="form-field-group">
                  <label class="form-field-label"><i class="fas fa-map-marker-alt"></i> Preferred Campus *</label>
                  <select name="media" class="form-input-styled" required>
                     <option value="">Select Nearest Branch</option>
                     <option value="Pal Main Campus">Pal Road Main Campus</option>
                     <option value="Vesu Campus">Vesu Campus</option>
                     <option value="Adajan Campus">Adajan Campus</option>
                     <option value="Katargam Campus">Katargam Campus</option>
                     <option value="Varachha Campus">Varachha Campus</option>
                     <option value="Althan Campus">Althan Campus</option>
                  </select>
               </div>

               <div class="form-field-group">
                  <label class="form-field-label"><i class="fas fa-clock"></i> Preferred Shift</label>
                  <select name="source" class="form-input-styled">
                     <option value="Morning Shift">Morning Shift</option>
                     <option value="Noon Shift">Noon Shift</option>
                  </select>
               </div>

               <div class="form-field-group">
                  <label class="form-field-label"><i class="fas fa-user-tie"></i> Father's / Guardian Name *</label>
                  <input type="text" name="taken_by" class="form-input-styled" placeholder="Full name" required>
               </div>

               <div class="form-field-group">
                  <label class="form-field-label"><i class="fas fa-phone-alt"></i> Mobile Number *</label>
                  <input type="tel" name="phone" class="form-input-styled" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
               </div>

               <div class="form-field-group">
                  <label class="form-field-label"><i class="fas fa-envelope"></i> Email Address</label>
                  <input type="email" name="email" class="form-input-styled" placeholder="name@example.com">
               </div>

               <div class="form-field-group">
                  <label class="form-field-label"><i class="fas fa-bus"></i> School Bus Required?</label>
                  <select name="is_show" class="form-input-styled">
                     <option value="Yes">Yes, bus required</option>
                     <option value="No">No, own transport</option>
                  </select>
               </div>

               <div class="form-field-group full-width">
                  <label class="form-field-label"><i class="fas fa-home"></i> Residential Address in Surat *</label>
                  <textarea name="detail" class="form-input-styled" rows="3" placeholder="Enter residential address" required></textarea>
               </div>
            </div>

            <div style="text-align: center; margin-top: 2rem;">
               <button type="submit" class="btn-wonder btn-wonder-primary" style="padding: 0.95rem 2.5rem; font-size: 1.08rem;">
                  <i class="fas fa-paper-plane"></i> Submit Admission Inquiry
               </button>
            </div>
         </form>
      </div>
   </div>
</section>

@endsection