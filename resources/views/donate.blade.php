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
    background-image: url(/assets/images/donation9.jpg);
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
        }

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
            text-decoration: none;
            color: #fff;
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
            color: #0b5740;
        }

        footer p {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-overlay"></div>
        <div class="header-content">
            <h1>Let's Get Help For the Flood Affected People</h1>
            <p>Every person in the flooded area requires help to survive. They need food, shelter, and medicine. Donate generously.</p>
        </div>
    </header>

    <!-- Donate Section -->
<section class="donate-section" id="donate-section">
    <h2 class="section-title">Donate Today</h2>
    <p class="donate-description">It is the perfect time to step up and save humanity. Let's make the world a better place by sharing happiness. Donate as much as possible. Start from $1.</p>

    <form class="donate-form" id="donateForm" method="post" enctype="multipart/form-data" action="{{ route('store') }}">
        @csrf
        <div class="form-group">
            <label for="fname">Full Name:</label>
            <input type="text" class="form-control" id="fname" name="fname" required>
        </div>
        <div class="form-group">
            <label for="lname">Last Name:</label>
            <input type="text" class="form-control" id="lname" name="lname" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" style="border: 1px solid #ddd;" required>
        </div>
        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" class="form-control" id="country" name="country" required>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="form-group">
            <label for="address">Street Address:</label>
            <textarea class="form-control" id="address" name="street" rows="1" required></textarea>
        </div>
        <div class="form-group">
            <label for="donation">Donation Amount:</label>
            <input type="number" class="form-control" id="donation" name="donation" min="1" required>
        </div>
        <div class="form-group">
            <label for="proof">Upload Proof of Donation:</label>
            <input type="file" class="form-control" id="proof" name="proof" accept=".jpg,.jpeg,.png,.pdf" required>
        </div>
        <button type="submit" class="donate-btn">Donate Now</button>
    </form>
</section>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Donation Successful</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Thank you for your generous donation!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" id="closeModalBtn">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('#donateForm').on('submit', function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.success) {
                        $('#successModal').modal('show');
                        $('#donateForm')[0].reset();

                        $('#successModal').on('hidden.bs.modal', function () {
                            window.location.href = '/donation-history/' + response.donation_id;
                        });
                    }
                },
                error: function (response) {
                    alert('Something went wrong. Please try again.');
                }
            });
        });
    });
</script>



    <!-- Donate Plan Section -->
    <section class="donate-plan-section">
        <div class="section-content">
            <h2 class="section-title">Where The Donation Go?</h2>
            <p>Here you can find our next action plan details. For our detail donation procedure follow the details below.</p>
        </div>
        <div class="plan-boxes">
            <div class="plan-box one">
                <img src="{{asset('assets/icons/food.png')}}" alt="">
                <h3>Environmental Preservation Fund</h3>
                <p>By contributing to the Environmental Preservation Fund, you support a wide range of initiatives aimed at conserving and protecting our environment. Your donation will go towards planting trees, combating climate change, aiding flood victims, promoting sustainable food solutions, ensuring access to clean water, protecting marine ecosystems, reducing plastic waste, and supporting textile recycling initiatives. Your generosity will help create a greener and more sustainable future for all.</p>
            </div>
            <div class="plan-box two">
                <img src="{{asset('assets/icons/shelter.png')}}" alt="">
                <h3>Global Crisis Relief Fund</h3>
                <p>Join the Global Crisis Relief Fund to make a difference in combating various global crises. Your donation will support efforts to address climate change, provide aid to flood victims, promote sustainable food solutions, ensure access to clean water, protect marine environments, reduce plastic waste, and support textile recycling initiatives. Together, we can overcome these challenges and build a safer and more resilient world.</p>
            </div>
            <div class="plan-box three">
                <img src="{{asset('assets/icons/medicine.svg')}}" alt="">
                <h3>Sustainable Future Initiative</h3>
                <p>Contribute to the Sustainable Future Initiative and be part of the solution to environmental challenges. Your donation will fund projects focused on environmental preservation, disaster relief, sustainable food production, clean water access, marine conservation, plastic waste reduction, and textile recycling. Together, we can create a brighter future for our planet and future generations.</p>
            </div>
        </div>
    </section>

    <!-- Contribute Sections -->
    <section class="contribute-section">
        <div class="contribute-left">
            <h2 class="section-title" id="contribute-title">Plant 1 Tree and Change the Future of the Environment!</h2>
            <p>By donating just Rp10,000, you can plant one tree that will be preserved for Indonesia's nature.

Your donation will support the acquisition of tree seedlings, tree maintenance for at least 2 years, providing employment and additional income for local communities caring for the trees, as well as the advancement of Indonesian science and technology related to carbon absorption from the planted trees. There are so many benefits for our environment in our homeland. Click here to donate to the Tree Partnership.</p>
            <a class="donate-btn" href="#donate-section">How to Contribute?</a>
        </div>
        <div class="contribute-right">
            <img src="{{asset('assets/images/planning tree.jpg')}}" alt="Donate Now">
        </div>
    </section>
    <section class="contribute-section">
        <div class="contribute-right">
            <img src="{{asset('assets/images/bear.jpg')}}" alt="">
        </div>
        <div class="contribute-left">
            <h2 class="section-title" id="contribute-title">Transforming Tomorrow: Join the Fight Against Climate Change!</h2>
            <p>Climate change is a global crisis that affects us all, but with small steps like donating, we can change the course of the future. By donating funds to accelerate the adoption of renewable energy and reduce carbon emissions, we not only help protect the environment but also improve the welfare of communities worldwide. Let's together be part of the solution to this climate change.</p>
            <a class="donate-btn" href="#donate-section">How to Contribute?</a>

        </div>
    </section>
    <!-- Contribute Sections -->
    <section class="contribute-section">
        <div class="contribute-left">
            <h2 class="section-title" id="contribute-title">End Food Waste, Feed Hope: Donate to Sustainable Food Solutions!</h2>
            <p>Food waste is a barrier to our efforts to achieve food sustainability. By supporting more efficient food management programs through your donation, we can reduce food waste, provide food for those in need, and help create a more sustainable food system.</p>
            <a class="donate-btn" href="#donate-section">How to Contribute?</a>
        </div>
        <div class="contribute-right">
            <img src="{{asset('assets/images/foodwaste.jpg')}}" alt="Donate Now">
        </div>
    </section>
    <section class="contribute-section">
        <div class="contribute-right">
            <img src="{{asset('assets/images/water.jpg')}}" alt="">
        </div>
        <div class="contribute-left">
            <h2 class="section-title" id="contribute-title">Water for All: Be a Lifesaver in the Global Water Crisis!</h2>
            <p>The water crisis is a serious threat to human health and life in various parts of the world. By donating funds to clean water access and water resource management programs, we can help address the global water crisis and ensure that everyone has access to safe and clean water.</p>
            <a class="donate-btn" href="#donate-section">How to Contribute?</a>

        </div>
    </section>
    <!-- Contribute Sections -->
    <section class="contribute-section">
        <div class="contribute-left">
            <h2 class="section-title" id="contribute-title">Guardians of the Sea: Protecting Our Marine Environment Together!</h2>
            <p>Our marine environment is increasingly threatened by pollution, climate change, and human activities. However, by donating to marine conservation programs, we can help protect coral reefs, save endangered marine species, and restore disrupted marine ecosystems.</p>
            <a class="donate-btn" href="#donate-section">How to Contribute?</a>
        </div>
        <div class="contribute-right">
            <img src="{{asset('assets/images/protect sea.jpg')}}" alt="Donate Now">
        </div>
    </section>
    <section class="contribute-section">
        <div class="contribute-right">
            <img src="{{asset('assets/images/plastic.jpg')}}" alt="">
        </div>
        <div class="contribute-left">
            <h2 class="section-title" id="contribute-title">Break the Plastic Curse: Donate to Save Our Planet!</h2>
            <p>Plastic waste has become a serious problem threatening our environment. By donating funds to environmentally friendly waste management programs, we can help reduce plastic waste pollution, support recycling, and promote a more sustainable lifestyle.</p>
            <a class="donate-btn" href="#donate-section">How to Contribute?</a>

        </div>
    </section>

    <!-- Bonus Section -->
    <section class="bonus-section">

        <div class="mission-right">
            <h2 class="section-title">
            Together, We Can Overcome: Aid Flood Victims Today!
            </h2>
            <p>Floods are a serious threat to many communities, especially during the rainy season. However, with your help, we can provide emergency assistance to flood victims, build infrastructure more resilient to floods in the future, and save lives. Together, we can provide protection and hope for those affected by floods.</p>
            <a class="donate-btn" href="#donate-section">How to Contribute?</a>
        </div>
        <div class="mission-left">
            <img src="{{asset('assets/images/Banjir Banyumas.jpg')}}" alt="Mission">
        </div>
    </section>
    <section class="contribute-section">
        <div class="contribute-right">
            <img src="{{asset('assets/images/textile 2.jpeg')}}" alt="">
        </div>
        <div class="contribute-left">
            <h2 class="section-title" id="contribute-title">Fashioning a Greener Future: Support Textile Recycling Initiatives!</h2>
            <p>Textile waste creates a significant burden on our environment, but by donating to support textile recycling initiatives and raising awareness of the impact of textile waste, we can help reduce the negative impact of the fashion industry on the environment and encourage more sustainable production practices.</p>
            <a class="donate-btn" href="#donate-section">How to Contribute?</a>

        </div>
    </section>


    <!-- Footer Section -->
    <footer>
        <img src="{{asset('assets/icons/clothes.svg')}}" alt="Donate Here">
        <h3>Please donate us. You can donate via bank or paypal</h3>

    </footer>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
</body>
</html>
