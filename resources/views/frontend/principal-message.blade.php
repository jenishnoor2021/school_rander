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
         <h1>Principal Message</h1>
         <div class="breadcrumb-pill-trail">
            <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
            <a href="{{ route('aboutUs') }}">About Us</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Principal Message</span>
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
      <!-- Principal 1 -->
      <div class="mentor-profile-card reveal-pop" style="margin-bottom: 3.5rem;">
         <div class="mentor-profile-grid">
            <div class="mentor-arch-portrait">
               <div class="arch-portrait-frame">
                  <img src="/assets/img/principal_komal.jpg" alt="Mrs. Komal Patel - Principal">
               </div>
               <div class="mentor-name-tag">
                  <h3>Mrs. Komal Patel</h3>
                  <p>Principal - Seven Steps Pre-School</p>
               </div>
               <div class="stamp-seal" style="bottom: 40px; right: 10px; border-color: var(--berry); color: var(--berry);">
                  <i class="fas fa-star"></i>
                  <span>PRINCIPAL<br>SEVEN STEPS</span>
               </div>
            </div>

            <div class="mentor-quote-deck">
               <span class="section-tag" style="background: var(--bg-pill-berry); color: var(--berry); border-color: rgba(244, 63, 94, 0.4);">
                  <i class="fas fa-comment-dots"></i> Principal Message
               </span>
               <span class="giant-quote-mark" style="color: rgba(244, 63, 94, 0.2);">“</span>
               <blockquote>
                  "Children must be taught how to think, not what to think. When we cultivate their hearts alongside their minds, true education takes place."
               </blockquote>
               <div class="mentor-body-text">
                  <p>
                     At Seven Steps Pre-School, every morning begins with warm smiles and welcoming arms. We take pride in building an environment where every child feels cherished, heard, and inspired to conquer new heights.
                  </p>
                  <p>
                     Our holistic early childhood framework ensures seamless transitions from preschool into formal schooling, equipped with emotional maturity and high confidence.
                  </p>
               </div>
            </div>
         </div>
      </div>

      <!-- Principal 2 -->
      <div class="mentor-profile-card reveal-pop">
         <div class="mentor-profile-grid">
            <div class="mentor-arch-portrait">
               <div class="arch-portrait-frame">
                  <img src="/assets/img/principal_kanishka.jpg" alt="Mrs. Kanishka Dave - Principal">
               </div>
               <div class="mentor-name-tag">
                  <h3>Mrs. Kanishka Dave</h3>
                  <p>Principal - Seven Steps Pre-School</p>
               </div>
               <div class="stamp-seal" style="bottom: 40px; right: 10px; border-color: var(--honey-dark); color: var(--honey-dark);">
                  <i class="fas fa-heart"></i>
                  <span>PRINCIPAL<br>SEVEN STEPS</span>
               </div>
            </div>

            <div class="mentor-quote-deck">
               <span class="section-tag" style="background: var(--bg-pill-honey); color: var(--honey-dark); border-color: rgba(245, 158, 11, 0.4);">
                  <i class="fas fa-comment-dots"></i> Principal Message
               </span>
               <span class="giant-quote-mark" style="color: rgba(245, 158, 11, 0.2);">“</span>
               <blockquote>
                  "Early childhood is not a race to see how quickly a child can read, write, and count. It is a small window of time to engage the heart and mind in lifelong wonder."
               </blockquote>
               <div class="mentor-body-text">
                  <p>
                     We strive to create a warm family atmosphere where students build social harmony, resilience, and creative curiosity. We invite all parents to be active partners in this magnificent journey.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection