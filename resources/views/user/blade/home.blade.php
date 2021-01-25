<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skripsi WP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->
    
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/slicknav.css')}}">
    
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
        
    <script src="{{asset('user/js/vendor/jquery-1.12.4.min.js')}}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> 
    


</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    @include('user.blade.header')

    @yield('content')


    
    <!-- footer start -->
    
    <footer class="footer" style="margin-top: 300px">
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Teknik Informatika Skripsi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->




    <script src="{{asset('user/js/popper.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('user/js/ajax-form.js')}}"></script>
    <script src="{{asset('user/js/waypoints.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('user/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('user/js/scrollIt.js')}}"></script>
    <script src="{{asset('user/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('user/js/wow.min.js')}}"></script>
    <script src="{{asset('user/js/nice-select.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('user/js/plugins.js')}}"></script>
    <script src="{{asset('user/js/gijgo.min.js')}}"></script>
    <script src="{{asset('user/js/slick.min.js')}}"></script>



    <!--contact js-->
    <script src="{{asset('user/js/contact.js')}}"></script>
    <script src="{{asset('user/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.form.js')}}"></script>
    <script src="{{asset('user/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('user/js/mail-script.js')}}"></script>


    <script src="{{asset('user/js/main.js')}}"></script>
</body>

    
@yield('js-section')

</html>