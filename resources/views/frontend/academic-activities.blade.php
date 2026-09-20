@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-banner-content">
          <h2>Academic Activities</h2>
          <ul>
            <li>
              <a href="{{URL::to('/')}}">Home</a>
            </li>
            <li>Academic Activities</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->

<!-- Start Class Area -->
<section class="class-area academic_activities ptb gray-bg">
  <div class="container">
    <div class="section-title">
      <span>Seven Step Pre-School</span>
      <h2>Academic Activities</h2>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg1">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/compitition.jpeg')}}" alt="compitition">
            </a>
          </div>
          <div class="class-content">
            <h3>Competition</h3>
            <p>Competition at Seven Steps Pre School</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg2">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/navratri.jpg')}}" alt="navratri">
            </a>
          </div>
          <div class="class-content">
            <h3>Navratri Celebration</h3>
            <p>Navratri at Seven Steps Pre School.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg3">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/bird_animal.jpg')}}" alt="bird_animal">
            </a>
          </div>
          <div class="class-content">
            <h3>Birds and Animals day</h3>
            <p>Birds and Animals Celebration at Seven Steps Pre School.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg4">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/art_craft.jpg')}}" alt="art_craft">
            </a>
          </div>
          <div class="class-content">
            <h3>Master-Chef Competition</h3>
            <p>Master-Chef Competition at Seven Steps Pre School.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg5">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/physical.jpg')}}" alt="physical">
            </a>
          </div>
          <div class="class-content">
            <h3>Visit</h3>
            <p>Visit at fire station. (Seven Steps Pre School)</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg6">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/physical.jpg')}}" alt="physical">
            </a>
          </div>
          <div class="class-content">
            <h3>Our Helpers</h3>
            <p>Our Helpers at Seven Steps Pre School.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Class Area -->

@include('includes.cat-area')

@include('includes.admission-step')


@endsection
