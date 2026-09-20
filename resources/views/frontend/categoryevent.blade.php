@extends('layouts.front')
@section('content')

      <!-- breadcrumb area start here -->
      <section class="bd-breadcrumb-area p-relative fix theme-bg">
         <!-- breadcrumb background image -->
         <div class="bd-breadcrumb-bg" data-background="{{asset('assets/img/bg/breadcrumb-bg.jpg')}}"></div>
         <div class="bd-breadcrumb-wrapper mb-60 p-relative">
            <div class="container">
               <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
                  <div class="bd-breadcrumb-shape-1">
                     <img src="{{asset('assets/img/shape/curved-line-2.png')}}" alt="img not found!">
                  </div>
                  <div class="bd-breadcrumb-shape-2">
                     <img src="{{asset('assets/img/shape/white-curved-line.png')}}" alt="img not found!">
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-xl-10">
                     <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                        <div class="bd-breadcrumb-content text-center">
                           <h1 class="bd-breadcrumb-title">{{$category->category_name}}</h1>
                           <div class="bd-breadcrumb-list">
                              <span><a href="{{URL::to('/')}}"><i class="flaticon-hut"></i>Home</a></span>
                              <span>{{$category->category_name}}</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bd-wave-wrapper bd-wave-wrapper-3">
            <div class="bd-wave bd-wave-3"></div>
            <div class="bd-wave bd-wave-3"></div>
         </div>
      </section>
      <!-- breadcrumb area end here  -->

      <!-- gallery area start here  -->
      <div class="bd-gallery-area achievements p-relative ptb p-relative">
         <div class="container">
            <div class="row">
                <div class="bd-section-title-wrapper text-center mb-30 wow fadeInUp" data-wow-duration="1s"
                data-wow-delay=".2s">
                    <h2 class="bd-section-title mb-0">{{$category->category_name}}</h2>
                </div>
                @foreach($products as $product)
                <div class="bd-gallery-block col-lg-4 col-md-4 col-sm-6 col-xs-6">
                  <div class="row">
                     <div class="col-12">
                        <div class="bd-gallery mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                           <div class="bd-gallery-thumb-wrapper">
                              <div class="bd-gallery-thumb">
                                 <img src="{{$product->file}}" alt="img not found!">
                              </div>
                              <div class="bd-gallery-icon">
                                 <a href="{{$product->file}}" class="popup-image"><i
                                       class="flaticon-eye"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                </div>
               @endforeach
            </div>
         </div>
      </div>
      <!-- gallery area end here  -->

      <!-- joining area start here  -->
      @include('includes.joining')
      <!-- joining area end here  -->

      @include('includes.cat-area')
 
      <!-- class area start here -->
      @include('includes.admission-step')
      <!-- class area end here -->

@endsection