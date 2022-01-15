<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>E-protal</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico">
  <!-- Place favicon.ico in the root directory -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/')}}website/assat/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('/')}}website/assat/css/normalize.css">
  <link rel="stylesheet" href="{{asset('/')}}website/assat/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('/')}}website/assat/css/main.css">

  <meta name="theme-color" content="#fafafa">

      <link href="{{asset('/')}}website/asset/css/styles.css" rel="stylesheet" />
      <link rel="stylesheet" href="{{asset('/')}}website/assat/css/aos.css" />

   
    <script src="{{asset('/')}}website/assat/js/apexcharts.js"></script>
    

</head>

<body>

  <!-- Add your site or application content here -->
@yield('header')




<!-- E-commerc -->
@yield('content')


  <!-- Footer -->
@yield('footer')

 <script src="{{asset('/')}}website/assat/js/jquery-3.5.1.slim.min.js"></script>
<script src="{{asset('/')}}website/assat/js/popper.min.js"></script>
  <script src="{{asset('/')}}website/assat/js/bootstrap.min.js"></script>
  <script src="{{asset('/')}}website/assat/js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="{{asset('/')}}website/assat/js/plugins.js"></script>
  <script src="{{asset('/')}}website/assat/js/main.js"></script>
  

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
 <!-- <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script> 
<script src="{{asset('/')}}website/assat/js/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
