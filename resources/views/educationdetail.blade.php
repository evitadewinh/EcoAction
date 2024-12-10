<!-- resources/views/educations/show.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EcoAction - Detail Edukasi</title>

    <!-- bootstrap core css -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo ecoact.png') }}" type="image/x-icon">

    <style>
        .landing_area {
            background: #0A633D;
            font-family: 'Poppins', sans-serif;
        }
        .detailedukasi {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        .detailedukasi .card {
            border: none;
            border-radius: 10px;
        }

        .detailedukasi .card-header {
            border-radius: 10px 10px 0 0;
        }

        .detailedukasi .img-box img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .detailedukasi .detail-box {
            color: #333;
            font-size: 14px; /* Mengurangi ukuran font untuk membuatnya lebih kecil */
        }

        .footer_section {
            background: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer_section p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="landing_area">
        <!-- header section starts -->
        {{-- <div class="landing_bg_box">
            <div class="img-box">
                <img src="{{ asset('assets/images/web bg 2.png') }}" alt="">
            </div>
        </div> --}}

        <header class="header_section">
            <div class="header">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="/">
                            <span>EcoAction</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""></span>
                        </button>
                        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#feedback"> Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <div class="container py-4">
            <div class="detailedukasi">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-success text-white text-center">
                                <h5 class="mb-0">{{ $education->title }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="img-box text-center mb-3">
                                    <img src="{{ Storage::url($education->image) }}" class="img-fluid" alt="{{ $education->title }}">
                                </div>
                                <div class="detail-box">
                                    <p>{{ $education->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer section -->
        <footer class="container-fluid footer_section">
            <p>&copy; <span id="currentYear"></span> Design by Evita and Sisil</p>
        </footer>
    </div>

    <script>
        document.getElementById("currentYear").textContent = new Date().getFullYear();
    </script>
</body>

</html>
