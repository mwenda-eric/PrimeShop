<!DOCTYPE html>
<html>
<head>
<title>PRIME VARIABLE COVERS LIMITED</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript">
    addEventListener("load", function()
    { setTimeout(hideURLbar, 0);
    }, false);
		function hideURLbar(){
            window.scrollTo(0,1);
        }
</script>
<!-- //for-mobile-apps -->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/main.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- pop-up-box -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.lightbox.css">
	<script src="assets/js/jquery.lightbox.js"></script>
	<script>
	  // Initiate Lightbox
	  $(function() {
		$('.product-gd1 a').lightbox();
	  });
	</script>
<!-- //pop-up-box -->
<!-- menu -->
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- //menu -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
</head>

<body class="cbp-spmenu-push">
<!-- header -->
	<div class="header-top">
		<div class="container">
			<div class="header-top-left">
				<p>PRIME VARIABLE COVERS LIMITED</p>
			</div>
			<div class="header-top-rigt">
				<p>020 2410 818</p>
			</div>
			<div class="header-top-right">
				<p>Contact Us</p>
			</div>
			<div class="clearfix"> </div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header">
        <nav class="navbar navbar-default" role="navigation">
		<div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="nav navbar-nav navbar-left">
                        	<li class="active"><a href="#top"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="#about" class="scroll"><i class="fa fa-info"></i> About Us</a></li>
							<li><a href="#services" class="scroll">Services</a></li>
							<li><a href="#portfolio" class="scroll">Portfolio</a></li>
							<li><a href="#mail" class="scroll">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('home',[])}}" class="icon-shopping-cart" target="_blank" > Online Shop</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		</div>

<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
		<!-- Slider-starts-Here -->

				<script src="assets/js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });

				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<div class="banner-info-left">
								<img src="assets/images/WP_20150604_004.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="banner-info-right">
								<h1>Farming & Forestry </h1>
                                <ul>
                                <li>- Provision of tree seedlings</li>
                                <li>- Preservation of forest cover</li>
                                <li>- Tree nurseries</li>
                                <li>- Forestry conservancy</li>
                                <li>- Large scale Fencing </li>
                                <li>- Tree planting and maintenance</li>
                                <li>- Water conservation systems and methods in ASAL</li>
                                <li>- Pre- feasibility and feasibility studies</li>
                                <li>- Drought management</li>
                            </ul>
                                <br>
								<div class="cont">
                                    <a href="{{route('shop',[])}}" target="_blank" > Online Shop</a>
                                </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
                    <li>
						<div class="banner-info">
							<div class="banner-info-left">
								<img src="assets/images/WP_20150710_001.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="banner-info-right">
								<h1>Building& Construction</h1>
                                <ul>
                                    <li>- All matters related to building</li>
                                    <li>-construction and distribution of the same Building works for all types of roads</li>
                                    <li>- Water works, irrigation and all related activities</li>
                                </ul>
                                <br>
								<div class="cont">
                                    <a href="{{route('shop',[])}}" target="_blank" > Online Shop</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
                    <li>
						<div class="banner-info">
							<div class="banner-info-left">
								<img src="assets/images/WP_20150806_003.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="banner-info-right">
								<h1>Manufacturing & Supplies </h1>
                                <ul>
                                    <li>- Provision and installation of dam liners for water conservation and fish farming</li>
                                    <li>- Packaging and Storage materials supplies for example gunny bags, pp bags</li>
                                </ul>
                                <br>
								<div class="cont">
                                    {{--{{link_to_route('shop','Visit Our Shop',[],['target'=>'_blank'])}}--}}
                                </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
                    <li>
						<div class="banner-info">
							<div class="banner-info-left">
								<img src="assets/images/WP_20150728_001.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="banner-info-right">
								<h1>Construction Of Dams</h1>
                                <ul>
                                    <li>-</li>
                                </ul>
                                <br>
								<div class="cont">

								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
                    <li>
						<div class="banner-info">
							<div class="banner-info-left">
								<img src="assets/images/WP_20150610_001.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="banner-info-right">
								<h1>Construction Of Fish Pods</h1>
                                <ul>
                                    <li>-</li>
                                </ul>
                                <br>
								<div class="cont">

								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
                    <li>
						<div class="banner-info">
							<div class="banner-info-left">
								<img src="assets/images/WP_20150710_006.jpg" alt=" " class="img-responsive "/>
							</div>
							<div class="banner-info-right">
								<h1>Drought management</h1>
                                <ul>
                                    <li>-</li>
                                </ul>
                                <br>
								<div class="cont">

								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- welcome -->
<!--<div class="container-fluid">-->
<section id="about">
	<div class="welcome">
            <div class="col-md-6 welcome-left">
                <div class="well">
                    <div align="center">
                <h3><span>INTRODUCTION</span></h3>
                        <img src="assets/images/under-heading.png" alt="" >
                    </div>
                <a href="">Prime Variable Covers Limited</a> offers a range of specialized product and service applications designed for
                    <b>Drought management, environmental management, forestry services and afforestation, tree seedling nurseries, fencing (both life and dead fences to conserve forests and fish pod areas)  fish farming, water pans and water conservation dams including dam liners.</b>
                <br>The company specializes in the supply of tree seedlings and dam liners and consulting services on fish farming and water conservation systems and as such, is recognized locally as providing to clients a complete business and management solutions forest cover services and fish farming.
               <br> These innovative water conservation and fish farming solutions are provided through a committed team of motivated science and agricultural professionals, who use only the latest technology and industrial know how to deliver product and service excellence.
            </div>
            </div>
			<div class="col-md-6 welcome-right">
                <div class="well">
                    <div align="center">
				<h3>COMPANY <span>BACKGROUND</span></h3>
                    <img src="assets/images/under-heading.png" alt="" >
                    </div>
				<a href="#">Prime Variable Covers Limited</a> was established in <b>2003</b> as a business name and later incorporated as a limited company in 2009.
				It has since evolved and now has 3 main Divisions<br>
				<strong>A). Farming & Forestry Division</strong>
				<ol>
                <li>Provision of tree seedlings, Preservation of forest cover</li>
                <li>Tree nurseries, Forestry conservancy</li>
                <li>Large scale Fencing ,Tree planting and maintenance</li>
                <li>Water conservation systems and methods in ASAL</li>
                <li>- feasibility and feasibility studies, Drought management</li>
                </ol>
                <strong> B). Building& Construction Division</strong>
                <ol>
                    <li>All matters related to building, construction and distribution of the same
				Building works for all types of roads
				Water works, irrigation and all related activities</li></ol>
				<strong>C). Manufacturing & Supplies Division</strong>
                <ol>
				<li>Provision and installation of dam liners for water conservation and fish farming.</li>
                <li>Packaging and Storage materials supplies for example gunny bags, pp bags</li></ol>

				The range of services covers all aspects of reconnaissance, data search; seek for approvals, preliminary works, detailed works,
                relevant amendments to reflect works, final report to clients and relevant authorities.
			</div>
                </div>
			<div class="clearfix"> </div>
	</div>
<!-- //welcome -->
<!-- about -->
	<div class="about">
		<div class="about-left">
			<img src="assets/images/IMG-20150828-WA0010.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="about-right">
            <h2>COMPANY'S VISION AND MISSION</h2>
            <br>
            <h3>Vision</h3>
            To be the leading Consultancy firm in the region, excellent in Forest conservation and fish farming.
            <br><br>
            <h3>Mission</h3>
            The main purpose of the firm is to provide hands-on, superior quality services and products to our clients through a friendly working environment and to always deliver these services and products on time and within budget so as to achieve repeat business from Clients.
            <br>
        </div>
		<div class="clearfix"> </div>
	</div>
</section>
<section id="about-us">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>Meet Our Team</h2>
                    <img src="assets/images/under-heading.png" alt="..">
                    <p class="lead">Our strong in-house team is composed of qualified and experienced agriculturists, Fish farming experts, foresters and environmentalists. We have a team of eight (8) graduate Scientists in various fields of industrial chemistry, agriculture and forestry eight (8) technician fish farming, forestry and agricultural officers.
                    To complement our core staff, Prime Variable Covers Limited has access to a pool of external consultants in both its main professional areas and bordering professions and disciplines.
                    Prime Variable Covers Limited has demonstrated the capability of providing excellent forestry, trees, fish farming and dams and fish pods liner services to a wide range of clients within the public and private sectors.
                    In providing services to our clients, we combine the expertise of water conservators, foresters, fish farming experts and environmentalists.
                    Below is a list of Prime Variable Covers Limited in-house team.</p>
                </div>
                <div class="gap"></div>
                <div id="team-scroller" class="carousel scale">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="assets/images/mundia.png" alt=""height="256" width="201" ></p>
                                        <h3>Ephraim Mundia M.<small class="designation">Director - Industrial Chemical Technologist</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="assets/images/jane%20mundia.png" alt=""height="256" width="201" ></p>
                                        <h3>Jane Muthoni Mundia<small class="designation">Human Resources and Development/Research and Project Coordinator</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="assets/images/yvone.png" alt="" height="256" width="201"></p>
                                        <h3>Yvonne Ngonyo Mundia<small class="designation"> Finance Director</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="assets/images/okoyo.png" alt="" height="256" width="201"></p>
                                        <h3>Michael Mairuri Okeyo<small class="designation">Forester Research</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="assets/images/brian.png" alt="" height="256" width="201" ></p>
                                        <h3>Brian Mbogo Mundia<small class="designation">- ICT and Public Relations  Manager</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="assets/images/paul%20mundia.png" alt="" height="256" width="201"></p>
                                        <h3>Paul Mundia<small class="designation"> Legal representative and Company Secretary</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left-arrow" href="#team-scroller" data-slide="prev">
                        <i class="icon-angle-left icon-4x"></i>
                    </a>
                    <a class="right-arrow" href="#team-scroller" data-slide="next">
                        <i class="icon-angle-right icon-4x"></i>
                    </a>
                </div><!--/.carousel-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#about-us-->
<!-- //about -->
<!-- our-advantages -->
<section id="services">
	<div class="our-advantages">
		<div class="container">
            <div align="center">
			<h3 align="center">SERVICES</h3>
                <img src="assets/images/under-heading.png" alt="..">
                </div>

				<div class="col-md-4 col-xs-12 ">
                    <div class="panel panel-success">
                        <div class="panel-heading">
						<h4 class="head">Farming & Forestry Division</h4>
                            </div>
                        <div class="panel-body inner">
                            <ul>
						<li>Provision of tree seedlings, Preservation of forest cover  </li>
                        <li>Tree nurseries, Forestry conservancy</li>
                        <li>Large scale Fencing ,Tree planting and maintenance</li>
                        <li>Water conservation systems and methods in ASAL</li>
                        <li>Pre- feasibility and feasibility studies, Drought management </li></ul>
					</div>
                    </div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
						<h4 class="head">Building& Construction Division</h4>
                            </div>
                            <div class="panel-body inner">
						<ul>
                        <li>All matters related to building, construction and distribution of the same Building works for all types of roads</li>
                        <li>Water works, irrigation and all related activities</li></ul>
                                <br>
                                <br>
                                </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-xs-12 ">
                        <div class="panel panel-success">
                            <div class="panel-heading">
						<h4 class="head">Manufacturing & Supplies Division</h4>
                                </div>
                            <div class="panel-body inner">
						<ul>
                        <li> Provision and installation of dam liners for water conservation and fish farming.</li>
                        <li>Packaging and Storage materials supplies for example gunny bags, pp bags</li></ul>
                                <br>
                                <br>
                                </div>
                            </div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>

				<div class="col-md-4 col-xs-12 ">
				         <div class="panel panel-success">
                            <div class="panel-heading">
						<h4 class="head">Consulting solutions </h4>
                        </div>
                            <div class="panel-body inner">
						<ul>
                        <li>Forest cover -ready information.</li>
                        <li>Resource analysis through</li>
                        <li>Maximization of space use.</li>
                        <li>System engineering for mitigation, optimization and solution planning.</li></ul>
                        </div>
					</div>
					<div class="clearfix"> </div>
				</div>
                <div class="clearfix"> </div>

		</div>
	</div>
<!-- //our-advantages -->

<!-- about-bottom -->
<!--	<div class="about-bottom">
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="about-bottom-info">
								<h3>Farming & Forestry Division</h3>
								<p> <ul>
                                <li>Provision of tree seedlings, Preservation of forest cover  </li>
                                <li>Tree nurseries, Forestry conservancy</li>
                                <li>Large scale Fencing ,Tree planting and maintenance</li>
                                <li>Water conservation systems and methods in ASAL</li>
                                <li>Pre- feasibility and feasibility studies, Drought management </li></ul>
                                </p>
							</div>
						</li>
						<li>
							<div class="about-bottom-info">
								<h3>Manufacturing & Supplies Division</h3>
								<p><ul>
                                <li> Provision and installation of dam liners for water conservation and fish farming.</li>
                                <li>Packaging and Storage materials supplies for example gunny bags, pp bags</li></ul></p>
							</div>
						</li>
						<li>
							<div class="about-bottom-info">
								<h3>Building& Construction Division</h3>
								<p><ul>
                                <li>All matters related to building, construction and distribution of the same Building works for all types of roads</li>
                                <li>Water works, irrigation and all related activities</li></ul></p>
							</div>
						</li>
                        <li>
							<div class="about-bottom-info">
								<h3>Consulting solutions</h3>
								<p><ul>
                                <li>Forest cover -ready information.</li>
                                <li>Resource analysis through</li>
                                <li>Maximization of space use.</li>
                                <li>System engineering for mitigation, optimization and solution planning.</li></ul></p>
							</div>
						</li>
					</ul>
				</div>
			</section>
							&lt;!&ndash;FlexSlider&ndash;&gt;
									<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
									<script defer src="js/jquery.flexslider.js"></script>
									<script type="text/javascript">
									$(function(){
									  SyntaxHighlighter.all();
									});
									$(window).load(function(){
									  $('.flexslider').flexslider({
										animation: "slide",
										start: function(slider){
										  $('body').removeClass('loading');
										}
									  });
									});
								  </script>
							&lt;!&ndash;End-slider-script&ndash;&gt;
		</div>
	</div>-->
<!-- //about-bottom -->
</section>
<!-- products -->
<section id="portfolio">
	<div class="products" id="products">
		<div class="container">
                <div align="center">
				<h4 align="center" class="head">MAJOR ASSIGNMENTS IN THE LAST FIVE YEARS</h4>
                <img src="assets/images/under-heading.png" alt="..">
                               </div>
                <p>Prime Variable Covers Limited services a global portfolio of clients seeking holistic solutions across a diverse range of Water management requirements.  We have an extensive Client list, reflecting on our expertise and experience. Amongst our Clients are household names: builders and developers, engineering consulting firms, national, regional and local businesses, financial institutions, Religious and educational institutions, public sector bodies’ i.e. National, provincial and local government departments; community groups, and co-operative societies.
                Prime Variable Covers Limited also advices small businesses and private individuals, the aim as always is to offer professional service tailored to both corporate and individual requirements.
                The following are just some of the clients that we have dealt with;</p>
            <div class="special">
                <div id="p-scroller" class="carousel scale">
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <div class="row">
                                           <div class="col-sm-3" style="padding-top: 20px">
                                               <div class="member">
                                                   <p><img class="img-responsive img-rounded" src="assets/images/kengen.png" alt="" ></p>
                                                   <h5>KENYA ELECTRICITY GENERATING CO. LTD<small class="designation">SUPPLY OF DAM LINERS FOR  SONDU-MIRIU HYDRO-ELECTRIC POWER</small></h5>
                                               </div>
                                           </div>
                                           <div class="col-sm-3">
                                               <div class="member">
                                                   <p><img class="img-responsive img-rounded" src="assets/images/KTDA.png" alt="" ></p>
                                                   <h5>KENYA TEA DEVELOPMENT AUTHORITY (KTDA)<small class="designation">CONSULTING SERVICES FOR WATER SUPPLY TO THE PROPOSED RIANYAMWAMU TEA FACTORY.</small></h5>
                                               </div>
                                           </div>
                                           <div class="col-sm-3">
                                               <div class="member">
                                                   <p><img class="img-responsive img-rounded" src="assets/images/county.png" alt="" ></p>
                                                   <h5>COUNTY COUNCIL OF KIRINYAGA<small class="designation">Supply and installation of pond liners and u.v treated LDPE</small></h5>
                                               </div>
                                           </div>
                                           <div class="col-sm-3">
                                               <div class="member">
                                                   <p><img class="img-responsive img-rounded" src="assets/images/county.png" alt="" ></p>
                                                   <h5>COUNTY COUNCIL OF TRANZOIA<small class="designation">Supply of pond liners and LDPE for 20 fish ponds that the fisheries office was putting up</small></h5>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="item">
                                       <div class="row">
                                           <div class="col-sm-3">
                                               <div class="member">
                                                   <p><img class="img-responsive img-rounded" src="assets/images/county.png" alt="" ></p>
                                                   <h5>COUNTY COUNCIL OF THIKA<small class="designation">PVC was contracted to supply pond liners and LDPE for 20 fish ponds that the fisheries office was putting up in</small></h5>
                                               </div>
                                           </div>
                                           <div class="col-sm-3">
                                               <div class="member">
                                                   <p><img class="img-responsive img-rounded" src="assets/images/county.png" alt="" ></p>
                                                   <h5>COUNTY COUNCIL OF MERU<small class="designation">Supply of LDPE heavy duty liners for 50 ponds in the area</small></h5>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <a class="left-arrow" href="#p-scroller" data-slide="prev">
                                   <i class="icon-angle-left icon-4x"></i>
                               </a>
                               <a class="right-arrow" href="#p-scroller" data-slide="next">
                                   <i class="icon-angle-right icon-4x"></i>
                               </a>
                           </div><!--/.carousel-->
			</div>
		</div>
	</div>
<!-- //products -->
</section>
<!-- mail -->
	<div class="mail" id="mail">
		<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="feedback-info">
                        <div align="center">
                        <h3 align="center">Send a Message</h3>
                            <img src="assets/images/under-heading.png" alt="" >
                        </div>
                        <form>
                            <label id="contact">Your name:</label>
                                <input type="text" class="form-control" placeholder="Name" required=" ">
                            <label for="email">E-mail:</label>
                                <input type="text" id="email" class="form-control" placeholder="Enter Your Email Here..." required=" ">
                            <label for="phone">Phone number:</label>
                                <input type="text" id="phone" class="form-control" placeholder="+254 124 345 678" required=" ">
                            <label for="message">Message:</label>
                                <textarea id="message" class="form-control" placeholder="Write your message here...." required=" "></textarea>
                                <input class="btn btn-primary" type="submit" value="Send">
                            </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div align="center">
                        <h3 class="maphead">Address</h3>
                        <img src="assets/images/under-heading.png" alt="" >
                    </div>
                    <h4 style="color: #ffffff; text-align: center;">Main Office</h4>
                    <p style="color: #ffffff; margin-left: 15px;">
                    Popo Road,  Matubato Building Grd Fl<br>
                    P.O. Box 55401-00100,<br>
                    Gikomba Nairobi.Near and Opposite Barclays Bank Gikomba<br>
                   <b>Tel:</b> +254-020-2511461-3,<br>
                   <b>Mobile:</b> 0722-826 336 or 020 2410 818 <br>
                    <b>Fax:</b> +254-020-2230784<br>
                    <b>E-mail:</b> info@primevariablecoves.com</p>
                    </div></div>
           <div>
            <div align="center">
            <h3 class="maphead" align="center">Find us on Map</h3>
            <img src="assets/images/under-heading.png" alt="" >
            </div>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8153302459846!2d36.8373419!3d-1.284749599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1131b77a9c01%3A0x468833f737da6430!2sMatabata+House%2C+Nairobi%2C+Kenya!5e0!3m2!1sen!2ske!4v1440744318241" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
            </div>
		</div>
<!-- //mail -->

	<div class="copy">
		 <p>Copyright © 2015 Prime Valuable Covers. All rights reserved | Design by <a href="http://www.caricwebtech.com" target="_blank">Caric Web Technologies</a></p>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
		<script src="assets/js/bootstrap.js"> </script>
        <script src="assets/js/app.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
