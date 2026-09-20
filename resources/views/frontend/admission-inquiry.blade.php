@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="page-banner-content">
               <h2>Admission Inquiry</h2>
               <ul>
                  <li>
                     <a href="{{URL::to('/')}}">Home</a>
                  </li>
                  <li>Admission Inquiry</li>
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
               <h3>Admission Inquiry</h3>
               <h6 style="margin-bottom: 20px;">Thank you for your interest in Seven Steps Pre-School. Kindly fill in the Inquiry form in case of any query.</h6>
               <div class="contact-form">
                  @if (\Session::has('alert'))
                  <!--<div class="alert alert-success" id="displayhide">-->
                  <!--   {!! \Session::get('alert') !!}-->
                  <!--   <button id="hidAlert">X</button>-->
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
                  <form method="POST" action="/inquireystore" id="quotation_form">
                     @csrf
                     <div class="row">
                        <div class="col-lg-6 col-md-6 mt-3">
                           <div class="form-group">
                              <label for="fname">Student Name:<span style="color:#fe0c12;">*</span></label>
                              <input type="text" name="fname" id="fname" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-6 mt-3">
                           <div class="form-group">
                              <label for="subject">Admission in Class:<span style="color:#fe0c12;">*</span></label>
                              <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your email" placeholder="Your class">
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-12 mt-3">
                           <div class="form-group">
                              <label for="phone">Mobile No.:<span style="color:#fe0c12;">*</span></label>
                              <input type="tel" name="phone" id="phone" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-12 mt-3">
                           <div class="form-group">
                              <label for="dob">Date of Birth:<span style="color:#fe0c12;">*</span></label>
                              <input type="date" name="dob" id="dob" class="form-control" required data-error="Please enter your Date Of Birth" placeholder="Date of Birth">         
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>

                        <div class="col-lg-6 col-md-12 mt-3">
                           <div class="form-group">
                              <label for="email">Email:<span style="color:#fe0c12;">*</span></label>
                              <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your email">
                           </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 mt-3">
                          <div class="form-group">
                            <label for="media">Medium:<span style="color:#fe0c12;">*</span></label>
                            <select name="media" id="media" class="valid form-control" required>
                              <option value="">--Select--</option>
                              <option value="English Medium">English Medium</option>
                              <option value="Gujarati Medium">Gujarati Medium</option>
                            </select>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 mt-3">
                          <div class="form-group">
                            <label for="cast">Cast:<span style="color:#fe0c12;">*</span></label>
                            <select name="cast" id="cast" class="valid form-control" required>
                              <option value="">--Select--</option>
                              <option value="General">General</option>
                              <option value="SC">SC</option>
                              <option value="ST">ST</option>
                              <option value="OBC">OBC</option>
                            </select>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 mt-3">
                          <div class="form-group">
                            <label for="source">Source Of Inquiry:<span style="color:#fe0c12;">*</span></label>
                            <select name="source" id="source" class="valid form-control" required>
                              <option value="">--Select Source--</option>
                               <option value="Hoarding">Hoarding</option>
                               <option value="Hoarding">Social Media</option>
                               <option value="Newspaper">Newspaper</option>
                               <option value="Radio">Radio</option>
                               <option value="Cable TV">Cable TV</option>
                               <option value="Friends">Friends</option>
                               <option value="Events">Events</option>
                               <option value="Play School">Play School</option>
                               <option value="Website">Website</option>
                               <option value="SMS">SMS</option>
                               <option value="Others">Others</option>
                            </select>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 mt-3">
                           <div class="form-group">
                              <label for="taken_by">Reference by<span style="color:#fe0c12;">*</span></label>
                              <input type="text" name="taken_by" id="taken_by" class="form-control" required data-error="Inquiry Taken By" placeholder="Reference by">
                           </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 mt-3">
                           <div class="form-group">
                              <label for="detail">Name of previous school:<span style="color:#fe0c12;">*</span></label>
                              <input type="text" name="detail" id="detail" class="form-control" required data-error="Please enter your previous school" placeholder="Name of previous school">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>

                        <div class="col-lg-12 col-md-12 mt-3">
                           <button type="submit" class="default-btn">Send Message</button>
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

   <div class="who-we-are-shape">
      <img src="{{asset('assets/img/who-we-are/who-we-are-shape.png')}}" alt="image">
   </div>
</section>
<!-- End Who We Are Area -->

@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
