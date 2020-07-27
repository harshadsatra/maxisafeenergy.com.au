<?php 
    $title = 'Contact';
    $pageType = 'inner';
    include('include/head.php');
    include('include/header.php');
?>
    
    <!--Page Title-->
    <section class="page-title contact-bg">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Default Form Section-->
    <section class="default-form-section">
    	<div class="auto-container">
        	<!--Title Box-->
        	<div class="title-box">
            	<div class="title">Write a Message</div>
                <h2>Have Any Questions?</h2>
                <div class="text">Thank you very much for your interest in our company and our services and if you have any questions, please write us a message now!</div>
            </div>
            
            <!--Default Form-->
            <div class="default-form style-two contact-form">
                <form method="post" action="http://expert-themes.com/html/expo/sendemail.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="firstname" value="" placeholder="Your name" required>
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Your Email" required>
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" placeholder="Your Massage"></textarea>
                        </div>
                        
                        <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="theme-btn message-btn btn-style-one">Send Massage</button>
                        </div>                                        
                    </div>
                </form>
            </div>
            <!--End Default Form-->

            
        </div>
    </section>
    <!--End Default Form Section-->
    
    <!--Contact Info Section-->
    <section class="contact-info-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<ul>
                    	<li>
                            <span class="icon flaticon-placeholder"></span>
                            13005 Greenville Avenue <br> California, TX 70240
                        </li>
                    </ul>
                </div>
                
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<ul>
                    	<li>
                            <span class="icon flaticon-technology-2"></span>
                            +1 800125 6524 <br> mail@lezofinance.com
                        </li>
                    </ul>
                </div>
                
                <div class="column col-md-4 col-sm-6 col-xs-12">
                	<ul>
                    	<li>
                            <span class="icon flaticon-clock-2"></span>
                            10:00am to 6:00pm <br> Sunday Closed
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Contact Info Section-->
    
    <!--Map Section-->
    <section class="contact-map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.7857615939074!2d144.72652131531447!3d-37.86530297974305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad688e477c718f5%3A0xd9d6949619043212!2sMaxisafe!5e0!3m2!1sen!2sin!4v1553420161353" width="100%" height="450" frameborder="0" style="display:block;border:0" allowfullscreen></iframe>
        </div>
    </section>
    <!--End Map Section-->
    
<?php include('include/footer.php'); ?>
</body>
</html>