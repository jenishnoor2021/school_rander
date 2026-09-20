@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-banner-content">
          <h2>Extra Activities</h2>
          <ul>
            <li>
              <a href="{{URL::to('/')}}">Home</a>
            </li>
            <li>Extra Activities</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->

<!-- Start Class Area -->
<section class="class-area extra_activities ptb gray-bg">
  <div class="container">
    <div class="section-title">
      <span>Seven Step Pre-School</span>
      <h2>Extra Activities</h2>
    </div>

    <div class="row">
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg1">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/yoga.jpeg')}}" alt="yoga">
            </a>
          </div>
          <div class="class-content">
            <h3>Yoga</h3>
            <h6>“Yoga is the journey of the self, through the self, to the self."”</h6>
            <p>From first graders to college seniors, students may have youth on their side—but that doesn't mean their lives are pressure-free. Children deal with many distractions, temptations, overstimulation, and peer pressure. Stress is a major obstacle to academic achievement, and yoga's stress-relief powers have been shown to boost student performance. Keeping all these factors in mind, Seven Steps Pre-School has implemented Yoga in our classrooms. Students are training in life-enhancing abilities that can positively impact their lives and enhance their overall growth.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg2">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/dance.jpeg')}}" alt="dance">
            </a>
          </div>
          <div class="class-content">
            <h3>Dance</h3>
            <p>Dance is a language that the body speaks. It is a beautiful form of art that helps you to express yourself without saying a word. At Seven Steps Pre-School, we give regular training in dance where students learn teamwork, focus, and improvisational skills. We also conduct competitions to keep our students motivated</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg3">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/karate.jpg')}}" alt="karate">
            </a>
          </div>
          <div class="class-content">
            <h3>Karate</h3>
            <p>Karate is a form of martial art that not only teaches self-protection but also elevates confidence and self-discipline while providing engaging physical activity. Seven Steps Pre-School provides a karate program which helps to improve the overall physical and mental health of students.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg4">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/art_craft.jpg')}}" alt="art_craft">
            </a>
          </div>
          <div class="class-content">
            <h3>Art & Craft</h3>
            <p>Arts and crafts have always been an important aspect of early childhood education. Creative learning projects can foster a child's natural imagination, and also help them develop other essential life skills that will stay with them for years to come. We give importance to arts and crafts for early childhood development, and we at Seven Steps Pre-School provide creative activities to our little kids for better learning.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg5">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/physical.jpg')}}" alt="physical">
            </a>
          </div>
          <div class="class-content">
            <h3>Physical Development</h3>
            <p>Physical development is one domain of development. It relates to the changes, growth*,* and skill development of the body, including the brain, muscles*,* and senses. Physical development is evident primarily in gross-motor and fine-motor skills. These skills are essential to children's overall health and wellness.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Class Area -->


@include('includes.cat-area')

<!-- class area start here -->
@include('includes.admission-step')
<!-- class area end here -->

@endsection
