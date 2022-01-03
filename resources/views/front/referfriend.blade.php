@extends('front.layout.app')

@section('title', 'Refer a Friend Service')

@section('content')


<section class="referfriend">
    <div class="padding_x_5_lg padding_0_sm">

        <div class="main_heading mt-5 text-center sweetness">
            <p>SHARE THE SWEETNESS</p>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="checkout_info">
                    <div class="card_sec_main py-4">
                        <div class="card_sec text-center min-height-600 pt-3">
                            <p class="main_heading">
                                HOW IT WORKS
                            </p>
                            <div class="row my-4">
                                <div class="col-md-6 br-theme w-50_sm">
                                <div class="border_sec mx-2">
                                    <p class="main_heading">
                                        GIVE A FRIEND
                                    </p>
                                    <p class="main_heading mt-0">
                                    <span class="rate">15</span><span class="percent">%</span><span class="Off">OFF</span>
                                    </p>
                                    <p class="sub_heading text-center">
                                    THEIR FIRST PURCHASE OF $40 OR MORE ONLINE*
                                    </p>

                                </div>
                                </div>
                                <div class="col-md-6 w-50_sm">
                                <div class="border_sec mx-2">
                                    <p class="main_heading">
                                    RECEIVE
                                    </p>
                                    <p class="main_heading mt-0">
                                    <span class="rate">15</span><span class="percent">%</span><span class="Off">OFF</span>
                                    </p>
                                    <p class="sub_heading text-center">
                                    OFF YOUR NEXT PURCHASE OF $40 OR MORE ONLINE*
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="text_info text-left">
                            <div class="d-flex">
                                <div class="icon">
                                <p class="m-auto"><i class="fal fa-users"></i></p>
                                </div>
                                <p class="mr-2">Share your Janie and Jack offer with friends via Facebook, email or link.</p>
                            </div>
                        </div>

                        <div class="text_info text-left">
                            <div class="d-flex">
                                <div class="icon">
                                <p class="m-auto"><i class="fal fa-box-open"></i></p>
                                </div>
                                <p class="mr-2">Your friends get 15% Off Their First Purchase of $40 Or More Online.</p>
                            </div>
                        </div>

                        <div class="text_info text-left">
                            <div class="d-flex">
                                <div class="icon">
                                <p class="m-auto"><i class="fal fa-heart"></i></p>
                                </div>
                                <p class="mr-2">After their purchase, we’ll email you a coupon for 15% Off Your Purchase of $40 Or More Online!</p>
                            </div>
                        </div>



                    </div>
                </div>



            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mt-20">
                <div class="checkout_info">
                    <div class="card_sec_main py-4">
                        <div class="card_sec text-center min-height-600 pt-3">
                            <p class="main_heading">
                            TELL YOUR FRIENDS
                            </p>
                                <button class="btn btn-warning mx-auto mt-2 font-size-14 w-75 py-3">Email</button>
                                <button class="btn btn-warning mx-auto mt-2 font-size-14 w-75 py-3 web_url_btn">Get Your Link</button>
                                <p class="text-muted web_url text-break" style="font-size:12px;">
                <strong>Wishlist URL:</strong> <a style="color:#666;"
                  href="https://www.janieandjack.com/showotherwishlist?lang=en&WishListID=b92a35ab5ba74bd4b2f9d07d82">https://www.janieandjack.com/showotherwishlist?lang=en&WishListID=b92a35ab5ba74bd4b2f9d07d82</a>
              </p>
                                <p>Keep track of shares and special offers</p>
                                <button class="btn btn-info mx-auto font-size-14 w-75 py-3">View Dashboard</button>
                                <div class="border_sec mx-2 my-4">
                                    <p class="main_heading">
                                    20,549 people have already shared this offer with their friends!
                                    </p>
                                </div>
                                <p class="font-size-14 mx-3">*Friend must be first-time purchaser on Janie and Jack online. Exclusions and restrictions apply.</p>
                                <p class="font-size-14 mx-3">By accepting this offer you agree to the Terms of Service and Privacy Policy.</p>

                    </div>
                </div>



            </div>
        </div>


    </div>
    <p class="my-5 text-center">20,549 people have already shared this offer with their friends!</p>

</section>

@endsection

@section('js')
<script>
    $(".web_url").hide();
          $('.web_url_btn').click(function () {
            $('.web_url').slideToggle();
          });
  </script>
@endsection
