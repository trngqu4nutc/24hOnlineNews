@extends('layouts.login')

@section('title')
    <title>Đăng nhập</title>
@endsection

@section('content')
    <div class="card-header">
        <h3>Đăng nhập</h3>
        <div class="d-flex justify-content-end social_icon">
            <span><i class="fab fa-facebook-square"></i></span>
            <span><i class="fab fa-google-plus-square"></i></span>
            <span><i class="fab fa-twitter-square"></i></span>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="email">

            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" name="password" class="form-control" placeholder="password">
            </div>
            <div class="row align-items-center remember">
                <input type="checkbox" name="remember_me" id="remember_me">
                <label style="margin-top: 10px;" for="remember_me"> Nhớ mật khẩu</label>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" class="btn float-right login_btn">
            </div>
        </form>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-center links">
            Don't have an account?<a href="#">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#">Forgot your password?</a>
        </div>
    </div>
@endsection
