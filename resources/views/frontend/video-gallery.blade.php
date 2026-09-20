<?php

use App\Models\Video;

$videourls = Video::where('link','!=',null)->where('is_show', 1)->get();
$videos = Video::where('file','!=',null)->where('is_show', 1)->get();
?>
@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-banner-content">
          <h2>Video Gallery</h2>
          <ul>
            <li>
              <a href="{{URL::to('/')}}">Home</a>
            </li>
            <li>Video Gallery</li>
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
      <h2>Video Gallery</h2>
    </div>
    <div class="row">
    @foreach($videourls as $video)
    @php
        $videoId = '';
        if (strpos($video->link, 'watch?v=') !== false) {
            $videoId = explode('v=', parse_url($video->link, PHP_URL_QUERY))[1];
        } elseif (strpos($video->link, 'embed/') !== false) {
            $videoId = basename(parse_url($video->link, PHP_URL_PATH));
        }
    @endphp
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="single-video">
          <div class="single-gallery-box">
            <div class="video-thumb">
            <iframe width="100%" height="190px" src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    @foreach($videos as $vid)
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
        <div class="single-video">
          <div class="single-gallery-box">
            <div class="video-thumb">
            <video width="100%" height="200" controls>
              <source src="{{$vid->file ? $vid->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" type="video/mp4">
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


@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
