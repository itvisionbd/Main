<!doctype html>
<html lang="en">
<head>    
    @php
$headerData = App\Models\HeaderModel::find(1);
@endphp


    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title======-->
    <title>IT VISION SOCIETY</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('')}}/assets/frontend/images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ url('')}}/assets/frontend/css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ url('')}}/assets/frontend/css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ url('')}}/assets/frontend/css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ url('')}}/assets/frontend/css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ url('')}}/assets/frontend/css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ url('')}}/assets/frontend/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ url('')}}/assets/frontend/css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ url('')}}/assets/frontend/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ url('')}}/assets/frontend/css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ url('')}}/assets/frontend/css/responsive.css">
    <style type="text/css">
        .headerNotice li{
            list-style: none;
            display: inline-block;
            padding-right: 20px;
        }
        
    </style>
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
@include('home.layouts.header')
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
     
    <!--====== SEARCH BOX PART ENDS ======-->
        <section class="mb-3">
           <div class="container">
           <div class="row">
               <div class="col-lg-1">
                     <h4 class="btn btn-info">Notice:</h4>
              </div>
              <div class="col-lg-11">
                     <marquee class="headerNotice" behavior="scroll" direction="left" scrollamount="3">
                       @php
                        $getNotice = App\Models\NoticeModel::getNewsMenu();
                        @endphp
                         @foreach($getNotice as $NoticeData)
                        <li><a href="{{ url('/notice/'.$NoticeData->id)}}">{{ $NoticeData->news_title }}</a></li>
                     @endforeach
                    </marquee>
                      
              </div>
            </div>
            </div>
    </section>

    @include('home.layouts.slider')
   
    @yield('content')

   
    <!--====== PATNAR LOGO PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
   @include('home.layouts.footer')
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="{{ url('')}}/assets/frontend/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ url('')}}/assets/frontend/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ url('')}}/assets/frontend/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="{{ url('')}}/assets/frontend/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{ url('')}}/assets/frontend/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{ url('')}}/assets/frontend/js/waypoints.min.js"></script>
    <script src="{{ url('')}}/assets/frontend/js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="{{ url('')}}/assets/frontend/js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{ url('')}}/assets/frontend/js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="{{ url('')}}/assets/frontend/js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="{{ url('')}}/assets/frontend/js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{ url('')}}/assets/frontend/js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="{{ url('')}}/assets/frontend/js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{ url('')}}/assets/frontend/js/map-script.js"></script>

</body>
</html>
