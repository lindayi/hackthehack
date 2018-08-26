<?php
    include('config.php');
    $query = $_GET["query"];
    $sql = "SELECT * FROM hackathon WHERE MATCH (title) AGAINST ('".$query."');";
    $result = $conn->query($sql);
    $result_count = $result->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        
        <!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/hth-red-favicon.png">
		<!-- Author Meta -->
		<meta name="author" content="david-dayi">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->        
        <title>Search for <?php echo $query;?> - Powered by Hack the Hack</title>
        
        <!-- More Meta Tags -->
        <meta property="og:title" content="Hack the Hack">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Find out what kind of projects win hackathons hosted by Major League Hacking">
        <meta property="og:image" content="http://dav-idcox.com/bikespace/icons/media_thumb1.jpg">
        <meta property="og:url" content="http://dav-idcox.com">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="og:site_name" content="Hack the Hack">
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
        
        <header id="header" id="home">
			 <div class="container">
			     <div class="row align-items-center justify-content-between d-flex">
                     <div id="logo">
                         <a href="index.html"><img src="img/hack-logo-2.png" alt="" title="" /></a>
                     </div>
                     <nav id="nav-menu-container">
                         <ul class="nav-menu">
                             <li class="menu-active"><a href="index.html">Home</a></li>
                             <li><a href="index.html#stats">Stats</a></li>
                             <li><a href="search.html">Hackathons</a></li>
                         </ul>
                     </nav>
                     <!-- #nav-menu-container -->
                 </div>
            </div>
        </header>
        
        
        <!-- start banner Area -->
			<section class="banner-area relative">
				<div class="overlay overlay-bg sch"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8">
							<h1 class="text-white">
								<?php echo $result_count;?> Hackathons found	
							</h1>
                            
                            <!-- Search bar -->
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12">
                                    <div id="custom-search-input">
                                        <div class="input-group col-md-12">
                                            <input id="main-search-box" type="text" class="form-control input-lg" placeholder="Search for hackathons" value="<?php echo $query ?>" />
                                            <a id="main-search-button" class="search-icon" href="hack-the-6ix.html"></a>
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
        
        

	   <section class="feature-area pb-100" id="stats">
           
                <div class="container pullup-2">					
					<div class="row mockup-container d-flex justify-content-center">
                        
                        <!--Centre column-->
                            
							<!--Centre column-->
						<div class="col-lg-8 col-md-8 col-sm-12">
                            
                            <p class="pt-0 pl-20 fz-24 text-white">
								Hackathons on Devpost:
							</p>
                            
                            <!--Search result-->
							<a href="hack-the-6ix.html">
                            <div class="search-result single-feature">
                                <div class="row project-holder">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <h3 class="hackathon-name h2">Hack the 6ix</h3>
                                    </div>
                                    <div class="col-lg-3 col-med-3 col-sm-3">
                                        <div class="hackathon-num-project fz-36">
                                            <h4><abbr title="number">#</abbr> of projects</h4>
                                            <p>37</p>
                                        </div>
                                    </div>
								    <div class="col-lg-3 col-med-3 col-sm-3">
                                        <div class="hackathon-num-winner fz-36">
                                            <h4><abbr title="number">#</abbr> of winners</h4>
                                            <p>4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
							</a>
                            <!--End Search Result-->
                            
                            <!--Search result-->
							<a href="hack-the-6ix.html">
                            <div class="search-result single-feature">
                                <div class="row project-holder">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <h3 class="hackathon-name h2">Hack the 6ix</h3>
                                    </div>
                                    <div class="col-lg-3 col-med-3 col-sm-3">
                                        <div class="hackathon-num-project fz-36">
                                            <h4><abbr title="number">#</abbr> of projects</h4>
                                            <p>37</p>
                                        </div>
                                    </div>
								    <div class="col-lg-3 col-med-3 col-sm-3">
                                        <div class="hackathon-num-winner fz-36">
                                            <h4><abbr title="number">#</abbr> of winners</h4>
                                            <p>4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
							</a>
                            <!--End Search Result-->
                            <!--Search result-->
							<a href="hack-the-6ix.html">
                            <div class="search-result single-feature">
                                <div class="row project-holder">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <h3 class="hackathon-name h2">Hack the 6ix</h3>
                                    </div>
                                    <div class="col-lg-3 col-med-3 col-sm-3">
                                        <div class="hackathon-num-project fz-36">
                                            <h4><abbr title="number">#</abbr> of projects</h4>
                                            <p>37</p>
                                        </div>
                                    </div>
								    <div class="col-lg-3 col-med-3 col-sm-3">
                                        <div class="hackathon-num-winner fz-36">
                                            <h4><abbr title="number">#</abbr> of winners</h4>
                                            <p>4</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
							</a>
                            <!--End Search Result-->
                            
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
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
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