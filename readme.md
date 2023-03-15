
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Let-Share</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +601111111111</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> huma@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> KL, Malaysia</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#">   English    </a></li>
						
						  <!-- Right Side Of Navbar -->
                   
                        <!-- Authentication Links -->
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login ') }}</a>
                            </li>
                            <li><a href="#">   English    </a></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register ') }}</a>
                                </li>
                            <li><a href="#">   English    </a></li>
                            <li class="nav-item ">
                                <a  class="nav-link " href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                
                            </li>
                        <li><a href="#">   English    </a></li>
                    	
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="/" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form method="POST" action="{{ route('product_search') }}">
									  @csrf
									<select class="input-select" name="product_catagory">
										<option value="0">All Categories</option>
										<option value="1">Home </option>
										<option value="2">Electronics</option>
										<option value="3">Others</option>
									</select>
									<input class="input" placeholder="Search here" name="search_key">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="/">Home</a></li>
						@if (Route::has('login'))
							
								@auth
									<li><a href="/home">Dashboard</a></li>
										<li>
											<a href="{{ route('logout') }}"
												 onclick="event.preventDefault();
																			 document.getElementById('logout-form').submit();">Logout</a>
											 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                       </form>
										</li>
								@else
									<li><a href="/login">Login</a></li>
									<li><a href="/register">Register</a></li>
									
								@endauth
							
						@endif
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

<!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./img/welcome.png" style="width:1200px;height:400px;" alt="Image">
        <div class="carousel-caption">
          <h3>Welcome to Let's Share</h3>
          <p>A website that allows users to share products for the people in the community.</p>
        </div>      
      </div>

      <div class="item">
        <img src="./img/welcome1.JPG" style="width:1200px;height:400px;" alt="Image">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
      <!-- row -->
      <div class="row">
        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <div class="shop">
            <div class="shop-img">
              <img src="./img/shop011.png" alt="">
            </div>
            <div class="shop-body">

              <h3>Our<br>Services</h3>
              <a href="/services" class="cta-btn">View Services <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /shop -->

        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <div class="shop">
            <div class="shop-img">
              <img src="./img/shop012.png" alt="">
            </div>
            <div class="shop-body">
              <h3>About<br>Us</h3>
              <a href="/about" class="cta-btn">Get to know us <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /shop -->

        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <div class="shop">
            <div class="shop-img">
              <img src="./img/shop013.png" alt="">
            </div>
            <div class="shop-body">
              <h3>Contact<br>Us</h3>
              <a href="/contact" class="cta-btn">get in touch <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /shop -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->

  <!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">

        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <h3 class="title">Latest Products</h3>
            <!-- <div class="section-nav">
              <ul class="section-tab-nav tab-nav">
                <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
              </ul>
            </div> -->
          </div>
        </div>
        <!-- /section title -->

        <!-- Products tab & slick -->
        <div class="col-md-12">
          <div class="row">
            <div class="products-tabs">
              <!-- tab -->
              <div id="tab1" class="tab-pane active">
                <div class="products-slick" data-nav="#slick-nav-1">
                  <?php
                    $flights = DB::table('products')->where('product_status',1)->get();
                  ?>
                  <!-- product -->
                    @foreach($flights as $share)
                  <div class="product">
                      <a href="{{'/single?id='.$share->id}}">
                        <div class="product-img">
                        <img src="product_image/{{$share->cover_image}}" alt="">
                        <div class="product-label">
                          <span class="new">NEW</span>
                        </div>
                      </div>
                    </a>
                    <div class="product-body">
                      <p class="product-category">
                        @if($share->product_catagory=='1')
                            Home Accessories
                        @endif
                        @if($share->product_catagory=='2')
                            Electronics
                        @endif
                        @if($share->product_catagory=='3')
                            Others
                        @endif
                      </p>
                      <h3 class="product-name"><a href="{{'/single?id='.$share->id}}">{{$share->title}}</a></h3>
                      <h4 class="product-price">Share for {{$share->num_days}} Days</h4>
                      <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                      <div class="product-btns">
                          <button class="quick-view"><a href="{{'/single?id='.$share->id}}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
                      </div>
                    </div>
                    <div class="add-to-cart">
                      <a href="{{'/single?id='.$share->id}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Book IT</button></a>
                    </div>
                  </div>
                  <!-- /product -->
                    @endforeach

                </div>
                <div id="slick-nav-1" class="products-slick-nav"></div>
              </div>
              <!-- /tab -->
            </div>
          </div>
        </div>
        <!-- Products tab & slick -->

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->

  <!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>“Let’s Share” is a web-based application system that allows user to share items or services for the people in the community. The system will give the opportunity to the users to share any products with others and encourage the efficient use of resources by sharing unused items.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>KL, Malaysia</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+601111111111</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>huma@gmail.com</a></li>
								</ul>
							</div>
						</div>

						

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Rating Policy</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">Share Product</a></li>
									<li><a href="#">Notification</a></li>
									<li><a href="#">Booking List</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>

