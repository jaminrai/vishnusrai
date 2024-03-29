<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Blogee</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico">
	
	<!-- CSS -->
	<link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/pace-theme-center-simple.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/app.min.css')}}">

	<!-- Modernizr -->
	<script src="{{URL::asset('assets/js/modernizr-2.8.3.min.js')}}"></script>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,100,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,500,600,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- <div class="page-preloader">
	<div class="content">
		<img src="{{Request::root()}}/img/vishnu.png" alt="#" width="170" height="88" class="img-responsive">

		<div class="loading">Loading</div>
	</div>
</div> -->
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
	
	<div class="pageWrap">
		<!-- Header -->
		<header id="header">
			<!-- Main navigation bar -->
			<div class="navbar navbar-inverse">
				<div class="container">
					<!-- Mobile navbar toggler -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<nav id="navbar" class="collapse navbar-collapse">
						<!-- Main navigation -->
						<ul class="nav navbar-nav navigation">
							<li class="hoverExtend active"><a href="index.html" title="#">Home</a></li>

							<li class="hoverExtend dropdown onHover fullwidth">
								<a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Layouts</a>
								
								<!-- Templates dropdown -->
								<div class="dropdown-menu layouts" role="menu">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<ul>
												<li><a href="index.html" title="#">One column with right sidebar (page 1)</a></li>
												<li><a href="col-1_sidebar-right_page-2.html" title="#">One column with right sidebar (page 2)</a></li>
												<li><a href="col-1_sidebar-left.html" title="#">One column with left sidebar</a></li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6">
											<ul>
												<li><a href="col-2_sidebar-right.html" title="#">Two columns with right sidebar</a></li>
												<li><a href="col-3_sidebar-none.html" title="#">Three columns without sidebar</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>

							<li class="hoverExtend dropdown onHover fullwidth">
								<a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Templates</a>
								
								<!-- Templates dropdown -->
								<div class="dropdown-menu templates" role="menu">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<ul>
												<li><a href="template-personal.html" title="#">Personal</a></li>
												<li><a href="template-magazine.html" title="#">News magazine</a></li>
												<li><a href="template-design.html" title="#">Design inspiration</a></li>
												<li><span>Gadget</span></li>
												<li><span>Food</span></li>
												<li><a href="template-recipe.html" title="#">Recipe</a></li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6">
											<ul>
												<li><a href="template-craft.html" title="#">Craft</a></li>
												<li><a href="template-travel.html" title="#">Travel</a></li>
												<li><span>Fashion</span></li>
												<li><span>How to / tips / tutorials</span></li>
												<li><span>Architecture</span></li>
												<li><span>Lifestyle</span></li>
											</ul>
										</div>
									</div>
								</div>
							</li>

							<li class="hoverExtend dropdown onHover fullwidth">
								<a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features</a>
								
								<!-- Features dropdown -->
								<div class="dropdown-menu features" role="menu">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<ul>
												<li><a href="features-widgets.html" title="#">Widgets</a></li>
												<li><span>Layouts</span></li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6">
											<ul>
												<li><span>Pagination</span></li>
												<li><a href="features-headers.html" title="#">Header positions</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="hoverExtend dropdown onHover fullwidth">
								<a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Posts</a>
								
								<!-- Posts dropdown -->
								<div class="dropdown-menu posts" role="menu">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-3">
											<ul>
												<li><a href="post-detail-standard.html" title="#">Standard post</a></li>
												<li><a href="post-detail-image-mosaic.html" title="#">Photo mosaic post</a></li>
												<li><a href="post-detail-gallery.html" title="#">Photo slider post</a></li>
												<li><a href="post-detail-video-vimeo.html" title="#">Vimeo embed post</a></li>
												<li><a href="post-detail-video-youtube.html" title="#">Youtube embed</a></li>
												<li><a href="post-detail-video.html" title="#">Self hosted video</a></li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-3">
											<ul>
												<li><a href="post-detail-audio-soundcloud.html" title="#">Soundcloud post</a></li>
												<li><a href="post-detail-audio.html" title="#">Self hosted audio</a></li>
												<li><a href="post-detail-twitter.html" title="#">Twitter embed post</a></li>
												<li><a href="post-detail-custom-tweet.html" title="#">Tweetee post</a></li>
												<li><a href="post-detail-simple-quote.html" title="#">Quote post w/o bg image</a></li>
												<li><a href="post-detail-quote.html" title="#">Quotee post</a></li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-3">
											<ul>
												<li><a href="post-detail-instagram.html" title="#">Instagram embed post</a></li>
												<li><a href="post-detail-facebook.html" title="#">Facebook embed post</a></li>
												<li><a href="post-detail-map.html" title="#">Location post</a></li>
												<li><a href="post-detail-link.html" title="#">Hyperlink post w/o bg image</a></li>
												<li><span>Chat post</span></li>
												<li><span>Interview post</span></li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-3">
											<ul>
												<li><span>Recipe post</span></li>
												<li><span>Review post</span></li>
												<li><span>Visitor rating post</span></li>
												<li><span>Cover post</span></li>
												<li><span>Password protected post</span></li>
												<li><span>More coming soon!</span></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="hoverExtend dropdown onHover fullwidth">
								<a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
								
								<!-- Pages dropdown -->
								<div class="dropdown-menu pages" role="menu">
									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<ul>
												<li><a href="page-404.html" title="#">404 Error Page</a></li>
												<li><span>Archive</span></li>
												<li><a href="page-about-me.html" title="#">About me</a></li>
												<li><a href="page-about-us.html" title="#">About us</a></li>
												<li><a href="page-contact-me.html" title="#">Contact me</a></li>
												<li><a href="page-contact-us.html" title="#">Contact us</a></li>
												<li><a href="page-shortcodes.html" title="#">Shortcodes</a></li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-4">
											<ul>
												<li><a href="page-category.html" title="#">Categories</a></li>
												<li><a href="page-search-results.html" title="#">Search results</a></li>
												<li><span>Tag index</span></li>
												<li><span>Cat index</span></li>
												<li><a href="page-typography.html" title="#">Typography</a></li>
												<li><a href="page-coming-soon.html" title="#">Coming soon page</a></li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-4">
											<ul>
												<li><a href="page-faq.html" title="#">FAQ</a></li>
												<li><a href="page-privacy-policy.html" title="#">Privacy Policy</a></li>
												<li><a href="page-terms-of-service.html" title="#">Terms of Service</a></li>
												<li><span>Email newsletter</span></li>
												<li><a href="page-sign-in-out.html" title="#">Login / registration</a></li>
												<li><span>Pricing tables</span></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="hoverExtend"><a href="page-about-me.html" title="#">About</a></li>
							<li class="hoverExtend"><a href="page-contact-me.html" title="#">Contact</a></li>
						</ul>

						<!-- Search, Share, Language -->
						<ul class="nav navbar-nav navigation misc">
							<li>
								<a href="#" title="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search"></i></a>
							</li>
							<li class="dropdown onHover">
								<a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									<i class="fa fa-share-alt"></i>
								</a>
								
								<!-- Social dropdown -->
								<div class="dropdown-menu socials" role="menu">
									<ul>
										<li><a href="#" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a href="#" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
										<li><a href="#" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
							</li>
							<li class="dropdown onHover hoverExtend active language">
								<a href="#" title="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">EN</a>
								
								<!-- Language dropdown -->
								<div class="dropdown-menu lang" role="menu">
									<ul>
										<li><a href="#" title="#">EN</a></li>
										<li><a href="#" title="#">ES</a></li>
										<li><a href="#" title="#">FR</a></li>
										<li><a href="#" title="#">RU</a></li>
										<li><a href="#" title="#">PT</a></li>
										<li><a href="#" title="#">DE</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<!-- Logo -->
			<div class="logoWrap">
				<div class="container">
					<h1>
						<a href="index.html" title="#">
							<img src="{{Request::root()}}/img/vishnu.png" alt="#" width="208" height="108" class="img-responsive">
							<strong>Blogee</strong>
						</a>
					</h1>
				</div>
			</div>

			<!-- Categories navigation -->
			<nav class="categoriesNavigation">
				<div class="container">
					<ul>
						<li class="hoverExtend active"><a href="index.html" title="#">All</a></li>
						<li class="hoverExtend"><a href="template-personal.html" title="#">Personal</a></li>
						<li class="hoverExtend"><a href="template-magazine.html" title="#">News magazine</a></li>
						<li class="hoverExtend"><a href="template-design.html" title="#">Design inspiration</a></li>
						<li class="hoverExtend"><a href="template-recipe.html" title="#">Recipe</a></li>
						<li class="hoverExtend"><a href="template-craft.html" title="#">Craft</a></li>
						<li class="hoverExtend"><a href="template-travel.html" title="#">Travel</a></li>
					</ul>
				</div>
			</nav>
		</header>
		
		<!-- Main carousel -->
		<div class="mainCarousel mainCarousel-1">
			<div class="container">
				<div class="c-row">
					<div class="js-main-carousel-1">
						<article class="i article">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/580x550-1.jpg" alt="#" width="580" height="550" class="img-responsive">
							</a>
							<div class="c">
								<h2 class="title">
									<a href="post-detail-standard.html" title="#">We are all apprentices in a craft where no one ever becomes a master.</a>
								</h2>
								<div class="info">
									<a href="post-detail-standard.html" title="#">Creative</a>
								</div>
							</div>
						</article>
						<article class="i article">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/580x550-2.jpg" alt="#" width="580" height="550" class="img-responsive">
							</a>
							<div class="c">
								<h2 class="title">
									<a href="post-detail-standard.html" title="#">I have no special talent. I am only passionately curious.</a>
								</h2>
								<div class="info">
									<a href="post-detail-standard.html" title="#">Lifestyle</a>
								</div>
							</div>
						</article>
						<article class="i article">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/580x550-3.jpg" alt="#" width="580" height="550" class="img-responsive">
							</a>
							<div class="c">
								<h2 class="title">
									<a href="post-detail-standard.html" title="#">There is no sincerer love than the love of food.</a>
								</h2>
								<div class="info">
									<a href="post-detail-standard.html" title="#">Food</a>
								</div>
							</div>
						</article>
						<article class="i article">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/580x550-4.jpg" alt="#" width="580" height="550" class="img-responsive">
							</a>
							<div class="c">
								<h2 class="title">
									<a href="post-detail-standard.html" title="#">And the most unusual and surrealistic place in New York is Central Park.</a>
								</h2>
								<div class="info">
									<a href="post-detail-standard.html" title="#">Travel</a>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>

		<!-- Content -->
		<div class="container">
			<div class="row">
				<!-- Listings -->
				<div class="col-xs-12 col-sm-8">
					<div class="articlesListing">

						<!-- Standard post -->
						<article class="article">
							<div class="image">
								<a href="post-detail-standard.html" title="#" class="favs">
									<i class="fa fa-heart"></i>
									<div class="count">36</div>
								</a>
								<a href="post-detail-standard.html" title="#">
									<img src="{{Request::root()}}/img/770x513-1.jpg" alt="#" width="770" height="513" class="img-responsive">
								</a>
							</div>
							<div class="box">
								<h3 class="title">
									<a href="post-detail-standard.html" title="#">Even forest superpowers have limits</a>
								</h3>
								<div class="info">
									<div>
										<span class="date">March 26, <span data-current-year></span></span>
									</div>
									<div>by <a href="post-detail-standard.html" title="#">Themees</a></div>
									<div>in <a href="post-detail-standard.html" title="#">Nature</a></div>
									<div>3 min read</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
									Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
								</p>
								<div class="btns text-center">
									<a href="post-detail-standard.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
								</div>

								<footer class="footer">
									<div class="row">
										<div class="col-sm-12 col-lg-6 tags">
											<a href="post-detail-standard.html" title="#">#Nature</a>
											<a href="post-detail-standard.html" title="#">#Forest</a>
										</div>
										<div class="col-sm-12 col-lg-6 moreInfo">
											<div class="dropdown onHover">
												<div id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" role="menu">
													<i class="fa fa-share-alt"></i> Share
												</div>
													
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
													<li><a href="post-detail-standard.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
												</ul>
											</div>
											<div><span><i class="fa fa-eye"></i> 86</span> Views</div>
											<div><span><i class="fa fa-comments"></i> 36</span> Comments</div>
										</div>
									</div>
								</footer>
							</div>
						</article>
						
						<!-- Image mosaic -->
						<article class="article">
							<div class="image">

								<a href="post-detail-image-mosaic.html" title="#" class="favs">
									<i class="fa fa-heart"></i>
									<div class="count">28</div>
								</a>

								<!-- Image mosaic -->
								<div class="imageMosaic">
									<div class="row">
										<div class="col-xs-7 i">
											<a href="post-detail-image-mosaic.html" title="#">
												<img src="{{Request::root()}}/img/498x332-1.jpg" alt="#" width="498" height="332" class="img-responsive">
											</a>
										</div>
										<div class="col-xs-5 i">
											<a href="post-detail-image-mosaic.html" title="#">
												<img src="{{Request::root()}}/img/268x332-1.jpg" alt="#" width="268" height="332" class="img-responsive">
											</a>
										</div>
										<div class="col-xs-6 i">
											<a href="post-detail-image-mosaic.html" title="#">
												<img src="{{Request::root()}}/img/383x257-1.jpg" alt="#" width="383" height="257" class="img-responsive">
											</a>
										</div>
										<div class="col-xs-6 i">
											<a href="post-detail-image-mosaic.html" title="#">
												<img src="{{Request::root()}}/img/383x257-2.jpg" alt="#" width="383" height="257" class="img-responsive">
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="box">
								<h3 class="title">
									<a href="post-detail-image-mosaic.html" title="#">There is something in the New York air that makes sleep useless.</a>
								</h3>
								<div class="info">
									<div>
										<span class="date">March 26, <span data-current-year></span></span>
									</div>
									<div>by <a href="post-detail-image-mosaic.html" title="#">Themees</a></div>
									<div>in <a href="post-detail-image-mosaic.html" title="#">Travel</a></div>
									<div>8 min read</div>
								</div>
								<p>
									Maecenas scelerisque luctus lorem non commodo. Nam turpis risus, auctor vel dui nec, mollis tempus quam. Praesent non ex arcu. Nullam efficitur interdum tempus.
									Donec eleifend a massa quis fermentum. Duis pharetra dignissim velit auctor consequat.
								</p>
								<div class="btns text-center">
									<a href="post-detail-image-mosaic.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
								</div>

								<footer class="footer">
									<div class="row">
										<div class="col-sm-12 col-lg-6 tags">
											<a href="post-detail-image-mosaic.html" title="#">#New York</a>
											<a href="post-detail-image-mosaic.html" title="#">#Travel</a>
											<a href="post-detail-image-mosaic.html" title="#">#Journey</a>
										</div>
										<div class="col-sm-12 col-lg-6 moreInfo">
											<div class="dropdown onHover">
												<div id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true" role="menu">
													<i class="fa fa-share-alt"></i> Share
												</div>
													
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
													<li><a href="post-detail-image-mosaic.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
													<li><a href="post-detail-image-mosaic.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
													<li><a href="post-detail-image-mosaic.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="post-detail-image-mosaic.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="post-detail-image-mosaic.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a href="post-detail-image-mosaic.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
													<li><a href="post-detail-image-mosaic.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
												</ul>
											</div>
											<div><span><i class="fa fa-eye"></i> 95</span> Views</div>
											<div><span><i class="fa fa-comments"></i> 54</span> Comments</div>
										</div>
									</div>
								</footer>
							</div>
						</article>
						
						<!-- Gallery post -->
						<article class="article">
							<div class="image postGalleryCarousel">

								<a href="post-detail-gallery.html" title="#" class="favs">
									<i class="fa fa-heart"></i>
									<div class="count">35</div>
								</a>

								<div class="js-post-gallery-carousel">
									<div class="i">
										<a href="post-detail-gallery.html" title="#">
											<img src="{{Request::root()}}/img/770x513-2.jpg" alt="#" width="770" height="513" class="img-responsive">
										</a>
									</div>
									<div class="i">
										<a href="post-detail-gallery.html" title="#">
											<img src="{{Request::root()}}/img/770x513-5.jpg" alt="#" width="770" height="513" class="img-responsive">
										</a>
									</div>
									<div class="i">
										<a href="post-detail-gallery.html" title="#">
											<img src="{{Request::root()}}/img/770x513-6.jpg" alt="#" width="770" height="513" class="img-responsive">
										</a>
									</div>
								</div>
							</div>
							<div class="box">
								<h3 class="title">
									<a href="post-detail-gallery.html" title="#">Checkin' out my new Fuji camera</a>
								</h3>
								<div class="info">
									<div>
										<span class="date">March 25, <span data-current-year></span></span>
									</div>
									<div>by <a href="post-detail-gallery.html" title="#">Themees</a></div>
									<div>in <a href="post-detail-gallery.html" title="#">Creative</a></div>
									<div>3 min read</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
									Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
								</p>
								<div class="btns text-center">
									<a href="post-detail-gallery.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
								</div>

								<footer class="footer">
									<div class="row">
										<div class="col-sm-12 col-lg-6 tags">
											<a href="post-detail-gallery.html" title="#">#Fuji</a>
											<a href="post-detail-gallery.html" title="#">#Camera</a>
											<a href="post-detail-gallery.html" title="#">#Photography</a>
										</div>
										<div class="col-sm-12 col-lg-6 moreInfo">
											<div class="dropdown onHover">
												<div id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true" role="menu">
													<i class="fa fa-share-alt"></i> Share
												</div>
													
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
													<li><a href="post-detail-gallery.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
													<li><a href="post-detail-gallery.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
													<li><a href="post-detail-gallery.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="post-detail-gallery.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="post-detail-gallery.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a href="post-detail-gallery.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
													<li><a href="post-detail-gallery.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
												</ul>
											</div>
											<div><span><i class="fa fa-eye"></i> 75</span> Views</div>
											<div><span><i class="fa fa-comments"></i> 12</span> Comments</div>
										</div>
									</div>
								</footer>
							</div>
						</article>

						<!-- Video vimeo post -->
						<article class="article">
							<div class="video">
								<a href="post-detail-video-vimeo.html" title="#" class="favs">
									<i class="fa fa-heart"></i>
									<div class="count">54</div>
								</a>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe src="https://player.vimeo.com/video/92289291?byline=0&amp;portrait=0" width="750" height="421" allowfullscreen></iframe>
								</div>
							</div>
							<div class="box">
								<h3 class="title">
									<a href="post-detail-video-vimeo.html" title="#">Sarajevo from the sky</a>
								</h3>
								<div class="info">
									<div>
										<span class="date">March 24, <span data-current-year></span></span>
									</div>
									<div>by <a href="post-detail-video-vimeo.html" title="#">Themees</a></div>
									<div>in <a href="post-detail-video-vimeo.html" title="#">Travel</a></div>
									<div><i class="fa fa-clock-o"></i> 4:24</div>
									<div>3 min read</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
									Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
								</p>
								<div class="btns text-center">
									<a href="post-detail-video-vimeo.html" title="#" class="btn btn-primary btn-light-blue"><span>Watch on vimeo</span></a>
									<a href="post-detail-video-vimeo.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
								</div>

								<footer class="footer">
									<div class="row">
										<div class="col-sm-12 col-lg-6 tags">
											<a href="post-detail-video-vimeo.html" title="#">#Travel</a>
											<a href="post-detail-video-vimeo.html" title="#">#Sarajevo</a>
											<a href="post-detail-video-vimeo.html" title="#">#Sky</a>
										</div>
										<div class="col-sm-12 col-lg-6 moreInfo">
											<div class="dropdown onHover">
												<div id="dropdownMenu4" data-toggle="dropdown" aria-expanded="true" role="menu">
													<i class="fa fa-share-alt"></i> Share
												</div>
													
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
													<li><a href="post-detail-video-vimeo.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
													<li><a href="post-detail-video-vimeo.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
													<li><a href="post-detail-video-vimeo.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="post-detail-video-vimeo.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="post-detail-video-vimeo.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a href="post-detail-video-vimeo.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
													<li><a href="post-detail-video-vimeo.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
												</ul>
											</div>
											<div><span><i class="fa fa-eye"></i> 86</span> Views</div>
											<div><span><i class="fa fa-comments"></i> 36</span> Comments</div>
										</div>
									</div>
								</footer>
							</div>
						</article>
						
						<!-- YouTube video -->
						<article class="article">
							<div class="video">
								<a href="post-detail-video-youtube.html" title="#" class="favs">
									<i class="fa fa-heart"></i>
									<div class="count">45</div>
								</a>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="750" height="422" src="https://www.youtube.com/embed/g_ZRH75atMQ?ecver=1" allowfullscreen></iframe>
								</div>
							</div>
							<div class="box">
								<h3 class="title">
									<a href="post-detail-video-youtube.html" title="#">Sarajevo - Outdoor Spots, Mountains and Natural Surroundings</a>
								</h3>
								<div class="info">
									<div>
										<span class="date">March 24, <span data-current-year></span></span>
									</div>
									<div>by <a href="post-detail-video-youtube.html" title="#">Themees</a></div>
									<div>in <a href="post-detail-video-youtube.html" title="#">Travel</a></div>
									<div><i class="fa fa-clock-o"></i> 4:24</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
									Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
								</p>
								<div class="btns text-center">
									<a href="post-detail-video-youtube.html" title="#" class="btn btn-primary"><span>Watch on YouTube</span></a>
									<a href="post-detail-video-youtube.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
								</div>

								<footer class="footer">
									<div class="row">
										<div class="col-sm-12 col-lg-6 tags">
											<a href="post-detail-video-youtube.html" title="#">#Travel</a>
											<a href="post-detail-video-youtube.html" title="#">#Sarajevo</a>
											<a href="post-detail-video-youtube.html" title="#">#Sports</a>
										</div>
										<div class="col-sm-12 col-lg-6 moreInfo">
											<div class="dropdown onHover">
												<div id="dropdownMenu5" data-toggle="dropdown" aria-expanded="true" role="menu">
													<i class="fa fa-share-alt"></i> Share
												</div>
													
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu5">
													<li><a href="post-detail-video-youtube.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
													<li><a href="post-detail-video-youtube.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
													<li><a href="post-detail-video-youtube.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="post-detail-video-youtube.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="post-detail-video-youtube.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a href="post-detail-video-youtube.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
													<li><a href="post-detail-video-youtube.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
												</ul>
											</div>
											<div><span><i class="fa fa-eye"></i> 98</span> Views</div>
											<div><span><i class="fa fa-comments"></i> 41</span> Comments</div>
										</div>
									</div>
								</footer>
							</div>
						</article>
						
						<!-- Classic HTML5 video player -->
						<article class="article">
							<div class="video">
								<a href="post-detail-video.html" title="#" class="favs">
									<i class="fa fa-heart"></i>
									<div class="count">28</div>
								</a>
								<div class="embed-responsive embed-responsive-16by9">
									<video width="320" height="240" controls>
										<source src="{{Request::root()}}/img/video-beach.mp4" type="video/mp4">
										Your browser does not support the video tag.
									</video>
								</div>
							</div>
							<div class="box">
								<h3 class="title">
									<a href="post-detail-video.html" title="#">Lovely morning on the beach</a>
								</h3>
								<div class="info">
									<div>
										<span class="date">March 24, <span data-current-year></span></span>
									</div>
									<div>by <a href="post-detail-video.html" title="#">Themees</a></div>
									<div>in <a href="post-detail-video.html" title="#">Travel</a></div>
									<div><i class="fa fa-clock-o"></i> 4:24</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
									Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
								</p>
								<div class="btns text-center">
									<a href="post-detail-video.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
								</div>

								<footer class="footer">
									<div class="row">
										<div class="col-sm-12 col-lg-6 tags">
											<a href="post-detail-video.html" title="#">#Morning</a>
											<a href="post-detail-video.html" title="#">#Beach</a>
										</div>
										<div class="col-sm-12 col-lg-6 moreInfo">
											<div class="dropdown onHover">
												<div id="dropdownMenu6" data-toggle="dropdown" aria-expanded="true" role="menu">
													<i class="fa fa-share-alt"></i> Share
												</div>
													
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu6">
													<li><a href="post-detail-video.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
													<li><a href="post-detail-video.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
													<li><a href="post-detail-video.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="post-detail-video.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="post-detail-video.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a href="post-detail-video.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
													<li><a href="post-detail-video.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
												</ul>
											</div>
											<div><span><i class="fa fa-eye"></i> 56</span> Views</div>
											<div><span><i class="fa fa-comments"></i> 21</span> Comments</div>
										</div>
									</div>
								</footer>
							</div>
						</article>
						
						<!-- Soundcloud -->
						<article class="article">
							<div class="audio">
								<a href="post-detail-audio-soundcloud.html" title="#" class="favs">
									<i class="fa fa-heart"></i>
									<div class="count">60</div>
								</a>
								<iframe height="500" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/301818867&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
							</div>
							<div class="box">
								<h3 class="title">
									<a href="post-detail-audio-soundcloud.html" title="#">Hear the first single from Chet Fakers debut album 'Built On Glass'</a>
								</h3>
								<div class="info">
									<div>
										<span class="date">March 22, <span data-current-year></span></span>
									</div>
									<div>by <a href="post-detail-audio-soundcloud.html" title="#">Themees</a></div>
									<div>in <a href="post-detail-audio-soundcloud.html" title="#">Music</a></div>
									<div>1 min read</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
									Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
								</p>
								<div class="btns text-center">
									<a href="post-detail-audio-soundcloud.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
								</div>

								<footer class="footer">
									<div class="row">
										<div class="col-sm-12 col-lg-6 tags">
											<a href="post-detail-audio-soundcloud.html" title="#">#Music</a>
											<a href="post-detail-audio-soundcloud.html" title="#">#Chet Faker</a>
										</div>
										<div class="col-sm-12 col-lg-6 moreInfo">
											<div class="dropdown onHover">
												<div id="dropdownMenu7" data-toggle="dropdown" aria-expanded="true" role="menu">
													<i class="fa fa-share-alt"></i> Share
												</div>
													
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu7">
													<li><a href="post-detail-audio-soundcloud.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
													<li><a href="post-detail-audio-soundcloud.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
													<li><a href="post-detail-audio-soundcloud.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="post-detail-audio-soundcloud.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="post-detail-audio-soundcloud.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a href="post-detail-audio-soundcloud.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
													<li><a href="post-detail-audio-soundcloud.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
												</ul>
											</div>
											<div><span><i class="fa fa-eye"></i> 62</span> Views</div>
											<div><span><i class="fa fa-comments"></i> 48</span> Comments</div>
										</div>
									</div>
								</footer>
							</div>
						</article>
						
						<!-- Classic HTML5 audio player -->
						<article class="article">
							<div class="audio">
								<a href="post-detail-audio.html" title="#" class="favs">
									<i class="fa fa-heart"></i>
									<div class="count">60</div>
								</a>
								<img src="{{Request::root()}}/img/770x513-3.jpg" alt="#" width="770" height="513" class="img-responsive">
								<audio controls="controls">
									<source src="{{Request::root()}}/img/audio.mp3" type="audio/mp3" />
								</audio>
							</div>
							<div class="box">
								<h3 class="title">
									<a href="post-detail-audio.html" title="#">Listen to the re-recording of John Butlers Ocean 2012 Studio Version</a>
								</h3>
								<div class="info">
									<div>
										<span class="date">March 21, <span data-current-year></span></span>
									</div>
									<div>by <a href="post-detail-audio.html" title="#">Themees</a></div>
									<div>in <a href="post-detail-audio.html" title="#">Music</a></div>
									<div>2 min read</div>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim.
									Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies bibendum...
								</p>
								<div class="btns text-center">
									<a href="post-detail-audio.html" title="#" class="btn btn-primary"><span>Continue reading</span></a>
								</div>

								<footer class="footer">
									<div class="row">
										<div class="col-sm-12 col-lg-6 tags">
											<a href="post-detail-audio.html" title="#">#Music</a>
											<a href="post-detail-audio.html" title="#">#John Butler</a>
											<a href="post-detail-audio.html" title="#">#Ocean</a>
										</div>
										<div class="col-sm-12 col-lg-6 moreInfo">
											<div class="dropdown onHover">
												<div id="dropdownMenu8" data-toggle="dropdown" aria-expanded="true" role="menu">
													<i class="fa fa-share-alt"></i> Share
												</div>
													
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu8">
													<li><a href="post-detail-audio.html" title="#" class="i"><i class="fa fa-twitter"></i></a></li>
													<li><a href="post-detail-audio.html" title="#" class="i"><i class="fa fa-facebook"></i></a></li>
													<li><a href="post-detail-audio.html" title="#" class="i"><i class="fa fa-google-plus"></i></a></li>
													<li><a href="post-detail-audio.html" title="#" class="i"><i class="fa fa-linkedin"></i></a></li>
													<li><a href="post-detail-audio.html" title="#" class="i"><i class="fa fa-pinterest-p"></i></a></li>
													<li><a href="post-detail-audio.html" title="#" class="i"><i class="fa fa-tumblr"></i></a></li>
													<li><a href="post-detail-audio.html" title="#" class="i"><i class="fa fa-envelope"></i></a></li>
												</ul>
											</div>
											<div><span><i class="fa fa-eye"></i> 62</span> Views</div>
											<div><span><i class="fa fa-comments"></i> 48</span> Comments</div>
										</div>
									</div>
								</footer>
							</div>
						</article>

						<!-- Pagination numbers -->
						<div class="paginations pagination-numbers">
							<div class="row">
								<div class="col-xs-12 col-md-3 info i">
									Page 01 of 12
								</div>
								<div class="col-xs-12 col-md-9 i">
									<nav>
										<ul>
											<li class="prev prevnext"><a href="#" title="#"><i class="fa fa-angle-left"></i></a></li>
											<li class="hoverExtend active"><a href="#" title="#">01</a></li>
											<li class="hoverExtend"><a href="#" title="#">02</a></li>
											<li class="hoverExtend"><a href="#" title="#">03</a></li>
											<li>...</li>
											<li class="hoverExtend"><a href="#" title="#">12</a></li>
											<li class="next prevnext"><a href="#" title="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
						
						<!-- Pagination load more -->
						<div class="paginations pagination-loadmore hoverExtend active">
							<a href="#" title="#">Load more</a>
						</div>

						<!-- Pagination previous / next -->
						<div class="paginations pagination-prevnext">
							<div class="row">
								<div class="col-xs-4 prev hoverExtend active">
									<a href="#" title="#">Previous</a>
								</div>
								<div class="col-xs-4 info hidden-xs">Page 01 of 12</div>
								<div class="col-xs-4 col-xs-offset-4 col-sm-offset-0 next hoverExtend active text-right">
									<a href="#" title="#">Next</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Aside -->
				<aside class="col-xs-12 col-sm-4 aside">
					<div class="row">

						<!-- About me box -->
						<div class="col-xs-12 i">
							<div class="box aboutMeBox">
								<div class="c">
									<img src="{{Request::root()}}/img/190x190-1.jpg" alt="#" width="190" height="190" class="img-responsive image">
									<div class="name">Andrew Doe</div>
									<p class="info">Blog specialist, design nerd and I like muffins.</p>

									<div class="btns">
										<a href="page-about-me.html" title="#" class="btn"><span>Follow</span></a>
										<a href="page-about-me.html" title="#" class="btn btn-color-full"><span>Message</span></a>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Socials -->
						<div class="col-xs-12 i">
							<div class="box socials">
								<a href="#" title="#" class="i"><i class="fa fa-twitter"></i></a>
								<a href="#" title="#" class="i"><i class="fa fa-facebook"></i></a>
								<a href="#" title="#" class="i"><i class="fa fa-google-plus"></i></a>
								<a href="#" title="#" class="i"><i class="fa fa-linkedin"></i></a>
								<a href="#" title="#" class="i"><i class="fa fa-pinterest-p"></i></a>
								<a href="#" title="#" class="i"><i class="fa fa-tumblr"></i></a>
								<a href="#" title="#" class="i"><i class="fa fa-vimeo-square"></i></a>
								<a href="#" title="#" class="i"><i class="fa fa-youtube"></i></a>
								<a href="#" title="#" class="i"><i class="fa fa-instagram"></i></a>
							</div>
						</div>

						<!-- Most popular by -->
						<div class="col-xs-12 i">
							<div class="box articleMediaList">
								<h2>Most popular by</h2>
								
								<div class="articlesFilter clearfix js-tabs" role="tablist">
									<div class="i">
										<a href="#views" aria-controls="views" role="tab" data-toggle="tab" class="active">Views</a>
									</div>
									<div class="i">
										<a href="#likes" aria-controls="likes" role="tab" data-toggle="tab">Likes</a>
									</div>
									<div class="i">
										<a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">Comments</a>
									</div>
								</div>
								
								<div class="tab-content bordered">
									<!-- Views -->
									<div role="tabpanel" class="tab-pane fade in active" id="views">
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 26, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-2.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">There is something in the New York air that makes sleep useless.</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 24, <span data-current-year></span></a>
												</div>
											</div>
										</article>
									</div>

									<!-- Likes -->
									<div role="tabpanel" class="tab-pane fade" id="likes">
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-2.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">There is something in the New York air that makes sleep useless.</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 24, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
									</div>
									
									<!-- Comments -->
									<div role="tabpanel" class="tab-pane fade" id="comments">
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-2.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">There is something in the New York air that makes sleep useless.</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 26, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 24, <span data-current-year></span></a>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>

						<!-- Archives -->
						<div class="col-xs-12 i">
							<div class="box archives">
								<h2>Archives</h2>
								
								<div class="c">
									<div class="i">
										<a href="#" title="#" class="clearfix">
											<span class="month">March 2015</span>
											<span class="count">(85)</span>
										</a>
									</div>
									<div class="i">
										<a href="#" title="#" class="clearfix">
											<span class="month">February 2015</span>
											<span class="count">(75)</span>
										</a>
									</div>
									<div class="i">
										<a href="#" title="#" class="clearfix">
											<span class="month">January 2015</span>
											<span class="count">(55)</span>
										</a>
									</div>
									<div class="i">
										<a href="#" title="#" class="clearfix">
											<span class="month">December 2014</span>
											<span class="count">(62)</span>
										</a>
									</div>
									<div class="i">
										<a href="#" title="#" class="clearfix">
											<span class="month">November 2014</span>
											<span class="count">(32)</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Popular posts -->
						<div class="col-xs-12 i">
							<div class="box articleMediaList">
								<h2>Popular posts</h2>
								
								<div class="articlesFilter clearfix js-tabs" role="tablist">
									<div class="i">
										<a href="#week" aria-controls="week" role="tab" data-toggle="tab" class="active">This week</a>
									</div>
									<div class="i text-center">
										<a href="#month" aria-controls="month" role="tab" data-toggle="tab">This month</a>
									</div>
									<div class="i text-right">
										<a href="#trending" aria-controls="trending" role="tab" data-toggle="tab">Treniding</a>
									</div>
								</div>
								
								<div class="tab-content bordered">
									<!-- This week -->
									<div role="tabpanel" class="tab-pane fade in active" id="week">
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 26, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-2.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">There is something in the New York air that makes sleep useless.</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 24, <span data-current-year></span></a>
												</div>
											</div>
										</article>
									</div>

									<!-- This month -->
									<div role="tabpanel" class="tab-pane fade" id="month">
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-2.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">There is something in the New York air that makes sleep useless.</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 24, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
									</div>
									
									<!-- Trending -->
									<div role="tabpanel" class="tab-pane fade" id="trending">
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-2.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">There is something in the New York air that makes sleep useless.</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 26, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-3.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Checkin' out my new Fuji camera</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 25, <span data-current-year></span></a>
												</div>
											</div>
										</article>
										<article class="article media">
											<div class="media-left media-middle">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/90x90-1.jpg" alt="#" width="90" height="90" class="media-object">
												</a>
											</div>
											<div class="media-body">
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Even Forest Powers Have Limits</a>
												</h3>
												<div class="info">
													<a href="post-detail-standard.html" title="#">March 24, <span data-current-year></span></a>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>

						<!-- Categories -->
						<div class="col-xs-12 i">
							<div class="box categories">
								<h2>Categories</h2>
								
								<div class="c">
									<div class="i">
										<a href="page-category.html" title="#" class="clearfix">
											<span class="title">Creative</span>
											<span class="count">(68)</span>
										</a>
									</div>
									<div class="i">
										<a href="page-category.html" title="#" class="clearfix">
											<span class="title">Fashion</span>
											<span class="count">(35)</span>
										</a>
									</div>
									<div class="i">
										<a href="page-category.html" title="#" class="clearfix">
											<span class="title">Architecture</span>
											<span class="count">(12)</span>
										</a>
									</div>
									<div class="i">
										<a href="page-category.html" title="#" class="clearfix">
											<span class="title">Music</span>
											<span class="count">(27)</span>
										</a>
									</div>
									<div class="i">
										<a href="page-category.html" title="#" class="clearfix">
											<span class="title">Nature</span>
											<span class="count">(08)</span>
										</a>
									</div>
									<div class="i">
										<a href="page-category.html" title="#" class="clearfix">
											<span class="title">Lifestyle</span>
											<span class="count">(14)</span>
										</a>
									</div>
								</div>

								<div class="btns text-center">
									<a href="page-category.html" title="#" class="btn"><span>All categories</span></a>
								</div>
							</div>
						</div>

						<!-- Tags -->
						<div class="col-xs-12 i">
							<div class="box tags">
								<h2>Tags</h2>

								<div class="c">
									<a href="#" title="#" class="btn btn-color"><span>#Nature</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Forest</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Fashion</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Food</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#New York</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Lifestyle</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Architecture</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Recipe</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Do it yourself</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Vintage</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Journey</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Chet faker</span></a>
									<a href="#" title="#" class="btn btn-color"><span>#Music</span></a>
								</div>
							</div>
						</div>

						<!-- Subscribe -->
						<div class="col-xs-12 i">
							<div class="box subscribe signInOutWrap">
								<form data-parsley-validate>
									<input type="email" placeholder="Your Email Adress" class="input" required data-parsley-error-message="Please enter correct email address" data-parsley-errors-container=".error-newsletter">
									<button class="btn" type="submit"><span>Subscribe</span></button>

									<div class="error-newsletter"></div>
								</form>
							</div>
						</div>

						<!-- Ads -->
						<div class="col-xs-12 i">
							<div class="box ads">
								<a href="#" title="#">
									<img src="{{Request::root()}}/img/300x250-1.png" alt="#" width="300" height="250" class="img-responsive">
								</a>
							</div>
						</div>

						<!-- Calendar -->
						<div class="col-xs-12 i">
							<div class="box">
								<h2>Calendar</h2>
								
								<div class="calendar js-calendar">
									<script type="text/template" id="clndr-template">
										<div class="clndr">
											<div class='clndr-controls'>
												<div class='clndr-control-button'>
													<div class='clndr-previous-button'>
														<i class='fa fa-angle-left'></i>
													</div>
												</div>
												<div class='month'><%= month %> <%= year %></div>
												<div class='clndr-control-button rightalign'>
													<div class='clndr-next-button'>
														<i class='fa fa-angle-right'></i>
													</div>
												</div>
											</div>

											<table class='clndr-table' border='0' cellspacing='0' cellpadding='0'>
												<thead>
													<tr class='header-days'>
														<% for(var i = 0; i < daysOfTheWeek.length; i++) { %>
															<td class='header-day header-day-<%= i %>'><%= daysOfTheWeek[i] %></td>
														<% } %>
													</tr>
												</thead>
												<tbody>
													<% for(var i = 0; i < numberOfRows; i++){ %>
														<tr><% for(var j = 0; j < 7; j++){ %><% var d = j + i * 7; %>
															<td class='<%= days[d].classes %>'><div class='day-contents'><%= days[d].day %></div></td><% } %>
														</tr>
													<% } %>
												</tbody>
											</table>
										</div>
									</script>
								</div>
							</div>
						</div>

						<!-- Facebook -->
						<div class="col-xs-12 i">
							<div class="box facebook">
								<h2>Facebook</h2>

								<div class="c">
									<a href="#" title="#" class="more">
										<div class="content">
											<i class="fa fa-facebook icon"></i>
											<div class="likes">26 120</div>
											<div class="text">people <strong>like</strong> us!</div>
										</div>
									</a>

									<!-- FB plugin -->
									<div class="fb-page" data-href="https://www.facebook.com/facebook" data-height="230" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
								</div>
							</div>
						</div>

						<!-- Instagram -->
						<div class="col-xs-6 col-sm-12 i">
							<div class="box instagram">
								<h2>Instagram</h2>
								
								<div class="asideCarousel js-aside-carousel">
									<div class="i">
										<div class="c row">
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-1.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-2.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-3.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-4.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="i">
										<div class="c row">
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-2.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-3.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-1.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-4.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="i">
										<div class="c row">
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-4.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-1.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-3.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-6 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/143x143-2.jpg" alt="#" width="143" height="143" class="img-responsive">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Flickr -->
						<div class="col-xs-6 col-sm-12 i">
							<div class="box flickr">
								<h2>Flickr</h2>
								
								<div class="asideCarousel js-aside-carousel">
									<div class="i">
										<div class="c row">
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-1.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-2.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-3.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-4.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-5.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-6.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-7.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-8.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-9.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="i">
										<div class="c row">
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-9.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-8.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-7.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-6.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-5.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-4.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-3.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-2.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-1.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
										</div>
									</div>

									<div class="i">
										<div class="c row">
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-1.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-9.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-2.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-8.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-3.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-7.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-4.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-6.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
											<div class="col-xs-4 i">
												<a href="post-detail-standard.html" title="#">
													<img src="{{Request::root()}}/img/94x94-5.jpg" alt="#" width="94" height="94" class="img-responsive">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Twitter feed -->
						<div class="col-xs-12 i">
							<div class="box commentsWrap twitterFeed">
								<h2>Twitter feed</h2>

								<div class="c">
									<div class="media i">
										<div class="media-left media-middle">
											<a href="#" title="#" class="image">
												<img src="{{Request::root()}}/img/60x60-1.jpg" alt="#" width="60" height="60" class="media-object">
											</a>
										</div>
										<div class="media-body">
											<div class="tweet">
												<p><a href="#" title="#">@AndrewDoe</a> Suspendisse potenti morbi phare arcu vitae risus feret finibus...</p>
												<div class="info">
													<span>16 min ago</span>
												</div>

												<div class="more">
													<span class="hoverExtend active"><a href="#" title="#">Follow</a></span>
													<span class="hoverExtend active"><a href="#" title="#">Retweet</a></span>
													<span class="hoverExtend active"><a href="#" title="#">Favorite</a></span>
												</div>
											</div>
										</div>
									</div>
									<div class="media i">
										<div class="media-left media-middle">
											<a href="#" title="#" class="image">
												<img src="{{Request::root()}}/img/60x60-2.jpg" alt="#" width="60" height="60" class="media-object">
											</a>
										</div>
										<div class="media-body">
											<div class="tweet">
												<p><a href="#" title="#">@Themees</a> Vestibulum consect lacus odio, in ultrices magna...</p>
												<div class="info">
													<span>24 min ago</span>
													<span><i class="fa fa-map-marker"></i> Sarajevo, BiH</span>
												</div>

												<div class="more">
													<span class="hoverExtend active"><a href="#" title="#">Follow</a></span>
													<span class="hoverExtend active"><a href="#" title="#">Retweet</a></span>
													<span class="hoverExtend active"><a href="#" title="#">Favorite</a></span>
												</div>
											</div>
										</div>
									</div>
									<div class="media i">
										<div class="media-left media-middle">
											<a href="#" title="#" class="image">
												<img src="{{Request::root()}}/img/60x60-1.jpg" alt="#" width="60" height="60" class="media-object">
											</a>
										</div>
										<div class="media-body">
											<div class="tweet">
												<p><a href="#" title="#">@Anne</a> Duis ullamcorper pretium risus, in ultrices magna.</p>
												<div class="info">
													<span>29 min ago</span>
												</div>

												<div class="more">
													<span class="hoverExtend active"><a href="#" title="#">Follow</a></span>
													<span class="hoverExtend active"><a href="#" title="#">Retweet</a></span>
													<span class="hoverExtend active"><a href="#" title="#">Favorite</a></span>
												</div>
											</div>
										</div>
									</div>
									<div class="media i">
										<div class="media-left media-middle">
											<a href="#" title="#" class="image">
												<img src="{{Request::root()}}/img/60x60-3.jpg" alt="#" width="60" height="60" class="media-object">
											</a>
										</div>
										<div class="media-body">
											<div class="tweet">
												<p><a href="#" title="#">@John</a> Duis semper nibh egestas dolor, vestibulum gravida.</p>
												<div class="info">
													<span>44 min ago</span>
													<span><i class="fa fa-map-marker"></i> Sarajevo, BiH</span>
												</div>

												<div class="more">
													<span class="hoverExtend active"><a href="#" title="#">Follow</a></span>
													<span class="hoverExtend active"><a href="#" title="#">Retweet</a></span>
													<span class="hoverExtend active"><a href="#" title="#">Favorite</a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Post slider -->
						<div class="col-xs-12 i">
							<div class="box postSlider">
								<h2>Post slider</h2>
								
								<div class="asideCarousel js-aside-carousel">
									<div class="i">
										<div class="c">
											<article class="article">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/290x193-1.jpg" alt="#" width="290" height="193" class="img-responsive">
												</a>
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Nothing ever seems straightforward in Venice, least of all its romances.</a>
												</h3>
												<div class="info">March 22, <span data-current-year></span></div>
											</article>
										</div>
									</div>
									<div class="i">
										<div class="c">
											<article class="article">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/290x193-3.jpg" alt="#" width="290" height="193" class="img-responsive">
												</a>
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">Monday Morning Cup of Coffee</a>
												</h3>
												<div class="info">March 22, <span data-current-year></span></div>
											</article>
										</div>
									</div>
									<div class="i">
										<div class="c">
											<article class="article">
												<a href="post-detail-standard.html" title="#" class="image">
													<img src="{{Request::root()}}/img/290x193-2.jpg" alt="#" width="290" height="193" class="img-responsive">
												</a>
												<h3 class="title">
													<a href="post-detail-standard.html" title="#">I love public transportation</a>
												</h3>
												<div class="info">March 22, <span data-current-year></span></div>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>

		<div class="socialPinboard container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-lg-15 items">
					<div class="row">
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-1.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-2.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-3.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-4.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-lg-15 items">
					<div class="row">
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-5.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-6.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-12 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/transparent.png" alt="#" width="382" height="185" class="img-responsive">

								<div class="c gray">
									<div class="name">@AndrewDoe</div>
									<p class="js-shortener" data-maxheight="45">Mauris et interdum ex. Quisque semper nibh et odio sagittis imperdiet sed metus.</p>
									<div class="info">16 min ago</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-lg-15 items hidden-xs">
					<div class="row">
						<div class="col-xs-12 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/bg_pinboard_twitter.png" alt="#" width="382" height="185" class="img-responsive">

								<div class="c">
									<div class="name">@AndrewDoe</div>
									<p class="js-shortener" data-maxheight="45">Mauris et interdum ex. Quisque semper nibh et odio sagittis imperdiet sed metus.</p>
									<div class="info">16 min ago</div>
								</div>
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-7.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-8.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-lg-15 items visible-lg">
					<div class="row">
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-9.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-10.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-11.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-12.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-lg-15 items visible-lg">
					<div class="row">
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-13.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-6 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/185x185-14.jpg" alt="#" width="185" height="185" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-12 i">
							<a href="post-detail-standard.html" title="#">
								<img src="{{Request::root()}}/img/transparent.png" alt="#" width="382" height="185" class="img-responsive">

								<div class="c gray">
									<div class="name">@AndrewDoe</div>
									<p class="js-shortener" data-maxheight="45">Mauris et interdum ex. Quisque semper nibh et odio sagittis imperdiet sed metus.</p>
									<div class="info">16 min ago</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="footer">
			<div class="logoWrap">
				<div class="container">
					<h1>
						<a href="index.html" title="#">
							<img src="{{Request::root()}}/img/vishnu.png" alt="#" width="208" height="108" class="img-responsive">
							<strong>Blogee</strong>
						</a>
					</h1>
				</div>
			</div>

			<div class="copyright">
				<div class="container">
					Copyright @<span data-current-year></span> Yours. All Rights Reserved.
				</div>
			</div>
		</footer>
	</div>

	<!-- Search modal -->
	<div class="modal fade in" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form>
						<div class="c">
							<input type="text" class="input" placeholder="Type search term...">
							<button class="btn btn-color-full" type="submit"><span>Search</span></button>
						</div>

						<a href="#" title="#" class="advanced js-advanced-search"><span>Advanced search</span></a>

						<div class="c advancedWrap container-fluid">
							<div class="row">
								<div class="col-sm-12 col-md-6 i">
									<select class="js-select">
										<option>Choose Category</option>
										<option>Creative</option>
										<option>Fashion</option>
										<option>Architecture</option>
										<option>Music</option>
										<option>Nature</option>
										<option>Lifestyle</option>
										<option>Craft</option>
									</select>
								</div>
								<div class="col-sm-6 col-md-3 i">
									<select class="js-select">
										<option>Month</option>
										<option>February</option>
										<option>March</option>
										<option>April</option>
										<option>May</option>
										<option>June</option>
										<option>July</option>
										<option>August</option>
										<option>September</option>
										<option>October</option>
										<option>November</option>
										<option>December</option>
									</select>
								</div>
								<div class="col-sm-6 col-md-3 i">
									<select class="js-select">
										<option>Year</option>
										<option>2015</option>
										<option>2014</option>
										<option>2013</option>
										<option>2012</option>
										<option>2011</option>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="{{URL::asset('assets/js/jquery-2.2.3.min.js')}}"></script>
	<script src="{URL::asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/masonry.pkgd.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/underscore-min.js')}}"></script>
	<script src="{{URL::asset('assets/js/moment-2.8.3.js')}}"></script>
	<script src="{{URL::asset('assets/js/clndr.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/select2.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.dotdotdot.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.countTo.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.easypiechart.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/parsley.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/pace.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/app.min.js')}}"></script>

	<!-- Calendar events -->
	<script>
		Calendar.events = [
			{ date: moment().format(new Date().getFullYear() + '-03-07'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-03-08'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-04-09'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-04-23'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-04-10'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-05-14'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-05-19'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-05-28'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-06-04'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-06-09'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-06-14'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-07-17'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-07-21'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-07-26'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-08-28'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-08-04'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-08-09'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-08-14'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-09-17'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-09-21'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-09-26'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-10-28'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-10-04'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-10-09'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-10-14'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-11-17'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-11-21'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-11-26'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-11-28'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-12-04'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-12-09'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-12-14'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-01-17'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-01-21'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-02-26'), url: '#' },
			{ date: moment().format(new Date().getFullYear() + '-02-28'), url: '#' },
		];
	</script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-80760662-1', 'auto');
		ga('send', 'pageview');
	</script>

	<!-- Demo -->
	<script>
		$('[data-current-year]').each(function() {
			$(this).text(new Date().getFullYear());
		});
	</script>
</body>
</html>
