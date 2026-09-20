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
      <h1>Refund & Cancellation Policy</h1>
      <div class="breadcrumb-pill-trail">
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
        <a href="{{ route('admission') }}">Admission & Inquiry</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Refund & Cancel Policy</span>
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
    <div class="workbook-form-card reveal-pop" style="max-width: 900px;">
      <span class="section-tag"><i class="fas fa-shield-alt"></i> School Policies</span>
      <h2 style="font-family: var(--font-display); color: var(--navy); font-size: 1.85rem; margin-bottom: 1.5rem;">Fee Terms & Cancellation Policy</h2>

      <div style="display: flex; flex-direction: column; gap: 1.5rem; font-size: 0.98rem; line-height: 1.8; color: var(--text-body);">
        <div style="background: var(--bg-canvas); padding: 1.25rem 1.5rem; border-radius: 16px; border-left: 4px solid var(--saffron);">
          <h4 style="font-family: var(--font-display); color: var(--navy); font-size: 1.15rem; margin-bottom: 0.45rem;">1. Admission Registration Fee</h4>
          <p>The admission processing fee and prospectus registration fee are one-time non-refundable administration charges under all circumstances.</p>
        </div>

        <div style="background: var(--bg-canvas); padding: 1.25rem 1.5rem; border-radius: 16px; border-left: 4px solid var(--mint);">
          <h4 style="font-family: var(--font-display); color: var(--navy); font-size: 1.15rem; margin-bottom: 0.45rem;">2. Term Fee Refund Guidelines</h4>
          <p>If a parent requests cancellation of admission at least 15 days prior to the commencement of the academic session, 80% of tuition fee deposited will be refunded after deduction of administrative expenses.</p>
        </div>

        <div style="background: var(--bg-canvas); padding: 1.25rem 1.5rem; border-radius: 16px; border-left: 4px solid var(--honey-dark);">
          <h4 style="font-family: var(--font-display); color: var(--navy); font-size: 1.15rem; margin-bottom: 0.45rem;">3. Mid-Term Withdrawals</h4>
          <p>Once the academic session has commenced, fees paid for the running term/quarter are strictly non-refundable. Notice of withdrawal must be submitted 30 days in advance to process transfer certificates.</p>
        </div>

        <div style="background: var(--bg-canvas); padding: 1.25rem 1.5rem; border-radius: 16px; border-left: 4px solid var(--iris);">
          <h4 style="font-family: var(--font-display); color: var(--navy); font-size: 1.15rem; margin-bottom: 0.45rem;">4. Transport Cancellation</h4>
          <p>Transportation service can be discontinued by giving one calendar month written notice prior to the start of the next billing quarter.</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection