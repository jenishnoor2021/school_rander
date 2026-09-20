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
         <h1>Our Branches</h1>
         <div class="breadcrumb-pill-trail">
            <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
            <a href="{{ route('aboutUs') }}">About Us</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Branches</span>
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
         <span class="section-tag"><i class="fas fa-map-marked-alt"></i> Convenient Campuses</span>
         <h2>6 Premier Campuses Across Surat</h2>
         <p>Each branch upholds our strict standards of 100% child safety, hygienic play arenas, and innovative teaching.</p>
      </div>

      <div class="branches-wonder-grid">
         <!-- 1. Pal Campus -->
         <div class="branch-campus-card reveal-pop">
            <span class="campus-pill-badge">Head Office & Main Campus</span>
            <h3>Pal Road Campus</h3>
            <div class="branch-detail-row">
               <i class="fas fa-map-marker-alt"></i>
               <span>Galaxy Imperia, Above District Bank, Pal Road, Surat - 395009.</span>
            </div>
            <div class="branch-detail-row">
               <i class="fas fa-phone-alt"></i>
               <a href="tel:+919879146666">+91 98791 46666</a>
            </div>
            <div class="branch-detail-row">
               <i class="fas fa-envelope"></i>
               <span>ssspre46666@gmail.com</span>
            </div>
            <div style="margin-top: 1.25rem; display: flex; gap: 0.75rem;">
               <a href="tel:+919879146666" class="btn-wonder btn-wonder-primary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;"><i class="fas fa-phone"></i> Call</a>
               <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;">Inquire</a>
            </div>
         </div>

         <!-- 2. Vesu Campus -->
         <div class="branch-campus-card reveal-pop">
            <span class="campus-pill-badge" style="background: var(--bg-pill-mint); color: var(--mint);">Vesu Branch</span>
            <h3>Vesu Campus</h3>
            <div class="branch-detail-row">
               <i class="fas fa-map-marker-alt"></i>
               <span>Near Reliance Mall, Vesu Main Road, VIP Road Junction, Surat.</span>
            </div>
            <div class="branch-detail-row">
               <i class="fas fa-phone-alt"></i>
               <a href="tel:+919904419333">+91 99044 19333</a>
            </div>
            <div style="margin-top: 1.25rem; display: flex; gap: 0.75rem;">
               <a href="tel:+919904419333" class="btn-wonder btn-wonder-primary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;"><i class="fas fa-phone"></i> Call</a>
               <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;">Inquire</a>
            </div>
         </div>

         <!-- 3. Adajan Campus -->
         <div class="branch-campus-card reveal-pop">
            <span class="campus-pill-badge" style="background: var(--bg-pill-honey); color: var(--honey-dark);">Adajan Branch</span>
            <h3>Adajan Campus</h3>
            <div class="branch-detail-row">
               <i class="fas fa-map-marker-alt"></i>
               <span>Opp. Prime Arcade, Anand Mahal Road, Adajan, Surat - 395009.</span>
            </div>
            <div class="branch-detail-row">
               <i class="fas fa-phone-alt"></i>
               <a href="tel:+919879146666">+91 98791 46666</a>
            </div>
            <div style="margin-top: 1.25rem; display: flex; gap: 0.75rem;">
               <a href="tel:+919879146666" class="btn-wonder btn-wonder-primary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;"><i class="fas fa-phone"></i> Call</a>
               <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;">Inquire</a>
            </div>
         </div>

         <!-- 4. Katargam Campus -->
         <div class="branch-campus-card reveal-pop">
            <span class="campus-pill-badge" style="background: var(--bg-pill-berry); color: var(--berry);">Katargam Branch</span>
            <h3>Katargam Campus</h3>
            <div class="branch-detail-row">
               <i class="fas fa-map-marker-alt"></i>
               <span>Gajera Circle, Near Laxmi Enclave, Katargam, Surat - 395004.</span>
            </div>
            <div class="branch-detail-row">
               <i class="fas fa-phone-alt"></i>
               <a href="tel:+919904419333">+91 99044 19333</a>
            </div>
            <div style="margin-top: 1.25rem; display: flex; gap: 0.75rem;">
               <a href="tel:+919904419333" class="btn-wonder btn-wonder-primary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;"><i class="fas fa-phone"></i> Call</a>
               <a href="{{ route('enquiry')}}" class="btn-wonder btn-wonder-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;">Inquire</a>
            </div>
         </div>

         <!-- 5. Varachha Campus -->
         <div class="branch-campus-card reveal-pop">
            <span class="campus-pill-badge" style="background: var(--bg-pill-iris); color: var(--iris);">Varachha Branch</span>
            <h3>Varachha Campus</h3>
            <div class="branch-detail-row">
               <i class="fas fa-map-marker-alt"></i>
               <span>Mini Bazar, Near Poddar Arcade, Varachha Main Road, Surat.</span>
            </div>
            <div class="branch-detail-row">
               <i class="fas fa-phone-alt"></i>
               <a href="tel:+919879146666">+91 98791 46666</a>
            </div>
            <div style="margin-top: 1.25rem; display: flex; gap: 0.75rem;">
               <a href="tel:+919879146666" class="btn-wonder btn-wonder-primary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;"><i class="fas fa-phone"></i> Call</a>
               <a href="{{ route('enquiry')}}" class="btn-wonder btn-wonder-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;">Inquire</a>
            </div>
         </div>

         <!-- 6. Althan Campus -->
         <div class="branch-campus-card reveal-pop">
            <span class="campus-pill-badge" style="background: var(--bg-pill-sky); color: var(--sky);">Althan Branch</span>
            <h3>Althan Campus</h3>
            <div class="branch-detail-row">
               <i class="fas fa-map-marker-alt"></i>
               <span>Near Bhimrad Canal Road, Althan-Bhimrad Road, Surat.</span>
            </div>
            <div class="branch-detail-row">
               <i class="fas fa-phone-alt"></i>
               <a href="tel:+919904419333">+91 99044 19333</a>
            </div>
            <div style="margin-top: 1.25rem; display: flex; gap: 0.75rem;">
               <a href="tel:+919904419333" class="btn-wonder btn-wonder-primary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;"><i class="fas fa-phone"></i> Call</a>
               <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;">Inquire</a>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection