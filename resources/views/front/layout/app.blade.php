<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> @yield('title', 'Site') | {{config('app.name')}} </title>
  <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css'>

  @yield('style')
  
</head>

<body>
  
@include('front.layout.header')
@yield('content')
@include('front.layout.footer')

</body>

<script src="{{asset('assets/front/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/front/js/app.js')}}"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js'></script>

<script>
  $(document).ready(function () {
    $(window).resize(function () {
      if ($(window).width() > 990) {
        $(".dropdown_nav").hover(
          function () {
            $('.dropdown_menu_nav', this).not('.in .dropdown_menu_nav').stop(true, true).fadeIn("fast");
            $(this).toggleClass('open');
          },
          function () {
            $('.dropdown_menu_nav', this).not('.in .dropdown_menu_nav').stop(true, true).fadeOut("fast");
            $(this).toggleClass('open');
          }
        );
      } else {
        $('.dropdown_menu_nav').off('mouseenter.large mouseleave.large');
      }
    }).resize();


  });

  $('.dropdown-menu').on('click', function (event) {
    event.stopPropagation();
  });
 
  $('.owl-carousel').owlCarousel({
    loop: true,
    stagePadding: 15,
    margin: 10,
    dots: false,
    nav: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      640: {
        items: 2
      },
      960: {
        items: 3
      },
      1200: {
        items: 4
      }
    }
  })
</script>

@yield('js')

</html>