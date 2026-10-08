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
         <h2>{{ !empty($allbranches) && count($allbranches) > 0 ? count($allbranches) . ' Premier Campuses Across Surat' : 'Premier Campuses Across Surat' }}</h2>
         <p>Each branch upholds our strict standards of 100% child safety, hygienic play arenas, and innovative teaching.</p>
      </div>

      <div class="branches-wonder-grid">
         @php
            $badgeStyles = [
               '', // default saffron
               'background: var(--bg-pill-mint); color: var(--mint);',
               'background: var(--bg-pill-honey); color: var(--honey-dark);',
               'background: var(--bg-pill-berry); color: var(--berry);',
               'background: var(--bg-pill-iris); color: var(--iris);',
               'background: var(--bg-pill-sky); color: var(--sky);',
            ];
         @endphp

         @forelse($allbranches as $branch)
            @php
               $badgeStyle = $badgeStyles[$loop->index % count($badgeStyles)];
               $rawMobile = data_get($branch, 'mobile', '');
               $phones = !empty($rawMobile) ? preg_split('/[,|\/]/', $rawMobile) : [];
               $firstPhone = trim($phones[0] ?? '');
               $cleanPhone = preg_replace('/[^0-9+]/', '', $firstPhone);
               $branchTitle = data_get($branch, 'branch', '');
               $schoolName = data_get($branch, 'school_name', '');
               $address = data_get($branch, 'address', '');
               $website = data_get($branch, 'website', '');
               $email = data_get($branch, 'email', '');
            @endphp
            <!-- {{ $loop->iteration }}. {{ $branchTitle ?: $schoolName }} -->
            <div class="branch-campus-card reveal-pop">
               @if(!empty($branchTitle))
                  <span class="campus-pill-badge" @if(!empty($badgeStyle)) style="{{ $badgeStyle }}" @endif>{{ $branchTitle }}</span>
               @endif
               <h3>{{ $schoolName ?: $branchTitle }}</h3>

               @if(!empty($address))
                  <div class="branch-detail-row">
                     <i class="fas fa-map-marker-alt"></i>
                     <span>{!! nl2br(e($address)) !!}</span>
                  </div>
               @endif

               @if(!empty($rawMobile))
                  <div class="branch-detail-row">
                     <i class="fas fa-phone-alt"></i>
                     <a href="tel:{{ $cleanPhone }}">{{ $rawMobile }}</a>
                  </div>
               @endif

               @if(!empty($email))
                  <div class="branch-detail-row">
                     <i class="fas fa-envelope"></i>
                     <a href="mailto:{{ $email }}">{{ $email }}</a>
                  </div>
               @endif

               @if(!empty($website))
                  <div class="branch-detail-row">
                     <i class="fas fa-globe"></i>
                     <a href="{{ $website }}" target="_blank" rel="noopener noreferrer" style="word-break: break-all;">{{ $website }}</a>
                  </div>
               @endif

               <div style="margin-top: 1.25rem; display: flex; gap: 0.75rem; flex-wrap: wrap;">
                  @if(!empty($cleanPhone))
                     <a href="tel:{{ $cleanPhone }}" class="btn-wonder btn-wonder-primary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;"><i class="fas fa-phone"></i> Call</a>
                  @endif
                  <a href="{{ route('enquiry') }}" class="btn-wonder btn-wonder-secondary" style="font-size: 0.85rem; padding: 0.5rem 1.15rem;">Inquire</a>
                  @if(!empty($website))
                     <a href="{{ $website }}" target="_blank" rel="noopener noreferrer" class="btn-wonder" style="font-size: 0.85rem; padding: 0.5rem 1.15rem; background: var(--bg-cream); color: var(--navy); border: 1.5px solid var(--border-paper);"><i class="fas fa-arrow-up-right-from-square"></i> Visit Site</a>
                  @endif
               </div>
            </div>
         @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 3rem 1rem;">
               <p style="font-size: 1.1rem; color: var(--text-muted);">No branch information available at the moment.</p>
            </div>
         @endforelse
      </div>
   </div>
</section>

@endsection