<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Now</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Your Custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Josefin+Sans:ital@1&family=Poppins&display=swap');

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        
header {
    position: relative;
    background-image: url(assets/images/donation9.jpg);
    background-size: cover;
    height: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
    text-decoration: none;
}

.header-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.header-content {
    position: relative;
    z-index: 1;
    padding: 20px;
}

.header-content h1 {
    font-family: 'Inter', sans-serif;
    font-size: 64px;
    margin-bottom: 20px;
}

        section {
            margin: 100px 0;
        }

        .donate-btn {
            background: #7c9f82;
            color: #fff;
            font-size: 20px;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .donate-btn:hover {
            background-color: #0b5740;
        }

        .donate-section {
            padding: 60px 0;
            text-align: center;
        }

        .section-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .donate-description {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .donate-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            padding: 12px 20px;
            border-radius: 4px;
        }

        textarea.form-control {
            height: 180px;
        }

        .section-content {
            text-align: center;
            padding: 0% 20%;
        }

        .section-content h1 {
            font-family: 'Inter', sans-serif;
            color: #fff;
            font-size: 64px;
            line-height: 80px;
        }

        .section-content p {
            font-size: 18px;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            padding: 0% 4%;
            margin-bottom: 40px;
        }
/* 
        .donate-btn {
            text-decoration: none;
            color: #fff;
            background: #7c9f82;
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            border-radius: 1px;
            padding: 10px 30px;
            margin-top: 30px;
        } */

        /* Donate Today Section */
        .donate-section {
            background-color: #fff;
            padding: 60px 0;
        }

        .section-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #121212;
            font-family: 'Inter', sans-serif;
        }

        .donate {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 40px;
            color: black;
        }

        /* Donate Form */
        .donate-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-control:focus {
            outline: none;
            border-color: #99ccff;
        }

        textarea.form-control {
            height: 150px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .donate-btn:hover {
            background-color: #56a68e;
        }

        /* Additional Section Styles */
        .amount-part {
            margin: 40px 0;
        }

        .amount {
            background-color: #fafafa;
            color: #707070;
            font-family: 'Inter', sans-serif;
            font-size: 30px;
            font-weight: 700;
            text-align: center;
            margin: 0 20px;
            padding: 30px;
        }

        .amount:hover {
            color: #FF5959;
            border: 2px solid #FF5959;
            background-color: #ffeeee;
            border-radius: 3px;
        }

        .custom-amount {
            margin: 100px 0 40px;
        }

        .custom-amount input {
            text-align: center;
            border-bottom: 2px solid #b3b3b3;
            border-top: none;
            border-left: none;
            border-right: none;
            font-size: 18px;
            width: 65%;
            padding: 0% 0%;
            color: #b3b3b3;
        }

        .custom-amount input:focus {
            outline: none;
        }

        /* Plan Boxes */
        .plan-boxes {
            display: flex;
            margin: 40px 100px;
        }

        .plan-box {
            margin: 0 20px;
            text-align: justify;
            padding: 40px 40px;
        }

        .plan-box img {
            width: 40px;
            height: 40px;
        }

        .plan-box h3 {
            font-size: 24px;
            line-height: 36px;
            font-family: 'Inter';
        }

        .plan-box p {
            font-size: 18px;
            font-family: 'Poppins';
            color: #707070;
        }

        .plan-box h3 {
            font-size: 24px;
            line-height: 36px;
            font-family: 'Inter';
        }

        .plan-box.one {
            background: #EDF5F6;
            border-radius: 5px;
        }

        .plan-box.two {
            background: #FFEEEE;
            border-radius: 5px;
        }

        .plan-box.three {
            background: #FFF4D6;
            border-radius: 5px;
        }

        /* Contribute Section */
        .contribute-section {
            text-align: left;
            display: flex;
            align-items: center;
            margin: 40px 100px;
        }

        #contribute-title {
            text-align: left;
        }

        .contribute-section p {
            font-size: 18px;
            font-family: 'Poppins';
            color: #707070;
            text-align: justify;
        }

        .contribute-left {
            width: 40%;
            height: auto;
            margin: 0% 5%;
        }

        .contribute-right {
            width: 40%;
            height: auto;
            padding: 0% 5%;
        }

        .contribute-right img {
            max-width: 100%;
            height: 400px;
            object-fit: cover;
        }

        /* Bonus Section */
        .bonus-section {
            display: flex;
            margin: 0 40px;
        }

        .mission-left {
            width: 40%;
            padding: 0 5%;
        }

        .mission-right {
            width: 40%;
            padding: 0 5%;
        }

        .mission-left img {
            max-width: 100%;
        }

        .mission-right p {
            text-align: justify;
            font-family: 'poppins', sans-serif;
            font-size: 18px;
            line-height: 28px;
        }

        /* Update Section */
        .updates-section {
            text-align: center;
        }

        .updates-content p {
            font-size: 18px;
            font-family: 'Poppins';
            color: #707070;
            margin-bottom: 60px;
        }
/* 
        input[type="email"] {
            font-size: 18px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-style: none;
            font-family: 'Poppins';
            padding: 9px;
        } */

        input:focus {
            outline: none;
        }

        /* Footer Section */
        footer {
            text-align: center;
            background-color: #0B0D17;
            padding: 20px 0;
            color: #fafafa;
        }

        footer img {
            width: 80px;
            height: 80px;
        }

        footer h3 {
            font-family: 'Josefin Sans', sans-serif;
            font-size: 28px;
            color: #FF5959;
        }

        footer p {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <section class="donation-history-section">
        <div class="container">
            <h2 class="section-title">Donation History</h2>
            @if ($donation)
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Donation Date & Time</th>
                                <th>Full Name</th>
                                <th>City</th>
                                <th>Street Address</th>
                                <th>Amount</th>
                                <th>Proof</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $donation->created_at }}</td>
                                <td>{{ $donation->fname }} {{ $donation->lname }}</td>
                                <td>{{ $donation->city }}</td>
                                <td>{{ $donation->street }}</td>
                                <td>{{ $donation->donation }}</td>
                                <td class="text-center">
                                    <a href="{{ asset('uploads/proofUploads/' . $donation->proof) }}" target="_blank">
                                    <img src="{{ asset('uploads/proofUploads/' . $donation->proof) }}" alt="Proof" width="100" height="80">
                                    </a>
                                </td>
                                
                        </tbody>
                    </table>
                </div>
            @else
                <p>No donations found.</p>
            @endif
        </div>
    </section>

    
</body>
</html>