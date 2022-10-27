<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Bazaar | @yield('title')</title>
    
    <!-- Font awesome -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset('css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.simpleLens.css')}}">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/nouislider.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{asset('css/theme-color/dark-red-theme.css')}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{asset('css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="{{asset('img/flag/english.jpg')}}" alt="english flag">ENGLISH
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="{{asset('img/flag/english.jpg')}}" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>USD
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-usd"></i>USD</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>00-62-658-658</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  @if (!Auth::check())<li><a href="/account">My Account</a></li>
                  @else<li><a href="/account-info">My Account</a></li>@endif
                  @auth<li class="hidden-xs"><a href="/wishlist">Wishlist</a></li>@endauth
                  <li class="hidden-xs"><a href="/cart">My Cart</a></li>
                  @if(session('cart'))
                    <li class="hidden-xs"><a href="/checkout">Checkout</a></li>
                  @endif
          @if (Auth::check())<li style="display: inline-block;color: #333333;border-right: 1px solid #ddd;font-size: 14px;padding: 5px 8px;">Welcome, {{Auth::user()->name}}</li>
                  @else<li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>@endif
                  @auth<li class="hidden-xs"><a href="/logout">Logout</a></li>@endauth
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="/">
                  <span class="fa fa-shopping-cart"></span>
                  <p>daily<strong>Bazaar</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
               @if(session('cart'))
               <?php $count = count(Session::get('cart')); ?>
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">{{$count}}</span>
                </a>

<?php $total = 0 ?>
        @foreach(session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
<div class="aa-cartbox-summary">
  <ul>
    <li>
      <a class="aa-cartbox-img" href="#"><img src="{{asset('img/product-img/main/'.$details['photo'].'')}}" width="100" height="100" alt="img"></a>
      <div class="aa-cartbox-info">
        <h4><a href="#">{{ $details['name'] }}</a></h4>
        <p>{{ $details['quantity'] }} x ${{ $details['price'] }}</p>
      </div>
  <a class="aa-remove-product" href="/remove-from-cart/{{$id}}"><span class="fa fa-times"></span></a>
    </li>
    @endforeach
                        
    <li>
      <span class="aa-cartbox-total-title">
        Total
      </span>
      <span class="aa-cartbox-total-price">
        ${{$total}}
      </span>
    </li>
  </ul>
  <a class="aa-cartbox-checkout aa-primary-btn" href="/checkout">Checkout</a>
</div>            
</div>
@else
<div class="aa-cartbox">
  <a class="aa-cart-link" href="#">
    <span class="fa fa-shopping-basket"></span>
    <span class="aa-cart-title">SHOPPING CART</span>
    <span class="aa-cart-notify">0</span>
  </a>
      <div class="aa-cartbox-summary">
        <ul>
          <li>
              <h4>Cart is Empty!</h4>
          </li>
        </ul>
      </div>            
</div>
@endif
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="/search" method="GET">
                  <input type="text" name="q" id="" required ="" placeholder="Search here ex. 'man' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>

              @foreach ($categories as $category)
                  <li><a href="#">{{$category->name}}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    @foreach ($subcategories as $subcategory)
                      @if ($category->id == $subcategory->category_id)                      
                    <li><a href="/collection/{{$subcategory->slug}}">{{$subcategory->name}}</a></li>
                      @endif
                    @endforeach
                    </ul>
                </li>
              @endforeach
              <li><a href="/">Contact</a></li>
              
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  @yield('content')
<!-- Subscribe section -->
<section id="aa-subscribe">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-subscribe-area">
          <h3>Subscribe our newsletter </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
          <form action="" class="aa-subscribe-form">
            <input type="email" name="" id="" placeholder="Enter your Email">
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Subscribe section -->

<!-- footer -->  
<footer id="aa-footer">
  <!-- footer bottom -->
  <div class="aa-footer-top">
   <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="aa-footer-top-area">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="aa-footer-widget">
                <h3>Main Menu</h3>
                <ul class="aa-footer-nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#">Our Products</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="aa-footer-widget">
                <div class="aa-footer-widget">
                  <h3>Knowledge Base</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Discount</a></li>
                    <li><a href="#">Special Offer</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="aa-footer-widget">
                <div class="aa-footer-widget">
                  <h3>Useful Links</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Advanced Search</a></li>
                    <li><a href="#">Suppliers</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="aa-footer-widget">
                <div class="aa-footer-widget">
                  <h3>Contact Us</h3>
                  <address>
                    <p> 25 Astor Pl, NY 10003, USA</p>
                    <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                    <p><span class="fa fa-envelope"></span>dailybazaar@gmail.com</p>
                  </address>
                  <div class="aa-footer-social">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                    <a href="#"><span class="fa fa-youtube"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
  <!-- footer-bottom -->
  <div class="aa-footer-bottom">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="aa-footer-bottom-area">
          <p>Designed by <a href="https://hadibuttt.github.io/">Hadilicious</a></p>
          <div class="aa-footer-payment">
            <span class="fa fa-cc-mastercard"></span>
            <span class="fa fa-cc-visa"></span>
            <span class="fa fa-paypal"></span>
            <span class="fa fa-cc-discover"></span>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</footer>
<!-- / footer -->

<!-- Login Modal -->  
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">                      
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Login or Register</h4>
        <form class="aa-login-form" action="/login" method="POST">
          @csrf
          <label for="">Email address<span>*</span></label>
          <input type="text" name="email" required placeholder="Email address">
  @error('email')
                <div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
	@enderror
          <label for="">Password<span>*</span></label>
          <input type="password" name="password" placeholder="Password" required>
          <button class="aa-browse-btn" type="submit">Login</button>
          <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
          <p class="aa-lost-password"><a href="/forgot-password">Lost your password?</a></p>
          <div class="aa-register-now">
            Don't have an account?<a href="/account">Register now!</a>
          </div>
        </form>
      </div>                        
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>    

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.js')}}"></script>  
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="{{asset('js/jquery.smartmenus.js')}}"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="{{asset('js/jquery.smartmenus.bootstrap.js')}}"></script>  
<!-- To Slider JS -->
<script src="{{asset('js/sequence.js')}}"></script>
<script src="{{asset('js/sequence-theme.modern-slide-in.js')}}"></script>  
<!-- Product view slider -->
<script type="text/javascript" src="{{asset('js/jquery.simpleGallery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.simpleLens.js')}}"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{asset('js/slick.js')}}"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{asset('js/nouislider.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('js/custom.js')}}"></script> 

</body>
</html>