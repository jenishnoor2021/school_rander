<?php

use App\Models\Galleryimage;
use App\Models\Slider;
use App\Models\Testomonial;
use App\Models\Video;
use App\Models\popup;

$popup = popup::where('is_show', 1)->orderBy('id', 'desc')->first();
$gallerys = Galleryimage::where('is_show', 1)->get();
$testomonials = Testomonial::where('is_approved', 1)->get();
$sliders = Slider::where('is_show', 1)->orderBy('id', 'DESC')->get();
$videourls = Video::where('link','!=',null)->where('is_show', 1)->get();
$videos = Video::where('file','!=',null)->where('is_show', 1)->get();

?>
@extends('layouts.front')
@section('content')
@if (\Session::has('alert'))
<div class="alert alert-success" id="displayhide">
    {!! \Session::get('alert') !!}
    <button id="hidAlert">X</button>
</div>
@endif


<!-- Start Main Banner Area -->
<div class="main-banner">
    <div class="home-slides owl-carousel owl-theme">
    @foreach($sliders as $slider)
        <div class="main-banner-item">
            <div class="d-table">
                <div>
                    <div class="container-fluid">
                        <!--<div class="row align-items-center">-->
                                <div class="main-banner-image">
                                    <img src="{{$slider->file}}" alt="image">
                                </div>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <div class="main-banner-shape">
        <div class="banner-bg-shape">
            <img src="{{asset('assets/img/main-banner/banner-bg-shape-1.png')}}" class="white-image" alt="image">
            <img src="{{asset('assets/img/main-banner/banner-bg-shape-1-dark.png')}}" class="black-image" alt="image" style="display:none;">
        </div>

        <div class="shape-1">
            <img src="{{asset('assets/img/boy1.png')}}" alt="boy1">
        </div>

        <div class="shape-2">
            <img src="{{asset('assets/img/boy2.png')}}" alt="boy2">
        </div>

        <div class="shape-3">
            <img src="{{asset('assets/img/boy4.png')}}" alt="boy4">
        </div>

        <div class="shape-4">
            <img src="{{asset('assets/img/boy5.png')}}" alt="boy5">
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Who We Are Area -->
<section class="who-we-are ptb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="who-we-are-image">
                    <img src="{{asset('assets/img/pagefirst.JPG')}}" alt="about">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="who-we-are-content">
                    <span>Best Technological School</span>
                    <h3>Seven Steps Pre-School</h3>
                    <p>Seven Steps Pre-School, including all of our schools, is committed to acting on our new vision, mission and values statements.</p>
                    <p>These new statements that emphasize student success and well-being reflect the future-focused and innovative organization that we are today...</p>

                    <ul class="who-we-are-list">
                        <li>
                            <span></span>
                            Homelike Environment
                        </li>
                        <li>
                            <span></span>
                            Quality Educators
                        </li>
                        <li>
                            <span></span>
                            Safety and Security
                        </li>
                        <li>
                            <span></span>
                            Play to Learn
                        </li>
                    </ul>
                    <div class="who-we-are-btn">
                        <a href="{{ URL::to('/site/about') }}" class="default-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="who-we-are-shape">
        <img src="{{asset('assets/img/boy3.png')}}" alt="boy3">
    </div>
</section>
<!-- End Who We Are Area -->

<!-- Start Facilities Area -->
<section class="facilities-area ptb gray-bg">
    <div class="container">
        <div class="section-title">
            <span>Our Core Values</span>
            <h2>Best Facilities For Kids</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="single-facilities">
                    <a href="{{ URL::to('/site/enquiry') }}">
                        <div class="number">
                            <span><img src="{{asset('assets/img/appointment_icon.png')}}"></span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                Book your Appointment online
                            </h3>
                            <p>Book your Appointment online for addmission or other query.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-facilities">
                    <a href="https://play.google.com/store/apps/details?id=com.skyzone18.sevensteps">
                        <div class="number">
                            <span class="bg-2"><img src="{{asset('assets/img/android.png')}}"></span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                Android App of Seven Steps Pre-School
                            </h3>
                            <p>Android App for Seven Steps Pre-School.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-facilities">
                    <a href="{{ URL::to('/site/career') }}">
                        <div class="number">
                            <span class="bg-3"><img src="{{asset('assets/img/career_icon.png')}}"></span>
                        </div>
                        <div class="facilities-content">
                            <h3>
                                Career with us
                            </h3>
                            <p>Join us Seven Steps Pre-School to carrer with us.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="value-shape">
        <div class="shape-1">
            <img src="{{asset('assets/img/value/value-shape-1.png')}}" alt="image">
        </div>
        <div class="shape-2">
            <img src="{{asset('assets/img/value/value-shape-2.png')}}" alt="image">
        </div>
        <div class="shape-3">
            <img src="{{asset('assets/img/value/value-shape-3.png')}}" alt="image">
        </div>
    </div>
</section>

<section class="facilities-area facilities-2 fix gray-bg-2 ptb">
   <div class="container">
      <div class="section-title text-center wow fadeInUp" data-wow-delay=".2s" style="margin-bottom:85px;">
         <h2>Seven Steps Pre-School Timing</h2>
      </div>
      <div class="school_timming">
           <div class="container">
              <div class="row">
                 <div class="col-sm-12 sections_listing col-md-6 col-lg-4">
                    <div class="time_card">
                       <div class="section_header" style="
                          position: absolute;
                          top: 10px;
                          left: 0;
                          right: 0;
                          width: max-content;
                          ">
                          <h2>English Medium</h2>
                          <!--<p>(GUJARATI MEDIUM)</p>-->
                       </div>
                       <div class="section_timing">
                          <div class="faculty"></div>
                          <div class="session">MORNING SESSION</div>
                          <div class="time_table">
                             <div class="standard">
                                <p>Nursery</p>
                             </div>
                             <div class="std_time">
                                <ul>
                                   <li>
                                      <p class="t_day">Monday - Saturday </p>
                                      <p class="b_time">08.00 a.m. to 11.30 a.m.</p>
                                   </li>
                                   <!--<li>-->
                                   <!--   <p class="t_day">Saturday</p>-->
                                   <!--   <p class="b_time"><small>2nd and 4th Saturday Holiday</small></p>-->
                                   <!--</li>-->
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-12 sections_listing col-md-6 col-lg-4">
                    <div class="time_card">
                       <div class="section_header">
                          <h2>English Medium</h2>
                          <!--<p>(GUJARATI MEDIUM)</p>-->
                       </div>
                       <div class="section_timing">
                          <div class="faculty"></div>
                          <div class="session">MORNING SESSION</div>
                          <div class="time_table">
                             <div class="standard">
                                <p>Jr.K.G.</p>
                             </div>
                             <div class="std_time">
                                <ul>
                                   <li>
                                      <p class="t_day">Monday - Saturday</p>
                                      <p class="b_time">08.15 a.m. to 12.00 a.m.</p>
                                   </li>
                                   <!--<li>-->
                                   <!--   <p class="t_day">Saturday</p>-->
                                   <!--   <p class="b_time"><small>2nd and 4th Saturday Holiday</small></p>-->
                                   <!--</li>-->
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-12 sections_listing col-md-6 col-lg-4">
                    <div class="time_card">
                       <div class="section_header">
                          <h2>English Medium</h2>
                          <!--<p>(GUJARATI MEDIUM)</p>-->
                       </div>
                       <div class="section_timing">
                          <div class="faculty"></div>
                          <div class="session">MORNING SESSION</div>
                          <div class="time_table">
                             <div class="standard">
                                <p>Sr.K.G.</p>
                             </div>
                             <div class="std_time">
                                <ul>
                                   <li>
                                      <p class="t_day">Monday - Saturday</p>
                                      <p class="b_time">08.30 a.m. to 12.15 p.m.</p>
                                   </li>
                                   <!--<li>-->
                                   <!--   <p class="t_day">Saturday</p>-->
                                   <!--   <p class="b_time">12:30 p.m. to 03:50p.m</p>-->
                                   <!--</li>-->
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-12">
                    <div class="time_card two_sessions">
                       <div class="section_header">
                          <h2>English & Gujarati Medium</h2>
                          <!--<p> (ENGLISH MEDIUM)</p>-->
                       </div>
                       <div class="section_timing">
                          <div class="session">NOON SESSION</div>
                          <div class="time_table">
                             <div class="standard">
                                <p>PG & Nursery</p>
                             </div>
                             <div class="std_time">
                                <ul>
                                   <li>
                                      <p class="t_day">Monday - Saturday</p>
                                      <p class="b_time">01:20 p.m. to 04:20 p.m.</p>
                                   </li>
                                   <!--<li>-->
                                   <!--   <p class="t_day">Saturday</p>-->
                                   <!--   <p class="b_time">7:00 a.m. to 10:30 am.</p>-->
                                   <!--</li>-->
                                </ul>
                             </div>
                          </div>
                       </div>
                       <div class="section_timing">
                          <div class="session">NOON SESSION</div>
                          <div class="time_table">
                             <div class="standard">
                                <p>Jr.K.G.</p>
                             </div>
                             <div class="std_time">
                                <ul>
                                   <li>
                                      <p class="t_day">Monday - Saturday</p>
                                      <p class="b_time">01:20 p.m. to 04:35 p.m.</p>
                                   </li>
                                   <!--<li>-->
                                   <!--   <p class="t_day">Saturday</p>-->
                                   <!--   <p class="b_time">12:30 p.m. to 03:50 p.m.</p>-->
                                   <!--</li>-->
                                </ul>
                             </div>
                          </div>
                       </div>
                       <div class="section_timing">
                          <div class="session">NOON SESSION</div>
                          <div class="time_table">
                             <div class="standard">
                                <p>Sr.K.G.</p>
                             </div>
                             <div class="std_time">
                                <ul>
                                   <li>
                                      <p class="t_day">Monday - Saturday</p>
                                      <p class="b_time">01:20 p.m. to 04:45 p.m.</p>
                                   </li>
                                   <!--<li>-->
                                   <!--   <p class="t_day">Saturday</p>-->
                                   <!--   <p class="b_time">12:30 p.m. to 03:50 p.m.</p>-->
                                   <!--</li>-->
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <!--<div class="col-sm-12 last_sec">-->
                 <!--   <div class="time_card two_sessions">-->
                 <!--      <div class="section_header">-->
                 <!--         <h2> SECONDARY &amp; HIGHER SECONDARY SECTION</h2>-->
                 <!--         <p> (GUJARATI MEDIUM / ENGLISH MEDIUM)</p>-->
                 <!--      </div>-->
                 <!--      <div class="section_timing one">-->
                 <!--         <div class="faculty">SECONDARY SECTION</div>-->
                 <!--         <div class="session">(English Medium) Morning Session</div>-->
                 <!--         <div class="time_table">-->
                 <!--            <div class="standard">-->
                 <!--               <p>Standard 9 to 10</p>-->
                 <!--            </div>-->
                 <!--            <div class="std_time">-->
                 <!--               <ul>-->
                 <!--                  <li>-->
                 <!--                     <p class="t_day">Monday - Friday</p>-->
                 <!--                     <p class="b_time">7:10 a.m. to 12:00 p.m</p>-->
                 <!--                  </li>-->
                 <!--                  <li>-->
                 <!--                     <p class="t_day">Saturday</p>-->
                 <!--                     <p class="b_time">7:00 a.m. to 10:30 p.m</p>-->
                 <!--                  </li>-->
                 <!--               </ul>-->
                 <!--            </div>-->
                 <!--         </div>-->
                 <!--      </div>-->
                 <!--      <div class="section_timing two">-->
                 <!--         <div class="faculty">SECONDARY SECTION</div>-->
                 <!--         <div class="session">(Gujarati Medium) Noon Session</div>-->
                 <!--         <div class="time_table">-->
                 <!--            <div class="standard">-->
                 <!--               <p>Standard 9 to 10</p>-->
                 <!--            </div>-->
                 <!--            <div class="std_time">-->
                 <!--               <ul>-->
                 <!--                  <li>-->
                 <!--                     <p class="t_day">Monday - Friday</p>-->
                 <!--                     <p class="b_time">12:30 p.m. to 05:20p.m.</p>-->
                 <!--                  </li>-->
                 <!--                  <li>-->
                 <!--                     <p class="t_day">Saturday</p>-->
                 <!--                     <p class="b_time">12:30p.m. to 03:50 p.m.</p>-->
                 <!--                  </li>-->
                 <!--               </ul>-->
                 <!--            </div>-->
                 <!--         </div>-->
                 <!--      </div>-->
                 <!--      <div class="section_timing three">-->
                 <!--         <div class="faculty">HIGHER SECONDARY SECTION</div>-->
                 <!--         <div class="session">Commerce &amp; Science</div>-->
                 <!--         <div class="time_table">-->
                 <!--            <div class="standard">-->
                 <!--               <p>Standard 11, 12</p>-->
                 <!--            </div>-->
                 <!--            <div class="std_time">-->
                 <!--               <ul>-->
                 <!--                  <li>-->
                 <!--                     <p class="t_day">Monday - Friday</p>-->
                 <!--                     <p class="b_time">7:10 a.m. to 12:00 p.m</p>-->
                 <!--                  </li>-->
                 <!--                  <li>-->
                 <!--                     <p class="t_day">Saturday</p>-->
                 <!--                     <p class="b_time">7:00 a.m. to 10:30 p.m</p>-->
                 <!--                  </li>-->
                 <!--               </ul>-->
                 <!--            </div>-->
                 <!--         </div>-->
                 <!--      </div>-->
                 <!--   </div>-->
                 <!--</div>-->
              </div>
           </div>
        </div>
   </div>
</section>
<!-- End Facilities Area -->


<!-- feature start -->
@include('includes.cat-area')
<!-- feature end -->

<!-- feature start -->
@include('includes.admission-step')
<!-- feature end -->

<!-- Start Gallery Area -->
<div class="gallery-area ptb">
    <div class="container">
        <div class="section-title">
            <h2>Photo Gallery</h2>
        </div>
        <div class="home-gallery owl-carousel">
        @foreach($gallerys as $gallery)
            <div class="gallery-box">
                <div class="single-gallery-box">
                    <img src="{{$gallery->file}}" alt="home_gallery1">

                    <a href="{{$gallery->file}}" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class='bx bx-search-alt'></i>
                    </a>
                </div>
            </div>
        @endforeach

        </div>
    </div>
</div>
<!-- End Gallery Area -->

<!-- Start Gallery Area -->
<div class="gallery-area ptb gray-bg">
    <div class="container">
        <div class="section-title">
            <h2>Video Gallery</h2>
        </div>
        <div class="video-gallery owl-carousel">
        @foreach($videourls as $video)
        @php
            $videoId = '';
            if (strpos($video->link, 'watch?v=') !== false) {
                $videoId = explode('v=', parse_url($video->link, PHP_URL_QUERY))[1];
            } elseif (strpos($video->link, 'embed/') !== false) {
                $videoId = basename(parse_url($video->link, PHP_URL_PATH));
            }
        @endphp
          <div class="">
            <div class="single-video">
              <div class="">
                <div class="video-thumb">
                <iframe width="100%" height="190px" src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        @foreach($videos as $video)
        <div class="">
            <div class="single-video">
                <div class="">
                    <div class="video-thumb">
                    <video width="100%" height="200" controls>
                        <source src="{{$video->file ? $video->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
<!-- End Gallery Area -->

<!-- Start Testimonials Area -->
<section class="testimonials-area ptb">
    <div class="container">
        <div class="section-title">
            <span>Testimonials</span>
            <h2>What Parents Say About Us</h2>
        </div>

        <div class="testimonials-slides owl-carousel owl-theme">
        @foreach($testomonials as $testomonial)
            <div class="testimonials-item">
                <div class="testimonials-item-box">
                    <div class="icon">
                        <i class='bx bxs-quote-left'></i>
                    </div>
                    <p>{{$testomonial->message}}</p>
                    <div class="info-box">
                        <h3>{{$testomonial->name}}</h3>
                        <!-- <span>Music Teacher</span> -->
                    </div>
                </div>
                <div class="testimonials-image">
                    <img src="{{asset('assets/img/boy1.png')}}" alt="boy1">
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
<!-- End Testimonials Area -->


@endsection
