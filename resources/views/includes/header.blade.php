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

<div class="navbar-area">
   <div class="main-responsive-nav">
      <div class="container">
         <div class="main-responsive-menu">
            <div class="logo" style="display: inline-block;">
               <a href="{{ URL::to('/') }}">
                  <img src="{{asset('assets/img/logo.png')}}" class="black-logo" alt="image">
               </a>
            </div>
            <div class="others-options mobile d-flex align-items-center">
               <div class="option-item">
                  <a href="{{ URL::to('/site/enquiry') }}" class="default-btn">Admission Inquiry</a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="main-navbar">
      <div class="container">
         <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{ URL::to('/') }}">
               <img src="{{asset('assets/img/logo.png')}}" class="black-logo" alt="image">
            </a>

            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a href="{{ URL::to('/') }}" class="nav-link {{ (request()->segment(1) == '') ? 'active' : '' }}">
                        Home
                     </a>
                  </li>

                  <li class="nav-item">
                     <a href="javascript::void(0);" class="nav-link {{ (request()->segment(2) == 'about') || (request()->segment(2) == 'branch-head') || (request()->segment(2) == 'managing_director') || (request()->segment(2) == 'principal-message') || (request()->segment(2) == 'incharge-message') || (request()->segment(2) == 'circular') || (request()->segment(2) == 'facilities') || (request()->segment(2) == 'branches') ? 'active' : '' }}">
                        About Us
                        <i class='bx bx-chevron-down'></i>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/about') }}" class="nav-link {{ (request()->segment(2) == 'about') ? 'active' : '' }}">
                              About Us
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/managing_director') }}" class="nav-link {{ (request()->segment(2) == 'managing_director') ? 'active' : '' }}">
                              Managing Director
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/branch-head') }}" class="nav-link {{ (request()->segment(2) == 'branch-head') ? 'active' : '' }}">
                              Co-ordinator
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/principal-message') }}" class="nav-link {{ (request()->segment(2) == 'principal-message') ? 'active' : '' }}">
                              Academic Head Message
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/incharge-message') }}" class="nav-link {{ (request()->segment(2) == 'incharge-message') ? 'active' : '' }}">
                              Principal Message
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/circular') }}" class="nav-link {{ (request()->segment(2) == 'circular') ? 'active' : '' }}">
                              Circular
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/facilities') }}" class="nav-link {{ (request()->segment(2) == 'facilities') ? 'active' : '' }}">
                              School Facilities
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/branches') }}" class="nav-link {{ (request()->segment(2) == 'branches') ? 'active' : '' }}">
                              Branches
                           </a>
                        </li>
                     </ul>
                  </li>

                  <li class="nav-item">
                     <a href="javascript::void(0);" class="nav-link {{ (request()->segment(2) == 'admissions') || (request()->segment(2) == 'enquiry') || (request()->segment(2) == 'fees-pay') || (request()->segment(2) == 'policy') || (request()->segment(2) == 'career') ? 'active' : '' }}">
                        Admission and Inquiry
                        <i class='bx bx-chevron-down'></i>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/admissions') }}" class="nav-link {{ (request()->segment(2) == 'admissions') ? 'active' : '' }}">
                              Admission
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/enquiry') }}" class="nav-link {{ (request()->segment(2) == 'enquiry') ? 'active' : '' }}">
                              Admission Inquiry
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/fees-pay') }}" class="nav-link {{ (request()->segment(2) == 'fees-pay') ? 'active' : '' }}">
                              Fees Payment
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/policy') }}" class="nav-link {{ (request()->segment(2) == 'policy') ? 'active' : '' }}">
                              Refund & Cancel Policy
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/career') }}" class="nav-link {{ (request()->segment(2) == 'career') ? 'active' : '' }}">
                              Career
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="javascript::void(0);" class="nav-link {{ (request()->segment(2) == 'academic_activities') || (request()->segment(2) == 'extra_activities') ? 'active' : '' }}">
                        Activities
                        <i class='bx bx-chevron-down'></i>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="nav-item">
                            <!--<a href="{{ URL::to('/site/academic_activities') }}" class="nav-link {{ (request()->segment(2) == 'academic_activities') ? 'active' : '' }}">-->
                            <a href="javascript::void(0);" class="nav-link {{ (request()->segment(3) == 'celebration') || (request()->segment(3) == 'competition') || (request()->segment(3) == 'club') ? 'active' : '' }}">
                              Academic Activities
                              <i class='bx bx-chevron-right'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/academic_activities/celebration') }}" class="nav-link {{ (request()->segment(3) == 'celebration') ? 'active' : '' }}">
                                      Celebration
                                   </a>
                                </li>
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/academic_activities/competition') }}" class="nav-link {{ (request()->segment(3) == 'competition') ? 'active' : '' }}">
                                      Competition
                                   </a>
                                </li>
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/academic_activities/club') }}" class="nav-link {{ (request()->segment(3) == 'club') ? 'active' : '' }}">
                                      Club Activities
                                   </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/extra_activities') }}" class="nav-link {{ (request()->segment(2) == 'extra_activities') ? 'active' : '' }}">
                              Extra Activities
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="javascript::void(0);" class="nav-link {{ (request()->segment(2) == 'event') || (request()->segment(2) == 'achievements') ? 'active' : '' }}">
                        Events
                        <i class='bx bx-chevron-down'></i>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="nav-item">
                           <!--<a href="{{ URL::to('/site/event') }}" class="nav-link {{ (request()->segment(2) == 'event') ? 'active' : '' }}">-->
                           <a href="javascript::void(0);" class="nav-link {{ (request()->segment(3) == 'annual') || (request()->segment(3) == 'sport') || (request()->segment(3) == 'parent') || (request()->segment(3) == 'grand_parent') || (request()->segment(3) == 'parenting') || (request()->segment(3) == 'health') || (request()->segment(3) == 'convocation') ? 'active' : '' }}">
                              Events
                              <i class='bx bx-chevron-right'></i>
                           </a>
                           <ul class="dropdown-menu">
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/event/annual') }}" class="nav-link {{ (request()->segment(3) == 'annual') ? 'active' : '' }}">
                                      Annual Day
                                   </a>
                                </li>
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/event/sport') }}" class="nav-link {{ (request()->segment(3) == 'sport') ? 'active' : '' }}">
                                      Sport Day
                                   </a>
                                </li>
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/event/parent') }}" class="nav-link {{ (request()->segment(3) == 'parent') ? 'active' : '' }}">
                                      Parents Day
                                   </a>
                                </li>
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/event/grand_parent') }}" class="nav-link {{ (request()->segment(3) == 'grand_parent') ? 'active' : '' }}">
                                      Grand parents Day
                                   </a>
                                </li>
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/event/parenting') }}" class="nav-link {{ (request()->segment(3) == 'parenting') ? 'active' : '' }}">
                                      Parenting Seminar
                                   </a>
                                </li>
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/event/health') }}" class="nav-link {{ (request()->segment(3) == 'health') ? 'active' : '' }}">
                                      Health Check Up Camp
                                   </a>
                                </li>
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/event/convocation') }}" class="nav-link {{ (request()->segment(3) == 'convocation') ? 'active' : '' }}">
                                      Convocation Day
                                   </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!--<a href="javascript::void(0);" class="nav-link {{ (request()->segment(2) == 'achievements') ? 'active' : '' }}">-->
                           <a href="{{ URL::to('/site/achievements') }}" class="nav-link {{ (request()->segment(3) == 'student') || (request()->segment(3) == 'principal') ? 'active' : '' }}">
                              Achievements
                              <i class='bx bx-chevron-right'></i>
                           </a>
                           <ul class="dropdown-menu">
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/achievements/student') }}" class="nav-link {{ (request()->segment(3) == 'student') ? 'active' : '' }}">
                                      Students Achievement
                                   </a>
                                </li>
                                <li class="nav-item">
                                   <a href="{{ URL::to('/site/achievements/principal') }}" class="nav-link {{ (request()->segment(3) == 'principal') ? 'active' : '' }}">
                                      Principal Achievement
                                   </a>
                                </li>
                            </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="javascript::void(0);" class="nav-link {{ (request()->segment(2) == 'gallery') || (request()->segment(2) == 'media-gallery') || (request()->segment(2) == 'video-gallery') ? 'active' : '' }}">
                        Gallery
                        <i class='bx bx-chevron-down'></i>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/gallery') }}" class="nav-link {{ (request()->segment(2) == 'gallery') ? 'active' : '' }}">
                              Photo Gallery
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/media-gallery') }}" class="nav-link {{ (request()->segment(2) == 'media-gallery') ? 'active' : '' }}">
                              Media Gallery
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{ URL::to('/site/video-gallery') }}" class="nav-link {{ (request()->segment(2) == 'video-gallery') ? 'active' : '' }}">
                              Video Gallery
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="{{ URL::to('/site/contact') }}" class="nav-link {{ (request()->segment(2) == 'contact') ? 'active' : '' }}">
                        Contact Us
                     </a>
                  </li>
               </ul>
               <div class="others-options d-flex align-items-center">
                  <!-- <div class="option-item">-->
                  <!--   <a href="{{ URL::to('/site/fees-pay') }}" class="default-btn">Pay Now</a>-->
                  <!--</div>-->
                  <div class="option-item">
                     <a href="{{ URL::to('/site/enquiry') }}" class="default-btn">Admission Inquiry</a>
                  </div>
               </div>
            </div>
         </nav>
      </div>
   </div>

   <div class="others-option-for-responsive">
      <div class="container">
         <!-- <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div> -->

         <div class="container">
            <div class="option-inner">
               <div class="others-options d-flex align-items-center">
                  <div class="option-item">
                     <a href="{{ URL::to('/site/contact') }}" class="default-btn">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Navbar Area -->
