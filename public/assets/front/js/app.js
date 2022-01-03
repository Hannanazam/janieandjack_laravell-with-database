


$(document).ready(function() {
    $('.filter_btn').hide();
    $('.close_icon').hide();
    $('.icon_foot').hide();
    $('.nav_main_link').hide();
    $('.nav-icon').hide();
    $('.search_icon_main').hide();
    $(".shop_all_menu").hide();

    $(".card_img_top").mouseover(function(){

        var a = $(this).attr('data-org');
        this.src= a }).mouseout(function(){
         var b = $(this).attr('data-img');
         this.src= b});



         /*
	Load more content with jQuery - May 21, 2013
	(c) 2013 @ElmahdiMahmoud
*/

$(".link_parent").first().addClass("active");
$(".link_child").first().addClass("active");
$(".link_child").hide();
$(".link_child").first().show();
$(".link_parent").click(function(){
    $(".link_child").hide();
    $(".link_parent").removeClass("active");
    $(".link_child").removeClass("active");
    var elemt_id=$(this).attr("data-id");
    $("#"+elemt_id).addClass("active");
    $(this).addClass("active");
    $("#"+elemt_id).fadeToggle(500);
})



$('.go-to-top-button').hide();
$(window).scroll(function(){
    if($(this).scrollTop() >= 500){
        $('.go-to-top-button').fadeIn();
    } else{
        $('.go-to-top-button').fadeOut();
    }
});


    $(".item").slice(0,8).show();
    $("#loadMore").click(function(e){
      e.preventDefault();
      $(".item:hidden").slice(0,8).fadeIn("slow");

      if($(".item:hidden").length == 0){
         $("#loadMore").fadeOut("slow");
        }
    });

    $(".detail_page .slider_img img").click(function(){
        var checked= $(this).attr("src");
        $(".detail_page .main_img img").attr("src",checked).hide().fadeIn();
    });

    $(".sizes_label input").change(function () {
        var a = $(this).val();
        $(".size_output").text(a);
    });

    $(".accordian-text").hide();
    $(".accordian-title").click(function () {
        $(this).find(".fa-chevron-down").parent().toggleClass("rotate_180");
        // $(this).find(".fa-chevron-up").toggleClass("fa-chevron-down");
        var elem_id = $(this).attr("data-id");
        $("#" + elem_id).slideToggle('fast');
    });

$(window).scroll(function(){
    if($(this).scrollTop() > 100){
        $('.navigation nav').addClass('sticky')
    } else{
        $('.navigation nav').removeClass('sticky')
    }
});

    if($(window).width() <= 992){



$(window).scroll(function(){
    if($(this).scrollTop() > 100){
        $('.navigation nav').removeClass('sticky')
    } else{
        $('.navigation nav').removeClass('sticky')
    }
});


        $('.ship_to').html('<img src="https://flowcdn.io/util/icons/flags-v2/svg/PAK.svg" alt="">')
        $('.store').html('<i class="fal fa-map-marker-alt mr-1"></i>')
        $('.track').html('<i class="fal fa-truck mr-1"></i>')
        $('.signin').html('<i class="fal fa-user mr-1"></i>')
        $('.wishlist').html('<i class="fal fa-heart mr-1"></i>')
    $('.search_icon_main').show();
    $('.search_bar').hide();
    $('.search_icon_main').click(function(){
        $('.search_bar').fadeToggle();
    });
    $('.navbar-toggler.navbar_to_open').click(function(){
        $('.wrapper_black').fadeIn('fast');
        $('.close_icon').fadeIn('fast');
        $('.navbar-collapse').toggleClass('navbar_open');
    });

    $('.close_icon').click(function(){
        $('.wrapper_black').fadeOut('fast');
        $('.close_icon').fadeOut('fast');
        $('.navbar-collapse').toggleClass('navbar_open');
    });

    $('.wrapper_black').click(function(){
        $('.wrapper_black').fadeOut('fast');
        $('.close_icon').fadeOut('fast');
        $('.navbar-collapse').toggleClass('navbar_open');
    });
    $('.nav-icon').show();
    $('.link_area').hide();
    $(this).find('.content_area p').click(function () {
        $(this).next('.link_area').slideToggle();
        $(this).find('.plus_icon i').toggleClass("rotate_45");
        // var a = $(this).next().find(".link_area").fadeIn();
        // console.log(a)
    });
    // $('.dropdown_nav').bind('hover', function(){return false})
    $('.dropdown_nav').unbind(function () {
        $('.dropdown_nav').off('mouseenter mouseleave');
    });


        // $(".dropdown_nav").click(
        //   function () {
        //     $('.dropdown_menu_nav', this).not('.in .dropdown_menu_nav').stop(true, true).fadeIn("fast");
        //     $(this).toggleClass('open');
        //   },
        //   function () {
        //     $('.dropdown_menu_nav', this).not('.in .dropdown_menu_nav').stop(true, true).fadeOut("fast");
        //     $(this).toggleClass('open');
        //   }
        // );

    }else{
        console.log("error in 992px")
    }

    if($(window).width() <= 550){
        $('.shop_all_heading').hide();
        $('.list_item').hide();
        $('.store').hide();
        $('.track').hide();
        $('.wishlist').hide();
        $('.signin').hide();
        $('.nav_main_link').show();
        $('.icon_foot').show();
        $('.menu-footer.menu.pipe').hide();
        $('.footer-sub-title').click(function() {
            $(this).next('.menu-footer.menu.pipe').slideToggle();
            $(this).find('.icon_foot').toggleClass('rotate_45');
            });

            $(".shop_all_menu").show();
            $(".shop_all_menu").click(function () {
            $(".list_item").slideToggle();
            $(this).find(".down_icon").toggleClass("rotate_180")
            });


            $('.normal_filter').hide();
            $('.filter_btn').show();
            $(".normal_filter").removeClass("d-flex");
            $(".filter_btn").click(function () {
                $(".normal_filter").toggleClass("d-flex");
                $(".normal_filter").slideToggle();
                // $(this).find(".down_icon").toggleClass("rotate_180")
                });


        document.getElementById("change_src").src="https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_Mobile.webp?$banner_bar_mobile$&fmt=webp";
        document.getElementById("change_src1").src="https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_CTA1_Mobile.webp?$banner_rectangle_mobile$&fmt=webp";
        document.getElementById("change_src2").src="https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_CTA2_Mobile.webp?$banner_rectangle_mobile$&fmt=webp";
        document.getElementById("change_src3").src="https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_CTA3_Mobile.webp?$banner_rectangle_mobile$&fmt=webp";
        document.getElementById("change_src4").src="https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_CTA4_Mobile.webp?$banner_rectangle_mobile$&fmt=webp";
            // aaa.src = "https://cdn.media.amplience.net/i/janieandjack/102621_W3_HP_Hero_Mobile.webp?$banner_bar_mobile$&fmt=webp";
        }else{
        console.log("error in 550px")

        }

var variation = $('.variation_lg').first().attr('checked',true);
var getvarval = variation.val();
$('.size_output').text(getvarval);


});
