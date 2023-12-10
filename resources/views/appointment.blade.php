
@extends('layout')

@section('content')
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
	<x-header />

	  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Appointment</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">We Are <span>Gomez<sup>+</sup></span> A Medical Center</h2>
			            <p>Welcome to Gomez<sup>+</sup>. You and your loved ones are safe in our internationally accredited care. Our scope of healthcare services revolves around patient safety and we offer you highly specialized medical care including tertiary and super specialty care at our state-of-the-art facilities. At our center in Awissawella, you can rest easy while our practiced and qualified medical staff works around the clock to ensure a superior patient experience. A panel of over 300 visiting and resident specialist consultants and our teams of care givers ensure you the best of care for all your health problems. This being the case, we have always been recognized as one of the leading healthcare providers in Sri Lanka bringing in international best practices ensuring superior outcomes.</p>
			            <p><a href="appointment" class="btn btn-primary py-3 px-4">Make an appointment</a> <a href="tel://+12345678910" class="btn btn-secondary py-3 px-4">Contact us</a></p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
			<div class="container">
        <div class="row d-flex">
	        <div class="col-md-7 py-5">
	        	<div class="py-lg-5">
		        	<div class="row justify-content-center pb-5">
			          <div class="col-md-12 heading-section ftco-animate">
			            <h2 class="mb-3">Our Services</h2>
			          </div>
			        </div>
			        <div class="row">
			        	<div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Emergency Services</h3>
			                <p>Our 24-hour Emergency Treatment Unit (ETU) is equipped with the latest technology, and is manned by skilled staff and medical professionals, including surgeons and anaesthetists.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Ambulence</h3>
			                <p>Gomez<sup>+</sup> provides you with a prompt, high quality emergency ambulance service. Our ambulances are equipped with cutting-edge life-saving equipment including defibrillators and mobile ventilators.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-experiment-results"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">pharmacy</h3>
			                <p>The pharmacy is the one place where all our patients converge at some point or the other during a visit to Asiri Hospitals and that is why we ensure that all Asiri Pharmacies are well stocked with products that match the most stringent international standards, and manned by efficient, qualified personne.</p>
			              </div>
			            </div>
			          </div>   
		              <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Channeling Services</h3>
			                <p>We offer highest standards of clinical skills and nursing care across wide range of specialties, with leading specialist doctors and surgeons along with spacious consultation rooms that meet international standards. </p>
			              </div>
			            </div>
		              </div>
		              <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-dropper"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Laboraty</h3>
			                <p>Using the latest and most advanced methods of testing, paired with expert consultation, we are proud to be able to provide the most comprehensive laboratory services in Sri Lanka</p>
			              </div>
			            </div>
		              </div>
		              <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-experiment-results"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">X Ray,Scaning</h3>
			                <p>Gomez<sup>+</sup> Scan provides specialist x-ray scanning and digitisiation service - conversion of medical and non-medical x-rays to high quality digital files.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-heart-rate"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Home Nursing</h3>
			                <p>making a difference by caring for people in need. We are caregivers, first and foremost. Our promise to you is that we will treat our patients, customers and teams with respect.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-24-hours"></span></div>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">24 Hours Service</h3>
			                <p>Gomez<sup>+</sup> provides efficient ambulance services and emergency medical care. With staff on call 24 hours a day, access to good treatment is always</p>
			              </div>
			            </div>      
			          </div>
			        </div>
			      </div>
		      </div>
		      <div class="col-md-5 d-flex">
	        	<div class="appointment-wrap bg-white p-5 d-flex align-items-center">
		        	<form action="getappointment" method="post" class="appointment-form ftco-animate">
						@csrf
		        		<h3>Free Consultation</h3>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name"><span style="color: red">@error('firstname')<br>{{$message}}@enderror</span>
			    				</div>
			    				<div class="form-group">
			    					<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name"><span style="color: red">@error('lastname')<br>{{$message}}@enderror</span>
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"></div>
						  <input type="text" class="form-control"  name="service" id="service" placeholder="Service"><span style="color: red">@error('service')<br>{{$message}}@enderror</span>
	                     
	                    </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Phone"><span style="color: red">@error('phonenumber')<br>{{$message}}@enderror</span>
			    				</div>
		    				</div>
		    				<div class="">
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"></div>
			            		<input type="date" id="dateofbirth" name="dateofbirth" class="form-control"><span style="color: red">@error('dateofbirth')<br>{{$message}}@enderror</span>
		            		</div>
			    				</div>
			    				<div class="">
                                    <div class="form-group">
                                        <div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"></div>
						  <input type="time" class="form-control" name="time" id="time" placeholder="Time"><span style="color: red">@error('time')<br>{{$message}}@enderror</span>
                                    </div>
                                </div>
		    				<div class="">
		    					<div class="form-group">
			              <textarea name="message" id="message" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" value="Submit" name="submit" class="btn btn-secondary py-3 px-4">
			            </div>
		    				</div>
		    			</form>
		    		</div>
	        </div>
		    </div>
			</div>
		</section>
		      

	  <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-4">Gets Every Single Updates Here</h2>
            <p>Given Gomes+ is widely regarded as one of the best Medical Center in the country, it makes sense their Health Essentials blog is top-notch. There’s a good balance of practical health information, safety tips and even healthy recipes.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog" class="block-20" style="background-image: url('images/corona6.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="blog">June 18, 2020</a></div>
                  <div><a href="blog">Gomez+</a></div>
                  <div><a href="blog" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="blog">1.What Is a Coronavirus? already you know about.</p>
                <p><a href="blog" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog" class="block-20" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="blog">June 18, 2020</a></div>
                  <div><a href="blog">Gomez+</a></div>
                  <div><a href="blog" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="blog">2.Easy Ways to Improve Your Relationship With Your Doctor</a></h3>
                <p><a href="blog" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog" class="block-20" style="background-image: url('images/child.jpg');">
              </a>
              <div class="text d-block">
              	<div class="meta mb-3">
                  <div><a href="blog">June 18, 2020</a></div>
                  <div><a href="blog">Gomez+</a></div>
                  <div><a href="blog" class="meta-chat"><span class="icon-chat"></span> 5</a></div>
                </div>
                <h3 class="heading"><a href="blog">3.Why Your Kids Should Still Get Vaccinated During the Coronavirus Pandemic.</p>
                <p><a href="blog" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>
        </div>
      </div>
    </section>    
  
	<x-footer />

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
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>

@stop  