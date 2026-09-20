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
         <h1>About Us</h1>
         <div class="breadcrumb-pill-trail">
            <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
            <span>About Us</span>
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


<!-- Section 1: Intro Story -->
<section class="section-py bg-white">
   <div class="container">
      <div class="editorial-split-layout">
         <div class="reveal-pop">
            <div class="scrapbook-polaroid-frame">
               <div class="washi-tape"></div>
               <img src="/assets/img/about_kids.png" alt="Happy children engaged in classroom learning at Seven Steps Pre-School">
               <div class="scrapbook-caption">Nurturing Young Hearts & Minds ✨</div>
            </div>
         </div>

         <div class="editorial-story-content reveal-pop">
            <span class="section-tag"><i class="fas fa-seedling"></i> Best Technological School</span>
            <h2>Seven Steps Pre School</h2>
            <p class="editorial-lead-para">
               Seven Steps Pre-School, including all of our schools, is committed to acting on our new vision, mission, and values statements.
            </p>
            <p style="color: var(--text-body); line-height: 1.8; margin-bottom: 1.25rem;">
               These new statements that emphasize student success and well-being reflect the future-focused and innovative organization that we are today.
            </p>
            <p style="font-weight: 700; color: var(--navy); margin-bottom: 0.5rem; font-family: var(--font-display);">Therefore, our endeavour is towards:</p>
            <ul class="wonder-list-items">
               <li><i class="fas fa-check-circle"></i> Providing education through experience and enrichment.</li>
               <li><i class="fas fa-check-circle"></i> Providing an environment to discern knowledge, to attain and retain wisdom and character.</li>
               <li><i class="fas fa-check-circle"></i> Activating pupil-centred teaching learning process through creativity.</li>
               <li><i class="fas fa-check-circle"></i> Revealing the inner strength.</li>
               <li><i class="fas fa-check-circle"></i> Strengthening the "roots" and energizing the "wings".</li>
            </ul>
            <p style="color: var(--text-body); line-height: 1.8; margin-top: 1.25rem;">
               Seven Steps Pre-School is a place where exploration, creativity, and imagination make learning exciting and where all learners aspire to reach their dreams.
            </p>
         </div>
      </div>
   </div>
</section>


<div class="storybook-wave wave-cream" aria-hidden="true">
   <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
      <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
   </svg>
</div>


<!-- Section 2: Mission & Core Beliefs -->
<section class="section-py bg-canvas">
   <div class="container">
      <div class="editorial-split-layout reverse">
         <div class="reveal-pop">
            <div class="scrapbook-polaroid-frame">
               <div class="washi-tape right"></div>
               <img src="/assets/img/mission_compass.png" alt="Our Mission at Seven Steps Pre-School">
               <div class="scrapbook-caption">Our Guiding Compass 🧭</div>
            </div>
         </div>

         <div class="editorial-story-content reveal-pop">
            <span class="section-tag"><i class="fas fa-compass"></i> Guiding Light</span>
            <h2>Our Mission</h2>
            <p class="editorial-lead-para">
               Our Mission is to serve society through excellence in education. We always aim to define and continually refine the absolute standard of excellence in the area of academics through:
            </p>
            <ul class="wonder-list-items">
               <li><i class="fas fa-star"></i> The quality of education we provide.</li>
               <li><i class="fas fa-star"></i> The efficiency of our methodologies and systems.</li>
               <li><i class="fas fa-star"></i> Truthfulness towards students, parents, society, and the nation.</li>
            </ul>
            <p style="color: var(--text-body); line-height: 1.8; margin: 1.25rem 0;">
               In our students, we aspire to instill the attitudes, values, and vision that will prepare them for a lifetime of continued learning and leadership in their chosen careers.
            </p>
            <p style="color: var(--text-muted); line-height: 1.7; font-size: 0.95rem;">
               The Management, Administration, and Staff of Seven Steps Pre-School share a set of core beliefs and commitments: We believe in Student's success, lifelong learning, Respect, Integrity, Trust, Honesty, Ethical behaviour, Continuous Quality Improvement and excellence. We commit ourselves to prepare students for the future, impart knowledge on which students can build a bright career, treat everyone with respect and fairness, and exemplify our values by serving as role models.
            </p>
         </div>
      </div>
   </div>
</section>


<div class="storybook-wave wave-white" aria-hidden="true">
   <svg viewBox="0 0 1200 48" preserveAspectRatio="none">
      <path d="M0,0 C150,40 350,-10 500,25 C650,60 900,5 1200,20 L1200,48 L0,48 Z"></path>
   </svg>
</div>


<!-- Section 3: Vision -->
<section class="section-py bg-white">
   <div class="container">
      <div class="editorial-split-layout">
         <div class="reveal-pop">
            <div class="scrapbook-polaroid-frame">
               <div class="washi-tape left"></div>
               <img src="/assets/img/vision_idea.png" alt="Our Vision at Seven Steps Pre-School">
               <div class="scrapbook-caption">Future-Focused Learning 💡</div>
            </div>
         </div>

         <div class="editorial-story-content reveal-pop">
            <span class="section-tag"><i class="fas fa-eye"></i> Future Horizon</span>
            <h2>Our Vision</h2>
            <p class="editorial-lead-para">
               Seven Steps Pre-School will continually innovate to be a global leader in early education. We build the foundational stepping stones where every child develops intellectual curiosity, physical vigor, and emotional resilience.
            </p>
            <ul class="wonder-list-items">
               <li><i class="fas fa-sun"></i> Cultivating high self-esteem, active exploration, and ethical principles.</li>
               <li><i class="fas fa-sun"></i> Incorporating experiential Montessori and Reggio Emilia principles.</li>
               <li><i class="fas fa-sun"></i> Providing an open, safe, technology-enabled learning infrastructure.</li>
            </ul>
         </div>
      </div>
   </div>
</section>

<!-- Section 4: Animated Stats Counter Deck -->
<section class="container reveal-pop">
   <div class="stats-deck-container">
      <div class="stats-deck-grid">
         <div class="stat-figure-card c-saffron">
            <div class="counter-figure" data-count="1200">0</div>
            <div class="stat-label-text">Happy Little Explorers</div>
         </div>
         <div class="stat-figure-card c-mint">
            <div class="counter-figure" data-count="305">0</div>
            <div class="stat-label-text">Dedicated Educators</div>
         </div>
         <div class="stat-figure-card c-honey">
            <div class="counter-figure" data-count="48">0</div>
            <div class="stat-label-text">Smart Classrooms</div>
         </div>
         <div class="stat-figure-card c-berry">
            <div class="counter-figure" data-count="50">0</div>
            <div class="stat-label-text">Safe Buses Across Surat</div>
         </div>
      </div>
   </div>
</section>

@endsection