@extends('front.layout.app')

@section('title', 'Home')

@section('content')
<section class="landing_page">

<div class="images_section text-center">
    <img src="https://cdn.media.amplience.net/i/janieandjack/120821_SaleEdit_HP_Hero_Desktop.webp?$banner_bar_desktop$&fmt=webp" class="hide_small" alt="">
    <div class="row my-5 hide_small">
        <div class="col-md-4 text-right"><img src="https://cdn.media.amplience.net/i/janieandjack/120821_SaleEdit_HP_CTA1_Desktop.webp?$banner_square_desktop$&fmt=webp" alt=""></div>
        <div class="col-md-4 text-center"><img src="https://cdn.media.amplience.net/i/janieandjack/120821_SaleEdit_HP_CTA2_Desktop.webp?$banner_square_desktop$&fmt=webp" alt=""></div>
        <div class="col-md-4 text-left"><img src="https://cdn.media.amplience.net/i/janieandjack/120821_SaleEdit_HP_CTA3_Desktop.webp?$banner_square_desktop$&fmt=webp" alt=""></div>
    </div>
    <img src="https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_Desktop.webp?$banner_bar_desktop$&fmt=webp" id="change_src" alt="">
    <div class="row my-5 small_size_set">
        <div class="col-md-6 text-right"><img  id="change_src1" src="https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_CTA1_Desktop.webp?$banner_rectangle_desktop$&fmt=webp" alt=""></div>
        <div class="col-md-6 text-left"><img  id="change_src2" src="https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_CTA2_Desktop.webp?$banner_rectangle_desktop$&fmt=webp" alt=""></div>
        <div class="col-md-6 text-right"><img  id="change_src3" src="https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_CTA3_Desktop.webp?$banner_rectangle_desktop$&fmt=webp" alt=""></div>
        <div class="col-md-6 text-left"><img  id="change_src4" src="https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_CTA4_Desktop.webp?$banner_rectangle_desktop$&fmt=webp" alt=""></div>
    </div>
    <div class="padding_x_5_lg padding_0_sm">
        <img src="https://cdn.media.amplience.net/i/janieandjack/113021_STrans_HP_TRANS_Desktop?$banner_bar_desktop$" alt="">
    </div>
    <div class="row padding_x_5_lg padding_0_sm image_padding_set">
        <div class="col-md-6 pl-0">
            <img src="//cdn.media.amplience.net/i/janieandjack/111521_Winter2_HP_Dresses_Desktop?$banner_rectangle_desktop$" class="w-100" alt="">
        </div>
        <div class="col-md-6 pr-0">
            <img src="https://cdn.media.amplience.net/i/janieandjack/111521_Winter2_HP_Shirts_Desktop.webp?$banner_rectangle_desktop$&fmt=webp" class="w-100" alt="">
        </div>
    </div>

    <div class="padding_x_5_lg padding_0_sm">
        <img src="https://cdn.media.amplience.net/i/janieandjack/120621_HP_FM_SALE_Desktop.webp?$banner_bar_desktop$&fmt=webp" alt="">
    </div>

    <div class="padding_x_5_lg padding_0_sm">
        <img src="https://cdn.media.amplience.net/i/janieandjack/113021_HP_SALE_Desktop.webp?$banner_bar_desktop$&fmt=webp" alt="">
    </div>


</div>

    

</div>

</section>

@include('front.layout.footerslider')
@endsection