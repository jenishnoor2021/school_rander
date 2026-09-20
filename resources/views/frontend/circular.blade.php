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
      <h1>Circular & Guidelines</h1>
      <div class="breadcrumb-pill-trail">
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
        <a href="{{ route('aboutUs') }}">About Us</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Circular</span>
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
    <div class="editorial-split-layout" style="margin-bottom: 3.5rem;">
      <div class="reveal-pop">
        <div class="scrapbook-polaroid-frame">
          <div class="washi-tape"></div>
          <img src="/assets/img/circular_tree.png" alt="Educational Tree - Seven Steps Pre-School Guidelines">
          <div class="scrapbook-caption">Rules of Growth & Character 🌳</div>
        </div>
      </div>

      <div class="editorial-story-content reveal-pop">
        <span class="section-tag"><i class="fas fa-book-open"></i> Student Handbook</span>
        <h2>School Guidelines & Timings</h2>
        <p class="editorial-lead-para">
          General rules and regulations to ensure disciplined, harmonious, and safe functioning across all campuses.
        </p>

        <div style="background: var(--bg-canvas); border-radius: 20px; padding: 1.5rem; border: 2px solid var(--border-paper);">
          <h4 style="font-family: var(--font-display); font-size: 1.15rem; color: var(--navy); margin-bottom: 0.75rem;">Daily Campus Shift Timings:</h4>
          <div class="circular-timings-grid">
            <div style="background: #fff; padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--border-paper);">
              <strong style="color: var(--saffron);">Play Group</strong><br>
              <span style="font-size: 0.85rem; color: var(--text-muted);">09:00 AM – 11:30 AM</span>
            </div>
            <div style="background: #fff; padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--border-paper);">
              <strong style="color: var(--mint);">Nursery</strong><br>
              <span style="font-size: 0.85rem; color: var(--text-muted);">08:30 AM – 11:45 AM</span>
            </div>
            <div style="background: #fff; padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--border-paper);">
              <strong style="color: var(--honey-dark);">Junior KG</strong><br>
              <span style="font-size: 0.85rem; color: var(--text-muted);">08:00 AM – 12:00 PM</span>
            </div>
            <div style="background: #fff; padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--border-paper);">
              <strong style="color: var(--iris);">Senior KG</strong><br>
              <span style="font-size: 0.85rem; color: var(--text-muted);">08:00 AM – 12:30 PM</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Guidelines Cards -->
    <div class="facilities-mosaic-grid">
      <div class="facility-explorer-card reveal-pop">
        <h3 style="color: var(--saffron);"><i class="fas fa-tshirt"></i> Uniform & Grooming</h3>
        <p>Children must attend school in clean, prescribed school uniform with school ID card and comfortable footwear. Personal cleanliness and nail trimming are checked regularly.</p>
      </div>
      <div class="facility-explorer-card reveal-pop">
        <h3 style="color: var(--mint);"><i class="fas fa-calendar-check"></i> Attendance & Leaves</h3>
        <p>Regular attendance is mandatory. In case of illness or unforeseen absence, parents must submit a leave application or medical certificate promptly to the class teacher.</p>
      </div>
      <div class="facility-explorer-card reveal-pop">
        <h3 style="color: var(--honey-dark);"><i class="fas fa-utensils"></i> Healthy Tiffin Policy</h3>
        <p>Only nutritious, wholesome homemade meals are encouraged in tiffin. Junk food, chocolates, and aerated drinks are strictly prohibited on school premises.</p>
      </div>
    </div>
  </div>
</section>

@endsection