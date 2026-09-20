@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<!-- Main content -->
<section class="content">

            @if ($contactunshow > 0)
            <a href="{{URL::to('/admin/contact')}}">
            <div class="alert alert-success">
              <h4><b>{{$contactunshow}}</b> new Contact request arrive</h4>
            </div>
            </a>
            @endif
            @if ($enauiryunshow > 0)
            <a href="{{URL::to('/admin/enquirey')}}">
            <div class="alert alert-warning mt-2">
            <h4>{{$enauiryunshow}} new Adminssion Inquiry arrive</h4>
            </div>
            </a>
            @endif
      <!-- Small boxes (Stat box) -->
      <div class="row">
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
               <div class="inner">
                  <h3>{{$slider}}</h3>
                  <p>Slider</p>
               </div>
               <div class="icon">
                  <i class="fa fa-check-square-o"></i>
               </div>
               <a href="{{URL::to('/admin/slider')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
               <div class="inner">
                  <h3>{{$gallery}}</h3>
                  <p>Gallery</p>
               </div>
               <div class="icon">
                  <i class="ion ion-stats-bars"></i>
               </div>
               <a href="{{URL::to('/admin/galleryimage')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
               <div class="inner">
                  <h3>{{$mediagallery}}</h3>
                  <p>Media Gallery</p>
               </div>
               <div class="icon">
                  <i class="ion ion-person-add"></i>
               </div>
               <a href="{{URL::to('/admin/mediagalleryimage')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>

         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
               <div class="inner">
                  <h3>{{$testomonial}}</h3>
                  <p>Testomonial</p>
               </div>
               <div class="icon">
                  <i class="fa fa-check-square-o"></i>
               </div>
               <a href="{{URL::to('/admin/testomonial')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange">
               <div class="inner">
                  <h3>{{$contact}}</h3>
                  <p>Contact Us</p>
               </div>
               <div class="icon">
                  <i class="fa fa-check-square-o"></i>
               </div>
               <a href="{{URL::to('/admin/contact')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-teal">
               <div class="inner">
                  <h3>{{$enauiry}}</h3>
                  <p>Inquiry</p>
               </div>
               <div class="icon">
                  <i class="fa fa-check-square-o"></i>
               </div>
               <a href="{{URL::to('/admin/enquirey')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>

         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
               <div class="inner">
                  <h3>{{$career}}</h3>
                  <p>Career</p>
               </div>
               <div class="icon">
                  <i class="ion ion-person-add"></i>
               </div>
               <a href="{{URL::to('/admin/career')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>

         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange">
               <div class="inner">
                  <h3>{{$video}}</h3>
                  <p>Video</p>
               </div>
               <div class="icon">
                  <i class="ion ion-person-add"></i>
               </div>
               <a href="{{URL::to('/admin/videos')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
               <div class="inner">
                  <h3>{{$achivement}}</h3>
                  <p>Achivements</p>
               </div>
               <div class="icon">
                  <i class="fa fa-check-square-o"></i>
               </div>
               <a href="{{URL::to('/admin/achivement')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>

         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-navy">
               <div class="inner">
                  <h3>{{$activity}}</h3>
                  <p>Activity</p>
               </div>
               <div class="icon">
                  <i class="fa fa-check-square-o"></i>
               </div>
               <a href="{{URL::to('/admin/activitycategory')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>

         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
               <div class="inner">
                  <h3>{{$event}}</h3>
                  <p>Events</p>
               </div>
               <div class="icon">
                  <i class="fa fa-check-square-o"></i>
               </div>
               <a href="{{URL::to('/admin/event')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
  </div>

  @endsection
