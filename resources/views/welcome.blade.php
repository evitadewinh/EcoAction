<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
#carouselExampleControls .carousel-item {
  color: #000; /* warna teks hitam */
}

#carouselExampleControls .carousel-item .box {
  background-color: #fff; /* warna background putih untuk card */
  border-radius: 8px;
  padding: 20px;
  margin: 10px; /* jarak antar card */
  text-align: center;
}

#carouselExampleControls .carousel-item .box h4 {
  color: #000; /* warna teks judul hitam */
  font-size: 18px;
  font-weight: bold;
}

#carouselExampleControls .carousel-item .box p {
  color: #00000068; /* warna teks deskripsi hijau */
  font-size: 14px;
  line-height: 1.6;
}

#carouselExampleControls .carousel-item .box .btn-2 {
  background-color: #008000; /* warna latar belakang hijau untuk tombol */
  color: #fff; /* warna teks tombol putih */
  border: none;
  padding: 10px 20px;
  border-radius: 20px; /* membuat tombol menjadi lingkaran */
  text-decoration: none;
  display: inline-block;
  margin-top: 10px;
  transition: background-color 0.3s ease; /* transisi warna saat hover */
}

#carouselExampleControls .carousel-item .box .btn-2:hover {
  background-color: #005200; /* warna latar belakang saat tombol dihover */
  color: #fff;
}
 /* #carouselExampleControls .readmore{


 } */
 #carouselExampleControls .readmore a {
    background-color: #008000; /* warna latar belakang hijau untuk tombol */
    color: #fff; /* warna teks tombol putih */
    border: none;
    padding: 10px 20px;
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;
    transition: background-color 0.3s ease;
    display: inline;
 }



</style>
<body>

</body><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EcoAction</title>

    <!-- bootstrap core css -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" /> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset('assets/images/logo ecoact.png')}}" type="image/x-icon">
      <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
</head>

<body>
  <div class="landing_area">
    <!-- header section strats -->
    <div class="landing_bg_box">
      <div class="img-box">
        <img src="{{asset('assets/images/web bg 2.png')}}" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="header">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <span>
                EcoAction
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#about"> About us</a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="#feedback"> Feedback</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                </li> -->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Nurturing Nature <br>
                      <span>
                        Preserving Our Future
                      </span>
                    </h1>
                    <p>
                      By protecting and preserving the environment, we are safeguarding the very foundation of life
                      itself. Sustainable living is not just a choice; it's our responsibility. Let's embrace this duty
                      with determination, knowing that our actions today shape the world for generations to come.
                      Together, let's nurture our planet, ensuring a future where nature thrives and all life flourishes
                      in harmony.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('login')}}" class="btn-1"> Sign In > </a>
                      <a href="{{route('donate')}}" class="btn-2">Donate now > </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Nurturing Nature <br>
                      <span>
                        Preserving Our Future
                      </span>
                    </h1>
                    <p>
                      By protecting and preserving the environment, we are safeguarding the very foundation of life
                      itself. Sustainable living is not just a choice; it's our responsibility. Let's embrace this duty
                      with determination, knowing that our actions today shape the world for generations to come.
                      Together, let's nurture our planet, ensuring a future where nature thrives and all life flourishes
                      in harmony.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('login')}}" class="btn-1"> Sign In > </a>
                      <a href="{{route('donate')}}" class="btn-2">Donate now > </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Nurturing Nature <br>
                      <span>
                        Preserving Our Future
                      </span>
                    </h1>
                    <p>
                      By protecting and preserving the environment, we are safeguarding the very foundation of life
                      itself. Sustainable living is not just a choice; it's our responsibility. Let's embrace this duty
                      with determination, knowing that our actions today shape the world for generations to come.
                      Together, let's nurture our planet, ensuring a future where nature thrives and all life flourishes
                      in harmony.
                    </p>
                    <div class="btn-box">
                      <a href="{{route('login')}}" class="btn-1"> Sign In > </a>
                      <a href="{{route('donate')}}" class="btn-2">Donate now > </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container idicator_container">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="{{asset('assets/images/info.jpg')}}" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0" id="about">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Who Are We?
              </h2>
            </div>
            <p>
              Welcome to EcoAction Community, where individuals unite with a shared mission: to drive positive change
              for our environment through collective action. Here, we believe in the power of small steps leading to
              significant impact. Whether it's organizing cleanups, promoting recycling, or advocating for sustainable
              living, we're committed to creating a greener, healthier planet. In our community, every voice matters,
              and every action counts. Through collaboration and support, we inspire and empower each other to make
              meaningful contributions to environmental conservation. Join us in our journey to create a brighter, more
              sustainable future for all.
            </p>
            <div class="btn-box">
              <a href="{{route('login')}}">
                More Ways You Can Help >
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- service section -->
  <section class=" slider_section " >
<section class="client_section layout_padding" style="background-color: #000000">
  <div class="container" id="feedback">
    <div class="heading_container heading_center">
      <h2 style="color: rgb(255, 253, 253);">
        What's New?
      </h2>
    </div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach($educations->chunk(3) as $index => $educationChunk)
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <div class="row">
              @foreach($educationChunk as $education)
                <div class="col-md-4">
                  <div class="box">
                    <div class="img-box">
                      <img src="{{ asset('storage/' . $education->image) }}" alt="{{ $education->title }}">
                    </div>
                    <div class="detail-box">
                      <h4>{{ $education->title }}</h4>
                      <p>{{ Str::limit($education->description, 10) }}</p> <!-- Limit description to 100 characters -->
<div class="readmore"><a href="{{ route('educations.show', $education->id) }}">Read More</a></div>

                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>


    <!-- end client section -->

    <!-- contact section -->

    {{-- <section class="contact_section layout_padding">
      <div class="contact_bg_box">
        <div class="img-box">
          <img src="{{asset('assets/images/bg_get_in_touch.jpeg')}}" alt="">
        </div>
      </div>
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Feedback
          </h2>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-7 mx-auto">
              <form action="{{ route('feedback.add') }}" method="POST">
                @csrf
                @method('POST')
                <div class="contact_form-container">
                  <div>
                    <div>
                      <input type="text" placeholder="Full Name"  name="fullname" id="fullname"/>
                    </div>
                    <div>
                      <textarea name="feedback" rows="10" cols="82" id="" placeholder="Feedback" id="feedback">

                      </textarea>
                    </div>
                    <div>
                      <input type="text" placeholder="Email"  name="email" id="email"/>
                    </div>
                    <div class="btn-box ">
                      <button type="submit">
                        Submit
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- end contact section -->


    <!-- info section -->
    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <a class="navbar-brand" href="index.php">
                <span>
                  EcoAction
                </span>
              </a>
              <p>
                Nurturing Nature, Preserving Our Future
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h5>
                Useful Link
              </h5>
              <ul>
                <li>
                  <a href="https://www.apple.com/app-store/">
                    <img src="{{asset('assets/images/appstore.png')}}" style="width: 200px; height: 60px ;"alt="">
                  </a>
                </li>
                <li>
                <li>
                  <a href="https://play.google.com/store/search?q=play+store&c=apps">
                    <img src="{{asset('assets/images/playstore.png')}}" style="width: 200px; height: 60px ;" alt="">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_info">
              <h5>
                Contact Us
              </h5>
            </div>
            <div class="info_contact">
              <a href="" class="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Fakultas Sains dan Teknologi, Universitas Airlangga
                </span>
              </a>
              <a href="" class="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +628 7074537213
                </span>
              </a>
              <a href="" class="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  eduaction@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_form ">
              <h5>
                Social Media
              </h5>
              </form>
              <div class="social_box a">
                <a href="https://www.facebook.com/">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/?lang=en-id">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </div>
              <div class="social_box b">
                <a href="https://www.youtube.com/">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <footer class="container-fluid footer_section">
      <p>
        &copy; <span id="currentYear"></span> Design by Evita and Sisil
      </p>
    </footer>
    <!-- footer section -->
</body>

</html>
</html>
