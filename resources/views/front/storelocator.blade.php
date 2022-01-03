

@extends('front.layout.app')

@section('title', 'Store Locator')

@section('content')

<section class="store_locator padding_x_5_lg padding_0_sm">
<div class="main_heading">
    <p>FIND A STORE NEAR YOU</p>
</div>

<div class="text-center store_update">
    <a href="storeLocator.php">
    <p class="main_title">WELCOME BACK</p>
    <p class="sub_title">STORES ARE OPEN AND WE ARE DOING WHAT WE CAN TO KEEP YOU AND OUR TEAMS SAFE.</p>
    <button class="btn btn-warning px-5 py-2">Learn More</button>
    </a>
</div>

<div class="find_location_form my-5 mx-5">
    <form action="">
    <div class="form-row">
            <div class="form-group col-md-6 mb-4">
              <label for="zcode" class="sr-only">Enter Adress or Zip Code</label>
              <input type="text" class="form-control" id="zcode" placeholder="Enter Adress or Zip Code">
            </div>

            <div class="form-group col-md-3 mb-4">
            <select class="custom-select shadow-none">
            <option selected="">Radius 15 Miles</option>
            <option value="1">Radius 20 Miles</option>
            <option value="2">Radius 25 Miles</option>
            <option value="3">Radius 30 Miles</option>
          </select>
            </div>
            <div class="form-group col-md-3 mb-4">
            <input type="btn" class="btn btn-warning w-100 float-right" value="Find Stores">
            </div>
          </div>
    </form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924244.0633343427!2d66.5949475951563!3d25.192146346321973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1639479099795!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
</div>
</section>

@endsection


