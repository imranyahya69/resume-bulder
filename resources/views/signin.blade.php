@extends('layout.main')
@section('content')

    <div class="login-box">
        <div class="lb-header">
            <a href="#" class="active" id="login-box-link">Sign In</a>
        </div>
        <form class="email-login" action="{{ route('signin') }}" method="POST">
            @csrf
            <div class="u-form-group">
                <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="u-form-group">
                <input type="password" name="password" placeholder="Password" />
            </div>
            <div class="u-form-group">
                <button type="submit">Sign in</button>
            </div>
        </form>
    </div>
@endsection