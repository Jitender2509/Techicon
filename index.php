<?php include "function.php";

contact();
?>
<?php include "includes/header.php"; ?>
<style type="text/css">

  .navbar-dark{
  background: #ffffff00;
}
.navbar-dark .navbar-nav .nav-link{
  color: #ffffff;
  letter-spacing: 1px;
  font-size: 14px;
  position: relative;
  padding: 10px 15px;
  border-radius: 50px;
}
.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus{
  color: #ffffff;
  background: #faad3b
}
.navbar-dark .navbar-nav .nav-link.active{
  background: #009bb7;
}


.navbar-dark .navbar-nav .nav-link::after {
    content: '';
    width: 0;
    height: 3px;
    background: #ffffff;
    position: absolute;
    bottom: 0;
    left: 0;
  right: 0;
  text-align: center;
  margin: 0 auto;
    border-radius: 0px;
    -webkit-transition: all .5s;
    transition: all .5s;
    z-index: -1;
}
.navbar-dark .navbar-nav .nav-link.active::after {
  width: 50%;
}

.services-inner-box {
    padding: 15px;
    background: #ffffff;
    margin-bottom: 30px;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: 2px 2px 3px 3px #d4d7dc;
  }
  #mainNav.navbar-shrink a {
    color: black;
}
.navbar-brand .img-fluid {
    max-width: 100%;
    height: 70px;
    transform: rotateX(25deg);
    filter: invert(1);
}
 #mainNav.navbar-shrink .img-fluid {
  filter: invert(0);
  
  
 }
 
 @media (max-width: 767px) {
	#mainNav {
		background-color: #ffffff00;
	}
	.navbar-dark .navbar-brand{
		width: 55%;
	}
	.navbar-dark .navbar-nav .nav-link::after{
		display: none;
	}
	.navbar-dark .navbar-toggler{
		color: white;
		border-color:white;
		border-radius: 0;
		font-weight: 200;
	}
	
	#mainNav.navbar-shrink button
	{
	    color: black;
		border-color:black;
	}
 
</style>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <?php include "includes/nav.php"; ?>
	<?php include "includes/slider.php"; ?>
	

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box"> 
                    <br>
                        <h2>About Techicon.</h2>
                        <br>
                             <p style="text-align:justify;font-size:16px;"> Tech-live Solutions is organizing an event <b>Techicon</b> for students. Anyone can participate in this event. Techicon providing a great platform for students of <b>B.tech, M.sc(IT), BCA </b> to utilize their skills and test themselves in various IT Fields i.e Graphic Design, App&Web Development, Gaming, Web Design, Debugging, Editing.  It's a good opportunity for students and freshers  where they can explore their creativity,gather knowledge and share their ideas.. Event includes various activities to examine student's skills and the best one will also get a chance to win exciting prizes..  It is a huge opportunity for anyone to show their creativity and win exciting prizes.. </p>
						
						<ul>
							<li><b>Follow Us</b></li>
							<li><a href="https://www.facebook.com/techlivemohali/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://twitter.com/techlive_sol/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="https://www.linkedin.com/company/6622992/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/techlivesolutions/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://plus.google.com/+TechliveSolutions"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCCZ0s8IPa21j8ouxXyAe_Og"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>

						<a class="btn-new from-middle animated" href="register.php">REGISTER HERE</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn"><br><br><br><br>
						<img src="images/W.jpeg" alt="" style="box-shadow: 2px 2px 3px 3px;" class="img-fluid img-rounded fat-ab">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Technical Events</h3>
                <!-- <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p> -->
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
					<a href="Graphic_Design.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>Graphic Design</h2>
						<p>Test Your skills in Graphic Design Theory and the Basic Principles of Color Theory, Typography, Branding, Logo Design, Layout & More!</p>
					</div></a>
                </div><!-- end col -->
				
				<div class="col-md-4">
				<a href="Development.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>App & Web Development</h2>
						<p>Test Your skills in selecting the right development model and process, the tools and resources for your projects!</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
				<a href="Debugging.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>Debugging</h2>
						<p>Get to know various Browser Developer Tools for popular browsers & use them to debug & speed up your development process!</p>
					</div></a>
                </div><!-- end col -->
				<div class="col-md-4">
				<a href="Gaming.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
						    <img style="max-width: 100%;" src="images/co.jpg">
							<!--<i class="flaticon-seo"></i>-->
						</div>
						<h2>Gaming Zone</h2>
						<p>Show up your gaming skills and win exiting prizes<br><br><br></p>
					</div></a>
                </div><!-- end col -->
                <div class="col-md-4">
				<a href="Web_Designing.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>Web Designing</h2>
						<p>Testing Your skill to create a website using HTML, CSS, Bootstrap ,Responsive Design, cross device maintainability and more!</p>
					</div></a>
                </div><!-- end col -->
				<div class="col-md-4">
				<a href="Video_Editing.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>Video Editing</h2>
						<p>Show Your different  video editing skills that can be used to entertain, educate, market products and more!</p>
					</div></a>
                </div><!-- end col -->
            </div>
            
        
            <br>
            <div class="section-title text-center">
                <h3>Non-Technical Events</h3>
                <!-- <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p> -->
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
					<a href="face_paint.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>Face Painting</h2>
						<p>Show your creativity & imagination in paint my face competition!</p>
					</div></a>
                </div><!-- end col -->
				
				<div class="col-md-4">
				<a href="standup.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
						    <img style="max-width: 100%;" src="images/comedy.png">
							<!--<i class="flaticon-discuss-issue"></i>-->
						</div>
						<h2>Standup Comedy</h2>
						<p>Show your amazing humor and make people laugh in this event!</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
				<a href="wall_collage.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
						    <img style="max-width: 100%;" src="images/WALL ART.png">
							<!--<i class="flaticon-idea"></i>-->
						</div>
						<h2>Wall Collage</h2>
						<p>Show your creativity & imagination in Wall Collage competition!</p>
					</div></a>
                </div><!-- end col -->
				<div class="col-md-4">
				<a href="ad_mad.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
						    <img style="max-width: 100%;" src="images/IDEA MAD.png">
							<!--<i class="flaticon-seo"></i>-->
						</div>
						<h2>Ad Mad Show</h2>
						<p>Participate in this event where creativity meets madness</p>
					</div></a>
                </div><!-- end col -->
                <div class="col-md-4">
				<a href="hand_art.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
						    <img style="max-width: 100%;" src="images/hand .png">
							<!--<i class="flaticon-development"></i>-->
						</div>
						<h2>Hand Art</h2>
						<p>Show your creativity & imagination in hand art competition!</p>
					</div></a>
                </div><!-- end col -->
				<div class="col-md-4">
				<a href="rangoli.php">
                    <div class="services-inner-box">
						<div class="ser-icon">
						    <img style="max-width: 100%;" src="images/rangoli.png">
							<!--<i class="flaticon-process"></i>-->
						</div>
						<h2>Rangoli</h2>
						<p>Show your creativity & imagination in Rangoli Designing!</p>
					</div></a>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contact Us</h3>
                <p>If You Have Any Doubt Or Suggestion Please Write Your Query.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form method="post" action="" >
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" name="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" type="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" type="tel" placeholder="Your Phone" name="phone" pattern="[6-9]{1}[0-9]{9}" required="required" data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" name="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button class="sim-btn btn-new from-middle animated" name="contact" data-text="Send Message" type="submit">Send Message</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

<?php include "includes/footer.php"; ?>