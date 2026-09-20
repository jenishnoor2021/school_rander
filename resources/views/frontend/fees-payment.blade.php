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
         <h1>Fees Payment</h1>
         <div class="breadcrumb-pill-trail">
            <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
            <a href="{{ route('admission') }}">Admission & Inquiry</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Fees Payment</span>
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
         <span class="section-tag"><i class="fas fa-credit-card"></i> Online Fee Portal</span>
         <h2>Convenient Fee Payment Options</h2>
         <p>Parents can easily deposit school and transport fees via ICICI Net Banking, UPI QR, or at the school accounts desk.</p>
      </div>

      <div class="editorial-split-layout" style="margin-bottom: 3.5rem;">
         <!-- Left: Bank Account Details Card -->
         <div class="workbook-form-card reveal-pop" style="margin: 0;">
            <div class="washi-tape left"></div>
            <h3 style="font-family: var(--font-display); color: var(--navy); font-size: 1.35rem; margin-bottom: 1.25rem;">
               <i class="fas fa-university" style="color: var(--saffron);"></i> Official Bank Account Details
            </h3>

            <div style="display: flex; flex-direction: column; gap: 0.85rem; font-size: 0.95rem;">
               <div style="background: var(--bg-canvas); padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--border-paper);">
                  <span style="color: var(--text-muted); font-size: 0.82rem;">Account Name</span><br>
                  <strong style="color: var(--navy);">SEVEN STEPS PRE-SCHOOL (SUNRISE GROUP)</strong>
               </div>
               <div style="background: var(--bg-canvas); padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--border-paper);">
                  <span style="color: var(--text-muted); font-size: 0.82rem;">Bank Name</span><br>
                  <strong style="color: var(--navy);">ICICI Bank</strong>
               </div>
               <div style="background: var(--bg-canvas); padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--border-paper);">
                  <span style="color: var(--text-muted); font-size: 0.82rem;">Account Number</span><br>
                  <strong style="color: var(--saffron); font-size: 1.15rem; font-family: monospace;">138405001234</strong>
               </div>
               <div style="background: var(--bg-canvas); padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--border-paper);">
                  <span style="color: var(--text-muted); font-size: 0.82rem;">IFSC Code</span><br>
                  <strong style="color: var(--navy); font-family: monospace;">ICIC0001384</strong>
               </div>
               <div style="background: var(--bg-canvas); padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--border-paper);">
                  <span style="color: var(--text-muted); font-size: 0.82rem;">Branch</span><br>
                  <strong style="color: var(--navy);">Pal Road Branch, Surat</strong>
               </div>
            </div>
         </div>

         <!-- Right: QR Code Card -->
         <div class="scrapbook-polaroid-frame reveal-pop" style="text-align: center;">
            <div class="washi-tape right"></div>
            <img src="/assets/img/fee_qr_payment.jpg" alt="ICICI Bank UPI QR Code for Seven Steps Pre-School" style="max-height: 280px; width: auto; margin: 0 auto;">
            <div class="scrapbook-caption">Scan to Pay via UPI (GPay / PhonePe / Paytm) 📱</div>
            <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 0.5rem;">
               Please send the transaction screenshot with student name and grade to <strong>+91 98791 46666</strong> for payment receipt.
            </p>
         </div>
      </div>
   </div>
</section>

@endsection