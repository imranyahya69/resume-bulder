<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="{{ asset('css/login_signup.css') }}" rel="stylesheet">
    <script src="{{ asset('js/login_signup.js') }}" defer></script>
    <title>signup</title>
</head>

<body>

    <div class="login-box">
        <div class="lb-header">
            <a href="#" class="active" id="login-box-link">Login</a>
            <a href="#" id="signup-box-link">Sign Up</a>
        </div>
        <form class="email-login" action="{{ route('welcome.login') }}" method="POST">
            @csrf
            <div class="u-form-group">
                <input type="email" placeholder="Email" />
            </div>
            <div class="u-form-group">
                <input type="password" placeholder="Password" />
            </div>
            <div class="u-form-group">
                <button type="submit">Log in</button>
            </div>
            {{-- <div class="u-form-group">
                <a href="#" class="forgot-password">Forgot password?</a>
            </div> --}}
        </form>
        <form class="email-signup">
            <div class="u-form-group">
                <input type="email" placeholder="Email" />
            </div>
            <div class="u-form-group">
                <input type="password" placeholder="Password" />
            </div>
            <div class="u-form-group">
                <input type="password" placeholder="Confirm Password" />
            </div>
            <div class="u-form-group">
                <button>Sign Up</button>
            </div>
        </form>
    </div>
</body>

</html>
