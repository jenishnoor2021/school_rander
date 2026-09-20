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
         <h1>School Facilities</h1>
         <div class="breadcrumb-pill-trail">
            <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
            <a href="{{ route('aboutUs') }}">About Us</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>School Facilities</span>
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
         <span class="section-tag"><i class="fas fa-shapes"></i> Inspiring Environment</span>
         <h2>World-Class Facilities For Kids</h2>
         <p>Every corner of Seven Steps Pre-School is designed to spark curiosity, ensure safety, and nurture physical and cognitive agility.</p>
      </div>

      <div class="facilities-mosaic-grid">
         <div class="facility-explorer-card reveal-pop">
            <div class="facility-card-media">
               <img src="/assets/img/facility_01.jpg" alt="Online Appointment and Parent Counseling Center">
            </div>
            <h3>01. Online Appointment Counseling</h3>
            <p>Parents can easily book appointments online for seamless admissions guidance, curriculum walkthroughs, and teacher consultations.</p>
         </div>

         <div class="facility-explorer-card reveal-pop">
            <div class="facility-card-media">
               <img src="/assets/img/facility_02.jpg" alt="Safe Transportation Fleet with GPS Tracking">
            </div>
            <h3>02. Safe Transport Fleet</h3>
            <p>Well-maintained buses and vans with GPS tracking, CCTV cameras, female attendants, and first-aid kits across all Surat routes.</p>
         </div>

         <div class="facility-explorer-card reveal-pop">
            <div class="facility-card-media">
               <img src="/assets/img/facility_03.jpg" alt="Play Station and Dexterity Game Zone">
            </div>
            <h3>03. Play Station & Dexterity Zone</h3>
            <p>Ergonomically designed soft play area with tunnels, slides, rocker toys, and balance beams that develop fine and gross motor skills.</p>
         </div>

         <div class="facility-explorer-card reveal-pop">
            <div class="facility-card-media">
               <img src="/assets/img/facility_04.jpg" alt="Smart Interactive Audio-Visual Classroom">
            </div>
            <h3>04. Audio-Visual Smart Rooms</h3>
            <p>Modern interactive smart boards, phonics visualizers, and educational animated stories that make lessons vivid and unforgettable.</p>
         </div>

         <div class="facility-explorer-card reveal-pop">
            <div class="facility-card-media">
               <img src="/assets/img/facility_05.jpg" alt="Sensory Sand Pit Play Arena">
            </div>
            <h3>05. Sensory Sand Pit</h3>
            <p>Hygienic, anti-bacterial sand play area encouraging sensory discovery, castle building, and collaborative creative play.</p>
         </div>

         <div class="facility-explorer-card reveal-pop">
            <div class="facility-card-media">
               <img src="/assets/img/facility_06.jpg" alt="Kids Discovery Science and Nature Corner">
            </div>
            <h3>06. Little Explorers Science Corner</h3>
            <p>Hands-on nature discovery, magnet tables, magnifying glasses, and plant growth trays that awaken scientific curiosity.</p>
         </div>

         <div class="facility-explorer-card reveal-pop">
            <div class="facility-card-media">
               <img src="/assets/img/facility_07.jpg" alt="Creative Arts and Craft Studio">
            </div>
            <h3>07. Art & Craft Atelier</h3>
            <p>Spacious studio stocked with non-toxic finger paints, clay, origami paper, and easels where little artists express freely.</p>
         </div>

         <div class="facility-explorer-card reveal-pop">
            <div class="facility-card-media">
               <img src="/assets/img/facility_08.jpg" alt="Safe Splash Pool and Water Play Station">
            </div>
            <h3>08. Splash Pool & Water Play</h3>
            <p>Shallow, hygienic, temperature-monitored water fun zones for sensory cooling and water agility activities under supervision.</p>
         </div>

         <div class="facility-explorer-card reveal-pop">
            <div class="facility-card-media">
               <img src="/assets/img/facility_09.jpg" alt="Children's Illustrated Storybook Library">
            </div>
            <h3>09. Illustrated Story Library</h3>
            <p>Vibrant cozy reading corners with hundreds of picture books, touch-and-feel tales, and fable storybooks fostering love for reading.</p>
         </div>

         <div class="facility-explorer-card reveal-pop">
            <div class="facility-card-media">
               <img src="/assets/img/facility_10.jpg" alt="Health and First-Aid Wellness Center">
            </div>
            <h3>10. Health & Wellness Center</h3>
            <p>Dedicated medical sick bay staffed with first-aid certified attendants and emergency tie-ups with pediatric clinics in Surat.</p>
         </div>
      </div>
   </div>
</section>

@endsection