<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link rel="stylesheet" href="{{asset('assets/css/style_login.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Login 
            </div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="{{route('doLogin')}}" method="POST" class="login">
                    @csrf
                    <div class="field">
                        <input type="text" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
        <div class="signup-link">
         <p>Don't have an account?<a href="{{route('register')}}"> Sign up</a></p>
        </div>
    </div>
</body>
</html>
