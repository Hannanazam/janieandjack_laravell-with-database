@extends('front.layout.app')

@section('title', 'Products')

@section('content')
<section class="listing_page">
  <div class="padding_x_5_lg padding_0_sm">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
       @include('front.layout.sidenav')
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="filters_search">
          <div class="d-flex justify-content-between mt-3">
            <div class="size_filter px-1">

              <a class="btn text-center filter_btn dropdown-toggle afterr_border px-0" href="#">
                Filters
              </a>
            </div>

            <div class="special_filter">
              <div class="size_filter px-1 float-right">
                <a class="btn dropdown-toggle afterr_border px-0" href="#" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-expanded="false">
                  Sort By <span class="float-right"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <p class="m-0">Select all that apply.</p>
                  <div class="select_filters">
                    <div class="checkboxes">
                      <input type="radio" id="sort1" name="category">
                      <label for="sort1">
                        Best Matches
                      </label>
                      <input type="radio" id="sort2" name="category">
                      <label for="sort2">
                        Price Low - High
                      </label>
                      <input type="radio" id="sort3" name="category">
                      <label for="sort3">
                        Price High - Low
                      </label>
                      <input type="radio" id="sort4" name="category">
                      <label for="sort4">
                        Newest
                      </label>
                    </div>
                    <button class="btn btn-warning">Done</button>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="filters_area">

            <div class="normal_filter d-flex">

              <div class="size_filter px-1">
                <a class="btn dropdown-toggle afterr_border px-0" href="#" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-expanded="false">
                  Size <span class="float-right"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <p class="m-0">Select all that apply.</p>
                  <div class="select_filters">
                    <div class="checkboxes">
                      <input type="checkbox" id="checkbox1">
                      <label for="checkbox1">
                        NB (0-10LBS)
                      </label>
                      <input type="checkbox" id="checkbox2">
                      <label for="checkbox2">
                        One Size
                      </label>
                      <input type="checkbox" id="checkbox3">
                      <label for="checkbox3">
                        0-3M
                      </label>
                      <input type="checkbox" id="checkbox4">
                      <label for="checkbox4">
                        3-6M
                      </label>
                    </div>
                    <button class="btn btn-warning">Done</button>
                  </div>
                </div>
              </div>

              <div class="size_filter px-1">
                <a class="btn dropdown-toggle afterr_border px-0" href="#" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-expanded="false">
                  Color <span class="float-right"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <p class="m-0">Select all that apply.</p>
                  <div class="select_filters">
                    <div class="checkboxes">
                      <input type="checkbox" id="color1">
                      <label for="color1">
                        <img
                          src="https://www.janieandjack.com/on/demandware.static/-/Sites-JanieAndJack-Library/default/dw55ec9353/images/janieandjack/swatches/blue.png"
                          alt="">
                      </label>
                      <input type="checkbox" id="color2">
                      <label for="color2">
                        <img
                          src="https://www.janieandjack.com/on/demandware.static/-/Sites-JanieAndJack-Library/default/dw55ec9353/images/janieandjack/swatches/blue.png"
                          alt="">
                      </label>
                      <input type="checkbox" id="color3">
                      <label for="color3">
                        <img
                          src="https://www.janieandjack.com/on/demandware.static/-/Sites-JanieAndJack-Library/default/dw55ec9353/images/janieandjack/swatches/blue.png"
                          alt="">
                      </label>
                      <input type="checkbox" id="color4">
                      <label for="color4">
                        <img
                          src="https://www.janieandjack.com/on/demandware.static/-/Sites-JanieAndJack-Library/default/dw55ec9353/images/janieandjack/swatches/blue.png"
                          alt="">
                      </label>
                    </div>
                    <button class="btn btn-warning">Done</button>
                  </div>
                </div>

              </div>


              <div class="size_filter px-1">
                <a class="btn dropdown-toggle afterr_border px-0" href="#" role="button" id="dropdownMenuLink"
                  data-toggle="dropdown" aria-expanded="false">
                  Category <span class="float-right"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <p class="m-0">Select all that apply.</p>
                  <div class="select_filters">
                    <div class="checkboxes">
                      <input type="radio" id="category1" name="category">
                      <label for="category1">
                        Dresses
                      </label>
                      <input type="radio" id="category2" name="category">
                      <label for="category2">
                        Tees
                      </label>
                      <input type="radio" id="category3" name="category">
                      <label for="category3">
                        Pants
                      </label>
                      <input type="radio" id="category4" name="category">
                      <label for="category4">
                        Sweaters
                      </label>
                    </div>
                    <button class="btn btn-warning">Done</button>
                  </div>
                </div>

              </div>
            </div>



            <!-- <div class="special_filter">
                <div class="size_filter px-1 float-right">
        <a class="btn dropdown-toggle afterr_border px-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
            Sort By <span class="float-right"><i class="fas fa-chevron-down"></i></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <p class="m-0">Select all that apply.</p>
                  <div class="select_filters">
                   <div class="checkboxes">
                       <input type="radio" id="sort1" name="category">
                       <label for="sort1">
                         Best Matches
                        </label>
                        <input type="radio" id="sort2" name="category">
                       <label for="sort2">
                         Price Low - High
                        </label>
                        <input type="radio" id="sort3" name="category">
                       <label for="sort3">
                       Price High - Low
                        </label>
                        <input type="radio" id="sort4" name="category">
                       <label for="sort4">
                         Newest
                        </label>
                   </div>
                   <button class="btn btn-warning">Done</button>
                  </div>
                </div>
                </div>
                </div> -->


          </div>

        </div>

          <div class="text-right pr-2">
          918 ITEMS
          </div>

        <div class="slider_section cards">
          <div class="row">


            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="item">
                <a href="{{route('front.productdetail', $product->id)}}">
                <div class="slider_image">
                  <!-- <img src="https://i1.adis.ws/i/janieandjack/100023035_JJ/color?$PLP_main$" alt=""> -->
                  <img class="card_img_top" src="{{ asset($product->feature_image)}}"
                    data-org="{{ asset($product->hoverimage)}}"
                    data-img="{{ asset($product->feature_image)}}" alt="">
                </div>
                <div class="card-body text-center">
                  <a class="quickview small-link" href="">Quick Look</a>
                  <p class="card-text mb-1 mt-0">{{ $product->title }}</p>
                  <h5 class="card-title my-1"><del>PKR {{$product->price}}</del> <span class="text-danger">PKR {{$product->discount_price}}</span></h5>
                  {{-- <span style="color:#3c759a;font-size:12px;">Sizes 3m-12yrs</span> --}}
                  <span style="color:#3c759a;font-size:12px;">{{$product->sku}}</span>

                  <div class="rate">
                    <input type="radio" id="abc{{$product->id . + 1}}" name="abc{{ $product->id }}" value="5">
                    <label for="abc{{$product->id . + 1}}" title="text">5 stars</label>
                    <input type="radio" id="abc{{$product->id . + 2}}" name="abc{{ $product->id }}" value="4">
                    <label for="abc{{$product->id . + 2}}" title="text">4 stars</label>
                    <input type="radio" id="abc{{$product->id . + 3}}" name="abc{{ $product->id }}" value="3">
                    <label for="abc{{$product->id . + 3}}" title="text">3 stars</label>
                    <input type="radio" id="abc{{$product->id . + 4}}" name="abc{{ $product->id }}" value="2">
                    <label for="abc{{$product->id . + 4}}" title="text">2 stars</label>
                    <input type="radio" id="abc{{$product->id . + 5}}" name="abc{{ $product->id }}" value="1">
                    <label for="abc{{$product->id . + 5}}" title="text">1 star</label>
                  </div>

                </div>
              </a>
              </div>
            </div>
            @endforeach
{{--
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="item">
                <div class="slider_image">
                  <!-- <img src="https://i1.adis.ws/i/janieandjack/100023035_JJ/color?$PLP_main$" alt=""> -->
                  <img class="card_img_top" src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$PLP_main$"
                    data-org="https://i1.adis.ws/i/janieandjack/70120852_JJ/color?$PLP_main$"
                    data-img="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$PLP_main$" alt="">
                </div>
                <div class="card-body text-center">
                  <a class="quickview small-link" href="">Quick Look</a>
                  <p class="card-text mb-1 mt-0">The Poplin Shirt</p>
                  <h5 class="card-title my-1"><del>PKR 7,726.84</del> <span class="text-danger">PKR 6,726.84</span></h5>
                  <span style="color:#3c759a;font-size:12px;">Sizes 3m-12yrs</span>

                  <div class="rate">
                    <input type="radio" id="star10" name="rate1" value="5">
                    <label for="star10" title="text">5 stars</label>
                    <input type="radio" id="star9" name="rate1" value="4">
                    <label for="star9" title="text">4 stars</label>
                    <input type="radio" id="star8" name="rate1" value="3">
                    <label for="star8" title="text">3 stars</label>
                    <input type="radio" id="star7" name="rate1" value="2">
                    <label for="star7" title="text">2 stars</label>
                    <input type="radio" id="star6" name="rate1" value="1">
                    <label for="star6" title="text">1 star</label>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="item">
                <div class="slider_image">
                  <!-- <img src="https://i1.adis.ws/i/janieandjack/100023035_JJ/color?$PLP_main$" alt=""> -->
                  <img class="card_img_top" src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$PLP_main$"
                    data-org="https://i1.adis.ws/i/janieandjack/70120852_JJ/color?$PLP_main$"
                    data-img="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$PLP_main$" alt="">
                </div>
                <div class="card-body text-center">
                  <a class="quickview small-link" href="">Quick Look</a>
                  <p class="card-text mb-1 mt-0">The Poplin Shirt</p>
                  <h5 class="card-title my-1"><del>PKR 7,726.84</del> <span class="text-danger">PKR 6,726.84</span></h5>
                  <span style="color:#3c759a;font-size:12px;">Sizes 3m-12yrs</span>

                  <div class="rate">
                    <input type="radio" id="star15" name="rate2" value="5">
                    <label for="star15" title="text">5 stars</label>
                    <input type="radio" id="star14" name="rate2" value="4">
                    <label for="star14" title="text">4 stars</label>
                    <input type="radio" id="star13" name="rate2" value="3">
                    <label for="star13" title="text">3 stars</label>
                    <input type="radio" id="star12" name="rate2" value="2">
                    <label for="star12" title="text">2 stars</label>
                    <input type="radio" id="star11" name="rate2" value="1">
                    <label for="star11" title="text">1 star</label>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="item">
                <div class="slider_image">
                  <!-- <img src="https://i1.adis.ws/i/janieandjack/100023035_JJ/color?$PLP_main$" alt=""> -->
                  <img class="card_img_top" src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$PLP_main$"
                    data-org="https://i1.adis.ws/i/janieandjack/70120852_JJ/color?$PLP_main$"
                    data-img="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$PLP_main$" alt="">
                </div>
                <div class="card-body text-center">
                  <a class="quickview small-link" href="">Quick Look</a>
                  <p class="card-text mb-1 mt-0">The Poplin Shirt</p>
                  <h5 class="card-title my-1"><del>PKR 7,726.84</del> <span class="text-danger">PKR 6,726.84</span></h5>
                  <span style="color:#3c759a;font-size:12px;">Sizes 3m-12yrs</span>

                  <div class="rate">
                    <input type="radio" id="star20" name="rate3" value="5">
                    <label for="star20" title="text">5 stars</label>
                    <input type="radio" id="star19" name="rate3" value="4">
                    <label for="star19" title="text">4 stars</label>
                    <input type="radio" id="star18" name="rate3" value="3">
                    <label for="star18" title="text">3 stars</label>
                    <input type="radio" id="star17" name="rate3" value="2">
                    <label for="star17" title="text">2 stars</label>
                    <input type="radio" id="star16" name="rate3" value="1">
                    <label for="star16" title="text">1 star</label>
                  </div>

                </div>
              </div>
            </div> --}}


          </div>
        </div>
        <div class="load_more_btn text-center my-3">
        <a href="#" class="btn btn-warning px-5 py-3" id="loadMore">Load More</a>
        </div>
        <div class="banner_ad">
  <img src="https://www.janieandjack.com/on/demandware.static/-/Sites-JanieAndJack-Library/default/dwa42bda57/images/janieandjack/collections-landing/112421_PDP_GiftCard_Desktop.jpg" alt="">
        </div>
        <div class="c_editor_text">
        <p>All eyes on her in our latest accessories and our newest collections in sizes 0 – 12 and select styles up to size 16. From parties to weekend getaways to every day, our shops feature all those must-have pieces for baby, toddler, kid, and tween. For special occasions, we have standout flower girl dresses and outfits for every family celebration. She’ll bloom on in our floral print dresses, and to finish every look, our handbags are the perfect carryall for little treasures she loves. For days out and about, our long sleeve tops are an essential and pair perfectly with our ponte pants. If twirling is her thing, our flouncy skirts with standout prints will be her favorite. Pair them with our tights and boots for crisp days. In colder months, layer her look with our warm jackets featuring plush faux fur and other special details. When the sun comes out, she’ll be ready in our bright swimsuits and hats.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
