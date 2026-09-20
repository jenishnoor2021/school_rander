<?php

use App\Models\Brocher;
use App\Models\Galleryimage;

$brocher = Brocher::first();
$gallerys = Galleryimage::where('is_show', 1)->get();
?>
<!doctype html>
<html>

<head>
   @include('includes.head')
</head>

<style>
   .modal {
         margin-top: 80px;
      }
</style>

<body>
    
<?php if (request()->segment(1) == '') {?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title">Subscribe our Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> -->
            <div class="modal-body">
               <button type="button" style="margin-right:-50px;margin-top:-30px;color:#fff;font-size:25px;background-color:#000;border-radius:50%;padding:5px 10px" class="close" data-dismiss="modal">&times;</button>
               <?php if (isset($popup)) {?>
                  <img src="{{$popup->file}}" width="100%" hight="100px" alt="staff_img1">
               <?php } else {?>
                  <img src="{{asset('assets/img/popup-image.png')}}" width="100%" hight="100px" alt="staff_img1">
               <?php }?>
               <center><a href="{{ URL::to('/site/enquiry') }}" class="mt-3 btn btn-primary">Inquiry</a></center>
            </div>
        </div>
    </div>
</div>
<?php }?>
  
   <?php if (request()->segment(1) == '') {?>
      <!-- preloader start -->
      <!--<div class="preloader">-->
      <!--      <div class="preloader">-->
      <!--       <div class="preloader-inner">-->
                <!--<div class="preloader-border"></div>-->
      <!--          <img src="{{asset('assets/img/logo.png')}}" alt="Kundax" />-->
                <!--</svg>-->
      <!--       </div>-->
      <!--      </div>-->
      <!--</div>-->
      <!-- preloader end  -->
   <?php }?>

   <!-- header area start -->
   <header>
      @include('includes.header')
      <style>
         #contact_form label.error,
         #quotation_form label.error {
            color: red;
         }
      </style>
   </header>
   <!-- header area end here -->

   <!-- main area start here  -->
   <main>
      @yield('content')
   </main>
   <!-- main area end here  -->

   <footer>
      @include('includes.footer')
   </footer>

   <!-- Jquery Slim JS -->
   <script src="{{asset('assets/js/jquery.min.js')}}"></script>
   <!-- Bootstrap JS -->
   <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
   <!-- Meanmenu JS -->
   <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
   <!-- Owl Carousel JS -->
   <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
   <!-- Magnific Popup JS -->
   <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
   <!-- Imagelightbox JS -->
   <script src="{{asset('assets/js/imagelightbox.min.js')}}"></script>
   <!-- Odometer JS -->
   <script src="{{asset('assets/js/odometer.min.js')}}"></script>
   <!-- Jquery Appear JS -->
   <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
   <!-- Ajaxchimp JS -->
   <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
   <!-- Form Validator JS -->
   <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
   <!-- Contact JS -->
   <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
   <!-- Custom JS -->
   <script src="{{asset('assets/js/main.js')}}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

   <script>
      var targetDiv = document.getElementById("displayhide");
      $(document).on('click', '#hidAlert', function() {
         targetDiv.style.display = "none";
      });
   </script>
   <script>
      $(document).ready(function() {
         $("#contact_form").validate();
         $("#quotation_form").validate();
         $("#career_form").validate();
         $("#appoinment_form").validate();
      });
   </script>
   <script>
    $(document).ready(function() {
        // if (localStorage.getItem('wasVisited') == 1) {
            //  $("#myModal").modal('hide');
        //  } else {
            localStorage.setItem('wasVisited', 1);
            $("#myModal").modal('show');
        //  }
    });
    </script>
   @yield('script')
</body>

</html>