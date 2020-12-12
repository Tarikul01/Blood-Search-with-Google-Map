<?php
    session_start();
    $_SESSION['userId'] = 1;
?>

<!doctype html>
<html lang="en-US">
	<head>
		<title>Blood Donor</title>
        
        <!--description-->
		<meta name="viewport" content="width = device-width, initial-scale=1.0">
        <meta name="description" content=" With this Blood Donor website you can easily find out donors of your desired blood group. It is aasociated with google map">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--for ie & edge support -->
		<meta name="author" content="Sadia Afrin Tarin">
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
        
        <!--For nanimation-->
        <script src='https://unpkg.com/scrollreveal'></script>
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        
        <!--fontawesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
        <!--google fonts-->
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        
        <!--styles-->
         <link rel="stylesheet"  type="text/css" href= "css/style.css">
        <link rel="stylesheet"  type="text/css" href= "css/responsive.css">
        
        <!--<script src="Prefix_Free.js"></script>   if js not supported in browser-->
        <!-- Latest compiled and minified CSS -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
        <!-- jQuery library -->
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
        <!-- Popper JS -->
         <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
        <!-- Latest compiled JavaScript -->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
	</head>

    <body>
        <!--Start Navigation -->
        <section class="container">
            <nav class="nav">
                <a href="index.html"><img src="images/logo.jpg" class="logo" alt="logo"></a>
                
                <?php
                    if(isset($_SESSION['userId'])){
                        echo '<span class="menu-bar">
                            <div class="bar half start"></div>
                            <div class="bar"></div>
                            <div class="bar half end"></div>
			             </span>
                        <ul class="nav-list">
                              <li><a href="#" class="nav-link">Home</a></li>
                              <li><a href="#" class="nav-link">About</a></li>
                              <li><a href="#" class="nav-link">Contact</a></li>
                              <li><a href="#" class="nav-link">Search</a></li>
                              <li><a href="#" class="nav-link">Logout</a></li>
		                  </ul>';
                    }
                    else{
                        echo'<ul class="nav-list2">
                            <li><a href="#" class="nav-link">Login</a></li>
                        </ul>';
                    }
                ?>   
	        </nav>
        </section>
        <!--End Navigation -->
        
        <!--Start Main Section-->
        <section class="container">
            <main>
                <!-- start MAP-->
                <div id="googleMap" class="googleMap">
                </div>
                 <!--end MAP-->
                
                <div class='one'></div>
                <div class='two'></div>
                
                <!--start aside-->
                <div class='aside'>
                    <!--start aside up part-->
                    <div class="aside-up">
                        <div class="circle">6559</div>
                            <p>Donor</p>
                    </div>
                    <!--end aside up part-->

                     <!--start aside down part-->
                    <div class="aside-down">
                        <div>
                            <span class="Big-letter">B-</span>
                            <span class="small-letter">Beautiful
                            </span>
                        </div>

                        <div>
                            <span class="Big-letter">L-</span>
                            <span class="small-letter">Life</span> 
                        </div>

                        <div>
                            <span class="Big-letter">O-</span>
                            <span class="small-letter">Only</span> 
                        </div>

                        <div>
                            <span class="Big-letter">O-</span>
                            <span class="small-letter">On</span> 
                        </div>

                        <div>
                            <span class="Big-letter">D-</span>
                            <span class="small-letter">Donation</span>
                        </div>
                    </div>
                    <!--end aside down part-->
                </div>
                 <!--end aside-->
                    
                <!--start About-->
                <div class="about">
                    <div class="about-header">About us</div>
                    <div class='separator'>
                        <div class='line'></div>
                        <div class='asterisk'><i class='fas fa-asterisk'></i></div>
                        <div class='line'></div>
                    </div>

                    <div class="about-content">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesettingindustry.
                            Lorem Ipsum has been the industry's standard dummy 
                            text ever since the 1500s
                        </p>
                    </div>
                </div>
                <!--end About-->
            </main>
        </section>
        <!--End Main Section -->
        
        <!--Start Footer-->
        <section class="container">
            <footer>
                <!--start footer up-->
                <div class="footer-up">
                    <!--start footer-up-item Explore-->
                    <div class="footer-up-item">
                        <p class="footer-title">Explore</p>
                        <ul>
                            <li><a herf="#">Home</a></li>
                            <li><a herf="#">About</a></li>
                            <li><a herf="#">Contact</a></li>
                        </ul>
                    </div>
                    <!--end footer-up-item Explore-->
                    
                    <!--start footer-up-item Visit-->
                    <div class="footer-up-item">
                        <p class="footer-title">Visit</p>
                        <ul>
                            <li>Barisal sador, Barisal</li>
                            <li>Road no: 1000</li>
                        </ul>
                    </div>
                    <!--end footer-up-item Visit-->
                    
                    <!--start footer-up-item Legal-->
                    <div class="footer-up-item">
                        <p class="footer-title">Legal</p>
                        <ul>
                            <li><a herf="#">Terms</a></li>
                            <li><a herf="#">Privacy</a></li>
                        </ul>
                    </div>
                    <!--start footer-up-item Legal-->
                </div>
                <!--end footer up-->
                
                <!--start footer down-->
                <div class="footer-down">
                    <ul>
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class='fab fa-youtube'></i></li>
                        <li><i class='fab fa-twitter'></i></li>
                        <li><i class='fab fa-github'></i></li>
                        <li><i class='fab fa-linkedin'></i></li>
                    </ul>
                    <span class="copyright">2020 @copyright Allright reserve</span>
                </div>
                <!--end footer down-->
            </footer>
        </section>
        <!--End Footer-->
        
        <script src="main.js"></script>
    </body>
</html>
