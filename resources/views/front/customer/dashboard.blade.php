@extends('front.layout.app')

@section('title', 'Dashboard')

@section('content')



<section class="myaccount">
    <div class="padding_x_5_lg padding_0_sm">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                @include('front.layout.sidenav')
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 my-5">




                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                        <div class="card_sec_main py-4">
                            <div class="card_sec min-height-250">
                                <div class="d-flex justify-content-between">
                                <p class="main_heading font-size-16 mt-0">NAME, PASSWORD & PREFS</p>
                                <p class="main_heading font-size-11 mt-0"><a href="{{route('front.customer.editinfo')}}">Edit</a></p>
                                </div>
                                <hr>
                                <p class="sub_heading text-uppercase">TEST TEST TEST</p>
                                <p class="sub_heading"><strong>EMAIL:</strong> test@gmail.com</p>
                                <p class="sub_heading"><strong>PASSWORD:</strong> ********</p>
                                <p class="sub_heading"><strong>ADDRESSES</strong> h-999-44 abc street</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                        <div class="card_sec_main py-4">
                            <div class="card_sec text-center min-height-250">
                                <p class="main_heading">
                                COUPONS
                                </p>
                                <hr>
                                <p class="sub_heading">
                                NO COUPONS ARE CURRENTLY ASSOCIATED WITH YOUR ACCOUNT.
                                </p>
                                <button class="btn btn-warning px-5 py-2 font-size-14">START SHOPPING</button>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                        <div class="card_sec_main py-4">
                            <div class="card_sec text-center min-height-250">
                                <p class="main_heading">
                                ORDER HISTORY
                                </p>
                                <hr>
                                <p class="sub_heading">
                                No orders yet.
                                </p>
                                <button class="btn btn-warning px-5 py-2 font-size-14">START SHOPPING</button>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                        <div class="card_sec_main py-4">
                            <div class="card_sec text-center min-height-250">
                                <p class="main_heading">
                                WHO I’M SHOPPING FOR
                                </p>
                                <hr>
                                <p class="sub_heading">
                                HAVE LITTLE ONES TO SHOP FOR?
                                </p>
                                <p class="sub_heading">
                                Add their birthdays here for special offers just for them!
                                </p>
                                <button class="btn btn-warning px-5 py-2 font-size-14">MANAGE</button>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                        <div class="card_sec_main py-4">
                            <div class="card_sec text-center min-height-250">
                                <p class="main_heading">
                                WISHLIST
                                </p>
                                <hr>
                                <p class="sub_heading">
                                GOT YOUR EYE ON SOMETHING?
                                </p>
                                <p class="sub_heading">
                                Save it here so you don’t forget. Or share your wishlist with friends and family.
                                </p>
                                <button class="btn btn-warning px-5 py-2 font-size-14">VIEW</button>

                            </div>
                        </div>
                    </div>



                </div>
            </div>


        </div>
    </div>
</section>


@endsection


