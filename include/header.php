<!-- Main Header-->

<?php 
    $header_type = 'header-style-two';
    if($pageType == 'home'){
        $header_type = '';
    }
?>
<header class="main-header <?= $header_type; ?>">

	<!-- Header Top -->
	<div class="header-top">
    	<div class="auto-container">
        	<div class="inner-container clearfix">
                
                <!--Top Left-->
                <div class="top-left">
                	<ul class="links clearfix">
                    	<li><a href="#"><span class="icon fa fa-phone"></span>022-28449991</a></li>
                        <li><a href="#"><span class="icon fa fa-map-marker"></span>B/12, Melborne, Australia - 1200064</a></li>
                    </ul>
                </div>
                
                <!--Top Right-->
                <div class="top-right clearfix">
                	<!--social-icon-->
                    <div class="social-icon">
                    	<ul class="clearfix">
                        	<li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <!-- Header Top End -->
    
    <!-- Main Box -->
	<div class="main-box">
    	<div class="auto-container">
        	<div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="index.html"><img src="img/logo.svg" alt=""></a></div>
                </div>
                
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li> 
                                <li><a href="contact.php">Contact us</a></li>
                             </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="options-box">
                    
                        
                        <!--Quote Btn-->
                        <div class="quote-btn">
                            <a href="#" class="theme-btn btn-style-one">Get a quote</a>
                        </div>
                        
                    </div>
                </div>
                <!--Nav Outer End-->
                
        	</div>    
        </div>
    </div>

	<!--Sticky Header-->
    <div class="sticky-header">
    	<div class="auto-container">
            <div class="sticky-inner-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="img/logo.svg" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li> 
                                <li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                </div>
                
            </div>
        </div>
    </div>
    <!--End Sticky Header-->

</header>
<!--End Main Header -->