<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


<body>

</div>

    <div class="d-flex justify-content-center">
        <form action="{{ route('volunteer.add') }}" method="post">
          @csrf
          @method('POST')
            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" class="form-control mb-2 my-2" id="fname" name="fname" aria-describedby="emailHelp" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" class="mb-2 mt-2 form-control" id="lname" name="lname"  placeholder="Last Name">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class=" mb-2 mt-2 form-control" id="email" name="email"  placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select class="mb-2 mt-2 form-control" name="state" id="state">
                <option value="Aceh">Aceh</option>
                    <option value="Sumatra Utara">Sumatra Utara</option>
                    <option value="Sumatra Selatan">Sumatra Selatan</option>
                    <option value="Sumatra Barat">Sumatra Barat</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Riau">Riau</option>
                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Lampung">Lampung</option>
                    <option value="Bangka Belitung">Bangka Belitung</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                    <option value="Banten">Banten</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="DI Yogyakarta">DI Yogyakarta</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Bali">Bali</option>
                    <option value="NTT">NTT</option>
                    <option value="NTB">NTB</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                    <option value="Maluku Utara">Maluku Utara</option>
                    <option value="Maluku">Maluku</option>
                    <option value="Papua Barat">Papua Barat</option>
                    <option value="Papua<">Papua</option>
                    <option value="Papua Tengah">Papua Tengah</option>
                    <option value="Papua Pegunungan">Papua Pegunungan</option>
                    <option value="Papua Barat Daya">Papua Barat Daya</option>
                </select>
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class=" mb-2 mt-2 form-control" id="city" name="city"  placeholder="Enter city">
            </div>
            
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="mb-2 mt-2 form-control" name="address" id="address"  placeholder="Street Address">
            </div>
            <div class="form-group">
              <label for="postal">Postal Code</label>
              <input type="text" class="mb-2 mt-2 form-control" name="postal" id="postal"  placeholder="Postal Code ">
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="mb-2 mt-2 form-control" name="phone" id="phone"  placeholder="Phone ">
            </div>
            <div class="form-group">
              <label for="article">Article</label>
              <input type="text" class="mb-2 mt-2 form-control" name="article" id="article"  placeholder="Article Title " value="{{ $article->title }}">
            </div>
            <button type="submit" name="submit" class="btn btn-primary" id="">Submit</button>
          </form>

    </div>
    
</body>
</html>