@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-banner-content">
          <h2>Career</h2>
          <ul>
            <li>
              <a href="{{URL::to('/')}}">Home</a>
            </li>
            <li>Career</li>
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
      <div class="col-lg-12">
        <div class="who-we-are-content">
          <h3>Career</h3>
          <P>Seven Steps Pre-School provides options for teachers to expand their knowledge opportunities for professional development, and offers leadership roles.</P>
          <p>We invite qualified applications for teaching and non-teaching staff.</p>
          <ul class="who-we-are-list about-page">
            <li>
              <span></span>
              <b>Pre Primary:</b> PRE-P.T.C/P.T.C/T.T.C
            </li>
            <li>
              <span></span>
              <b>Primary:</b> P.T.C/B.A/B.Com/B.Sc With B.Ed
            </li>
            <li>
              <span></span>
              <b>Secondary:</b> B.A/M.A/B.Com/M.Com/B.Sc/M.Sc With B.Ed
            </li>
            <li>
              <span></span>
              <b>Higher Secondary:</b> B.A/M.A/B.Com/M.Com/B.Sc/M.Sc With B.Ed
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="who-we-are-shape">
    <img src="{{asset('assets/img/boy2.png')}}" alt="boy2">
  </div>
</section>
<!-- End Who We Are Area -->

<!-- Start Who We Are Area -->
<section class="who-we-are ptb gray-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="who-we-are-content">
          <h3>Career Form</h3>
          <div class="contact-form">
            @if (\Session::has('alert'))
            <!--<div class="alert alert-success" id="displayhide">-->
            <!--  {!! \Session::get('alert') !!}-->
            <!--  <button id="hidAlert">X</button>-->
            <!--</div>-->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
              <script>
              Swal.fire({
                title: 'success',
                text: 'Your Message send Successfully',
                icon: 'success',
                confirmButtonText: 'OK'
              });
            </script>
            @endif
            <form method="POST" action="/careerstore" id="career_form" enctype="multipart/form-data">
            @csrf
              <div class="row">
                <div class="col-lg-6 col-md-6 mt-3">
                  <div class="form-group">
                    <label for="fname">First Name:<span style="color:#fe0c12;">*</span></label>
                    <input type="text" name="fname" id="fname" class="form-control" required data-error="Please enter your name" placeholder="Your First Name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <!-- <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label for="class">Last Name:<span style="color:#fe0c12;">*</span></label>
                    <input type="text" name="class" id="class" class="form-control" required data-error="Please enter your email" placeholder="Your Last Name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div> -->

                <div class="col-lg-6 col-md-12 mt-3">
                  <div class="form-group">
                    <label for="email">Email:<span style="color:#fe0c12;">*</span></label>
                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email Id">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-12 mt-3">
                  <div class="form-group">
                    <label for="phone">Mobile No.:<span style="color:#fe0c12;">*</span></label>
                    <input type="tel" name="phone" id="phone" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <!-- <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="school">Position applying for:<span style="color:#fe0c12;">*</span></label>
                    <select name="merchant_param3" id="merchant_param3" class="valid form-control">
                      <option value="">*** Selection for Position ***</option>
                      <option value="Pre- Primary Teacher">Pre- Primary Teacher</option>
                      <option value="Primary Teacher">Primary Teacher</option>
                      <option value="Non-Teaching Staff">Non-Teaching Staff</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                </div> -->

                <div class="col-lg-12 col-md-12 mt-3">
                  <div class="form-group">
                    <label for="file">Upload your Resume:<span style="color:#fe0c12;">*</span></label>
                    <input type="file" id="file" name="file" class="form-control" accept="application/pdf" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 mt-3">
                  <button type="submit" class="default-btn">Submit</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Who We Are Area -->

@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
