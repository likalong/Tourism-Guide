<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tour guide Cambodia|@yield('title') </title>
<link rel="icon" type="image/png" href="{{asset('Picture/logo/palm-cambodia.png')}}">

<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')  }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto+Condensed')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/css/home-page.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('/css/navigation.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('/css/News.css')}}"/>
</head>



<body >
<nav class="navbar navbar-inverse navbar-fixed-top navigation-bar navigation-shadow " role="navigation">
    <div id="wrap">
        <form action="" autocomplete="on">
            <input id="search" name="search" type="text" placeholder="What're we looking for ?"/>
            <input id="search_submit" value="" type="submit"/>
        </form>
    </div>
    <div class="container-fluid">
        <div class="logo">
            <img src="{{asset('/Picture/logo/palm-cambodia.png')}}" alt="logo">
            <p>Welcome to Cambodia Tourism Guide </p>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navigation-list" id="myNavbar">
            <ul class="nav navbar-nav " id="menu">
                <li id="nav-hide"><a href="#" class="hidden-xs "></a></li>
                <li id="menu1"><a class="{{  Html::clever_link('home')  }} color-a" href="{{url('/home')}}" >Home</a></li>

                <li id="menu1" class="dropdown dropdown-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle color-a"  id="go-to-place-dropdown">Go To Place<b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-menu-large row" aria-labelledby="go-to-place-dropdown">
                        <li class="col-lg-3 col-md-3 col-sm-4" style="padding-bottom: 10px">
                            <ul>
                                <li ><a href="#" >Phnom Penh</a></li>
                                <li ><a href="#" >Koh Kong</a></li>
                                <li><a href="#"  >Kompot</a></li>
                                <li><a href="#"  >Kep</a></li>
                                <li><a href="#"  >Sihanouk Ville</a></li>
                                <li><a href="#"  >Kratie</a></li>
                             </ul>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-4" style="padding-bottom: 10px">
                            <ul >
                                <li ><a href="#">Pursat</a></li>
                                <li ><a href="#">Kompong Chhnang</a></li>
                                <li><a href="#" >Kompong Cham</a></li>
                                <li><a href="#" >Kompong Thom</a></li>
                                <li><a href="#" >Kompong Speu</a></li>
                                <li><a href="#" >Takoe</a></li>
                            </ul>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-4" style="padding-bottom: 10px">
                            <ul >
                                <li ><a href="#">Oddor Meanchey</a></li>
                                <li ><a href="#">Pailin</a></li>
                                <li><a href="#" >Banteay Meanchey</a></li>
                                <li><a href="#" >Rattanak Kiri</a></li>
                                <li><a href="#" >MondulKiri</a></li>
                                <li><a href="#" >Preah Vihear</a></li>
                            </ul>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-4" style="padding-bottom: 10px">
                            <ul >
                                <li ><a href="#">Siem Reap</a></li>
                                <li ><a href="#">Svay Rieng</a></li>
                                <li><a href="#" >Tbong Khmum</a></li>
                                <li><a href="#" >Kandal</a></li>
                                <li><a href="#" >Stung Treng</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>
                <li id="menu1" ><a href="/home#product-section" class="color-a" id="product">Thing to do</a></li>
                <li id="menu1"id="menu1" ><a class="{{  Html::clever_link('news')  }} color-a" href="{{url('/news')}}">Cambodia insider</a></li>
                <li id="menu1"><a class="{{  Html::clever_link('quoteRequest')  }} color-a" href="{{url('/quoteRequest')}}">Activity view</a></li>
                <li id="menu1"><a class="{{  Html::clever_link('contactUs')  }} color-a" href="{{url('/contactUs')}}">About Us</a></li>

            </ul>
        </div>
    </div>

</nav>


<script type="text/javascript" src="{{asset('js/under_line.js')}}"></script>

@yield('bodypage')

    <div class="follow-us-contain"  id="contact-section">
        <div class="product-title" style="padding-top:40px;">
            <h3> FOLLOW US</h3>
        </div>
        <div class="contain-social-media ">
                <!-- Add font awesome icons -->
            <a href="https://www.facebook.com/Klakifly"><img src="{{asset('../Picture/SocialLogo/fb.png')}}"  class="Fb"></a>
            <a href="#"><img src="{{asset('../Picture/SocialLogo/tw.png')}}"  class="Tw"></a>
            <a href="#"><img src="{{asset('../Picture/SocialLogo/instagram-logo.png')}}" class="In"></a>
            <a href="#"><img src="{{asset('../Picture/SocialLogo/google.png')}}" class="Gp"></a>
            <a href="#" ><img src="{{asset('../Picture/SocialLogo/YouTube.png')}}" class="Yt"></a>
        </div>
    </div>
    <div class="at-bottom">
        <h3>
           Cambodia Tourism Guide & Travel
        </h3>
        <a href="#"><img src="{{asset('../Picture/logo/map.png')}}"  class="Fb"></a>
        <p class="contact-text">
            Address: vihea loung Village, ansachambork Commune,sampov meas district, pursat City, Kingdom of Cambodia.<br/>
            Mobile Phone: +855 92 700 800 | +855 97 123 6161<br/>
            E-mail: info@tour-guidecambodia.com | Website: www.tour-guide-cambodia.com<br/>

        </p>
                <hr  class="line-col-fade-left-right marg-md">
              <p>@2018 Tourism guide Cambodia  .All right reserved Designed by<a> Lika Long</a></p>

    </div>

</body>
</html>
