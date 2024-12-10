<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .article-card {
        background-color: transparent;
    }

    .article-content {
        color: white;
    }

    .article-content h1,
    .article-content p,
    .article-content strong {
        color: white;
    }

    .article-content a.btn-primary {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .article-content a.btn-primary:hover {
        background-color: #004494;
        border-color: #004494;
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

<style>
    .landing_area {
        background-color: #0a633c39;
    }
    .container {
        /* max-width: 800px; */
        /* margin: 20px auto;
        padding: 20px; */
         /* background-color: #0a633c72; */
    }
</style>

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
                  <a class="nav-link" href="/welcome">Home <span class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#about"> About us</a>
                </li> --}}
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#feedback"> Feedback</a>
                </li> --}}
                <!-- <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                </li> -->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <div class="container mt-4">
        @foreach($articles as $article)
        <div class="row article-card shadow-sm p-3">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 article-content">
                <h1>{{ $article->title }}</h1>
                <p>{{ Str::limit($article->description, 40) }}</p>
                <p><strong>Volunteers:</strong> {{ $article->volunteers->count() }}</p>
                <a class="btn btn-success" href="{{ route('article.detail', $article->id) }}">Take Actions ></a>
            </div>
        </div>
        @endforeach
</div>
  </div>

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
