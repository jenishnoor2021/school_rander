@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-banner-content">
               <h2>{{$name}} Activities</h2>
               <ul>
                  <li>
                     <a href="{{URL::to('/')}}">Home</a>
                  </li>
                  <li>{{$name}} Activities</li>
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
         <h2>{{$name}}</h2>
      </div>
      <div class="row">
      @foreach($activities as $activitie)
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="single-gallery-box">
               <img src="{{$activitie->file}}" alt="gallery1">
               <a href="{{$activitie->file}}" class="gallery-btn" data-imagelightbox="popup-btn">
                  <i class='bx bx-search-alt'></i>
               </a>
               <div class="dwnload-btn">
                  <div class="title">
                    <h4>{{$activitie->text}}</h4>
                  </div>
                </div>
            </div>
         </div>
      @endforeach
      </div>
   </div>
</div>
<!-- End Gallery Area -->

@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
