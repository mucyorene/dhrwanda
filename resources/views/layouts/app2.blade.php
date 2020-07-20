<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Internet things -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
        <body>
            @extends('includes.donateNav')
            <br><br><br><br><br>
            @yield('content')
        </body>
        <footer class="ftco-footer ftco-section img" style="background-image: url(images/footer.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">DH Rwanda</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Donation</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy</a></li>
                        <li><a href="#" class="py-2 d-block">Terms Condition</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="/?home=1" class="py-2 d-block">Home</a></li>
                        <li><a href="/about?abt=1" class="py-2 d-block">Who we are</a></li>
                        <li><a href="/services?ser=1" class="py-2 d-block">Services</a></li>
                        <li><a href="/causes?cz=1" class="py-2 d-block">Causes</a></li>
                        <li><a href="/donate?dnt=1" class="py-2 d-block">Donate</a></li>
                        <li><a href="/contact?ctc=1" class="py-2 d-block">Contact</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 AV PAUL VI, KIGALI-NYARUGENGE, Gitarama, Rwanda</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+250 788 890 071</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@dhrwanda.rw</span></a></li>
                        </ul>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12 text-center">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This project designed by <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://ur-std.ur.ac" target="_blank">Student | UR</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                </div>
            </div>
        </footer>
</html>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    $(function(){
      $("#service1").click(function(){
        $("#media1").toggleClass("actives")
      });
      $("#service2").click(function(){
        $("#media2").toggleClass("actives")
      });
      $("#service3").click(function(){
        $("#media3").toggleClass("actives")
      });
      $("#service4").click(function(){
        $("#media4").toggleClass("actives")
      });
    });
  </script>
<!-- Bootstrap core CSS
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
Custom fonts for this template
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="public/css/style.css" type="text/css">
Custom styles for this template
<link href="css/sb-admin.css" rel="stylesheet"> -->