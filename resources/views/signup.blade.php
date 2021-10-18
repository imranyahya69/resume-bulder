@extends('layout.main')
@section('content')
        <div class="signup-box">
            <div class="lb-header">
                        <a href="#" class="active" id="signup-box-link">Sign Up</a>
            </div>
            <form class="email-signup" action="{{ route('signup') }}" method="POST">
                @csrf
                <div class="u-form-group">
                    <input type="text" class="form-control" name="user" placeholder="User" />
                </div>
                <div class="u-form-group">
                    <input type="email" name="email" placeholder="Email" />
                </div>
                <div class="u-form-group">
                    <input type="password" name="password" placeholder="Password" />
                </div>
                <div class="u-form-group">
                    <button type="submit">Sign Up</button>
                </div>
            </form>
        </div>
@endsection