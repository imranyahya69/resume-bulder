<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('css/login_signup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/create.js') }}" defer></script>
    <script src="{{ asset('js/jq.js') }}"></script>

</head>

<body>
    <nav>
        <div class="nav-center">
            <!-- nav header -->
            <div class="nav-header">
                <h1>Resume Builder</h1>
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <!-- end nav header -->

            <!-- links -->
            <ul class="links">
                <li>
                    <a href="{{ route('home') }}">home</a>
                </li>
                @if(Session::get('user'))
                    <li>
                        <a >Welcome | {{ Session::get('user_name') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('create') }}">Create Cv</a>
                    </li>
                    <li>
                        <a href="{{ url('/show'.'/'.Session::get('user')) }}">Preview Cv</a>
                    </li>
                    <li>
                        <a href="{{ url('/edit'.'/'.Session::get('user')) }}">Edit Cv</a>
                    </li>

    
                @else
                    <li>
                        <a href="{{ route('register') }}">Sign Up</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Sign In</a>
                    </li>

                @endif
                @if(Session::get('user'))
                    <li>
                        <a href="{{ route('logout') }}">Logout</a>
                    </li>
                @endif
            </ul>
            <!-- end links -->

            <!-- social media -->
            <ul class="social-icons">
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-behance"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-sketch"></i>
                    </a>
                </li>
            </ul>
            <!-- social media -->
        </div>
    </nav>
    <main>
        @yield('content');
    </main>
</body>

</html>
