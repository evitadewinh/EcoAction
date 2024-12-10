<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{asset('assets/css/style_login.css')}}">
</head>
<body>
    
    <div class="wrapper">
        <div class="title-text">
           <div class="title login">
              Edit Profile 
           </div>
        </div>
        <div class="form-container">
           <div class="form-inner">
            <form action="{{route('update', $user->id)}}" method="POST" class="signup">
                @csrf
                @method('PUT')
                <div class="field">
                    <label for="name">
                        <input type="text" name="name" id="name" placeholder="Username" required value="{{ $user->name }}">
                    </label>
                </div>
                <div class="field">
                    <label for="email">
                        <input type="text" name="email" id="email" placeholder="Email Address" required value="{{ $user->email }}">
                    </label>
                </div>
                <div class="field">
                    <label for="password">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </label>
                </div>
                <div class="field">
                    <label for="confirm_password">
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                    </label>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Save">
                </div>
                <p class="signup-link"><a href="javascript:void(0);" onclick="goBack()">Go Back</a></p>
            </form> 
           </div>
        </div>
     </div>
</body>
</html>
<script>
    function goBack() {
        window.history.back();
    }
</script>