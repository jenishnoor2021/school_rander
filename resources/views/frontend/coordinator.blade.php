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
      <h1>Co-Ordinator</h1>
      <div class="breadcrumb-pill-trail">
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
        <a href="{{ route('aboutUs') }}">About Us</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Co-Ordinator</span>
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
    <div class="mentor-profile-card reveal-pop">
      <div class="mentor-profile-grid">
        <div class="mentor-arch-portrait">
          <div class="arch-portrait-frame">
            <img src="/assets/img/coordinator.jpg" alt="Mr. Hiren Baldaniya - Co-Ordinator">
          </div>
          <div class="mentor-name-tag">
            <h3>Mr. Hiren Baldaniya</h3>
            <p>Co-Ordinator - Seven Steps Pre-School</p>
            <a href="tel:+919824417767" class="handwritten-badge" style="font-size: 1rem; margin-top: 0.25rem;">
              <i class="fas fa-phone-alt"></i> (+91) 98244 17767
            </a>
          </div>
          <div class="stamp-seal" style="bottom: 50px; right: 10px; border-color: var(--mint); color: var(--mint);">
            <i class="fas fa-user-check"></i>
            <span>OFFICIAL<br>COORD</span>
          </div>
        </div>

        <div class="mentor-quote-deck">
          <span class="section-tag" style="background: var(--bg-pill-mint); color: var(--mint); border-color: rgba(16, 185, 129, 0.4);">
            <i class="fas fa-quote-left"></i> Welcome to Seven Steps Pre-School!
          </span>
          <span class="giant-quote-mark" style="color: rgba(16, 185, 129, 0.2);">“</span>
          <blockquote>
            "The aim of education should be to teach us rather how to think, than what to think — rather to improve our minds, so as to enable us to think for ourselves, than to load the memory with thoughts of other men."
          </blockquote>

          <div class="mentor-body-text">
            <p>
              So we provide them with all the opportunities to realize their potential and prepare children for future challenges. Our coordination framework ensures every branch maintains strict pedagogical excellence, safety, and personalized child attention.
            </p>
            <p>
              Early childhood education is a collaborative journey between educators, parents, and young learners. We constantly upgrade our curriculum and teacher training to ensure your little ones thrive in a vibrant and supportive environment.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection