@extends('front.layout.app')

@section('title', 'wishlist')

@section('content')

<div class="sign_in_sec_main">
<div class="sign_in_sec btn_sec">
    <a href="{{route('front.registeration.signin')}}" class="btn">Sign In</a>
    <a href="{{route('front.registeration.createaccount')}}" class="btn active">Create Account</a>
</div>
<div class="sign_in_sec">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 border-right">
                <div class="form_sec">
                    <form action="">
                        <p class="title mb-4">CREATE YOUR ONLINE ACCOUNT</p>
                        <!-- <p class="sub-title">Log in to manage your account!</p> -->
                        <div class="form-group mb-3">
            <label for="fname" class="sr-only">First Name</label>
            <input type="text" class="form-control" id="fname" placeholder="First Name">
          </div>
                        <div class="form-group mb-3">
            <label for="lname" class="sr-only">Last Name</label>
            <input type="text" class="form-control" id="lname" placeholder="Last Name">
          </div>
                        <div class="form-group mb-3">
            <label for="email" class="sr-only">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group mb-3">
            <label for="createPassword" class="sr-only">Create Password</label>
            <input type="password" class="form-control" id="createPassword" placeholder="Create Password">
          </div>
          <div class="form-group mb-3">
            <label for="confirmPassword" class="sr-only">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
          </div>

          <div class="checkbox d-flex">
              <input type="checkbox" class="mr-3 my-auto" name="" id="offerssubscribe">
              <label for="offerssubscribe" class="mb-0">I WOULD LIKE TO RECEIVE PROMOTIONS AND SPECIAL OFFERS FROM JANIE AND JACK.</label>
          </div>
          <input type="submit" class="btn btn-warning px-5 mt-2" value="Create Account">
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
