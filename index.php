<!DOCTYPE html>
<html lang="en">
    <head>
        
        
        <!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/hth-red-favicon.png">
		<!-- Author Meta -->
		<meta name="author" content="david & dayi">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->        
        <title>Hack the Hack</title>
        
        <!-- More Meta Tags -->
        <meta property="og:title" content="Hack the Hack">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Discover what makes a winning hackathon project.">
        <meta property="og:image" content="https://lindayi.me/projects/hack-the-hack/img/hth-social-1200.jpg">
        <meta property="og:url" content="https://lindayi.me/projects/hack-the-hack">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="og:site_name" content="Hack the Hack">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta name="twitter:image:alt" content="Hack the Hack logo">
        
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        
        <!-- CSS -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
    </head>
    
    <body>
        
        <header id="header">
			 <div class="container">
			     <div id="home" class="row align-items-center justify-content-between d-flex">
                     <div id="logo">
                         <a href="index.php"><img src="img/hack-logo-2.png" alt="Hack the Hack logo" title="" /></a>
                     </div>
                     <nav id="nav-menu-container">
                         <ul class="nav-menu">
                             <li class="menu-active"><a href="index.php">Home</a></li>
                             <li><a href="#stats">Stats</a></li>
                             <li><a href="search.php">Hackathons</a></li>
                         </ul>
                     </nav><!-- #nav-menu-container -->
                 </div>
            </div>
        </header>
        
        
        <!-- start banner Area -->
			<section class="banner-area relative">
				<div class="overlay overlay-bg hth"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8">
							<h1 class="text-white">
								Hack the Hack			
							</h1>
							<p class="pt-20 pb-0 fz-24 text-white">
                                Discover what makes a winning hackathon project.</p>
                            <p class="pt-0 pb-10 fz-18 text-white">Mining <span class="bold-num">97,933</span> Devpost submissions and counting...
							</p>
                            
                      <!-- Search bar -->      
			<div class="row d-flex justify-content-center">
				
				<div class="col-md-12">
					<div id="custom-search-input">
						<div>
                            <form class="input-group col-md-12" action="search.php" method="get">
                                <input id="main-search-box" name="query" type="text" class="form-control input-lg" placeholder="Search for hackathons" value="" />
                                <a id="main-search-button" class="search-icon" onclick="$(this).closest('form').submit()" ></a>
                            </form>
                        </div>
					</div>
				</div>
			</div>
                            <!-- End search bar -->	
                            
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->
        
        

	   <section class="feature-area pb-20" id="stats">
           
           
           <div class="container pulldown">					
					<div class="row mockup-container">
						<div class="col-lg-4">
                            <div class="single-feature">
                                <div class="stat-single-num fz-36">
                                <h3>Neural network performance</h3>
                                </div>
                                <div class="stat-single-num fz-36">
                                    <h4>Precision</h4>
                                    <p>0.92</p>
                                </div>
                                <div class="stat-single-num fz-36">
                                    <h4>Accuracy</h4>
                                    <p>0.71</p>
                                </div>
                                <div class="stat-single-num fz-36">
                                    <h4>Recall</h4>
                                    <p>0.72</p>
                                </div>
                                <div class="stat-single-num fz-36">
                                    <h4><abbr title="area under the curve">AUC</abbr></h4>
                                    <p>0.68</p>
                                </div>
                            </div>
                            <div class="single-feature">
								<h4 class="visual-stat">Most popular tools across all projects</h4>
								<div id="bar-chart-1" class="gchart-home"></div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<h4 class="visual-stat">Top tools for winning projects</h4>
								<div id="bar-chart-2" class="gchart-home"></div>
							</div>
                            <div class="single-feature">
								<h4 class="visual-stat">Project group size compared to wins</h4>
								<div id="bar-chart-4" class="gchart-home"></div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<h4 class="visual-stat pb-30">Top project keywords</h4>
								<div id="bar-chart-3" class="gchart-home"></div>
							</div>
						</div>												
					</div>
				</div>
        </section>
        
        
        
        <!--Footer-->
        <footer class="footer-area section-gap">
            <div class="container">
				<div class="row">
				    <div class="col-lg-9 col-md-8 col-sm-8">
				        <div class="single-footer-widget">
				            <p class="footer-text text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Made with <i class="fa fa-coffee" title="tea" alt="tea" aria-hidden="true"></i> by David &amp; Dayi<br>Template by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>	
				        </div>
				    </div>						
				    <div class="col-lg-3 col-md-4 col-sm-4 justify-content-right social-widget">
				        <div class="single-footer-widget">
				            <a class="" href="https://github.com/lindayi/hackthehack">
                                <h6>Github<i class="pl-20 fa fa-github"></i></h6>
				            </a>
				        </div>
				    </div>							
				</div>
            </div>
        </footer>	
        <!-- End footer Area -->
        
        
            <!--ECharts files-->
            <script src="js/echarts.min.js"></script>
            <script src="js/echart-graphs.js"></script>
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
        
            <!--Other script files - including bootstrap-->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>
    </body>
</html>