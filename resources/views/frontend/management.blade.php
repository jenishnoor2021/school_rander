@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-banner-content">
               <h2>Management</h2>
               <ul>
                  <li>
                     <a href="{{URL::to('/')}}">Home</a>
                  </li>
                  <li>Management</li>
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
               <img src="{{ asset('assets/img/managing_director.jpg') }}" alt="Managing director" class="management_img">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="who-we-are-content">
               <h3>Managing Director Message</h3>
               <p>Welcome to the new academic year at Seven Steps Pre-School and a special welcome to our students. We are confident that our students will enhance the Seven Steps Pre-School tradition and share in the pride and commitment to study at our institution. We want you to excel as students, make success of your careers, be responsible citizens and above all, be good human beings. We look forward to working with you this academic year. Let's make this year the best year ever.</p>
            </div>
         </div>
         <div class="col-lg-12 who-we-are-content" style="margin-top: 40px;">
            <ul class="who-we-are-list about-page">
               <h4>Our Legacy:</h4>
               <li>
                  <span></span>
                  Our institute here in Surat is one among the best. The education, academic expertise, provided by our institute is widely admired by many people and we, with due modesty, assert that we have achieved a depth of accomplishment in education and learning that is unrivalled.
               </li>
               <li>
                  <span></span>
                  Getting success in the examination is all about your perseverance, endurance, learning ability, managing time and stress and zeal to model the path of success drawn by experts in the field of education. To ensure your success, we have designed our institute programme in a manner that develops both your knowledge and your problem solving acumen. To achieve this we have a team of experienced and most renowned staff. Our staff members are dedicated and devoted individuals of higher caliber with a genuine concern for building your future. The academic environment at Seven Steps Pre-School is highly conducive, enabling you to succeed in your efforts. With time we have very well learnt the diverse needs of students.
               </li>
               <li>
                  <span></span>
                  Seven Steps Pre-School has an excellent reputation for academic success and I am often asked how we achieve this so consistently. The answer lies in the atmosphere of achievement we foster, where teachers and students set ambitious goals, develop good work habits and strive to succeed.
               </li>
            </ul>
            <h4 style="color: #ea512e;">Planning and promoting your success.</h4>
            <div class="management_msg" style="text-align: right;">
               <p class="text-right mr_btm" style="color: #44994a;">Sincerely,</p>
               <h5 class="text-right mr_btm" style="color: #f5890d;">Mr. Sanjaybhai Baldaniya</h5>
               <h6 class="text-right mr_btm" style="color: #ea512e;">Managing Director - Sunrise Group</h6>
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