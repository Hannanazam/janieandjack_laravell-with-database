@extends('front.layout.app')

@section('title', 'Gift Service')

@section('content')



<section class="giftservice">
  <div class="padding_x_5_lg padding_0_sm">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
        @include('front.layout.sidenav')
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 my-5">
          <div class="card_heading">
              <h1>GIFT SERVICES</h1>
          </div>

          <div class="link_elements">
              <div class="link_parent" data-id="Gift_Packaging">
                  <a href="javascript:void(0)">Gift Packaging</a>
              </div>
              <div class="link_parent" data-id="Gift_cards">
                  <a href="javascript:void(0)">Gift Cards</a>
              </div>
              <div class="link_parent" data-id="Gift_recipts">
                  <a href="javascript:void(0)">Gift Recipts</a>
              </div>
              <div class="link_parent" data-id="Gift_faqs">
                  <a href="javascript:void(0)">Faq's</a>
              </div>
          </div>

     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="Gift_Packaging">
     <div class="main_heading">
           <p class="mb-3">GIFT PACKAGING</p>
       </div>
       <div class="sub_heading">
           <p>You can choose a gift box option with every order. Just select “Yes” when asked if your order is a gift and the option will appear.</p>
       </div>
       <div class="text-center img_main my-5">
           <img src="https://i1.adis.ws/i/janieandjack/JJ-GiftPackaging_new%2012.29" alt="">
        </div>
        <div class="sub_heading">
            <p>COMPLIMENTARY FLAT PACKED GIFT BOXES</p>
            <p>If you choose "I’ll wrap it myself" at checkout, we will ship you our gift box and gift message card flat for assembly at home. Three boxes maximum per order.</p>
            <p>COMPLIMENTARY BOXED GIFTS</p>
            <p>If you choose "Pack in gift box" at checkout, we will place it in a tissue-lined box for you. Boxed gifts also include a blank or personalized (up to 240 characters) gift message card. Not available for international orders.</p>
            <p>Please note that international orders cannot include any gift packaging.</p>
        </div>
     </div>


     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="Gift_cards">
     <div class="main_heading">
           <p class="mb-3">GIFT CARDS & E-GIFT CARDS</p>
       </div>
       <div class="sub_heading">
           <p>In a special package and shipped priority mail for free, our Gift Cards can be redeemed in shops or online.</p>
            <p>GIFT CARDS</p>
            <p>The recipient will receive their gift card and personal message in a decorative holder and envelope. Gift cards are redeemable at Janie and Jack shops in the U.S. and at janieandjack.com.</p>
            <p>Please note Gift Cards are not available for international orders at this time.</p>
        </div>
        <div class="text-center img_main my-5">
           <img src="https://www.janieandjack.com/on/demandware.static/-/Sites-JanieAndJack-Library/default/dw06bfd11d/images/janieandjack/JJ-GiftCards.jpg" alt="">
        </div>

       <div class="sub_heading">
           <p>E-GIFT CARDS</p>
            <p>For quick delivery, give one of our standout E-Gift Card designs by email. Our E-Gift Card arrives via email directly to the recipient. Redeemable online at janieandjack.com. E-Gift Cards are temporarily unavailable for use in stores.</p>
        </div>

        <div class="text-center img_main my-5">
           <img src="https://www.janieandjack.com/on/demandware.static/-/Sites-JanieAndJack-Library/default/dwb5cd26f5/images/janieandjack/JJ-eGiftCards.jpg" alt="">
        </div>

     </div>


     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="Gift_recipts">
     <div class="main_heading">
           <p class="mb-3">GIFT RECEIPTS</p>
       </div>
       <div class="sub_heading">
           <p>Include a gift receipt with your gift and we will encode the receipt so prices do not appear on the packing slip. Please note that orders containing a gift receipt will not include any other receipt. Due to customs, gift options and gift receipts are not available for international addresses.</p>
       </div>
     </div>


     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="Gift_faqs">
     <div class="main_heading">
           <p class="mb-3">GIFT CARD FAQS</p>
       </div>
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



      </div>
  </div>
  </div>
              </section>


@endsection
