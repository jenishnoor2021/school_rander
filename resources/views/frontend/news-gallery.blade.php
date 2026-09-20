<?php

use App\Models\Mediagalleryimage;

$mediagallerys = Mediagalleryimage::where('is_show', 1)->paginate(12);
?>

@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-banner-content">
               <h2>Media Gallery</h2>
               <ul>
                  <li>
                     <a href="{{URL::to('/')}}">Home</a>
                  </li>
                  <li>Media Gallery</li>
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
         <h2>Media Gallery</h2>
      </div>
      <div class="row">
      @foreach($mediagallerys as $mediagallery)
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="single-gallery-box">
               <img src="{{$mediagallery->file}}" alt="media1">

               <a href="{{$mediagallery->file}}" class="gallery-btn" data-imagelightbox="popup-btn">
                  <i class='bx bx-search-alt'></i>
               </a>
            </div>
         </div>
      @endforeach
      <div class="row mt-4">
         <div class="col-sm-12" style="display:flex;justify-content:center;">
            {{$mediagallerys->links('pagination::bootstrap-4')}}
         </div>
      </div>
      </div>
   </div>
</div>
<!-- End Gallery Area -->

<!-- Start Navbar Area -->
<div class="top-navbar">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="nav-left">
               <div class="email">
                  <i class="bx bx-envelope"></i>
                  <a href="mailto:ssspre46666@gmail.com">ssspre46666@gmail.com</a>
               </div>
               <div class="callus">
                  <i class="bx bxs-phone"></i>
                  <a href="tel:+919328466363">+91 93284 66363</a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="nav-right">
               <ul class="social">
                  <li>
                     <a href="https://www.facebook.com/profile.php?id=100090069094289&mibextid=ZbWKwL" target="_blank">
                        <i class="bx bxl-facebook"></i>
                     </a>
                  </li>
                  <li>
                     <a href="https://instagram.com/sevenstepspre?igshid=ZDdkNTZiNTM=" target="_blank">
                        <i class="bx bxl-instagram"></i>
                     </a>
                  </li>
               </ul>
               <div class="nav_btn default-btn">
                  <a href="http://schools.skyzonegroup.com/" target="_blank">Student Login</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
