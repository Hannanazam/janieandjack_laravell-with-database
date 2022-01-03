@extends('front.layout.app')

@section('title', 'Edit')

@section('content')

<section class="myaccountedit">
    <div class="padding_x_5_lg padding_0_sm">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                @include('front.layout.sidenav')
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 my-5">




                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                        <div class="card_sec_main py-4">
                            <div class="card_sec min-height-250 text-center">
                                <p class="main_heading font-size-16 mt-0">CHANGE NAME AND/OR EMAIL</p>
                                <hr>
                                <p class="sub_heading font-size-11 mt-0">To change account information, update the form fields below.</p>
                                <div class="form_sec py-3">
                    <form action="">

                    <div class="form-group mb-3">
            <label for="fname" class="sr-only">First Name</label>
            <input type="fname" class="form-control" id="fname" value="Test" placeholder="First Name">
          </div>
                        <div class="form-group mb-3">
            <label for="lname" class="sr-only">Last Name</label>
            <input type="lname" class="form-control" id="lname" value="Test" placeholder="Last Name">
          </div>

                        <div class="form-group mb-3">
            <label for="email" class="sr-only">Email</label>
            <input type="email" class="form-control" id="email" value="test@gmail.com" placeholder="Email">
          </div>
          <div class="form-group mb-3">
            <label for="Password" class="sr-only">Password</label>
            <input type="password" class="form-control" id="Password" value="....." placeholder="Password">
          </div>

          <button type="submit" class="btn btn-warning px-5 py-2 font-size-14">UPDATE INFO</button>
                    </form>
                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                        <div class="card_sec_main py-4">
                            <div class="card_sec min-height-250 text-center">
                                <p class="main_heading font-size-16 mt-0">CHANGE PASSWORD</p>
                                <hr>
                                <p class="sub_heading font-size-11 mt-0">To change password enter your current password and create a new one.</p>
                                <div class="form_sec py-3">
                    <form action="">


          <div class="form-group mb-3">
            <label for="Currentpass" class="sr-only">Current Password</label>
            <input type="password" class="form-control" id="Currentpass" placeholder="Current Password">
          </div>
          <div class="form-group mb-3">
            <label for="newPassword" class="sr-only">New Password</label>
            <input type="password" class="form-control" id="newPassword" placeholder="New Password">
          </div>
          <div class="form-group mb-3">
            <label for="confirmnewPassword" class="sr-only">Confirm New Password</label>
            <input type="password" class="form-control" id="confirmnewPassword" placeholder="Confirm New Password">
          </div>

          <button type="submit" class="btn btn-warning px-5 py-2 font-size-14">CHANGE PASSWORD</button>
                    </form>
                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>


        </div>
    </div>
</section>

@endsection
