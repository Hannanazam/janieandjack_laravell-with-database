@extends('front.layout.app')

@section('title', 'Shipping Service')

@section('content')




<section class="shippingservices">
  <div class="padding_x_5_lg padding_0_sm">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
        @include('front.layout.sidenav')
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 my-5">
          <div class="card_heading">
              <h1>SHIPPING</h1>
          </div>

          <div class="link_elements">
              <div class="link_parent" data-id="shipping_service">
                  <a href="javascript:void(0)">U.S. SHIPPING SERVICES</a>
              </div>
              <div class="link_parent" data-id="international_shipping">
                  <a href="javascript:void(0)">INTERNATIONAL SHIPPING</a>
              </div>
          </div>

     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="shipping_service">
     <div class="main_heading text-center">
           <p class="mb-3 text-danger">ORDER BY THESE DATES FOR HOLIDAY DELIVERY:</p>
       </div>
       <div class="sub_heading text-center">
           <p>December 17: Standard | December 20: 2-Day</p>
       </div>
     <div class="main_heading">
           <p class="mb-3">U.S. SHIPPING SERVICES</p>
       </div>
       <div class="sub_heading">
           <p>We ship to most locations within the United States as well as to Military (APO/FPO) addresses and U.S. Territories.</p>
       </div>
       <div class="sub_heading text-danger">
           <p>Occasionally, during large promotional events and holiday rush, there may be a slight delay in validating your order, and additional shipping time may be required. Total delivery time includes pending credit authorization, address verification, and processing, plus the expected shipping time for your order.</p>
       </div>

       <table class="table">
  <thead>
    <tr>
      <td scope="col">SHIPPING METHOD</td>
      <td scope="col">TOTAL DELIVERY TIME</td>
      <td scope="col">SHIPPING CHARGE</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Economy</td>
      <td>7-10 business days</td>
      <td>$6</td>
    </tr>
    <tr>
      <td scope="row">Economy</td>
      <td>7-10 business days</td>
      <td>$6</td>
    </tr>
    <tr>
      <td scope="row">Economy</td>
      <td>7-10 business days</td>
      <td>$6</td>
    </tr>
  </tbody>
</table>

        <div class="sub_heading">
            <p>SHIPPING METHODS & DELIVERY TIMELINES</p>
            <p>Janie and Jack offers flat rate shipping & handling! Choose the service level that is right for you and pay one flat rate.</p>
            <p>Certain methods may not be available for every location. Flat rate shipping & handling applies to online orders only. Total delivery time includes the processing time until the order ships, plus the expected shipping time for your order. All orders ship from our fulfillment center in Benicia, CA 94510. Business days are Monday–Friday, excluding holidays. Orders received after 12 noon ET will begin processing the next business day. Please note that Janie and Jack is not responsible for any charges upon delivery due to forwarding addresses. Unfortunately, once placed, orders cannot be edited.</p>
        </div>
<hr>
        <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description">
           <p>WHAT IS A JANIE AND JACK GIFT CARD? <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer px-5 accordian-text" id="description">
           <p>The Gift Card is a pre-paid debit card similar to a gift certificate that can be used to buy merchandise at any U.S. Janie and Jack shop and at www.janieandjack.com. It's more convenient than carrying cash or a paper gift certificate.</p>
           </div>
           <hr>
       </div>


       <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description1">
           <p>WHAT IS A JANIE AND JACK ELECTRONIC GIFT CARD? <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer px-5 accordian-text" id="description1">
           <p>Electronic Gift Cards function in much the same way as Gift Cards. However, Electronic Gift Cards are delivered to their recipient via email. It will take up to 1 business day to process all electronic gift card orders. Electronic Gift Cards are redeemable online.</p>
           </div>
           <hr>
       </div>
     </div>


     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="international_shipping">
     <div class="main_heading">
           <p class="mb-3">INTERNATIONAL SHIPPING SERVICES</p>
       </div>
       <div class="sub_heading text-danger">
           <p>Duties and taxes are not included in the shipping or order total and may be due upon delivery. For orders shipping to the EU, Australia, the United Kingdom, Norway and New Zealand duties and taxes are included in the final order total shown in checkout.</p>
           <p>International shipments are not eligible for free shipping.</p>
       </div>

<hr>
        <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description2">
           <p>WHAT IS A JANIE AND JACK GIFT CARD? <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer px-5 accordian-text" id="description2">
           <p>The Gift Card is a pre-paid debit card similar to a gift certificate that can be used to buy merchandise at any U.S. Janie and Jack shop and at www.janieandjack.com. It's more convenient than carrying cash or a paper gift certificate.</p>
           </div>
           <hr>
       </div>


       <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description3">
           <p>WHAT IS A JANIE AND JACK ELECTRONIC GIFT CARD? <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer px-5 accordian-text" id="description3">
           <p>Electronic Gift Cards function in much the same way as Gift Cards. However, Electronic Gift Cards are delivered to their recipient via email. It will take up to 1 business day to process all electronic gift card orders. Electronic Gift Cards are redeemable online.</p>
           </div>
           <hr>
       </div>
     </div>



      </div>
  </div>
  </div>
              </section>



@endsection
