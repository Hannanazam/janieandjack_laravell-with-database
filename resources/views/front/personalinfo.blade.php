

@extends('front.layout.app')

@section('title', 'Do Not Sell My Personal Info')

@section('content')

<section class="donotsell">

<div class="main_heading">
           <p class="mb-3">Data Rights Request</p>
       </div>
       <div class="sub_heading text-justify">
           <p>We are committed to protecting your personal information. In accordance with certain state laws, you may have the right to request a copy of the information we maintain about you. You may also have the right to request that we delete your personal information. In addition, California residents may be entitled to opt-out of having their information sold to third parties. Please complete this form so we can record your request.</p>
       </div>

       <div class="sub_heading font-size-11">
           <p>*All fields are required unless marked optional.</p>
       </div>
    <div class="padding_x_5_lg padding_0_sm">
                        <div class="card_sec_main py-4">
                            <div class="card_sec">
                                <p class="main_heading mt-0">Tell us who you are</p>
                                <hr>
                                <div class="radiobtn">
                                   <label for="Customer" class="mx-2 font-size-14">
                                   <input type="radio" name="whoyouare" id="Customer">
                                   Customer
                                   </label>
                                   <label for="Associate / Employee" class="mx-2 font-size-14">
                                       <input type="radio" name="whoyouare" id="Associate / Employee">
                                       Associate / Employee
                                   </label>
                                </div>
                                <hr>
                                <p class="main_heading mt-0">Tell us about your request</p>
                                <hr>
                                <div class="radiobtn">
                                   <label for="personalinfo" class="mx-2 font-size-14">
                                   <input type="radio" name="aboutyourrequest" id="personalinfo">
                                   Access my personal information.
                                   </label>
                                   <br>
                                   <label for="Knowhow" class="mx-2 font-size-14">
                                       <input type="radio" name="aboutyourrequest" id="Knowhow">
                                       Know how my personal information is used, and shared.
                                   </label>
                                   <br>
                                   <label for="deleteinfo" class="mx-2 font-size-14">
                                       <input type="radio" name="aboutyourrequest" id="deleteinfo">
                                       Delete my personal information.
                                   </label>
                                   <br>
                                   <label for="donotsell" class="mx-2 font-size-14">
                                       <input type="radio" name="aboutyourrequest" id="donotsell">
                                       Do Not Sell my personal information.
                                   </label>
                                </div>
                                <hr>
                                 <p class="main_heading mt-0">Is this request for yourself or someone else?</p>
                                <hr>
                                <div class="radiobtn">
                                   <label for="myself" class="mx-2 font-size-14">
                                   <input type="radio" name="yourself_else" id="myself">
                                   For Myself
                                   </label>
                                   <label for="someoneelse" class="mx-2 font-size-14">
                                       <input type="radio" name="yourself_else" id="someoneelse">
                                       Someone Else
                                   </label>
                                </div>
                                <hr>
                                <div class="form_sec py-3">
                    <form action="">

                    <div class="form-group mb-3">
            <label for="fname" class="sr-only">First Name</label>
            <input type="fname" class="form-control" id="fname" placeholder="First Name">
          </div>
                        <div class="form-group mb-3">
            <label for="lname" class="sr-only">Last Name</label>
            <input type="lname" class="form-control" id="lname" placeholder="Last Name">
          </div>

                        <div class="form-group mb-3">
            <label for="email" class="sr-only">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group mb-3">
            <label for="Phone" class="sr-only">Phone</label>
            <input type="number" class="form-control" id="Phone" placeholder="Phone">
          </div>

          <div class="form-group mb-3">
            <label for="address1" class="sr-only">Address 1</label>
            <input type="text" class="form-control" id="address1" placeholder="Address 1">
          </div>

          <div class="form-group mb-3">
            <label for="address2" class="sr-only">Address 2 (Optional)</label>
            <input type="text" class="form-control" id="address2" placeholder="Address 2 (Optional)">
          </div>

          <div class="form-group mb-3">
            <label for="city" class="sr-only">City</label>
            <input type="number" class="form-control" id="city" placeholder="City">
          </div>

          <div class="select_country mb-3">
          <select name="" id="">
                      <option selected="">Select a State</option>
                      <option>Pakistan</option>
                      <option>India</option>
                      <option>USA</option>
                    </select>
                    </div>
          <div class="form-group mb-3">
            <label for="Zip" class="sr-only">Zip Code</label>
            <input type="number" class="form-control" id="Zip" placeholder="Zip Code">
          </div>

          <hr>
                                 <p class="main_heading mt-0">Country of residence</p>
                                <hr>

          <div class="select_country mb-3">
          <select name="" id="">
                      <option selected="">Select a Country</option>
                      <option>Pakistan</option>
                      <option>India</option>
                      <option>USA</option>
                    </select>
                    </div>
                    <hr>
            <div class="text-center">
          <button type="submit" class="btn btn-warning px-5 py-3 w-100 font-size-16">SUBMIT</button>
          </div>
                    </form>
                </div>
                            </div>
                        </div>


                    </div>

</section>

@endsection
