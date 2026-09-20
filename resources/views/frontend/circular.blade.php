@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-banner-content">
          <h2>Circular</h2>
          <ul>
            <li>
              <a href="{{URL::to('/')}}">Home</a>
            </li>
            <li>Circular</li>
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
      <div class="col-lg-6">
        <div class="who-we-are-image">
          <img src="{{asset('assets/img/circular.jpg')}}" alt="circular">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="who-we-are-content">
          <h3>Circular</h3>
          <h6>We look forward to serve you the best education you need to fulfil your child’s dreams…Our school welcomes you!! (New academic year 2025-26)</h6>
          <p>Following is the information which needs your kind attention.</p>
          <ul class="who-we-are-list about-page">
            <li>
              <span></span>
              2nd and 4th Saturday of every month will be holiday for students.
            </li>
            <li>
              <span></span>
              Kindly follow school planner for Holidays, Activities, Celebration, Competition and Exam dates. (In case of any changes or updates, school will send msg.)
            </li>
            <li>
              <span></span>
              Send your child in proper uniform with I-Card, hair should be combed (2 plaits for girls), nails must be trimmed.
            </li>
            <li>
              <span></span>
              Label your wards books, bag, tiffin-box and water bottle & send healthy breakfast.
            </li>
            <li>
              <span></span>
              Student must be regular and should reach on time at school.
            </li>
            <li>
              <span></span>
              Keep your children at home when they are sick.
            </li>
            <li>
              <span></span>
              You are requested not to send expensive gifts, eatables, chocolates and cakes for your ward's birthday to school. You can send stationary item (pencil, pen, eraser etc)
            </li>
            <li>
              <span></span>
              Kindly follow school Facebook and Instagram page.
            </li>
            <li>
              <span></span>
              It is compulsory to bring Parent I-card to Pick-up your child.
            </li>
            <li>
              <span></span>
              Send diary note for one day leave, Application to In-charge for more than 1 day leave and meet Principal for more than 3 days leave.
            </li>
            <li>
              <span></span>
              For any query, contact: Seven Steps School (Main Branch)<br>
              Education related query: 9904415333, 9879636666<br>
              For Fees details: 8780331646
            </li>
            <li>
              <span></span>
              For any query, contact: Seven Steps Pre-School<br>
              Education related query: Morning- 9904419333, Noon -9328466363 <br>
              For Fees details contact on: 7859824598
            </li>
            <h4 style="margin-top: 20px;margin-bottom: 15px;">FEES DETAILS :-</h4>
            <li>
              <span></span>
             Monthly Fee Payment: Kindly pay the school fees between the 1st to 10th of every month
            </li>
            <!--<li>-->
            <!--  <span></span>-->
            <!--  2nd Installment fees should be paid in the month of July (1 st to 10th July 2025)-->
            <!--</li>-->
            <!--<li>-->
            <!--  <span></span>-->
            <!--  3rd Installment fees should be paid in the month of Sep (1 st to 10th Sep 2025)-->
            <!--</li>-->
            <!--<li>-->
            <!--  <span></span>-->
            <!--  4th Installment fees should be paid in the month of Dec (1 st to 10th Dec 2025)-->
            <!--</li>-->
            <!--<li>-->
            <!--  <span></span>-->
            <!--  5th Installment fees should be paid in the month of March (1 st to10th March 2026)-->
            <!--</li>-->
          </ul>
        </div>
      </div>
      <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-6: center;">
          <table border="1" class="main_table01 table">
            <thead class="thead-dark">
              <tr style="">
                <th colspan="3" style="background: #ffb87d;">
                  <!--<h4>Pre Primary - Timing </h4>-->
                  <h4 style="font-size: 20px;text-align: center;">School timing for all the standards is given below ( Monday to Saturday )</h4>
                </th>
              </tr>
              <tr>
                <th>Standard</th>
                <th>Morning Batch</th>
                <th>Afternoon Batch</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>PG/NURSERY</td>
                <td>8:00 am to 11:30 am</td>
                <td>1:20pm to 4:20 pm</td>
              </tr>

              <tr>
                <td>JUNIOR KG</td>
                <td>8:15 am to 12:00 noon </td>
                <td>1:20pm to 4:35 pm</td>
              </tr>

              <tr>
                <td>SENIOR KG</td>
                <td>8:30 am to 12:15 pm</td>
                <td>1:20pm to 4:45 pm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--<div class="col-lg-6">-->
        <!--  <table border="1" class="main_table01 table">-->
        <!--    <thead class="thead-dark">-->
        <!--      <tr>-->
        <!--        <th colspan="3" style="background: #ffb87d;">-->
        <!--          <h4 style="font-size: 20px;text-align: center;">School timing for Seven Steps School Main Branch ( Monday to Saturday )</h4>-->
        <!--        </th>-->
        <!--      </tr>-->
        <!--      <tr>-->
        <!--        <th>Standard</th>-->
        <!--        <th>Morning Batch</th>-->
        <!--      </tr>-->
        <!--    </thead>-->

        <!--    <tbody>-->
        <!--      <tr>-->
        <!--        <td>JUNIOR KG</td>-->
        <!--        <td>8: 00 am to 11: 30 am</td>-->
        <!--        <td>8: 00 am to 11: 30 am</td>-->
        <!--      </tr>-->
        <!--      <tr>-->
        <!--        <td>SENIOR KG</td>-->
        <!--        <td>8: 00 am to 11: 30 am</td>-->
        <!--        <td>8: 00 am to 11: 30 am</td>-->
        <!--      </tr>-->
        <!--    </tbody>-->
        <!--  </table>-->
        <!--</div>-->
      </div>
      <div class="col-lg-12">
        <div class="who-we-are-content">
          <h4>Regarding school uniform :</h4>
          <div class="row">
            <div class="col-lg-6">
              <ul class="who-we-are-list about-page">
                <h4 style="margin-top: 20px;margin-bottom: 15px;">FOR BOYS :-</h4>
                <h6 style="margin-bottom: 15px;display: block;width: 100%;">FOR ALL STD :-</h6>
                <li>
                  <span></span>
                  Pink T-shirt, Navy blue half pant, School logo Belt, White and Pink shocks, Double Velcro Black Shoes
                </li>
                <h6 style="margin-bottom: 15px;">For winter session :-</h6>
                <li>
                  <span></span>
                  Red sweater or Red jacket
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="who-we-are-list about-page">
                <h4 style="margin-top: 20px;margin-bottom: 15px;">FOR GIRLS :-</h4>
                <h6 style="margin-bottom: 15px;display: block;width: 100%;">FOR ALL STD :-</h6>
                <li>
                  <span></span>
                  Pink T-shirt, Navy Blue Skirt, School logo belt, white and pink shocks, double Velcro Black Shoes.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 who-we-are-content" style="margin-top: 40px;">
        <div class="management_msg" style="text-align: right;">
          <h5 class="text-right mr_btm">Mrs. Komal Shah</h5>
          <h6 class="text-right mr_btm">(+91) 99044 15333</h6>
          <h6 class="text-right mr_btm">Principal - Seven Steps Pre-School</h6>
        </div>
      </div>
    </div>
  </div>

  <div class="who-we-are-shape">
    <img src="{{asset('assets/img/boy2.png')}}" alt="boy2">
  </div>
</section>
<!-- End Who We Are Area -->


@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
