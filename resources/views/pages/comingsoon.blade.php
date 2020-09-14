<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MECarS - Facilidade e Raoidez </title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="fonts/themify-icons/themify-icons.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" /><!-- Owl Carousal-->
    <link rel="stylesheet" href="css/price-range.css" type="text/css" /><!-- Owl Carousal -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors.css" type="text/css" /><!-- color -->	

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css">

</head>
<body>

    <!-- /.preloader -->
    <div id="preloader"></div>
    <div class="theme-layout">

        <div class="comming-soon-sec">
            <div style="background: url(img/home1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax whitish"></div><!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="comming-soon">
                    <div class="logo">
                        <a title="" href="#">
                            <span><img src="img/logo.png"  ></span>
                            <strong>FACILIDADE E RAPIDEZ</strong>
                        </a>
                    </div>
                    <span>WE WILL BE HERE SOON, STAY WITH US</span>
                    <h1>BREVEMENTE</h1>
                    <ul class="countdown" id="demo">
                       
                    </ul>
                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="ti ti-arrow-circle-up"></i></a>
        </div><!-- inner Head -->

    </div>

    <!-- Script -->
     <!-- Script -->
    <script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizer -->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script><!-- Jquery -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="js/html5lightbox.js"></script><!-- HTML --> 
    <script type="text/javascript" src="js/scrolly.js"></script><!-- Parallax -->
    <script type="text/javascript" src="js/price-range.js"></script><!-- Parallax -->
    <script type="text/javascript" src="js/script.js"></script><!-- Script -->
    <script type="text/javascript" src="js/lightslider.min.js"></script>
  <script type="text/javascript" src="js/jquery.downCount.js"></script><!-- Popup -->
      
    
    <script type="text/javascript">
       /*$(document).ready(function () {
            "use strict";

            $('.countdown').downCount({
                date: '06/10/2016 12:00:00',
                offset: +10
            });

        });

       */
       // Set the date we're counting down to
var countDownDate = new Date("Oct 31, 2020 00:00:00").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = "<li><span class='days'>"+days+"</span><p class='days_ref'>days</p></li><li><span class='hours'>"+hours+"</span><p class='hours_ref'>hours</p></li><li><span class='minutes'>"+minutes+"</span><p class='minutes_ref'>minutes</p></li><li><span class='seconds'>"+seconds+"</span><p class='seconds_ref'>seconds</p></li>";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "ESTAMOS AQUI!";
  }
}, 1000);

    </script>

</body>
</html>