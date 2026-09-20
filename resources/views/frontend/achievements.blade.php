<?php

use App\Models\Product;

$achivements = Product::where('is_show', 1)->paginate(12);
?>
@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-banner-content">
          <h2>Achievements</h2>
          <ul>
            <li>
              <a href="{{URL::to('/')}}">Home</a>
            </li>
            <li>Achievements</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->

<!-- Start Gallery Area -->
<div class="gallery-area ptb gray-bg">
  <div class="container">
    <div class="section-title">
      <h2>Achievements</h2>
    </div>
    <div class="row">
    @foreach($achivements as $achivement)
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-gallery-box">
          <img src="{{$achivement->file}}" alt="achieve1">

          <a href="{{$achivement->file}}" class="gallery-btn" data-imagelightbox="popup-btn">
            <i class='bx bx-search-alt'></i>
          </a>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</div>
<!-- End Gallery Area -->

@include('includes.cat-area')

@include('includes.admission-step')


@endsection
