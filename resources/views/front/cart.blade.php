@extends('front.layout.app')

@section('title', 'Cart')

@section('content')


<section class="cart_page padding_x_5_lg padding_0_sm">

<div class="main_heading text-center">
<h5 class="main_title">
INTERNATIONAL SHIPMENTS MAY BE DELAYED DUE TO THE IMPACT OF COVID-19.
<br>
<br>
<span class="text-danger mt-3">
DUTIES AND TAXES ARE NOT INCLUDED IN SHIPPING OR ORDER TOTAL.
</span>
</h5>
</div>

<div class="product_section_detail">
    <div class="main_heading">
    <h5 class="main_title">SHOPPING BAG (1) <a href="index.php">Continue Shopping <i class="fas fa-chevron-right"></i></a></h5>
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 overflow_auto">
                <table class="w-100 table_section_detail">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$Cart_main$" alt=""></td>
                            <td>
                                <p>REINDEER FAIR ISLE POM BEANIE</p>
                                <p>Item 100040197</p>
                                <p>Color: Bradbury Red Fair Isle</p>
                                <p>Size: 0-6m</p>
                                <p><a href="">Edit Details</a></p>
                            </td>
                            <td>
                            <select class="select_qty w-auto" name="" id="">
                      <option selected="" disabled="">Quantity</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                    <p><a href="">Remove</a></p>
                    <p><a href="">Save To Wishlist</a></p>
                            </td>
                            <td>
                                <p><del>PKR 5,325.42</del> <br> <span class="text-danger">PKR 4,669.55</span></p>
                            </td>
                            <td>
                                <p><del>PKR 4,669.55</del> <br> <span class="text-danger">PKR 3,268.12</span>
                                <br>
                                Total Price: PKR 3,268.12
                                <br> In Stock</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 px-0">
                                <div class="card_sec_main py-4">
                                <div class="card_sec text-center">
                                    <img src="./asset/Capture.PNG" alt="">
                                    <p class="main_heading">
                                    Gift Cards
                                    </p>
                                    <p class="desc">
                                    For every special occasion
                                    </p>
                                    <button class="btn btn-warning text-uppercase py-2">
                                        LEARN MORE
                                    </button>
                                </div>
                                </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 px-0">
                                <div class="card_sec_main py-4">
                                <div class="card_sec text-center">
                                    <img src="./asset/Capture.PNG" alt="">
                                    <p class="main_heading">
                                    Gift Cards
                                    </p>
                                    <p class="desc">
                                    For every special occasion
                                    </p>
                                    <button class="btn btn-warning text-uppercase py-2">
                                        LEARN MORE
                                    </button>
                                </div>
                                </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="checkout_info">
        <div class="card_sec_main py-4">
            <p class="text-center">ESTIMATED ORDER TOTAL PKR 3,268.12</p>
            <a href="{{route('front.checkout')}}" class="btn btn-warning w-100 py-3 mb-2">CHECKOUT</a>
                                <div class="card_sec">
                                    <p class="main_heading">
                                    ORDER SUMMARY
                                    </p>
                                    <p class="desc">
                                    Subtotal <span class="float-right">PKR 3,268.12</span>
                                    </p>
                                    <p class="desc">
                                    Estimated Shipping <span class="float-right">-</span>
                                    </p>
                                    <p class="desc">
                                    Estimated Tax <span class="float-right">-</span>
                                    </p>
                                    <hr>
                                    <p class="desc">
                                    Estimated Order Total <span class="float-right">PKR 3,268.12</span>
                                    </p>
                                </div>
                                </div>
                                <div class="text-center help_text">
                                <p>Please apply promotion codes before proceeding to checkout. Help</p>
                                </div>
                                <div class="card_sec_main py-4">
                                <p class="main_heading">
                                PROMO CODE
                                    </p>
                                    <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Your Promo Code" aria-label="Enter Your Promo Code" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <span class="input-group-text btn-warning" id="basic-addon2"><button class="btn btn-warning p-0">Enter</button></span>
                </div>
              </div>
                                </div>

                                <div class="text-center help_text mt-4">
                                    <img src="https://www.janieandjack.com/on/demandware.static/-/Sites-JanieAndJack-Library/default/dw763979b0/images/janieandjack/checkout/norton.png" alt="">
                                <p class="mt-1">SECURE CHECKOUT</p>
                                </div>
                                <hr>
                                <div class="text-center help_text mt-4">
                                <p class="mt-1"><a href="" style="font-size: 12px;
    color: #666;">Learn More About Shipping Options</a> <a href="" class="ml-2" style="font-size: 12px;
    color: #666;">Return Policy</a></p>
                                </div>
                                <hr>

                                </div>
        </div>
    </div>


</div>

    </section>

@include('front.layout.footerslider')
@include('front.layout.recentlyview')
@endsection
