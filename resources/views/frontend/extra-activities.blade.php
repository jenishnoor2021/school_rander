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
      <h1>Extra Activities</h1>
      <div class="breadcrumb-pill-trail">
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
        <a href="{{ route('academic_activities') }}">Activities</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Extra Activities</span>
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
      <span class="section-tag"><i class="fas fa-running"></i> Beyond Classrooms</span>
      <h2>Extra-Curricular Adventures</h2>
      <p>Fostering physical strength, social teamwork, balance, and outdoor joy through sports, field visits, and martial arts.</p>
    </div>

    <div class="facilities-mosaic-grid">

      <div class="facility-explorer-card reveal-pop" data-lightbox-src="/assets/img/extra_act_01.jpg" data-lightbox-caption="Outdoor Agility & Sports Day">
        <div class="facility-card-media">
          <img src="/assets/img/extra_act_01.jpg" alt="Outdoor Agility & Sports Day" loading="lazy">
        </div>
        <h3>Outdoor Agility & Sports Day</h3>
        <p>Track races, hurdle hops, balance walking, and team obstacle courses building physical stamina.</p>
        <span class="handwritten-badge" style="cursor: pointer;"><i class="fas fa-search-plus"></i> View Activity Photo</span>
      </div>

      <div class="facility-explorer-card reveal-pop" data-lightbox-src="/assets/img/extra_act_02.jpg" data-lightbox-caption="Educational Field Trips">
        <div class="facility-card-media">
          <img src="/assets/img/extra_act_02.jpg" alt="Educational Field Trips" loading="lazy">
        </div>
        <h3>Educational Field Trips</h3>
        <p>Safe excursions to local botanical gardens, fire stations, and post offices connecting classroom lessons to reality.</p>
        <span class="handwritten-badge" style="cursor: pointer;"><i class="fas fa-search-plus"></i> View Activity Photo</span>
      </div>

      <div class="facility-explorer-card reveal-pop" data-lightbox-src="/assets/img/extra_act_03.jpg" data-lightbox-caption="Karate & Self Defense Basics">
        <div class="facility-card-media">
          <img src="/assets/img/extra_act_03.jpg" alt="Karate & Self Defense Basics" loading="lazy">
        </div>
        <h3>Karate & Self Defense Basics</h3>
        <p>Discipline, balance, reflexes, and martial arts etiquette tailored specially for pre-school agility.</p>
        <span class="handwritten-badge" style="cursor: pointer;"><i class="fas fa-search-plus"></i> View Activity Photo</span>
      </div>

      <div class="facility-explorer-card reveal-pop" data-lightbox-src="/assets/img/extra_act_04.jpg" data-lightbox-caption="Aerobics & Rhythm Dance">
        <div class="facility-card-media">
          <img src="/assets/img/extra_act_04.jpg" alt="Aerobics & Rhythm Dance" loading="lazy">
        </div>
        <h3>Aerobics & Rhythm Dance</h3>
        <p>High-energy rhythm dancing, coordination steps, and musical gymnastics boosting cardiovascular endurance.</p>
        <span class="handwritten-badge" style="cursor: pointer;"><i class="fas fa-search-plus"></i> View Activity Photo</span>
      </div>

      <div class="facility-explorer-card reveal-pop" data-lightbox-src="/assets/img/extra_act_05.jpg" data-lightbox-caption="Sensory Water Play Splash">
        <div class="facility-card-media">
          <img src="/assets/img/extra_act_05.jpg" alt="Sensory Water Play Splash" loading="lazy">
        </div>
        <h3>Sensory Water Play Splash</h3>
        <p>Controlled splash play, floating challenges, and water density experiments in hygienic shallow pools.</p>
        <span class="handwritten-badge" style="cursor: pointer;"><i class="fas fa-search-plus"></i> View Activity Photo</span>
      </div>

      <div class="facility-explorer-card reveal-pop" data-lightbox-src="/assets/img/extra_act_06.jpg" data-lightbox-caption="Skating & Balance Skills">
        <div class="facility-card-media">
          <img src="/assets/img/extra_act_06.jpg" alt="Skating & Balance Skills" loading="lazy">
        </div>
        <h3>Skating & Balance Skills</h3>
        <p>Guided roller skating sessions on smooth safety tracks with helmets, knee pads, and expert trainers.</p>
        <span class="handwritten-badge" style="cursor: pointer;"><i class="fas fa-search-plus"></i> View Activity Photo</span>
      </div>

    </div>
  </div>
</section>

@endsection