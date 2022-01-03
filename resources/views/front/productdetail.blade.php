@extends('front.layout.app')

@section('title', 'Product Detail')

@section('content')

<section class="detail_page padding_x_5_lg padding_0_sm">
    <div class="bread_crumb">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="listing.php">FORMAL</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shisham (FR0434)</li>
      </ol>
    </nav>
        </div>


        <div class="product_detail_section">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 px-0">
                    <div class="d-block">
                        <div class="main_img text-center">
                        <img src="{{ asset($product->feature_image) }}" alt="">
                        </div>
                        <div class="slider_img">
                        @foreach ($product_image as $item)
                        <img src="{{asset($item->image)}}" alt="">
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 pl-md-4 margin-top-mobile-150">
                    <div class="product_description">
                <h4 class="product-title">
                    <span>{{$product->title}}</span>
                </h4>
                <div class="sku-product description_detail">
                    <p>Stock : <span>{{$product->stock}} PCS</span>
                    </p>
                </div>
                <h4 class="product-title my-2">
                    <span><del>PKR {{$product->price}}</del> <span class="text-danger">PKR {{$product->discount_price}}</span></span>
                </h4>
                <div class="description_detail">
                    <p class="light-color-theme">SKU : {{$product->sku}}</p>
                </div>
                <hr>
                <div class="description_detail">
                    <p>Material :
                        @foreach ($variations as $item)
                        @php
                            $vari = array();
                            $size = explode('-', $item->variation);
                            array_push($vari, $size[1]);
                            $variation = array_unique($vari);
                        @endphp
                        @endforeach
                        @foreach ($variation as $item)
                        <span>{{$item}}</span>
                        @endforeach
                    </p>
                    {{-- <div class="box d-flex">
                    <div class="img_lable">
                            <input type="radio" name="img-radio" checked="" id="img1">
                            <label for="img1"><img src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$poiswatch2$" alt=""></label>

                                <input type="radio" name="img-radio" id="img2">
                            <label for="img2"><img src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$poiswatch2$" alt=""></label>
                    </div>
                    </div> --}}
                </div>
                <div class="description_detail mt-3">
                    <p>SIZE : <span class="size_output text-uppercase"></span></p>
                    <div class="box d-flex">
                        <div class="sizes_label">
                        @foreach ($variations as $item)
                        @php
                            $size = explode('-', $item->variation);
                        @endphp
                            <input type="radio" name="radio" class="variation_lg" value="{{$size[0]}}" id="{{$item->id}}">
                            <label for="{{$item->id}}">{{$size[0]}}</label>
                            @endforeach
                    </div>
                    </div>
                </div>

                <div class="button_group mt-lg-4 mt-md-3">
                    <div class="row">

                    <div class="col-lg-5 col-md-6 col-sm-12 pl-lg-0 pl-md-0 padding_0_sm_sm">
                    <select class="select_qty" name="" id="">
                          <option selected="" disabled>Quantity</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                        </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 pl-lg-0 pl-md-0 padding_0_sm_sm">
                           <a href="checkout.php"> <button class="btn btn-warning w-100 py-2 text-uppercase font-weight-bold">Add to cart</button></a>
                        </div>
                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 pl-lg-0">
                            <button class="btn btn-outline-danger w-100 py-2 my-3 text-uppercase font-weight-bold">buy it now</button>
                        </div> -->
                    </div>
                </div>
                <div class="accordian_sec">
                        <div class="accordian mt-5 pr-3">
                        <h4 class="accordian-title my-0" data-id="description">
                            <span>PRODUCT DETAIL</span>
                            <span class="float-right"><i class="fas fa-chevron-down"></i></span>
                        </h4>
                        <div class="accordian-text" id="description">
                           <?= $product->description ?>
                        </div>
                        <hr class="my-2">
                        </div>
                </div>


                </div>
                </div>
            </div>
        </div>
        </section>

@endsection

