@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Contact</h2>
                    <ul>
                        <li>
                            <a href="{{URL::to('/')}}">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Contact Area -->
<section class="contact-area ptb gray-bg">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <h3>Ready to Get Started?</h3>
                    @if (\Session::has('alert'))
                    <!--<div class="alert alert-success" id="displayhide">-->
                    <!--    {!! \Session::get('alert') !!}-->
                    <!--    <button id="hidAlert">X</button>-->
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
                    <form method="post" action="/contactstore" id="contact_form">
                    @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="username">Full Name:<span style="color:#fe0c12;">*</span></label>
                                    <input type="text" name="username" id="username" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="email">Email ID:<span style="color:#fe0c12;">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="phone">Mobile No.:<span style="color:#fe0c12;">*</span></label>
                                    <input type="tel" name="phone" id="phone" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="fdetail">Message:<span style="color:#fe0c12;">*</span></label>
                                    <textarea name="fdetail" id="fdetail" cols="30" rows="5" required data-error="Please enter your message" class="form-control" placeholder="Write your message..."></textarea>
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

            <div class="col-lg-5 col-md-12">
                <div class="contact-information">
                    <h3>Contact Us</h3>

                    <ul class="contact-list">
                        <li><i class='bx bx-map'></i> Location: <span>Galaxy Imperia, Above District Bank, Pal Road, Surat.</span></li>
                        <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+9198791 46666">+9198791 46666 / +9199044 19333</a></li>
                        <li><i class='bx bx-envelope'></i> Email Us: <a href="mailto:ssspre46666@gmail.com">ssspre46666@gmail.com</a></li>
                        <!--<li><i class='bx bx-microphone'></i> Fax: <a href="tel:+123456789">+123456789</a></li>-->
                    </ul>

                    <h3>School Time:</h3>
                    <ul class="opening-hours">
                        <li><span>Monday to Saturday </span> 7.00 am to 5.30 pm</li>
                        <!--<li><span>Tuesday:</span> 8AM - 6AM</li>-->
                        <!--<li><span>Wednesday:</span> 8AM - 6AM</li>-->
                        <!--<li><span>Thursday:</span> 8AM - 6AM</li>-->
                        <!--<li><span>Friday:</span> Closed</li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Map -->
<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!4v1689614741745!6m8!1m7!1syA5JSwe7MGpB6nmAFaWqvw!2m2!1d21.2033737206498!2d72.7766900506633!3f44.53744574374763!4f-6.428560071796809!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- End Map -->

@endsection
