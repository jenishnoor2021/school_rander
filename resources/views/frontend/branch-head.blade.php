@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-banner-content">
               <h2>Co-ordinator Message</h2>
               <ul>
                  <li>
                     <a href="{{URL::to('/')}}">Home</a>
                  </li>
                  <li>Co-ordinator Message</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Page Banner -->

<!-- Start Who We Are Area -->
<section class="who-we-are ptb gray-bg">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="who-we-are-image">
               <img src="{{ asset('assets/img/coordinator.jpg') }}" alt="Academic coordinator" class="management_img">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="who-we-are-content">
               <span>Welcome to Seven Steps Pre-School!</span>
               <h3>Co-Ordinator Message</h3>
               <!--<p>The aim of education should be to teach us rather how to think, than what to think — rather to improve our minds, so as to enable us to think for ourselves, than to load the memory with thoughts of other men.”</p>-->
               <P>The aim of education should be to teach us rather how to think, than what to think — rather to improve our minds, so as to enable us to think for ourselves, than to load the memory with thoughts of other men.”So we provide them with all the opportunities to realize their potential and prepare children for future challenges.....</p>
            </div>
         </div>
         <div class="col-lg-12 who-we-are-content" style="margin-top: 40px;">
            <div class="management_msg" style="text-align: right;">
               <p class="text-right mr_btm" style="color: #44994a;">Sincerely,</p>
               <h5 class="text-right mr_btm" style="color: #f5890d;">Mr. Hiren Baldaniya,</h5>
               <h6 class="text-right mr_btm" style="color: #ea512e;">(+91) 98244 17767</h6>
               <h6 class="text-right mr_btm" style="color:#f4bd44;">Co-ordinator Message - Seven Steps Pre-School</h6>
            </div>
         </div>
      </div>
   </div>

   <div class="who-we-are-shape">
      <img src="{{ asset('assets/img/hero_child.png') }}" alt="Students at Seven Steps Pre-School">
   </div>
</section>
<!-- End Who We Are Area -->

@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection