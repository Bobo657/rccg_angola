
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="RCCG Resurrection Ground Parish was founded on the 6th of October, 2013 and was pioneered by Pastor Joseph Ugochukwu Okenwa who is also the Country Coordinator of The Redeemed Christian Church of God Angola." />
<meta name="keywords" content="RCCG Resurrection Ground Parish was founded on the 6th of October, 2013 and was pioneered by Pastor Joseph Ugochukwu Okenwa who is also the Country Coordinator of The Redeemed Christian Church of God Angola." />

<!-- Page Title -->
<title>{{ config('app.name')}} - @yield('title')</title>

<!-- Favicon and Touch Icons -->
<link href="/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="/css/animate.css" rel="stylesheet" type="text/css">
<link href="/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="/css/style-main.css" rel="stylesheet" type="text/css">

<!-- CSS | Theme Color -->

<link href="/css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="/css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- external javascripts -->
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper">
  
  <!-- Header -->
  <header class="header">
    
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord green no-bg">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)"><img src="/images/logo-wide.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/about">Who We Are</a>
              </li>
              <li><a href="/our_beliefs">Our Beliefs</a> 
              </li>
              <li><a href="/our_history">Our History</a>
              </li>
              <li><a href="/contact">Contact</a></li>
              
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">

    @yield('content')
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <footer id="footer" class="footer footer-white" data-bg-color="#fff" style="background: rgb(255, 255, 255) !important;">
    <div class="container pt-60 pb-30">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <img src="/images/logo-wide.png" alt="">
          <p class="font-12 mt-20 mb-20">The Bible is replete with virtually inexhaustible provisions for Man’s comfort here on earth and in eternity. The oldest singular limitation is Man’s refusal to simply obey the WORD of GOD. </p>
         
        </div>
      </div>
      
    </div>
    <div class="container-fluid p-20" data-bg-color="#ddd" style="background: rgb(221, 221, 221) !important;">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="font-11 m-0" data-text-color="#555" style="color: rgb(85, 85, 85);">Copyright {{ date('Y')}} <a class="font-11" href="#">{{ config('app.name')}}</a>. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Calendar Event Data --> 
<script src="/js/calendar-events-data.js"></script> 
<!-- JS | Custom script for all pages --> 
<script src="/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>
</html>