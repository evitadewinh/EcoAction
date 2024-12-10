<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('assets/css/style_login.css')}}">
</head>
<body>
    
    <div class="wrapper">
        <div class="title-text">
           <div class="title login">
              Register 
           </div>
        </div>
        <div class="form-container">
           <div class="form-inner">
            <form action="{{route('doRegister')}}" method="POST" class="signup">
                @csrf
                <div class="field">
                    <label for="name">
                        <input type="text" name="name" id="name" placeholder="Username" required>
                    </label>
                </div>
                <div class="field">
                    <label for="email">
                        <input type="text" name="email" id="email" placeholder="Email Address" required>
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
                    <input type="submit" value="SignUp">
                </div>
                <p class="signup-link">Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </form> 
           </div>
        </div>
     </div>
</body>
</html>
