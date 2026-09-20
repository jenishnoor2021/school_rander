@extends('layouts.front')
@section('content')
<style>
.gallery-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 3rem;
    width: 100%;
}

.gallery-pagination nav {
    display: flex;
    justify-content: center;
    width: 100%;
}

.gallery-pagination .pagination {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
    gap: 5px;
}

.gallery-pagination .page-item {
    display: inline-block;
}

.gallery-pagination .page-link {
    display: block;
    padding: 8px 14px;
    text-decoration: none;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    color: #17365d;
    background-color: #fff;
}

.gallery-pagination .page-item.active .page-link {
    background-color: #17365d;
    border-color: #17365d;
    color: #fff;
}

.gallery-pagination .page-item.disabled .page-link {
    color: #999;
    pointer-events: none;
}

.gallery-pagination .page-link:hover {
    background-color: #f0f4f8;
    color: #17365d;
}   
</style>

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
         <h1>Photo Gallery</h1>
         <div class="breadcrumb-pill-trail">
            <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i>
            <a href="{{ route('gallery') }}">Gallery</a> <i class="fas fa-angle-right" style="font-size: 0.75rem; opacity: 0.6;"></i> <span>Photo Gallery</span>
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
         <span class="section-tag"><i class="fas fa-camera-retro"></i> Living Memories</span>
         <h2>Photo Gallery</h2>
         <p>Explore vibrant moments of everyday laughter, academic celebrations, sports adventures, and stage arts in Surat.</p>
      </div>

      <div class="gallery-mosaic-layout">
         @php
            $galleryList = $galleries ?? \App\Models\Galleryimage::where('is_show', 1)->latest()->paginate(12);
         @endphp
         @forelse($galleryList as $gallery)
         <a href="{{ asset($gallery->file) }}" class="mosaic-photo-card reveal-pop" data-lightbox-src="{{ asset($gallery->file) }}" data-lightbox-caption="{{ $gallery->text ?? 'Photo Gallery' }}">
            <div class="mosaic-photo-inner">
               <img src="{{ asset($gallery->file) }}" alt="{{ $gallery->text ?? 'Photo Gallery' }}" loading="lazy">
               <div class="mosaic-zoom-overlay"><i class="fas fa-search-plus"></i></div>
            </div>
            <div class="mosaic-caption-bar"><span>{{ $gallery->text ? $gallery->text : 'Seven Steps Moments' }}</span></div>
         </a>
         @empty
         <a href="/assets/img/photo_gallery_01.jpg" class="mosaic-photo-card reveal-pop" data-lightbox-src="/assets/img/photo_gallery_01.jpg" data-lightbox-caption="Annual Day Costumes & Dance">
            <div class="mosaic-photo-inner">
               <img src="/assets/img/photo_gallery_01.jpg" alt="Annual Day Costumes & Dance" loading="lazy">
               <div class="mosaic-zoom-overlay"><i class="fas fa-search-plus"></i></div>
            </div>
            <div class="mosaic-caption-bar"><span>Annual Day Costumes & Dance</span></div>
         </a>

         <a href="/assets/img/photo_gallery_02.jpg" class="mosaic-photo-card reveal-pop" data-lightbox-src="/assets/img/photo_gallery_02.jpg" data-lightbox-caption="Folk Dance Celebrations">
            <div class="mosaic-photo-inner">
               <img src="/assets/img/photo_gallery_02.jpg" alt="Folk Dance Celebrations" loading="lazy">
               <div class="mosaic-zoom-overlay"><i class="fas fa-search-plus"></i></div>
            </div>
            <div class="mosaic-caption-bar"><span>Folk Dance Celebrations</span></div>
         </a>

         <a href="/assets/img/photo_gallery_03.jpg" class="mosaic-photo-card reveal-pop" data-lightbox-src="/assets/img/photo_gallery_03.jpg" data-lightbox-caption="Patriotic Day Group Performance">
            <div class="mosaic-photo-inner">
               <img src="/assets/img/photo_gallery_03.jpg" alt="Patriotic Day Group Performance" loading="lazy">
               <div class="mosaic-zoom-overlay"><i class="fas fa-search-plus"></i></div>
            </div>
            <div class="mosaic-caption-bar"><span>Patriotic Day Group Performance</span></div>
         </a>

         <a href="/assets/img/photo_gallery_04.jpg" class="mosaic-photo-card reveal-pop" data-lightbox-src="/assets/img/photo_gallery_04.jpg" data-lightbox-caption="Grand Finale Stage Presentation">
            <div class="mosaic-photo-inner">
               <img src="/assets/img/photo_gallery_04.jpg" alt="Grand Finale Stage Presentation" loading="lazy">
               <div class="mosaic-zoom-overlay"><i class="fas fa-search-plus"></i></div>
            </div>
            <div class="mosaic-caption-bar"><span>Grand Finale Stage Presentation</span></div>
         </a>
         @endforelse
      </div>

      @if(isset($galleryList) && method_exists($galleryList, 'hasPages') && $galleryList->hasPages())
      <div class="gallery-pagination">
         {{ $galleryList->links('pagination::bootstrap-4') }}
      </div>
      @endif
   </div>
</section>

@endsection