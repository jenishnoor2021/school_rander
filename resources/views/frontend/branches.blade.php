@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-banner-content">
               <h2>Branches</h2>
               <ul>
                  <li>
                     <a href="{{URL::to('/')}}">Home</a>
                  </li>
                  <li>Branches</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Page Banner -->

<!-- Start Tour Area -->
<section class="tour-area ptb gray-bg">
   <div class="container">
      <div class="section-title">
         <h2>Our Branches</h2>
      </div>

      <div class="row">
      @foreach($allbranches as $allbranche)
         <div class="col-lg-4 col-md-6">
            <div class="single-tour bg{{$loop->index+1}}">
               <h3>{{$allbranche['branch']}}</h3>
               <h4>{{$allbranche['school_name']}}</h4>
               <div class="single-tour-icon">
                  <i class="bx bx-map"></i>
                  <p class="address">{{$allbranche['address']}}</p>
               </div>
               <div class="single-tour-icon">
                  <i class="bx bxs-phone"></i>
                  <a href="tel:+ 9198796 26666">
                     <P>{{$allbranche['mobile']}}</P>
                  </a>
               </div>
               <div class="single-tour-btn">
                  <a href="{{$allbranche['website']}}">Click for Branch Details</a>
               </div>
            </div>
         </div>
      @endforeach
      </div>
   </div>
</section>
<!-- End Tour Area -->


@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
