<div class="container">
   @php
   $frontendCategories = \App\Models\Category::orderBy('name')->get()->groupBy('type');
   $currentRoute = Route::currentRouteName();
   $isHome = request()->is('/') || request()->path() === '/';
   $isAbout = request()->routeIs([
   'aboutUs',
   'managing_director',
   'coordinator',
   'academic-head-message',
   'principal-message',
   'circular',
   'facilities',
   'branches'
   ]);
   $isAdmission = request()->routeIs([
   'admission',
   'enquiry',
   'fees-pay',
   'policy',
   'career'
   ]);
   $isActivities = request()->routeIs(['academic_activities', 'extra_activities', 'activities.category']);
   $isEvents = request()->routeIs(['event', 'achievements', 'events.category', 'achievements.category']);
   $isGallery = request()->routeIs(['gallery', 'media-gallery', 'video-gallery']);
   $isContact = request()->routeIs('contact');
   @endphp
   <div class="header-inner">
      <!-- School Brand Logo -->
      <a href="{{ url('/') }}" class="brand-logo" aria-label="Seven Steps Pre-School Home">
         <img src="{{ asset('assets/img/logo.png') }}" alt="Seven Steps Pre-School Logo" width="56" height="56">
         <div class="brand-info">
            <span class="brand-title">SEVEN STEPS</span>
            <span class="brand-tagline">Sunrise Group - Surat</span>
         </div>
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav" aria-label="Main Navigation">
         <ul class="nav-menu">
            <li class="nav-item {{ $isHome ? 'active' : '' }}">
               <a href="{{ url('/') }}" class="nav-link {{ $isHome ? 'active' : '' }}">Home</a>
            </li>

            <!-- ABOUT US DROPDOWN -->
            <li class="nav-item {{ $isAbout ? 'active' : '' }}">
               <a href="{{ route('aboutUs') }}" class="nav-link {{ $isAbout ? 'active' : '' }}">
                  About Us <i class="fas fa-chevron-down"></i>
               </a>
               <div class="dropdown-panel">
                  <a href="{{ route('aboutUs') }}" class="dropdown-link {{ request()->routeIs('aboutUs') ? 'active' : '' }}"><i class="fas fa-info-circle"></i> About Us</a>
                  <a href="{{ route('managing_director') }}" class="dropdown-link {{ request()->routeIs('managing_director') ? 'active' : '' }}"><i class="fas fa-user-tie"></i> Managing Director</a>
                  <a href="{{ route('coordinator') }}" class="dropdown-link {{ request()->routeIs('coordinator') ? 'active' : '' }}"><i class="fas fa-user-check"></i> Co-Ordinator</a>
                  <a href="{{ route('academic-head-message') }}" class="dropdown-link {{ request()->routeIs('academic-head-message') ? 'active' : '' }}"><i class="fas fa-graduation-cap"></i> Academic Head Message</a>
                  <a href="{{ route('principal-message') }}" class="dropdown-link {{ request()->routeIs('principal-message') ? 'active' : '' }}"><i class="fas fa-comment-dots"></i> Principal Message</a>
                  <a href="{{ route('circular') }}" class="dropdown-link {{ request()->routeIs('circular') ? 'active' : '' }}"><i class="fas fa-file-alt"></i> Circular</a>
                  <a href="{{ route('facilities') }}" class="dropdown-link {{ request()->routeIs('facilities') ? 'active' : '' }}"><i class="fas fa-shapes"></i> School Facilities</a>
                  <a href="{{ route('branches') }}" class="dropdown-link {{ request()->routeIs('branches') ? 'active' : '' }}"><i class="fas fa-map-marked-alt"></i> Branches</a>
               </div>
            </li>

            <!-- ADMISSION & INQUIRY DROPDOWN -->
            <li class="nav-item {{ $isAdmission ? 'active' : '' }}">
               <a href="{{ route('admission') }}" class="nav-link {{ $isAdmission ? 'active' : '' }}">
                  Admission & Inquiry <i class="fas fa-chevron-down"></i>
               </a>
               <div class="dropdown-panel">
                  <a href="{{ route('admission') }}" class="dropdown-link {{ request()->routeIs('admission') ? 'active' : '' }}"><i class="fas fa-door-open"></i> Admission</a>
                  <a href="{{ route('enquiry') }}" class="dropdown-link {{ request()->routeIs('enquiry') ? 'active' : '' }}"><i class="fas fa-edit"></i> Admission Inquiry</a>
                  <a href="{{ route('fees-pay') }}" class="dropdown-link {{ request()->routeIs('fees-pay') ? 'active' : '' }}"><i class="fas fa-credit-card"></i> Fees Payment</a>
                  <a href="{{ route('policy') }}" class="dropdown-link {{ request()->routeIs('policy') ? 'active' : '' }}"><i class="fas fa-shield-alt"></i> Refund & Cancel Policy</a>
                  <a href="{{ route('career') }}" class="dropdown-link {{ request()->routeIs('career') ? 'active' : '' }}"><i class="fas fa-briefcase"></i> Career</a>
               </div>
            </li>

            <!-- ACTIVITIES DROPDOWN -->
            <li class="nav-item {{ $isActivities ? 'active' : '' }}">
               <a href="{{ route('academic_activities') }}" class="nav-link {{ $isActivities ? 'active' : '' }}">
                  Activities <i class="fas fa-chevron-down"></i>
               </a>
               <div class="dropdown-panel">
                  <div class="has-nested">
                     <a href="{{ route('academic_activities') }}" class="dropdown-link {{ request()->routeIs('academic_activities') ? 'active' : '' }}">
                        <i class="fas fa-palette"></i> Academic Activities <i class="fas fa-chevron-right"></i>
                     </a>
                     <div class="nested-panel">
                        @foreach($frontendCategories->get('activity', collect()) as $category)
                        <a href="{{ route('activities.category', $category->slug) }}" class="dropdown-link {{ request()->routeIs('activities.category', ['slug' => $category->slug]) ? 'active' : '' }}"><i class="fas fa-circle"></i> {{ $category->name }}</a>
                        @endforeach
                     </div>
                  </div>
                  <a href="{{ route('extra_activities') }}" class="dropdown-link {{ request()->routeIs('extra_activities') ? 'active' : '' }}"><i class="fas fa-running"></i> Extra Activities</a>
               </div>
            </li>

            <!-- EVENTS DROPDOWN -->
            <li class="nav-item {{ $isEvents ? 'active' : '' }}">
               <a href="{{ route('event') }}" class="nav-link {{ $isEvents ? 'active' : '' }}">
                  Events <i class="fas fa-chevron-down"></i>
               </a>
               <div class="dropdown-panel">
                  <div class="has-nested">
                     <a href="{{ route('event') }}" class="dropdown-link {{ request()->routeIs('event') ? 'active' : '' }}">
                        <i class="fas fa-calendar-alt"></i> Event <i class="fas fa-chevron-right"></i>
                     </a>
                     <div class="nested-panel">
                        @foreach($frontendCategories->get('event', collect()) as $category)
                        <a href="{{ route('events.category', $category->slug) }}" class="dropdown-link {{ request()->routeIs('events.category', ['slug' => $category->slug]) ? 'active' : '' }}"><i class="fas fa-calendar-day"></i> {{ $category->name }}</a>
                        @endforeach
                     </div>
                  </div>
                  <div class="has-nested">
                     <a href="{{ route('achievements') }}" class="dropdown-link {{ request()->routeIs('achievements') ? 'active' : '' }}">
                        <i class="fas fa-award"></i> Achievements <i class="fas fa-chevron-right"></i>
                     </a>
                     <div class="nested-panel">
                        @foreach($frontendCategories->get('achievement', collect()) as $category)
                        <a href="{{ route('achievements.category', $category->slug) }}" class="dropdown-link {{ request()->routeIs('achievements.category', ['slug' => $category->slug]) ? 'active' : '' }}"><i class="fas fa-award"></i> {{ $category->name }}</a>
                        @endforeach
                     </div>
                  </div>
               </div>
            </li>

            <!-- GALLERY DROPDOWN -->
            <li class="nav-item {{ $isGallery ? 'active' : '' }}">
               <a href="{{ route('gallery') }}" class="nav-link {{ $isGallery ? 'active' : '' }}">
                  Gallery <i class="fas fa-chevron-down"></i>
               </a>
               <div class="dropdown-panel">
                  <a href="{{ route('gallery') }}" class="dropdown-link {{ request()->routeIs('gallery') ? 'active' : '' }}"><i class="fas fa-images"></i> Photo Gallery</a>
                  <a href="{{ route('media-gallery') }}" class="dropdown-link {{ request()->routeIs('media-gallery') ? 'active' : '' }}"><i class="fas fa-newspaper"></i> Media Gallery</a>
                  <a href="{{ route('video-gallery') }}" class="dropdown-link {{ request()->routeIs('video-gallery') ? 'active' : '' }}"><i class="fas fa-video"></i> Video Gallery</a>
               </div>
            </li>

            <!-- CONTACT -->
            <li class="nav-item {{ $isContact ? 'active' : '' }}">
               <a href="{{ route('contact') }}" class="nav-link {{ $isContact ? 'active' : '' }}">Contact</a>
            </li>
         </ul>
      </nav>

      <!-- Header Right CTA Group -->
      <div class="header-cta-group">
         <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-primary">
            <i class="fas fa-paper-plane"></i> Apply Now
         </a>
         <button class="mobile-menu-btn" aria-label="Toggle Mobile Menu">
            <i class="fas fa-bars"></i>
         </button>
      </div>
   </div>
</div>