@extends('front.layout.app')

@section('title', 'Order')

@section('content')
<section class="order_page">
  <div class="padding_x_5_lg padding_0_sm">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
        @include('front.layout.sidenav')
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 my-5">
       <div class="main_heading">
           <p class="mb-3">ORDER HISTORY</p>
       </div>
       <div class="sub_heading">
           <p>We have no order records for this account.</p>
       </div>


       <div class="link_elements">
              <div class="link_parent" data-id="My_Orders">
                  <a href="javascript:void(0)">My Orders</a>
              </div>
              <div class="link_parent" data-id="Cancelled_Order">
                  <a href="javascript:void(0)">Cancelled Order</a>
              </div>
              <div class="link_parent" data-id="Pending">
                  <a href="javascript:void(0)">Pending</a>
              </div>
          </div>

     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="My_Orders">


       <div class="checkout_info">
          <div class="card_sec_main py-4">
            <div class="card_sec">
            <table class="w-100 table_section_detail">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><img src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$Cart_main$" alt=""></td>
                            <td>
                                <p>REINDEER FAIR ISLE POM BEANIE</p>
                                <p>Item 100040197</p>
                                <p>Color: Bradbury Red Fair Isle</p>
                                <p>Size: 0-6m</p>
                                <p><a href="">Edit Details</a></p>
                            </td>
                            <td>
                            <select class="select_qty w-auto" name="" id="">
                      <option selected="" disabled="">Quantity</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                    <p><a href="">Remove</a></p>
                    <p><a href="">Save To Wishlist</a></p>
                            </td>
                            <td>
                                <p><del>PKR 5,325.42</del> <br> <span class="text-danger">PKR 4,669.55</span></p>
                            </td>
                            <td>
                                <p><del>PKR 4,669.55</del> <br> <span class="text-danger">PKR 3,268.12</span>
                                <br>
                                Total Price: PKR 3,268.12
                                <br> In Stock</p>
                            </td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
          </div>
        </div>


        <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="Cancelled_Order">


    <div class="checkout_info">
       <div class="card_sec_main py-4">
         <div class="card_sec">
         <table class="w-100 table_section_detail">
                 <thead>
                     <tr>
                         <th colspan="2">Product</th>
                         <th>Quantity</th>
                         <th>Price</th>
                         <th>Total Price</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td class="text-center"><img src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$Cart_main$" alt=""></td>
                         <td>
                             <p>REINDEER FAIR ISLE POM BEANIE</p>
                             <p>Item 100040197</p>
                             <p>Color: Bradbury Red Fair Isle</p>
                             <p>Size: 0-6m</p>
                             <p><a href="">Edit Details</a></p>
                         </td>
                         <td>
                         <select class="select_qty w-auto" name="" id="">
                   <option selected="" disabled="">Quantity</option>
                   <option>1</option>
                   <option>2</option>
                   <option>3</option>
                   <option>4</option>
                 </select>
                 <p><a href="">Remove</a></p>
                 <p><a href="">Save To Wishlist</a></p>
                         </td>
                         <td>
                             <p><del>PKR 5,325.42</del> <br> <span class="text-danger">PKR 4,669.55</span></p>
                         </td>
                         <td>
                             <p><del>PKR 4,669.55</del> <br> <span class="text-danger">PKR 3,268.12</span>
                             <br>
                             Total Price: PKR 3,268.12
                             <br> In Stock</p>
                         </td>
                     </tr>
                     </tr>
                 </tbody>
             </table>
         </div>
       </div>
       </div>
     </div>


     <div class="link_child padding_x_5_lg padding_0_sm padding_x_5_lg padding_0_sm" id="Pending">


    <div class="checkout_info">
       <div class="card_sec_main py-4">
         <div class="card_sec">
         <table class="w-100 table_section_detail">
                 <thead>
                     <tr>
                         <th colspan="2">Product</th>
                         <th>Quantity</th>
                         <th>Price</th>
                         <th>Total Price</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td class="text-center"><img src="https://i1.adis.ws/i/janieandjack/100040197_JJ/color?$Cart_main$" alt=""></td>
                         <td>
                             <p>REINDEER FAIR ISLE POM BEANIE</p>
                             <p>Item 100040197</p>
                             <p>Color: Bradbury Red Fair Isle</p>
                             <p>Size: 0-6m</p>
                             <p><a href="">Edit Details</a></p>
                         </td>
                         <td>
                         <select class="select_qty w-auto" name="" id="">
                   <option selected="" disabled="">Quantity</option>
                   <option>1</option>
                   <option>2</option>
                   <option>3</option>
                   <option>4</option>
                 </select>
                 <p><a href="">Remove</a></p>
                 <p><a href="">Save To Wishlist</a></p>
                         </td>
                         <td>
                             <p><del>PKR 5,325.42</del> <br> <span class="text-danger">PKR 4,669.55</span></p>
                         </td>
                         <td>
                             <p><del>PKR 4,669.55</del> <br> <span class="text-danger">PKR 3,268.12</span>
                             <br>
                             Total Price: PKR 3,268.12
                             <br> In Stock</p>
                         </td>
                     </tr>
                     </tr>
                 </tbody>
             </table>
         </div>
       </div>
       </div>
     </div>


      </div>
  </div>
  </div>
              </section>

@endsection
