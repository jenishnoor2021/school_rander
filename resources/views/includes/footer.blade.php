<!-- Start Footer Area -->
<section class="footer-area pt-100 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget">
          <div class="logo">
            <h2>
              <a href="{{ URL::to('/') }}">
                <img src="{{asset('assets/img/logo.png')}}">
              </a>
            </h2>
          </div>
          <p>Seven Steps Pre-School, including all of our schools, is committed to acting on our new vision, mission, and values statements.
</p>
          <p>These new statements emphasize student success and well-being and reflect our commitment to excellence.</p>
          <ul class="social">
            <li>
              <a href="https://www.facebook.com/profile.php?id=100090069094289&mibextid=ZbWKwL" target="_blank">
                <i class='bx bxl-facebook'></i>
              </a>
            </li>
            <li>
              <a href="https://instagram.com/sevenstepspre?igshid=ZDdkNTZiNTM=" target="_blank">
                <i class="bx bxl-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget">
          <h3>Contact Us</h3>

          <ul class="footer-contact-info">
            <li>
              <i class='bx bxs-phone'></i>
              <span>Phone</span>
              <a href="tel:+9198791 46666">+9198791 46666 / +9199044 19333</a>
            </li>
            <li>
              <i class='bx bx-envelope'></i>
              <span>Email</span>
              <a href="mailto:ssspre46666@gmail.com">ssspre46666@gmail.com</a>
            </li>
            <li>
              <i class='bx bx-map'></i>
              <span>Address</span>
              Galaxy Imperia, Above District Bank, Pal Road, Surat.
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget pl-5">
          <h3>Activities</h3>

          <ul class="quick-links">
            <li>
              <a href="{{ URL::to('/site/about') }}">About Us</a>
            </li>
            <li>
              <a href="{{ URL::to('/site/enquiry') }}">Admissions Inquiry</a>
            </li>
            <li>
              <a href="{{ URL::to('/site/fees-pay') }}">Fees Payment</a>
            </li>
            <li>
              <a href="{{ URL::to('/site/academic_activities') }}">Academic Activities</a>
            </li>
            <li>
              <a href="{{ URL::to('/site/gallery') }}">Gallery</a>
            </li>
            <li>
              <a href="{{ URL::to('/site/contact') }}">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget">
          <h3>Photo Gallery</h3>

          <ul class="photo-gallery-list">
              @foreach($gallerys as $gallery)
              @if($loop->index<9)
                <li>
                  <div class="box">
                    <img src="{{$gallery->file}}" alt="gallery1">
                    <a href="{{$gallery->file}}" class="link-btn" class="gallery-btn" data-imagelightbox="popup-btn"><i class='bx bx-search-alt'></i></a>
                  </div>
                </li>
            @endif
        @endforeach
            <!--<li>-->
            <!--  <div class="box">-->
            <!--    <img src="{{asset('assets/img/gallery/gallery2.jpeg')}}" alt="gallery2">-->
            <!--    <a href="{{asset('assets/img/gallery/gallery2.jpeg')}}" target="_blank" class="link-btn"></a>-->
            <!--  </div>-->
            <!--</li>-->

            <!--<li>-->
            <!--  <div class="box">-->
            <!--    <img src="{{asset('assets/img/gallery/gallery3.jpeg')}}" alt="gallery3">-->
            <!--    <a href="{{asset('assets/img/gallery/gallery3.jpeg')}}" target="_blank" class="link-btn"></a>-->
            <!--  </div>-->
            <!--</li>-->

            <!--<li>-->
            <!--  <div class="box">-->
            <!--    <img src="{{asset('assets/img/gallery/gallery4.jpeg')}}" alt="gallery4">-->
            <!--    <a href="{{asset('assets/img/gallery/gallery4.jpeg')}}" target="_blank" class="link-btn"></a>-->
            <!--  </div>-->
            <!--</li>-->

            <!--<li>-->
            <!--  <div class="box">-->
            <!--    <img src="{{asset('assets/img/gallery/gallery5.jpeg')}}" alt="gallery5">-->
            <!--    <a href="{{asset('assets/img/gallery/gallery5.jpeg')}}" target="_blank" class="link-btn"></a>-->
            <!--  </div>-->
            <!--</li>-->

            <!--<li>-->
            <!--  <div class="box">-->
            <!--    <img src="{{asset('assets/img/gallery/gallery6.jpg')}}" alt="gallery6">-->
            <!--    <a href="{{asset('assets/img/gallery/gallery6.jpeg')}}" target="_blank" class="link-btn"></a>-->
            <!--  </div>-->
            <!--</li>-->

            <!--<li>-->
            <!--  <div class="box">-->
            <!--    <img src="{{asset('assets/img/gallery/gallery7.jpeg')}}" alt="gallery7">-->
            <!--    <a href="{{asset('assets/img/gallery/gallery7.jpeg')}}" target="_blank" class="link-btn"></a>-->
            <!--  </div>-->
            <!--</li>-->

            <!--<li>-->
            <!--  <div class="box">-->
            <!--    <img src="{{asset('assets/img/gallery/gallery8.jpeg')}}" alt="gallery8">-->
            <!--    <a href="{{asset('assets/img/gallery/gallery8.jpeg')}}" target="_blank" class="link-btn"></a>-->
            <!--  </div>-->
            <!--</li>-->

            <!--<li>-->
            <!--  <div class="box">-->
            <!--    <img src="{{asset('assets/img/gallery/gallery9.jpeg')}}" alt="gallery9">-->
            <!--    <a href="{{asset('assets/img/gallery/gallery9.jpeg')}}" target="_blank" class="link-btn"></a>-->
            <!--  </div>-->
            <!--</li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copyright-area">
  <div class="container">
    <div class="copyright-area-content">
      <p>
        Copyright @ Seven Steps Pre-School All Rights Reserved by
      </p>
    </div>
  </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
  <i class='bx bx-up-arrow-alt'></i>
</div>
<!-- End Go Top Area -->

<div class="sevenstep_brochure">
  <a href="{{isset($brocher->file) ? $brocher->file : '' }}" target="_blank"><i class="bx bx-file"></i> Brochure</a>
</div>
<div class="sevenstep_brochure fees">
  <a href="{{ URL::to('/site/fees-pay') }}"><i class="bx bx-indian-rupee-sign"></i> Fees Payment</a>
</div>
<div class="step_whatsapp">
  <a href="https://wa.me/+919904419333/?text=Thank you for contacting Seven Steps Pre-School Please let us know how we can help you." target="_blank"><i class="bx bxl-whatsapp"></i> Live Chat</a>
</div>
