<?php
    include('config.php');
    $alias = $_GET["alias"];
    $sql = "SELECT * FROM hackathon WHERE hackathon_alias = '".$alias."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hack_title = $row["title"];
        $hack_judge = $row["judges"];
        $start_date = $row["start_date"];
        $end_date = $row["end_date"];
    } else {
        header("Location: ".$SITE_DOMAIN."index.php?alias=".$alias."&exist=false");
    }
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
        <title><?php echo $hack_title;?> - Powered by Hack the Hack</title>
        
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
                             <li><a href="#feature">Hackathons</a></li>
                         </ul>
                     </nav><!-- #nav-menu-container -->
                 </div>
            </div>
        </header>
        
        
        <!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg ht6"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8">
                            <a href="https://hackthe6ix2018.devpost.com/"><h1 id="hackathon-name" class="text-white pb-30"><?php echo $hack_title;?></h1></a>
                            <h2 id="hackathon-date" class="text-white h3"><?php echo $start_date;?> — <?php echo $end_date;?></h2>
							
                            </div>
						</div>											
					</div>
			</section>
			<!-- End banner Area -->
        
        

	   <section class="feature-area pb-100" id="service">
           
           <div class="container pullup">					
					<div class="row mockup-container">
                        
                        <!--Left column-->
						<div class="col-lg-8 col-md-8 col-sm-12">
                            <p class="pt-0 pl-20 fz-24 text-white">
								Projects that are most likely to win:
							</p>
                            <!--Project-->
							<div class="single-feature">
                                <div class="row project-holder">
                                    <div class="col-lg-8 col-md-8 col-sm-6">
                                        <h3 class="project-name h2">AllTheFeels</h3>
                                        <p class="project-tagline">Alexa custom skill - Curates list of playlists depending on how the user's mood for that day is</p>
                                    </div>
                                    <div class="col-lg-2 col-med-2 col-sm-3">
                                        <div class="project-percentage fz-36">
                                            <p>67%</p>
                                        </div>
                                    </div>
								    <div class="col-lg-2 col-med-2 col-sm-3">
                                        <img class="trophy" alt="winning project" src="img/trophy.png"/>
                                    </div>
                                </div>
							</div>
                            <!--End Project-->
                            <!--Project-->
							<div class="single-feature">
                                <div class="row project-holder">
                                    <div class="col-lg-8 col-md-8 col-sm-6">
                                        <a href=""><h3 class="project-name h2">Sci-Collab (Unsolvable Problems) bu there is no more tooomsfsr rthtedjrtysh srhrshwrtyhwr</h3></a>
                                        <p class="project-tagline">Aggregating the world's unsolved problemAggregating the world's unsolved problemAggregating the world's unsolved problemAggregating the world's unsolved problemAggregating the world's unsolved problemAggregating the world's unsolved problemAggregating the world's unsolved problemAggregating the world's unsolved problemAggregating the world's unsolved problemAggregating the world's unsolved problemAggregating the world's unsolved problems</p>
                                    </div>
                                    <div class="col-lg-2 col-med-2 col-sm-3">
                                        <div class="project-percentage fz-36">
                                            <p>67%</p>
                                        </div>
                                    </div>
								    <div class="col-lg-2 col-med-2 col-sm-3">
                                        <img class="trophy" alt="winning project" src="img/trophy.png"/>
                                    </div>
                                </div>
							</div>
                            <!--End Project-->
                            
                            
                            
						</div>
                        <!--End left column-->
                        
                        <!--Right column-->
						<div class="col-lg-4 col-md-4 col-sm-12 pt-56">
							<div class="single-feature">
								<h3 class="h2 pb-30 pt-10">
									Judges
								</h3>
                                <ul>
                                    <li>
                                        <p class="judge-name h5 pb-10 pt-20">Jacob Lee</p>
                                        <p class="judge-affiliation pb-0">Stdlib - Co-Founder</p>
                                    </li>
                                    <li>
                                        <p class="judge-name h5 pb-10 pt-20">Deborah Washburn</p>
                                        <p class="judge-affiliation pb-0">Digital Boundary Group - Director, External Security Services</p>
                                    </li>
                                    <li>
                                        <p class="judge-name h5 pb-10 pt-20">Gabrielle Singh Cadieux Cordolosa III Jr.</p>
                                        <p class="judge-affiliation pb-0">Deloitte Digital - Business Technology Analyst</p>
                                    </li>
                                </ul>
                                
								
							</div>
                        </div>
                        <!--end right column-->
                        
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