@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-banner-content">
          <h2>Refund & Cancel Policy</h2>
          <ul>
            <li>
              <a href="{{URL::to('/')}}">Home</a>
            </li>
            <li>Refund & Cancel Policy</li>
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
          <h3>Refund & Cancel Policy</h3>
          <ul class="who-we-are-list about-page">
            <li>
              <span></span>
              The notice of withdrawal must be submitted in written addressed to the Principal. The Principal shall acknowledge the receipt of the same. Telephone messages are NOT acceptable.
            </li>
            <h6 class="sub_heading" style="margin-top: 10px;">Note:</h6>
            <li>
              <span></span>
              Parents are requested to intimate the school about their decision to withdraw their child well in advance in order to avoid payment of a fine for late intimation. The Bonafide Certificate of the child/children likely to be withdrawn will be issued only after full settlement of accounts/dues.
            </li>
          </ul>
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
