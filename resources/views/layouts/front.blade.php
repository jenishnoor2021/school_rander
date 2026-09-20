<?php

use App\Models\Brocher;
use App\Models\popup;

$brocher = Brocher::first();
$popup = popup::where('is_show', 1)->first() ?? popup::first();
?>
<!doctype html>
<html>

<head>
   @include('includes.head')
</head>

<body>

   @if((request()->is('/') || request()->path() === '/' || request()->segment(1) == '') && !empty($popup) && !empty($popup->file) && ($popup->is_show ?? 1))
   <!-- Homepage Wonder Announcement Popup Modal -->
   <div id="homeAnnouncementModal" class="home-popup-overlay" role="dialog" aria-modal="true" aria-label="School Announcement">
      <div class="home-popup-container">
         <button type="button" class="home-popup-close-btn" id="closePopupBtn" aria-label="Close Announcement">
            <i class="fas fa-times"></i>
         </button>
         <div class="home-popup-media">
            <a href="{{ route('enquiry') }}" title="Click to Inquire for Admission">
               <img src="{{ $popup->file }}" alt="Seven Steps Pre-School Announcement" class="home-popup-img">
            </a>
         </div>
         <div class="home-popup-action">
            <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-primary home-popup-btn">
               <i class="fas fa-paper-plane"></i> Apply for Admission
            </a>
            <button type="button" class="home-popup-dismiss-text" id="dismissPopupText">Remind Me Later</button>
         </div>
      </div>
   </div>
   @endif

   <!-- Page Entrance Preloader -->
   <div class="page-preloader" aria-hidden="true">
      <div class="preloader-pencil">
         <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M52 12L44 4L12 36L8 56L28 52L60 20L52 12Z" fill="#FF7A45" stroke="#0F3460" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M44 4L52 12L40 24L32 16L44 4Z" fill="#FBBF24" />
            <path d="M8 56L16 48L28 52L8 56Z" fill="#0F3460" />
            <circle cx="12" cy="52" r="2" fill="#FFFFFF" />
         </svg>
      </div>
      <div class="preloader-text">
         Seven Steps Pre-School
         <span class="preloader-dots"><span>.</span><span>.</span><span>.</span></span>
      </div>
   </div>

   <!-- Top Quick Notice Bar -->
   <div class="top-notice-bar">
      <div class="container">
         <div class="top-bar-left">
            <span class="top-bar-item"><i class="fas fa-sun"></i> Sunrise Group - Surat</span>
            <span class="top-bar-item"><i class="fas fa-map-marker-alt"></i> Pal Road, Surat</span>
         </div>
         <div class="top-bar-right">
            <a href="tel:+919879146666" class="top-bar-item"><i class="fas fa-phone-alt"></i> +91 98791 46666</a>
            <a href="mailto:ssspre46666@gmail.com" class="top-bar-item"><i class="fas fa-envelope"></i> ssspre46666@gmail.com</a>
            <a href="{{ route('fees-pay') }}" class="top-bar-item" style="color: var(--honey-light); font-weight: 600;"><i class="fas fa-credit-card"></i> Fees Payment</a>
         </div>
      </div>
   </div>


   <!-- header area start -->
   <header class="site-header">
      @include('includes.header')
      <style>
         #contact_form label.error,
         #quotation_form label.error {
            color: red;
         }
      </style>
   </header>
   <!-- header area end here -->

   <!-- Mobile Slide-Over Navigation Drawer -->
   <div class="mobile-nav-backdrop"></div>
   <aside class="mobile-nav-drawer" aria-label="Mobile Navigation Drawer">
      <div class="drawer-header">
         <div class="brand-info">
            <span class="brand-title">SEVEN STEPS</span>
            <span class="brand-tagline">Sunrise Group - Surat</span>
         </div>
         <button class="drawer-close-btn" aria-label="Close menu">
            <i class="fas fa-times"></i>
         </button>
      </div>

      <div class="drawer-body">
         @php
         $drawerCategories = \App\Models\Category::orderBy('name')->get()->groupBy('type');
         $isDrawerHome = request()->is('/') || request()->path() === '/';
         $isDrawerAbout = request()->routeIs([
         'aboutUs',
         'managing_director',
         'coordinator',
         'academic-head-message',
         'principal-message',
         'circular',
         'facilities',
         'branches'
         ]);
         $isDrawerAdmission = request()->routeIs(['admission', 'enquiry', 'fees-pay', 'policy', 'career']);
         $isDrawerActivities = request()->routeIs(['academic_activities', 'extra_activities', 'activities.category']);
         $isDrawerEvents = request()->routeIs(['event', 'achievements', 'events.category', 'achievements.category']);
         $isDrawerGallery = request()->routeIs(['gallery', 'media-gallery', 'video-gallery']);
         $isDrawerContact = request()->routeIs('contact');
         @endphp
         <ul class="drawer-menu-list">
            <li class="drawer-menu-item">
               <a href="{{ url('/') }}" class="drawer-link {{ $isDrawerHome ? 'active' : '' }}">
                  <span><i class="fas fa-home" style="color: var(--saffron); margin-right: 0.5rem;"></i> Home</span>
               </a>
            </li>

            <li class="drawer-menu-item has-drawer-accordion {{ $isDrawerAbout ? 'is-open' : '' }}">
               <a href="#" class="drawer-link {{ $isDrawerAbout ? 'active' : '' }}">
                  <span><i class="fas fa-info-circle" style="color: var(--mint); margin-right: 0.5rem;"></i> About Us</span>
                  <i class="fas fa-chevron-down toggle-icon"></i>
               </a>
               <div class="drawer-accordion">
                  <a href="{{ route('aboutUs') }}" class="drawer-sublink {{ request()->routeIs('aboutUs') ? 'active' : '' }}">About Us</a>
                  <a href="{{ route('managing_director') }}" class="drawer-sublink {{ request()->routeIs('managing_director') ? 'active' : '' }}">Managing Director</a>
                  <a href="{{ route('coordinator') }}" class="drawer-sublink {{ request()->routeIs('coordinator') ? 'active' : '' }}">Co-Ordinator</a>
                  <a href="{{ route('academic-head-message') }}" class="drawer-sublink {{ request()->routeIs('academic-head-message') ? 'active' : '' }}">Academic Head Message</a>
                  <a href="{{ route('principal-message') }}" class="drawer-sublink {{ request()->routeIs('principal-message') ? 'active' : '' }}">Principal Message</a>
                  <a href="{{ route('circular') }}" class="drawer-sublink {{ request()->routeIs('circular') ? 'active' : '' }}">Circular</a>
                  <a href="{{ route('facilities') }}" class="drawer-sublink {{ request()->routeIs('facilities') ? 'active' : '' }}">School Facilities</a>
                  <a href="{{ route('branches') }}" class="drawer-sublink {{ request()->routeIs('branches') ? 'active' : '' }}">Branches</a>
               </div>
            </li>

            <li class="drawer-menu-item has-drawer-accordion {{ $isDrawerAdmission ? 'is-open' : '' }}">
               <a href="#" class="drawer-link {{ $isDrawerAdmission ? 'active' : '' }}">
                  <span><i class="fas fa-graduation-cap" style="color: var(--honey-dark); margin-right: 0.5rem;"></i> Admission & Inquiry</span>
                  <i class="fas fa-chevron-down toggle-icon"></i>
               </a>
               <div class="drawer-accordion">
                  <a href="{{ route('admission') }}" class="drawer-sublink {{ request()->routeIs('admission') ? 'active' : '' }}">Admission</a>
                  <a href="{{ route('enquiry') }}" class="drawer-sublink {{ request()->routeIs('enquiry') ? 'active' : '' }}">Admission Inquiry</a>
                  <a href="{{ route('fees-pay') }}" class="drawer-sublink {{ request()->routeIs('fees-pay') ? 'active' : '' }}">Fees Payment</a>
                  <a href="{{ route('policy') }}" class="drawer-sublink {{ request()->routeIs('policy') ? 'active' : '' }}">Refund & Cancel Policy</a>
                  <a href="{{ route('career') }}" class="drawer-sublink {{ request()->routeIs('career') ? 'active' : '' }}">Career</a>
               </div>
            </li>

            <li class="drawer-menu-item has-drawer-accordion {{ $isDrawerActivities ? 'is-open' : '' }}">
               <a href="#" class="drawer-link {{ $isDrawerActivities ? 'active' : '' }}">
                  <span><i class="fas fa-palette" style="color: var(--berry); margin-right: 0.5rem;"></i> Activities</span>
                  <i class="fas fa-chevron-down toggle-icon"></i>
               </a>
               <div class="drawer-accordion">
                  @foreach($drawerCategories->get('activity', collect()) as $category)
                  <a href="{{ route('activities.category', $category->slug) }}" class="drawer-sublink {{ request()->routeIs('activities.category', ['slug' => $category->slug]) ? 'active' : '' }}">{{ $category->name }}</a>
                  @endforeach
                  <a href="{{ route('extra_activities') }}" class="drawer-sublink {{ request()->routeIs('extra_activities') ? 'active' : '' }}">Extra Activities</a>
               </div>
            </li>

            <li class="drawer-menu-item has-drawer-accordion {{ $isDrawerEvents ? 'is-open' : '' }}">
               <a href="#" class="drawer-link {{ $isDrawerEvents ? 'active' : '' }}">
                  <span><i class="fas fa-calendar-alt" style="color: var(--sky); margin-right: 0.5rem;"></i> Events & Achievements</span>
                  <i class="fas fa-chevron-down toggle-icon"></i>
               </a>
               <div class="drawer-accordion">
                  @foreach($drawerCategories->get('event', collect()) as $category)
                  <a href="{{ route('events.category', $category->slug) }}" class="drawer-sublink {{ request()->routeIs('events.category', ['slug' => $category->slug]) ? 'active' : '' }}">{{ $category->name }}</a>
                  @endforeach
                  @foreach($drawerCategories->get('achievement', collect()) as $category)
                  <a href="{{ route('achievements.category', $category->slug) }}" class="drawer-sublink {{ request()->routeIs('achievements.category', ['slug' => $category->slug]) ? 'active' : '' }}">{{ $category->name }} Achievement</a>
                  @endforeach
               </div>
            </li>

            <li class="drawer-menu-item has-drawer-accordion {{ $isDrawerGallery ? 'is-open' : '' }}">
               <a href="#" class="drawer-link {{ $isDrawerGallery ? 'active' : '' }}">
                  <span><i class="fas fa-images" style="color: var(--iris); margin-right: 0.5rem;"></i> Gallery</span>
                  <i class="fas fa-chevron-down toggle-icon"></i>
               </a>
               <div class="drawer-accordion">
                  <a href="{{ route('gallery') }}" class="drawer-sublink {{ request()->routeIs('gallery') ? 'active' : '' }}">Photo Gallery</a>
                  <a href="{{ route('media-gallery') }}" class="drawer-sublink {{ request()->routeIs('media-gallery') ? 'active' : '' }}">Media Gallery</a>
                  <a href="{{ route('video-gallery') }}" class="drawer-sublink {{ request()->routeIs('video-gallery') ? 'active' : '' }}">Video Gallery</a>
               </div>
            </li>

            <li class="drawer-menu-item">
               <a href="{{ route('contact') }}" class="drawer-link {{ $isDrawerContact ? 'active' : '' }}">
                  <span><i class="fas fa-map-marker-alt" style="color: var(--navy); margin-right: 0.5rem;"></i> Contact Us</span>
               </a>
            </li>
         </ul>

         <div style="margin-top: 1.5rem; display: flex; flex-direction: column; gap: 0.75rem;">
            <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-primary" style="width: 100%;">
               <i class="fas fa-paper-plane"></i> Apply for Admission
            </a>
            <a href="tel:+919879146666" class="btn-wonder btn-wonder-secondary" style="width: 100%;">
               <i class="fas fa-phone-alt"></i> Call School Office
            </a>
         </div>
      </div>
   </aside>

   <!-- main area start here  -->
   <main id="main-content">
      @yield('content')
   </main>
   <!-- main area end here  -->

   <!-- Floating Side Action Pills (Desktop) -->
   <div class="floating-side-actions">
      @if($brocher && $brocher->file != '' && $brocher->file != '/brocherpdf/')
      <a href="{{ $brocher->file }}" class="side-action-pill side-pill-brochure" title="School Information">
         <i class="fas fa-file-alt" style="color: var(--berry);"></i>
         <span>Brochure</span>
      </a>
      @endif
      <a href="{{ route('fees-pay') }}" class="side-action-pill side-pill-fee" title="Online Fee Payment">
         <i class="fas fa-credit-card" style="color: var(--honey-dark);"></i>
         <span>Fee Payment</span>
      </a>
      <a href="https://api.whatsapp.com/send?phone=919879146666" target="_blank" class="side-action-pill side-pill-chat" title="Live Chat on WhatsApp">
         <i class="fab fa-whatsapp" style="color: #25d366;"></i>
         <span>WhatsApp Chat</span>
      </a>
   </div>

   <!-- Mobile Bottom Action Dock -->
   <div class="mobile-bottom-dock">
      <div class="mobile-dock-grid">
         <a href="tel:+919879146666" class="dock-action-btn dock-call">
            <i class="fas fa-phone-alt"></i>
            <span>Call</span>
         </a>
         <a href="https://api.whatsapp.com/send?phone=919879146666" target="_blank" class="dock-action-btn dock-whatsapp">
            <i class="fab fa-whatsapp"></i>
            <span>WhatsApp</span>
         </a>
         <a href="{{ route('fees-pay') }}" class="dock-action-btn dock-fees">
            <i class="fas fa-credit-card"></i>
            <span>Fees</span>
         </a>
         <a href="{{ route('enquiry') }}" class="dock-action-btn dock-inquiry">
            <i class="fas fa-paper-plane"></i>
            <span>Inquiry</span>
         </a>
      </div>
   </div>

   <!-- Scroll-to-Top Rocket Button -->
   <button class="rocket-top-btn" aria-label="Scroll to top of page">
      <i class="fas fa-rocket"></i>
   </button>

   <!-- Storybook Wave Connecting to Footer -->
   <div class="storybook-wave wave-navy" aria-hidden="true">
      <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
         <path d="M0,0 C150,50 350,-20 500,30 C650,80 900,10 1200,20 L1200,60 L0,60 Z"></path>
      </svg>
   </div>

   <!-- Midnight Constellation Footer -->
   <footer class="midnight-footer">
      @include('includes.footer')
   </footer>

   <!-- Fullscreen Lightbox Modal -->
   <div class="wonder-lightbox-modal" role="dialog" aria-modal="true" aria-label="Enlarged Media Preview">
      <div class="lightbox-content-box">
         <button class="lightbox-close-trigger" aria-label="Close Preview"><i class="fas fa-times"></i></button>
         <img class="lightbox-render-img" src="" alt="Enlarged Preview" style="display: none;">
         <iframe class="lightbox-video-frame" src="" style="width: 80vw; max-width: 800px; height: 450px; border: none; border-radius: 16px; display: none;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <div class="lightbox-caption-text"></div>
      </div>
   </div>

   <!-- Global Scripts -->
   <script src="{{ asset('assets/js/main.js') }}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

   <script>
      var targetDiv = document.getElementById("displayhide");
      $(document).on('click', '#hidAlert', function() {
         targetDiv.style.display = "none";
      });
   </script>
   <script>
      $(document).ready(function() {
         $("#contact_form").validate();
         $("#quotation_form").validate();
         $("#career_form").validate();
         $("#appoinment_form").validate();
      });
   </script>
   @yield('script')
</body>

</html>