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
      <h1>Academic Head Message</h1>
      <div class="breadcrumb-pill-trail">
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
        <a href="{{ route('aboutUs') }}">About Us</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Academic Head Message</span>
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
            <img src="/assets/img/academic_head.jpg" alt="Mrs. Sonal Baldaniya - Academic Head">
          </div>
          <div class="mentor-name-tag">
            <h3>Mrs. Sonal Baldaniya</h3>
            <p>Academic Head - Seven Steps Pre-School</p>
          </div>
          <div class="stamp-seal" style="bottom: 40px; right: 10px; border-color: var(--iris); color: var(--iris);">
            <i class="fas fa-graduation-cap"></i>
            <span>ACADEMIC<br>HEAD</span>
          </div>
        </div>

        <div class="mentor-quote-deck">
          <span class="section-tag" style="background: var(--bg-pill-iris); color: var(--iris); border-color: rgba(99, 102, 241, 0.4);">
            <i class="fas fa-graduation-cap"></i> Academic Head Message
          </span>
          <span class="giant-quote-mark" style="color: rgba(99, 102, 241, 0.2);">“</span>
          <blockquote>
            "The most important period of life is not the age of university studies, but the first one, the period from birth to the age of six. For that is the time when man's intelligence itself, his greatest implement, is being formed."
          </blockquote>

          <div class="mentor-body-text">
            <p>
              Our curriculum has been carefully designed to foster critical thinking, linguistic fluency, sensory mastery, and mathematical logic from the earliest years. We bridge playful exploration with disciplined foundational habits.
            </p>
            <p>
              Every teacher at Seven Steps is trained to observe each child's individual pace, strengths, and curiosities, providing scaffolded guidance that empowers them to become joyful, self-motivated learners.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection