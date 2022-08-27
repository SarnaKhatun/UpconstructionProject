<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:07:32 GMT -->
<head>
    <meta charset="utf-8">
    <title>BIZTROX</title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}registerLogin-assets/plugins/bootstrap/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('/')}}registerLogin-assets/plugins/magnific-popup/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('/')}}registerLogin-assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}registerLogin-assets/plugins/slick/slick-theme.css">
    <!-- themify icon -->
    <link rel="stylesheet" href="{{asset('/')}}registerLogin-assets/plugins/themify-icons/themify-icons.css">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('/')}}registerLogin-assets/plugins/animate/animate.css">
    <!-- Aos -->
    <link rel="stylesheet" href="{{asset('/')}}registerLogin-assets/plugins/aos/aos.css">
    <!-- swiper -->
    <link rel="stylesheet" href="{{asset('/')}}registerLogin-assets/plugins/swiper/swiper.min.css">
    <!-- Stylesheets -->
    <link href="{{asset('/')}}registerLogin-assets/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('/')}}registerLogin-assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{asset('/')}}registerLogin-assets/images/favicon.png" type="image/x-icon">

</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{asset('/')}}registerLogin-assets/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<section class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="signup">
                    <div class="row">
                        <div class="col-md-5 signup-greeting overlay" style="background-image: url({{asset('/')}}registerLogin-assets/images/background/signup.jpg);">
                            <img src="{{asset('/')}}registerLogin-assets/images/logo-signup.png" alt="logo">
                            <h4>Welcome!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna.</p>
                        </div>
                        <div class="col-md-7">
                            <div class="signup-form">
                                <form action="{{route('login')}}" method="post" >
                                    @csrf
                                    <div class="col-12">
                                        <h4>Login</h4>
                                        <p class="float-sm-right">Need An Account?
                                            <a href="{{route('register')}}">Sign Up</a>
                                        </p>
                                    </div>

                                    <section class="py-5"></section>

                                    <div class="col-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-primary btn-sm" type="submit" >Login</button>
                                    </div>
                                    <div class="col-sm-8 text-sm-right">
                                        <p class="signup-with">Or Login with</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="bg-facebook">
                                                    <i class="ti-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="bg-google">
                                                    <i class="ti-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="{{asset('/')}}registerLogin-assets/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('/')}}registerLogin-assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- magnific popup -->
<script src="{{asset('/')}}registerLogin-assets/plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
<!-- slick slider -->
<script src="{{asset('/')}}registerLogin-assets/plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="{{asset('/')}}registerLogin-assets/plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script  src="{{asset('/')}}registerLogin-assets/plugins/google-map/gmap.js"></script>
<!-- Syo Timer -->
<script src="{{asset('/')}}registerLogin-assets/plugins/syotimer/jquery.syotimer.js"></script>
<!-- aos -->
<script src="{{asset('/')}}registerLogin-assets/plugins/aos/aos.js"></script>
<!-- swiper -->
<script src="{{asset('/')}}registerLogin-assets/plugins/swiper/swiper.min.js"></script>
<!-- Main Script -->
<script src="{{asset('/')}}registerLogin-assets/js/script.js"></script>

</body>

<!-- Mirrored from demo.themefisher.com/biztrox/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:07:32 GMT -->
</html>