@extends('front.layout.app')

@section('title', 'FAQ')

@section('content')


<section class="faqs">
    <div class="padding_x_5_lg padding_0_sm">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
          @include('front.layout.sidenav')
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 my-5">
          <div class="card_heading">
              <h1>FAQS</h1>
          </div>


     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm mt-5">
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
              </section>


@endsection
