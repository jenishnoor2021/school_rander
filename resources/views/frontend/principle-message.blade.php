@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-banner-content">
               <h2>Academic Head</h2>
               <ul>
                  <li>
                     <a href="{{URL::to('/')}}">Home</a>
                  </li>
                  <li>Academic Head</li>
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
               <img src="{{asset('assets/img/principal.jpg')}}" alt="image" class="management_img">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="who-we-are-content">
               <span>Welcome to Seven Steps Pre-School!</span>
               <h3>Academic Head Message</h3>
               <p>Greeting and welcome to Seven Steps Pre-School, Surat. I am thrilled that you have decided to view our school's website in order to learn more about this wonderful and unique institution.</p>
               <p>Education is the manifestation of the best in human being. It helps to promote and achieve physical, aesthetic, intellectual and professional refinement for an all round personality development.</p>
               <p>Following this spirit considerable investments have been made in this field during the last 08 years. But the quality of education that is being imparted has left much to be desired. There are moments in history when a new direction has to be given to age old process that moment is today. We must change the pattern of teaching by shaping the future of our children ,the future generation through education.</p>
               <p>At Seven Steps Pre-School, we recognize that social/emotional development is as essential to student success as academics. Teachers provide a nurturing environment in which young adolescents can learn, take risks, and thrive. Activities for the school year will evolve from our school theme – Transforming Education, Transforming Lives.</p>
               <p>I am happy to work with you and your children. Please do not hesitate to contact me at any time; our continued success is dependent on your feedback.</p>
            </div>
         </div>
         <div class="col-lg-12 who-we-are-content" style="margin-top: 40px;">
            <div class="management_msg" style="text-align: right;">
               <p class="text-right mr_btm" style="color: #44994a;">Sincerely,</p>
               <h5 class="text-right mr_btm" style="color: #f5890d;">Mrs. Komal Shah,</h5>
               <h6 class="text-right mr_btm" style="color: #ea512e;">(+91) 8320642274</h6>
               <h6 class="text-right mr_btm" style="color:#f4bd44;">Academic Head - Seven Steps School</h6>
            </div>
         </div>
      </div>
   </div>

   <div class="who-we-are-shape">
      <img src="{{asset('assets/img/boy3.png')}}" alt="boy3">
   </div>
</section>
<!-- End Who We Are Area -->


@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
