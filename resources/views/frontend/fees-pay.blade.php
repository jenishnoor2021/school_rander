@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-banner-content">
          <h2>Fees Payment</h2>
          <ul>
            <li>
              <a href="{{URL::to('/')}}">Home</a>
            </li>
            <li>Fees Payment</li>
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
          <h3 style="text-align: center;">Pay Now</h3>
          <h6 style="margin-bottom: 30px;text-align: center;">Fill in the details below to pay your child's or ward's fees:</h6>
          <div class="contact-form">
            <!--<form id="contactForm">-->
            <!--  <div class="row">-->
            <!--    <div class="col-lg-6 col-md-6">-->
            <!--      <div class="form-group">-->
            <!--        <label for="amount">Fee Amount - ₹<span style="color:#fe0c12;">*</span></label>-->
            <!--        <input type="text" name="amount" id="amount" class="form-control" required data-error="Please enter amount" placeholder="Your Amount">-->
            <!--        <div class="help-block with-errors"></div>-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="col-lg-6 col-md-6">-->
            <!--      <div class="form-group">-->
            <!--        <label for="name">Full Name:<span style="color:#fe0c12;">*</span></label>-->
            <!--        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your Name" placeholder="Your Name">-->
            <!--        <div class="help-block with-errors"></div>-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="col-lg-6 col-md-12">-->
            <!--      <div class="form-group">-->
            <!--        <label for="phone_number">Mobile No.:<span style="color:#fe0c12;">*</span></label>-->
            <!--        <input type="tel" name="phone_number" id="phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">-->
            <!--        <div class="help-block with-errors"></div>-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="col-lg-6 col-md-12">-->
            <!--      <div class="form-group">-->
            <!--        <label for="mail">Email:</label>-->
            <!--        <input type="email" name="mail" id="mail" class="form-control" required data-error="Please enter your email" placeholder="Email Id">-->
            <!--        <div class="help-block with-errors"></div>-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="col-lg-6 col-md-12">-->
            <!--      <div class="form-group">-->
            <!--        <label for="school">Medium:<span style="color:#fe0c12;">*</span></label>-->
            <!--        <select name="merchant_param3" id="merchant_param3" class="valid form-control">-->
            <!--          <option value="">--Select--</option>-->
            <!--          <option value="English">English Medium</option>-->
            <!--          <option value="Gujarati">Gujarati Medium</option>-->
            <!--        </select>-->
            <!--        <div class="help-block with-errors"></div>-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="col-lg-6 col-md-12">-->
            <!--      <div class="form-group">-->
            <!--        <label for="std">Std:<span style="color:#fe0c12;">*</span></label>-->
            <!--        <input type="text" name="std" id="std" class="form-control" required data-error="Please enter your Std." placeholder="Std.">-->
            <!--        <div class="help-block with-errors"></div>-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="col-lg-12 col-md-12">-->
            <!--      <div class="form-group">-->
            <!--        <label for="message">Message:</label>-->
            <!--        <textarea name="message" id="message" cols="30" rows="5" required data-error="Please enter your message" class="form-control" placeholder="Write your message..."></textarea>-->
            <!--        <div class="help-block with-errors"></div>-->
            <!--      </div>-->
            <!--    </div>-->

            <!--    <div class="col-lg-12 col-md-12">-->
            <!--      <button type="submit" class="default-btn">Submit</button>-->
            <!--      <div id="msgSubmit" class="h3 text-center hidden"></div>-->
            <!--      <div class="clearfix"></div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</form>-->
            <div class="tpprocess__border-bottom p-relative">
               <div class="row">
                  <div class="col-lg-3 col-sm-6" style="margin-bottom: 30px;">
                     <div class="tpprocess__item p-relative mb-40">
                        <div class="tpprocess__wrapper">
                           <span class="tpprocess__count mb-25">1</span>
                           <h4 class="tpprocess__title">Scan Below QR Code</h4>
                        </div>
                        <div class="tpprocess-shape-one d-none d-md-block">
                           <svg width="112" height="15" viewBox="0 0 112 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path class="line-dash-path" d="M1 8.56464C18.4695 1.84561 64.9267 -6.52437 111 13.7479" stroke="#A6A8B0" stroke-dasharray="4 5"></path>
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6" style="margin-bottom: 30px;">
                     <div class="tpprocess__item p-relative ml-30 mb-40">
                        <div class="tpprocess__wrapper tpprocess__two">
                           <span class="tpprocess__count mb-25">2</span>
                           <h4 class="tpprocess__title">Select UPI Like Phonepay or Googlepay</h4>
                        </div>
                        <div class="tpprocess-shape-two d-none d-lg-block">
                           <svg width="112" height="15" viewBox="0 0 112 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path class="line-dash-path" d="M1 6.43536C18.4695 13.1544 64.9267 21.5244 111 1.25212" stroke="#A6A8B0" stroke-dasharray="4 5"></path>
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6" style="margin-bottom: 30px;">
                     <div class="tpprocess__item p-relative ml-50 mb-40">
                        <div class="tpprocess__wrapper tpprocess__three">
                           <span class="tpprocess__count mb-25">3</span>
                           <h4 class="tpprocess__title">Enter Your child fees amount</h4>
                        </div>
                        <div class="tpprocess-shape-three d-none d-md-block">
                           <svg width="112" height="15" viewBox="0 0 112 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path class="line-dash-path" d="M1 8.56464C18.4695 1.84561 64.9267 -6.52437 111 13.7479" stroke="#A6A8B0" stroke-dasharray="4 5"></path>
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6" style="margin-bottom: 30px;">
                     <div class="tpprocess__item d-flex justify-content-center mb-40">
                        <div class="tpprocess__wrapper tpprocess__four">
                           <span class="tpprocess__count mb-25">4</span>
                           <h4 class="tpprocess__title">Make a Payment</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s" style="margin:0 auto;">
                  <div class="title-area text-center">
                    <h4 style="margin-bottom: 20px;">English & Gujarati Medium</h4>
                  </div>
                  <div class="qr_code_img text-center">
                      <img src="{{asset('assets/img/fees_2025.jpg')}}" alt="QR Code Image">
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="who-we-are-shape">
    <img src="{{asset('assets/img/boy2.png')}}" alt="image">
  </div>
</section>
<!-- End Who We Are Area -->

@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
