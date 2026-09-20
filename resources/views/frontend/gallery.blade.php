<?php

use App\Models\Galleryimage;

$gallerys = Galleryimage::where('is_show', 1)->paginate(12);
?>
@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-banner-content">
               <h2>Photo Gallery</h2>
               <ul>
                  <li>
                     <a href="{{URL::to('/')}}">Home</a>
                  </li>
                  <li>Photo Gallery</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Page Banner -->

<!-- Start Gallery Area -->
<div class="gallery-area ptb gray-bg">
   <div class="container">
      <div class="section-title">
         <h2>Photo Gallery</h2>
      </div>
      <div class="row">
      @foreach($gallerys as $gallery)
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="single-gallery-box">
               <img src="{{$gallery->file}}" alt="gallery1">

               <a href="{{$gallery->file}}" class="gallery-btn" data-imagelightbox="popup-btn">
                  <i class='bx bx-search-alt'></i>
               </a>
            </div>
         </div>
      @endforeach
      <div class="row mt-4">
         <div class="col-sm-12" style="display:flex;justify-content:center;">
            {{$gallerys->links('pagination::bootstrap-4')}}
         </div>
      </div>
      </div>
   </div>
</div>
<!-- End Gallery Area -->

@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
