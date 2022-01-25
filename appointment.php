<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Atrium Physiotherapy | Appointment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Book your next appointment with Atrium Physiotherapy Now! easily accessible in Calgary">
   
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

    <body>
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-blue flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-lg-4 pr-2 align-items-center">
						  <img src="images/atriumLogo.png" style='max-width:80%;' >
		    		<!--<a class="navbar-brand" href="index.php">Health <span>Plus</span></a>-->
	    		</div>
	    		<div class="col-lg-8 d-none d-md-block">
		    		<div class="row d-flex">
			    		<div class="col-md-6 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">Address:  #140 - 340 Midpark Way	SE, T2X 1P1</span>
							</div>
							<div class="col-md-6 pr-4 d-flex topper align-items-center">
									<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
									<span class="text">Email: admin@atriumphysiotherapy.com</span>
								</div>
					    <div class="col-md-6 pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone"></span></div>
						    <span class="text">Phone: 403.255.4461</span>
					    </div>
					    <div class="col-md-6 pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-fax"></span></div>
						    <span class="text">Fax: 403.259.8776</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
          <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>
            <p class="button-custom order-lg-last mb-0"><a href="appointment.php" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p>
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
               <!--<li class="nav-item"><a href="doctor.html" class="nav-link">Doctors</a></li>-->
                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                <!--<li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>-->
               	<li class="nav-item"><a href="blog.php" class="nav-link">Blogs</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="education.html" class="nav-link">Patient Education</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Appointment</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">Appointments</span>
	            <h2 class="mb-4">Appointment Request</h2>
	            <p>If you have any further questions, please feel free to contact our staff.</p>
	          </div>
            <span id="outputMessage"> </span>			  
	          <form  method='post' role="form" action="ajax/sendEmail.php" enctype="multipart/form-data" id="myform" class="appointment-form ftco-animate">
						<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" name='name' class="form-control" placeholder="Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="email" name='email' class="form-control" placeholder="Email">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="service" id="" class="form-control">
                      	<option value="" style='color:black;'>Select Your Services</option>
                        <option value="Health Insurance & Cash" style='color:black;'>Health Insurance & Cash </option>
                        <option value="Motor Vehicle Accident" style='color:black;'>Motor Vehicle Accident</option>
                        <option value="Workers Compensation" style='color:black;'>Workers Compensation </option>
                        <option value="Other Services" style='color:black;'>Other Services</option>
                      </select>
                    </div>
		              </div>
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" name='phone' placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
									<div class="form-group">
											<textarea cols="30" rows="2" name='pMessage' class="form-control" placeholder="Message"></textarea>
										</div>
		    			
	    				</div>
	    				<div class="d-md-flex">
									<div class="form-group">
											<div class="input-wrap">
												<div class="icon"><span class="ion-md-calendar"></span></div>
												<input type="text" name='dateC' class="form-control appointment_date" placeholder="Date">
											</div>
										</div>
		            <div class="form-group ml-md-4">
		            <input type="submit" name="submitForm" value="Request Appointment" id='submitEmail' class="btn btn-secondary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
    			</div>
    			<div class="col-lg-6 p-5 bg-counter aside-stretch">
              <h3 class="vr">About Atrium Physiotherapy Facts</h3>
              <div class="row pt-4 mt-1">
                <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 p-5 bg-light">
                    <div class="text">
                      <strong class="number" data-number="28">0</strong>
                      <span>Years of Experience</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 p-5 bg-light">
                    <div class="text">
                      <strong class="number" data-number="7">0</strong>
                      <span>Different Services</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 p-5 bg-light">
                    <div class="text">
                      <strong class="number" data-number="4">0</strong>
                      <span>Practitioners</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 p-5 bg-light">
                    <div class="text">
                      <strong class="number" data-number="5">0</strong>
                      <span>Staff</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

   
    <footer class="ftco-footer bg-blue ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-5">
                <img src="images/atriumLogo.png" style='max-width:80%;' >
              </div>
              <div class="ftco-footer-widget mb-5">
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">#140 - 340 Midpark Way	SE, T2X 1P1</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">403.255.4461</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">admin@atriumphysiotherapy.com</span></a></li>
                  </ul>
                </div>
  
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <!-- <li class="ftco-animate">
                  <a href="https://twitter.com/HealthPlusPhysio"
				  target="blank"><span class="icon-twitter"></span
                  ></a>
                </li> -->
                <li class="ftco-animate">
                  <a href="https://www.facebook.com/Atriumphysio/"
                    target="blank"><span class="icon-facebook"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="https://www.instagram.com/healthplusphysio/"
				  target="blank"><span class="icon-instagram"></span
                  ></a>
                </li>
                <li class="ftco-animate">
                  <a
                    href="https://www.google.com/search?q=atriumphysiotherapy+google+reviews&rlz=1C1GCEA_enCA971CA971&oq=atriumphysiotherapy+google+reviews&aqs=chrome..69i57j69i60l3.4688j0j4&sourceid=chrome&ie=UTF-8#lrd=0x882b34cbaf51768b:0x460ff047a1eab903,1,,,"
					target="blank"><span class="icon-google"></span
                  ></a>
                </li>
              </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-5 ml-md-4">
                <h2 class="ftco-heading-2">Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                  <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                  <li><a href="services.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                  <li><a href="blog.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Blog</a></li>
                  <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                </ul>
              </div>
        
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-5 ml-md-4">
                <h2 class="ftco-heading-2">Services</h2>
                <ul class="list-unstyled">
                    <li><a href="services.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Physiotherapy</a></li>
                    <li><a href="services.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Massage Therapy</a></li>
                    <li><a href="services.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Laser Therapy</a></li>
                    <li><a href="services.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Motor Vehicle Accident (MVA)</a></li>
                    <li><a href="services.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Workplace Injures Progam (WCB)</a></li>
                    <li><a href="services.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Custom Crafted Orthotics</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-5">
                  <h2 class="ftco-heading-2">Operating Hours</h2>
                  <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Monday: 8:00am-7:00pm</h3>
                <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Tuesday: 8:00am-5:00pm</h3>
                <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Wednesday: 8:00am-7:00pm</h3>
                <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Thursday: 8:00am-3:00pm</h3>
                <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Friday: 8:00am-7:00pm</h3>
               <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Saturday: Closed</h3>
                <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Sunday: Closed</h3>
              </div>
              <!--
              <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Subscribe to Us!</h2>
                <form action="#" class="subscribe-form">
                  <div class="form-group">
                    <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="form-control submit px-3">
                  </div>
                </form>
              </div>
              -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  
              <p>
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
            </div>
          </div>
        </div>
      </footer>
    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/functions.js"></script>
  </body>
</html>