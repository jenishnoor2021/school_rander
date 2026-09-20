@extends('layouts.front')
@section('content')

<!-- Start Page Banner -->
<div class="page-banner-area">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-banner-content">
          <h2>Event</h2>
          <ul>
            <li>
              <a href="{{URL::to('/')}}">Home</a>
            </li>
            <li>Event</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner -->

<!-- Start Class Area -->
<section class="class-area ptb gray-bg">
  <div class="container">
    <div class="section-title">
      <span>Seven Step Pre-School</span>
      <h2>Event Programs</h2>
    </div>

    <div class="row">
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg1">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/compitition.jpeg')}}" alt="compitition">
            </a>
          </div>
          <div class="class-content">
            <h3>Annual Day</h3>
            <p>Annual Day is one of the most awaited and memorable events of the school. It is a celebration of students' talents, achievements, and hard work. Students showcase their skills through cultural performances and are honoured for their academic, co-curricular, and extracurricular excellence. The event provides a wonderful platform to build confidence, creativity, and teamwork. Filled with joy, pride, and entertainment, Annual Day brings together students, teachers, parents, and guests to celebrate success and create lasting memories.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg2">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/navratri.jpg')}}" alt="navratri">
            </a>
          </div>
          <div class="class-content">
            <h3>Sports Day</h3>
            <p>Sports Day celebration is a much-awaited event. Games and sports are an integral part of a student's life. The importance of games and sports for children has become even more relevant in the current times, as they increase self-esteem and mental alertness, which are essential for dealing with stress. Sports Day showcases the skills and exercises practised by our young sports enthusiasts every day. Different sports competitions are organised according to class levels. Winners and participants are appreciated and encouraged during the prize distribution ceremony.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg3">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/bird_animal.jpg')}}" alt="bird_animal">
            </a>
          </div>
          <div class="class-content">
            <h3>Science Fair</h3>
            <p>Science fair is organised to motivate the students toward science. Students showcase their innovative skills, and it also contributes to the social development of students. The science fair increases students' presentation skills and also increases their interest in becoming scientists and engineers. Preparing a science fair project is an excellent example of what education experts call active learning.</p>
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
            <h3>International Yoga Day</h3>
            <p>In the words of Mr. Narendra Modi at the UN General Assembly, “Yoga is an invaluable gift of India’s ancient tradition. It embodies unity of mind and body; thought and action; restraint and fulfilment; harmony between man and nature; a holistic approach to health and well-being. It is not about exercise but to discover the sense of oneness with yourself, the world, and nature. By changing our lifestyle and creating consciousness, it can help in well-being. Let us work towards adopting International Yoga Day.” At Seven Steps Pre-School, we celebrate International Yoga Day as we believe that Yoga is more than just burning your calories and toning your muscles. Yoga is a way of life</p>
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
            <h3>Mango Day</h3>
            <p>Mangos were first cultivated in India 5000 years ago and travelled to Southeast Asia between the 5th and 4th centuries BC. The paisley pattern developed in India is said to be based off of the shape of the mango. It is the national fruit of India, Pakistan, and the Philippines, while also being the national tree of Bangladesh. Almost half the world’s mango supply is harvested in India.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg6">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/physical.jpg')}}" alt="physical">
            </a>
          </div>
          <div class="class-content">
            <h3>Rainy Season</h3>
            <p>India is known as land of festivals, as the monsoon arrives in India celebration begins with great enthusiasm and joy. Rainy season gives a new life to the earth. A shower of rain is a life-force, and there is no better way to explain its significance then to celebrate it. Children love rain, Rainy Season celebration makes then enjoy it while learning the importance of rain.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg7">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/physical.jpg')}}" alt="physical">
            </a>
          </div>
          <div class="class-content">
            <h3>Guru Purnima</h3>
            <p>Guru Purnima is celebrated to pay respect to the Guru. It is an expression of gratitude toward the teacher by the student. We celebrate the bond between the teacher and the student on Guru Purnima.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg8">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/physical.jpg')}}" alt="physical">
            </a>
          </div>
          <div class="class-content">
            <h3>Picnic</h3>
            <p>Away from the burden of books and far from the madding crowd of the city, in the lap of nature, what a great pleasure it could be for our students. Seven Steps Pre-School every year takes students for a picnic to the Botanical Garden and Rebounce.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg9">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/physical.jpg')}}" alt="physical">
            </a>
          </div>
          <div class="class-content">
            <h3>Teacher’s Day</h3>
            <p>The Teacher's Day celebrations are meant to acknowledge, thank, appreciate, and honour the amazing work that the teachers do for society, and it encourages the teaching fraternity to continue to do great work. The birth date of the second President of India, Dr. Sarvepalli Radhakrishnan, 5 September 1888, is celebrated as Teacher's Day. He was known for his contribution to the education system in the country. It celebrates great scholars such as Dr. Sarvepalli Radhakrishnan who contributed immensely to their field. Senior students dress up as teachers and assume the roles of the teachers, for instance, offering classes to elementary students. This is meant to make them feel how teachers feel while teaching. On other occasions, teachers take the position of students in classes, sit down, and get taught by the students. Teachers feel appreciated and highly valued with these celebrations.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg10">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/physical.jpg')}}" alt="physical">
            </a>
          </div>
          <div class="class-content">
            <h3>Kite Festival</h3>
            <p>Kite is taken as a symbol of having high aspirations and elevated vision. Kite festival is celebrated on the occasion of Makar Sankranti. This day is considered to be one of the most important harvest days in India. The festival spirit is showcased by flying the kites as high as possible. Students take part in kite flying competition, and are appreciated with prizes. The day brings happiness and joy with colourful flying kites.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg11">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/physical.jpg')}}" alt="physical">
            </a>
          </div>
          <div class="class-content">
            <h3>Balloon Day</h3>
            <p>We celebrate Balloon Day as a part of fun activity for pre-primary students. Students are provided with balloons, they sing rhymes, dance and enjoy. It also gives us knowledge about how well a student is learning in the class and the areas of improvement for better development of student.</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="single-class bg12">
          <div class="class-image">
            <a href="#">
              <img src="{{asset('assets/img/physical.jpg')}}" alt="physical">
            </a>
          </div>
          <div class="class-content">
            <h3>Christmas Day</h3>
            <p>Centuries before Christmas began to be observed as the celebration of the birth of Jesus Christ on 25th December. The students feel excited, joyous. Students learn about the Christmas story and programmes are performed by the students. Best part about Christmas day celebration is when Santa enters and distributes candies; Santa Claus is loved by each and every child.</p>
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
