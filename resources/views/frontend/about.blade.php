@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-banner-content">
               <h2>About</h2>
               <ul>
                  <li>
                     <a href="{{URL::to('/')}}">Home</a>
                  </li>
                  <li>About</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Page Banner -->

<!-- Start Who We Are Area -->
<section class="who-we-are ptb">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="who-we-are-image about_img">
               <img src="{{asset('assets/img/svensteps.jpg')}}" alt="about">
            </div>
         </div>

         <div class="col-lg-6">
            <div class="who-we-are-content">
               <span>Best Technological School</span>
               <h3>Seven Steps Pre School</h3>
               <p>Seven Steps Pre-School, including all of our schools, is committed to acting on our new vision, mission, and values statements.</p>
               <p>These new statements that emphasize student success and well-being reflect the future-focused and innovative organization that we are today.</p>
               <p>Therefore, our endeavour is towards:</p>
               <ul class="who-we-are-list about-page">
                  <li>
                     <span></span>
                     Providing education through experience and enrichment.
                  </li>
                  <li>
                     <span></span>
                    Providing an environment to discern knowledge, to attain and retain wisdom and character.
                  </li>
                  <li>
                     <span></span>
                     Activating pupil-centred teaching-learning process through creativity.
                  </li>
                  <li>
                     <span></span>
                     Revealing the inner strength.
                  </li>
                  <li>
                     <span></span>
                    Strengthening the "roots" and energizing the "wings".
                  </li>
               </ul>
               <p>Seven Steps Pre-School is a place where exploration, creativity, and imagination make learning exciting and where all learners aspire to reach their dreams.</p>
               <!--<div class="who-we-are-btn">-->
               <!--   <a href="javascripe::void(0);" class="default-btn">Read More</a>-->
               <!--</div>-->
            </div>
         </div>
      </div>
   </div>

   <div class="who-we-are-shape">
      <img src="{{asset('assets/img/boy5.png')}}" alt="boy5">
   </div>
</section>
<!-- End Who We Are Area -->

<!-- Start Who We Are Area -->
<section class="who-we-are ptb gray-bg who-we-order">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="who-we-are-content">
               <span>Best Technological School</span>
               <h3>Our Mission</h3>
               <p>Our Mission is to serve society through excellence in education. We always aim to define and continually refine the absolute standard of excellence in the area of academics through:</p>
               <ul class="who-we-are-list about-page">
                  <li>
                     <span></span>
                     The quality of education we provide.
                  </li>
                  <li>
                     <span></span>
                    The efficiency of our methodologies and systems.
                  </li>
                  <li>
                     <span></span>
                    Truthfulness towards students, parents, society, and the nation.
                  </li>
               </ul>
               <p>In our students, we aspire to instill the attitudes, values, and vision that will prepare them for a lifetime of continued learning and leadership in their chosen careers.</p>
               <p>The Management, Administration, and Staff of Seven Steps Pre-School share a set of core beliefs and commitments.</p>
               <p>We believe in Student’s success, lifelong learning, Respect, Integrity, Trust, Honesty, Ethical behaviour, Continuous Quality Improvement and excellence.</p>
               <p>We believe in students' success, lifelong learning, respect, integrity, trust, honesty, ethical behaviour, continuous quality improvement, and excellence.
We commit ourselves to prepare students for the future, impart knowledge on which students can build a bright career, treat everyone with respect and fairness, and exemplify our values by serving as role models.</p>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="who-we-are-image about_img">
               <img src="{{asset('assets/img/mission-1.jpg')}}" alt="image" class="about_two_img">
            </div>
         </div>
      </div>
   </div>

   <div class="who-we-are-shape">
      <img src="{{asset('assets/img/boy3.png')}}" alt="boy3">
   </div>
</section>
<!-- End Who We Are Area -->

<!-- Start Who We Are Area -->
<section class="who-we-are ptb">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="who-we-are-image">
               <img src="{{asset('assets/img/vision.jpg')}}" alt="image" class="about_two_img">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="who-we-are-content">
               <span>Best Technological School</span>
               <h3>Our Vision</h3>
               <p>Seven Steps Pre-School is a place where exploration, creativity, and imagination make learning exciting and where all learners aspire to reach their dreams.</p>
            </div>
         </div>
      </div>
   </div>

   <div class="who-we-are-shape">
      <img src="{{asset('assets/img/boy2.png')}}" alt="boy2">
   </div>
</section>
<!-- End Who We Are Area -->

<!-- Start Fun Facts Area -->
<section class="fun-facts-area pt-100 pb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-fun-fact">
               <h3>
                  <span class="odometer" data-count="1200">00</span>
               </h3>
               <p>Students</p>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-fun-fact bg-1">
               <h3>
                  <span class="odometer" data-count="305">00</span>
               </h3>
               <p>Teachers</p>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-fun-fact bg-2">
               <h3>
                  <span class="odometer" data-count="48">00</span>
               </h3>
               <p>Classroom</p>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-fun-fact bg-3">
               <h3>
                  <span class="odometer" data-count="50">00</span>
               </h3>
               <p>Bus</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Fun Facts Area -->

@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
