@extends('front.layout.app')

@section('title', 'wishlist')

@section('content')


<div class="sign_in_sec_main">
    <div class="sign_in_sec btn_sec">
        <a href="{{route('front.registeration.signin')}}" class="btn active">Sign In</a>
        <a href="{{route('front.registeration.createaccount')}}" class="btn">Create Account</a>
    </div>
    <div class="sign_in_sec">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 border-right">
                    <div class="form_sec">
                        <form action="">
                            <p class="title">WELCOME BACK!</p>
                            <p class="sub-title">Log in to manage your account!</p>
                            <div class="form-group mb-3">
                <label for="email" class="sr-only">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group mb-3">
                <label for="Password" class="sr-only">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password">
              </div>

              <div class="checkbox">
                  <input type="checkbox" checked name="" id="remember">
                  <label for="remember">Remember</label>
              </div>
              <input type="submit" class="btn btn-warning px-5 mb-2" value="Sign In"> <br> <a href="{{route('front.registeration.forgetpass')}}" class="forgot_pass">Forgot Password?</a>
                        </form>
                    </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 margin_top">
                <img src="https://www.janieandjack.com/on/demandware.static/-/Sites-JanieAndJack-Library/default/dwf18cc69b/images/janieandjack/account/JJ_AcctLogin-SignUp_Evergreen.png" alt="">
                <div class="description my-3">
    <ul>
      <li>Early access to sales</li>
      <li>Online first alerts for new styles</li>
      <li>Plus, a special birthday offer</li>
    </ul>
    </div>

    <button class="btn btn-warning text-uppercase px-5 py-2">See Our Latest</button>
            </div>
        </div>
    </div>
    </div>

@endsection


