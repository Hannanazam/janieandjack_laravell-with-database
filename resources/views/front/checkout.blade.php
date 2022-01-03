
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>



<section class="checkout">
  <div class="text-center mainImg">
    <a href="{{route('front.index')}}">
      <img
        src="https://www.janieandjack.com/on/demandware.static/Sites-JanieAndJack-Site/-/default/dw55dc3487/images/Logo.png"
        alt="">
    </a>
  </div>
  <div class="payments_options">
    <div class="d-flex justify-content-between m-auto step_group">
      <span class="step_title active">
        <span>Customer Info</span>
      </span>
      <span class="step_title">
        <span>Shipping Method</span>
      </span>
      <span class="step_title">
        <span>Payment Info</span>
      </span>
    </div>
  </div>

  <div class="customer_info padding_x_5_lg padding_0_sm my-5">
    <form action="">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12 info info_sec">
          <p class="form_text">Customer Info</p>
          <div class="form-group mb-4">
            <label for="email" class="sr-only">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>

          <p class="form_text mt-5">Shipping Address</p>
          <div class="form-row">
            <div class="form-group col-md-6 mb-4">
              <label for="fname" class="sr-only">First Name</label>
              <input type="text" class="form-control" id="fname" placeholder="First Name">
            </div>

            <div class="form-group col-md-6 mb-4">
              <label for="lname" class="sr-only">Last Name</label>
              <input type="text" class="form-control" id="lname" placeholder="Last Name">
            </div>
          </div>

          <div class="form-group mb-4">
            <label for="Address" class="sr-only">Address</label>
            <input type="text" class="form-control" id="Address" placeholder="Address Line 1">
          </div>

          <div class="form-group mb-4">
            <label for="Address2" class="sr-only">Address2</label>
            <input type="text" class="form-control" id="Address2" placeholder="Address Line 2 (Optional)">
          </div>

          <select class="custom-select shadow-none mb-4">
            <option selected disabled>Country</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>



          <div class="form-row">
            <div class="form-group col-md-6 mb-4">
              <label for="city" class="sr-only">City</label>
              <input type="text" class="form-control" id="city" placeholder="City">
            </div>

            <div class="form-group col-md-6 mb-4">
              <label for="province" class="sr-only">Province</label>
              <input type="text" class="form-control" id="province" placeholder="Province (Optional)">
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6 mb-4">
              <label for="Postal" class="sr-only">Postal Code</label>
              <input type="text" class="form-control" id="Postal" placeholder="Postal Code">
            </div>

            <div class="form-group col-md-6 mb-4">
              <label for="Telephone" class="sr-only">Telephone</label>
              <input type="phone" class="form-control" id="Telephone" placeholder="Telephone (Optional)">
            </div>
          </div>

          <p class="form_text bottom_text">Please verify the address provided before proceeding</p>
          <p class="form_text bottom_text"><a href="">Shipping to another country? Go to our US site</a></p>

          <input type="btn" class="btn btn-warning px-5 float-right continuebtn1" value="Continue">

        </div>

        <div class="col-lg-7 col-md-6 col-sm-12 shipping shipping_sec">

          <p class="form_text mt-5">Shipping Address</p>
          <p class="form_text mt-2 mb-0 text-secondary">PAK</p>
          <p><a href="">Edit</a></p>
          <p class="form_text mt-5">Shipping Method</p>

          <div class="method_radio_button">
            <div class="d-flex justify-content-between">
              <div class="method_sec">
                <div class="methods">
                  <input type="radio" checked name="address" id="address1">
                  <label for="address1">International Express Delivery (1-4 Business Days) <br>
                    <span>Estimated Delivery: <span>2/2/21</span></span></label>
                </div>
              </div>

              <div class="price_area my-auto">
                <p class="mb-0">4,414.05 PKR</p>
              </div>
            </div>

          </div>

          <p class="form_text mt-2 mb-0 text-secondary bottom_text"><i class="fas fa-chevron-left"></i>
            <a class="backbtn1">Return to Customer Information</a>
          </p>
          <input type="button" class="btn btn-warning px-5 float-right continuebtn2" value="Continue">

        </div>

        <div class="col-lg-7 col-md-6 col-sm-12 payment payment_sec">
          <p>To apply promotion codes, please return to <a href="">cart</a>.</p>
          <p class="form_text mt-2">Gift Cards</p>

          <div class="form-row overflow-auto-md">
            <div class="form-group col-md-5 mb-4">
              <label for="number" class="sr-only">Number</label>
              <input type="number" class="form-control" id="number" placeholder="Number (Optional)">
            </div>

            <div class="form-group col-md-5 mb-4">
              <label for="pin" class="sr-only">Pin</label>
              <input type="number" class="form-control" id="pin" placeholder="Pin (Optional)">
            </div>
            <div class="form-group col-md-2 mb-4">
              <button class="btn btn-warning px-5 py-3">Enter</button>
            </div>
          </div>

          <p class="form_text">Payment Method</p>

          <div class="method_radio_button">
            <div class="d-flex justify-content-between">
              <div class="method_sec">
                <div class="methods">
                  <input type="radio" onClick="hideForm()" name="address" checked id="address2">
                  <label for="address2">Cash On Delivery</label>
                </div>
              </div>
            </div>
          </div>

          <div class="method_radio_button mt-3">
            <div class="d-flex justify-content-between">
              <div class="method_sec">
                <div class="methods">
                  <input type="radio" onClick="showForm()" name="address" id="address11">
                  <label for="address11">Credit Card</label>
                </div>
              </div>

              <div class="image_area my-auto">
                <img src="https://flowcdn.io/util/logos/payment-methods/visa/60/original.png" alt="">
                <img src="https://flowcdn.io/util/logos/payment-methods/mastercard/60/original.png" alt="">
                <img src="https://flowcdn.io/util/logos/payment-methods/american_express/60/original.png" alt="">
              </div>

            </div>
            <div class="form_area">
              <div class="form-group mb-4">
                <label for="cardnumber" class="sr-only">Card Number</label>
                <input type="number" class="form-control" id="cardnumber" placeholder="Card Number">
              </div>

              <div class="form-group mb-4">
                <label for="cardname" class="sr-only">Card Holder Name</label>
                <input type="text" class="form-control" id="cardname" placeholder="Card Holder Name">
              </div>

              <div class="form-row">
                <div class="form-group col-md-4 mb-4">
                  <label for="expirymonth" class="sr-only">Expiry Month (MM)</label>
                  <input type="number" class="form-control" id="expirymonth" placeholder="Expiry Month (MM)">
                </div>

                <div class="form-group col-md-4 mb-4">
                  <label for="expiryyear" class="sr-only">Expiry Year (YYYY)</label>
                  <input type="number" class="form-control" id="expiryyear" placeholder="Expiry Year (YYYY)">
                </div>


                <div class="form-group col-md-4 mb-4">
                  <label for="cvv" class="sr-only">CVV</label>
                  <input type="number" class="form-control" id="cvv" placeholder="CVV">
                </div>
              </div>
            </div>

          </div>
          <p class="form_text bottom_text mt-3">By placing this order, I agree to the <a href="">Privacy
              Policy</a> and <a href="">Terms of Use</a>.</p>
          <p class="form_text bottom_text mt-3 d-flex"><input type="checkbox" name="" id="accept" class="mr-3"><label
              for="accept">I would like to receive promotions and special offers from
              Janie and Jack. You can opt out at any time by following the link at the bottom of these
              emails or by calling 1-877-449-8800. For more information, including how to exercise your
              rights to your personal data, please see our <a href="">Privacy Policy</a>.</label></p>

          <p class="form_text mt-2 mb-0 text-secondary bottom_text"><i class="fas fa-chevron-left"></i>
            <a class="backbtn2">Return to Shipping Method</a>
          </p>
          <input type="submit" class="btn btn-warning px-5 float-right" value="Complete Order">
        </div>


        <div class="col-lg-5 col-md-6 col-sm-12">
          <div class="checkout_info">
            <div class="card_sec_main py-4">
              <div class="card_sec">
                <p class="main_heading">
                  YOUR CART
                </p>
                <hr>
                <div class="cart_item_sec">
                  <div class="d-flex justify-content-between">
                    <div class="imgsec">
                      <img src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$CUSTOM$" alt="">
                      <span class="item_count">1</span>
                    </div>
                    <div class="text_area">
                      <p>Reindeer Fair Isle Pom Beanie <br>
                        ColorBradbury Red Fair Isle <br>
                        Size0-6m</p>
                    </div>

                    <div class="text_area">
                      <p>4,669.55 PKR</p>
                    </div>
                  </div>
                </div>
                <hr>
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

          </div>

        </div>
      </div>
    </form>

  </div>

</section>


<script>
    $('.info_sec').show();
    $('.shipping_sec').hide();
    $('.payment_sec').hide();
    $('.continuebtn1').click(function () {
      $('.info_sec').hide();
      $('.shipping_sec').show();
      $('.step_title:nth-child(2)').addClass('active');
    });

    $('.continuebtn2').click(function () {
      $('.info_sec').hide();
      $('.shipping_sec').hide();
      $('.payment_sec').show();
      $('.step_title:nth-child(3)').addClass('active');
    });

    $('.backbtn1').click(function () {
      $('.info_sec').show();
      $('.shipping_sec').hide();
      $('.payment_sec').hide();
      $('.step_title:nth-child(2)').removeClass('active');
    });


    $('.backbtn2').click(function () {
      $('.info_sec').hide();
      $('.shipping_sec').show();
      $('.payment_sec').hide();
      $('.step_title:nth-child(3)').removeClass('active');
    });


    $('.method_radio_button .form_area').hide();
    function showForm() {
      $('.method_radio_button .form_area').slideDown();
      //   $(document.getElementById("address1")).show()
    }

    function hideForm() {
      $('.method_radio_button .form_area').slideUp();
      //   $(document.getElementById("address1")).show()
    }

  </script>

</body>
</html>
