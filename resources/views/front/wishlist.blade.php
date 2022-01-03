@extends('front.layout.app')

@section('title', 'wishlist')

@section('content')


<section class="wishlist_page">
    <div class="padding_x_5_lg padding_0_sm">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
       @include('front.layout.sidenav')
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 my-5">
          <div class="checkout_info">
            <div class="card_sec_main py-4">
              <div class="card_sec">
                <p class="main_heading">SEND MY LIST TO A FRIEND</p>
                <hr>
                <a href="checkout.php" class="btn btn-warning py-3 px-5 mb-2 font-size-14">Make The List Public</a>
                <button type="button" class="btn modal_btn_form text-uppercase" data-toggle="modal" data-target="#exampleModal">
                  <i class="far fa-envelope"></i>
                </button>
                <button type="button" class="btn modal_btn_form web_url_btn">
                  <i class="far fa-link"></i>
                </button>




                <p class="text-muted web_url" style="font-size:12px;">
                  <strong>Wishlist URL:</strong> <a style="color:#666;"
                    href="https://www.janieandjack.com/showotherwishlist?lang=en&WishListID=b92a35ab5ba74bd4b2f9d07d82">https://www.janieandjack.com/showotherwishlist?lang=en&WishListID=b92a35ab5ba74bd4b2f9d07d82</a>
                </p>
              </div>
            </div>

            <div class="card_sec_main py-4 mt-4">
              <div class="card_sec">
                <p class="main_heading">SEND MY LIST TO A FRIEND</p>
                <hr>
                <a href="checkout.php" class="btn btn-warning py-3 px-5 mb-2 text-uppercase font-size-14">Start Addng Items</a>
              </div>
            </div>


            <div class="card_sec_main py-4 mt-4">
              <div class="card_sec">
                <p class="main_heading">FIND SOMEONE'S WISHLIST:</p>
                <hr>
                <form action="">
                <div class="form-group mb-4">
                            <label for="fname" class="sr-only">First Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                          </div>
                <div class="form-group mb-4">
                            <label for="lname" class="sr-only">Last Name</label>
                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                          </div>



                          <div class="form-group mb-4">
                            <label for="emailFriend" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="emailFriend" placeholder="Email">
                          </div>
                <a href="checkout.php" class="btn btn-warning py-3 px-5 mb-2 text-uppercase font-size-14">FIND</a>

                </form>
              </div>

            </div>


          </div>
        </div>
      </div>
    </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="" class="form_section">
                          <p class="form_text text-center">SEND TO A FRIEND</p>
                          <div class="form-group mb-4">
                            <label for="namef" class="sr-only">Your Name (Optional)</label>
                            <input type="text" class="form-control" id="namef" placeholder="Your Name (Optional)">
                          </div>

                          <div class="form-group mb-4">
                            <label for="emailf" class="sr-only">Enter Your Email</label>
                            <input type="email" class="form-control" id="emailf" placeholder="Enter Your Email">
                          </div>

                          <div class="form-group mb-4">
                            <label for="friendname" class="sr-only">Friend's Name</label>
                            <input type="text" class="form-control" id="friendname" placeholder="Friend's Name">
                          </div>

                          <div class="form-group mb-4">
                            <label for="friendemail" class="sr-only">Friend's Email</label>
                            <input type="email" class="form-control" id="friendemail" placeholder="Friend's Email">
                          </div>

                          <div class="form-group mb-4">
                            <label for="messagefriend" class="sr-only">Personal Message (Optional)</label>
                            <textarea class="form-control" placeholder="Personal Message (Optional)" id="messagefriend"
                              rows="5"></textarea>
                          </div>

                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-warning px-4 py-3">Send</button>
                        <button type="button" class="btn btn-warning px-4 py-3" data-dismiss="modal">Cancle</button>
                      </div>
                    </div>
                  </div>
                </div>
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
