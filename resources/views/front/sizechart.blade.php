@extends('front.layout.app')

@section('title', 'Size Chart')

@section('content')

<section class="sizechart">
  <div class="padding_x_5_lg padding_0_sm">

          <div class="card_heading mt-5">
              <h1>SIZE CHARTS</h1>
          </div>

          <div class="link_elements">
              <div class="link_parent" data-id="girlChart">
                  <a href="javascript:void(0)">GIRL</a>
              </div>
              <div class="link_parent" data-id="boyChart">
                  <a href="javascript:void(0)">BOY</a>
              </div>
              <div class="link_parent" data-id="newbornChart">
                  <a href="javascript:void(0)">NEWBORN</a>
              </div>
              <div class="link_parent" data-id="takemehomeChart">
                  <a href="javascript:void(0)">TAKE ME HOME</a>
              </div>
              <div class="link_parent" data-id="adultChart">
                  <a href="javascript:void(0)">ADULT</a>
              </div>
              <div class="link_parent" data-id="measuringtipsChart">
                  <a href="javascript:void(0)">MEASURING TIPS</a>
              </div>
          </div>

     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="girlChart">
     <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description">
           <p>CLOTHING <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer py-4 accordian-text" id="description">
           <table class="table table-striped">
  <thead>
    <tr>
      <td scope="col">SIZE</td>
      <td scope="col">HEIGHT</td>
      <td scope="col">WEIGHT</td>
      <td scope="col">CHEST</td>
      <td scope="col">WAIST</td>
      <td scope="col">HIP</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>  <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
  </tbody>
</table>
           </div>
       </div>

       <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description1">
           <p>SHOES <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer py-4 accordian-text" id="description1">
           <table class="table table-striped">
  <thead>
    <tr>
      <td scope="col">SIZE</td>
      <td scope="col">HEIGHT</td>
      <td scope="col">WEIGHT</td>
      <td scope="col">CHEST</td>
      <td scope="col">WAIST</td>
      <td scope="col">HIP</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>  <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
  </tbody>
</table>
           </div>
       </div>

     </div>


     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="boyChart">
     <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description2">
           <p>CLOTHING <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer py-4 accordian-text" id="description2">
           <table class="table table-striped">
  <thead>
    <tr>
      <td scope="col">SIZE</td>
      <td scope="col">HEIGHT</td>
      <td scope="col">WEIGHT</td>
      <td scope="col">CHEST</td>
      <td scope="col">WAIST</td>
      <td scope="col">HIP</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>  <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
  </tbody>
</table>
           </div>
       </div>

       <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description3">
           <p>SHOES <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer py-4 accordian-text" id="description3">
           <table class="table table-striped">
  <thead>
    <tr>
      <td scope="col">SIZE</td>
      <td scope="col">HEIGHT</td>
      <td scope="col">WEIGHT</td>
      <td scope="col">CHEST</td>
      <td scope="col">WAIST</td>
      <td scope="col">HIP</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>  <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
  </tbody>
</table>
           </div>
       </div>

     </div>


     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="newbornChart">
     <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description4">
           <p>CLOTHING <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer py-4 accordian-text" id="description4">
           <table class="table table-striped">
  <thead>
    <tr>
      <td scope="col">SIZE</td>
      <td scope="col">HEIGHT</td>
      <td scope="col">WEIGHT</td>
      <td scope="col">CHEST</td>
      <td scope="col">WAIST</td>
      <td scope="col">HIP</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>  <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
  </tbody>
</table>
           </div>
       </div>

       <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description5">
           <p>SHOES <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer py-4 accordian-text" id="description5">
           <table class="table table-striped">
  <thead>
    <tr>
      <td scope="col">SIZE</td>
      <td scope="col">HEIGHT</td>
      <td scope="col">WEIGHT</td>
      <td scope="col">CHEST</td>
      <td scope="col">WAIST</td>
      <td scope="col">HIP</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>  <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
  </tbody>
</table>
           </div>
       </div>

     </div>

     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="takemehomeChart">
     <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description6">
           <p>CLOTHING <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer py-4 accordian-text" id="description6">
           <table class="table table-striped">
  <thead>
    <tr>
      <td scope="col">SIZE</td>
      <td scope="col">HEIGHT</td>
      <td scope="col">WEIGHT</td>
      <td scope="col">CHEST</td>
      <td scope="col">WAIST</td>
      <td scope="col">HIP</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>  <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
  </tbody>
</table>
           </div>
       </div>

       <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description7">
           <p>SHOES <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer py-4 accordian-text" id="description7">
           <table class="table table-striped">
  <thead>
    <tr>
      <td scope="col">SIZE</td>
      <td scope="col">HEIGHT</td>
      <td scope="col">WEIGHT</td>
      <td scope="col">CHEST</td>
      <td scope="col">WAIST</td>
      <td scope="col">HIP</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>  <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
  </tbody>
</table>
           </div>
       </div>

     </div>


     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="adultChart">
     <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description8">
           <p>CLOTHING <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer py-4 accordian-text" id="description8">
           <table class="table table-striped">
  <thead>
    <tr>
      <td scope="col">SIZE</td>
      <td scope="col">HEIGHT</td>
      <td scope="col">WEIGHT</td>
      <td scope="col">CHEST</td>
      <td scope="col">WAIST</td>
      <td scope="col">HIP</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>  <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
  </tbody>
</table>
           </div>
       </div>

       <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title" data-id="description9">
           <p>SHOES <span class="float-right"><i class="fas fa-chevron-down"></i></span></p>
           </div>
           <div class="faqs_answer py-4 accordian-text" id="description9">
           <table class="table table-striped">
  <thead>
    <tr>
      <td scope="col">SIZE</td>
      <td scope="col">HEIGHT</td>
      <td scope="col">WEIGHT</td>
      <td scope="col">CHEST</td>
      <td scope="col">WAIST</td>
      <td scope="col">HIP</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
    <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>  <tr>
      <td>2T</td>
      <td>33 - 36 in</td>
      <td>30 - 33 lb</td>
      <td>21 in</td>
      <td>20½ in</td>
      <td>21½ in</td>
    </tr>
  </tbody>
</table>
           </div>
       </div>

     </div>



     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="measuringtipsChart">
     <div class="sub_heading">
           <div class="faqs_question cursor_pointer accordian-title text-center">
           <p class="w-75 mx-auto my-4">Follow the measuring tips below to find the correct size and best fit for your child.
For best results, have your child wear little to no clothing and use a fabric tape measure.</p>

<img src="https://www.janieandjack.com/on/demandware.static/-/Sites-JanieAndJack-Library/default/dw488efbc8/images/janieandjack/size-charts/JJ_SizeChart_IMG.jpg" class="w-50 m-auto" alt="">
           </div>
       </div>

     </div>



      </div>

              </section>


@endsection


