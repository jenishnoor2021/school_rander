@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-banner-content">
               <h2>Admission</h2>
               <ul>
                  <li>
                     <a href="{{URL::to('/')}}">Home</a>
                  </li>
                  <li>Admissions</li>
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
         <div class="col-lg-12">
            <div class="who-we-are-content">
               <h3>Pre-Primary Admission</h3>
               <h6>Kindly visit our school campus for assistance regarding admission. Our counsellors will be happy to assist you.</h6>
               <h6 class="sub_heading" style="margin-top: 10px;">Eligibility Criteria</h6>
               <p>Students applying for admission to Seven Steps Pre-School for the current academic year must satisfy the following eligibility criteria:</p>
               <ul class="who-we-are-list about-page">
                  <li>
                     <span></span>
                     A child seeking admission to the Nursery Class in a particular year should have attained the age of 3 years on 1st June of that year.
                  </li>
                  <h6 class="sub_heading" style="margin-top: 10px;">Documents Required</h6>
                  <li>
                     <span></span>
                     Copy of the Original Birth Certificate
                  </li>
                  <li>
                     <span></span>
                     2 recent photographs of the student.

                  </li>
                  <li>
                     <span></span>
                     1 photograph each of the father and mother.
                  </li>
                  <li>
                     <span></span>
                     Aadhaar Card xerox copy of the student
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="who-we-are-shape">
      <img src="{{asset('assets/img/boy4.png')}}" alt="boy4">
   </div>
</section>
<!-- End Who We Are Area -->

@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
