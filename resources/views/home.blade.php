
@extends('layout')

  @section('content')


  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    
	<x-header />	  
	

	  <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_3.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
          		<span class="subheading">Welcome to Gomez<sup>+</sup></span>
	            <h1 class="mb-4">We are here <br>for your Care</h1>
	            <p class="mb-4">We are expert in the field of health center.
	            	            A centre trust by millions.
	            	            Experiencing life to the fillest.
	            	            Enjoy life in all it's glory.
	                            Exploring life is little wonder.</p>
	            <p><a href="appointment" class="btn btn-primary py-3 px-4">Make an appointment</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
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
			            <h2 class="mb-4">We Are <span>Gomez<sup>+</sup></span> A medical center</h2>
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
			                <p>The pharmacy is the one place where all our patients converge at some point or the other during a visit to Asiri Hospitals and that is why we ensure that all Asiri Pharmacies are well stocked with products that match the most stringent international standards, and manned by efficient, qualified personne </p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
			              <div class="media-body pl-md-4">
			              	<a href="#services-section"></a>
			                <h3 class="heading mb-3">Channeling Services</h3>
			                <p>We offer highest standards of clinical skills,
			                 and nursing care across wide range of specialtiesth with leading specialist doctors and surgeons along with spacious consultation rooms that meet international standards</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-dropper"></span></div>
			              <div class="media-body pl-md-4">			              	
			                <h3 class="heading mb-3">Laboraty</h3>
			                <p>Using the latest and most advanced methods of testing, paired with expert consultation, we are proud to be able to provide the most comprehensive laboratory services in Sri Lanka.</p>
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
			                <p>Gomez<sup>+</sup> provides efficient ambulance services and emergency medical care. With staff on call 24 hours a day, access to good treatment is always </p>
			              </div>
			            </div>      
			          </div>
			        </div>
			      </div>
		      </div>
		      <div class="col-md-5 d-flex">
	        	<div class="appointment-wrap bg-white p-5 d-flex align-items-center">
		        	<form action="#" class="appointment-form ftco-animate">
		        		<h3>Free Consultation</h3>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="First Name">
			    				</div>
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Last Name">
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Select Your Services</option>
	                        <option value="">Neuro Center</option>
	                        <option value="">Mother and baby care</option>
	                        <option value="">diabetes Unit</option>
	                        <option value="">Cardio Center</option>
	                        <option value="">Skin care Unit</option>
	                        <option value="">Dental Unit</option>
	                        <option value="">Eye center</option>
	                        <option value="">Mentel Unit</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Phone">
			    				</div>
		    				</div>
		    				<div class="">
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="ion-md-calendar"></span></div>
			            		<input type="date" class="form-control" placeholder="Date">
		            		</div>
			    				</div>
			    				<div class="">
                                    <div class="form-group">
                                        <div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	                <option value="">Time</option>
                                            <option value="8:00 to 9:00">08:00am to 09:00am</option>
                                            <option value="9:00 to 10:00">09:00am to 10:00am</option>
                                            <option value="9:00 to 10:00">03.00pm to 05:00pm</option>
                                            <option value="9:00 to 10:00">06.00pm to 08:00pm</option>
                                            <option value="9:00 to 10:00">09.00pm to 10:00pm</option>
                                            </select>
                                    </div>
                                </div>
		    				<div class="">
		    					<div class="form-group">
			              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
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

    <section class="ftco-intro img" style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Your Health is Our Priority</h2>
						<p>Health is the most Essential of our life,We care about it more than nothing.</p>
						<p class="mb-0"><a href="https://www.google.com/maps/search/224%2Fb,+Seethawaka+road,+Awissawella,+Sri+Lanaka/@6.9545513,80.2089795,15z/data=!3m1!4b1" class="btn btn-white px-4 py-3">Search Place</a></p>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url(images/dept-1.jpg);"></div>
    			</div>

    			<div class="col-md-8">
    				<div class="row no-gutters">
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#department-section">Neuro center</a></h3>
    								<p>Our Neurology Department is unique in that we are the only department in the private healthcare sector in Sri Lanka to offer the services of 3 full-time</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#department-section">Surgical</a></h3>
    								<p>We do so by rigorously maintaining world-class standards in pre- and post-surgery care. We are also well-known for our outstanding work in the operating theatre as well. 
    								</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#department-section">Dental unit</a></h3>
    								<p>Dental care is an essential part of maintaining overall good health both in children and in adults. At Gomez<sup>+</sup> Dental Unit, we believe that everybody should be able to receive the best possible dental care and treatments.</p>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#department-section">Mother and baby care unit</a></h3>
    								<p>Throughout the pregnancy and after childbirth, individual care and attention is given to both mother and the baby by our specialized nursing staff. Gomez<sup>+</sup> Medical center offers leading edge pre and postnatal care, both via technology and in person.</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#department-section">Cardio Center</a></h3>
    								<p>Gomez<sup>+</sup> Heart Center is renowned to be the most trusted place for matters of the heart. We provide comprehensive cardiac care from state-of-the art Heart Screening Packages to Bypass Surgery. Trust us with your heart and we will take good care of it.</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#department-section">Eye center</a></h3>
    								<p>At the Gomez<sup>+</sup> Eye center we have endeavoured to provide you with the best eye care treatment under one roof. Medical problems associated with and affecting sight are always serious.</p>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#department-section">diabetes unit</a></h3>
    								<p>Our team is committed to helping prevent the spread of diabetes and to assist those affected by diabetes, manage the condition, to live a good quality life.</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#department-section">Skin care unit</a></h3>
    								<p>Gomez<sup>+</sup> Skin Care and Cosmetic Centre is perfectly equipped to deal with these issues. From making you look younger through skin rejuvenation, permanent hair removal, scar removal, hair transplants, coupled with the best of medical technology.</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#department-section">mentel unit</a></h3>
    								<p>Most people living with mental illness will never need to go to hospital for treatment. But if you do have to go, Gomez<sup>+</sup> can be the best place for you to rest, feel safe and receive the help you need</p>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		
		<section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Qualified Doctors</h2>
            <p>We connect you to a qualifide doctor in sri lanka.Our Doctors are available to give you initial guidance to suite all your medical needs. Speak to our Doctor and get a prescription or laboratory test assessment.meet yor doctor.</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/sampath.png);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr.Sampath Silva</h3>
								<span class="position mb-2">Neurologist</span>
								<div class="faded">
									<p>Obtained his MBBS from the faculty of medicine in Colombo in 1995.
									he has 20 yers experience in goverment sector.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="https://www.twitter.com/sampath"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/sampath"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.googleplus.com/sampath"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instragram.com/sampath"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <p><a href="appointment" class="btn btn-primary">Book now</a></p>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/anojana.png);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr.Anojana Perera</h3>
								<span class="position mb-2">Ophthalmologist</span>
								<div class="faded">
									<p>obtain her MBBS degree from university of peradeniya in 2008,has over 10 yers of experience in the goverment sector.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="https://www.twitter.com/anojana"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/anojana"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.googleplus.com/anojana"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instragram.com/anojana"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <p><a href="appointment" class="btn btn-primary">Book now</a></p>
	              </div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/atapattu.png);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr.D.M.Athapaththu</h3>
								<span class="position mb-2">Cardiologist</span>
								<div class="faded">
									<p>Obtain his MBBS from the univercity of Colombo in 1982 and after 33 long years of service retired of goverment sector. now his workin privet sector.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="https://www.twitter.com/athapaththu"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/Athapaththu"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.googleplus.com/athapaththu"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instragram.com/athapaththu"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <p><a href="appointment" class="btn btn-primary">Book now</a></p>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/Prasadi.png);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr.Prasadi Jaya</h3>
								<span class="position mb-2">Pediatrician</span>
								<div class="faded">
									<p>Obtain her MBBS from the peradeniya univercity. she has 7 years of experience in goverment sector.curruntly working at private sector since 2000.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="https://www.twitter.com/prasadi"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.facebook.com/prasadi"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.googleplus.com/prasadi"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instragram.com/prasadi"><span class="icon-instagram"></span></a></li>
		              </ul>
		              <p><a href="appointment" class="btn btn-primary">Book now</a></p>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-facts img ftco-counter" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-5 heading-section heading-section-white">
						<span class="subheading">Fun facts</span>
						<h2 class="mb-4">Over 10000 patients trust us</h2>
						<p class="mb-0"><a href="appointment" class="btn btn-secondary px-4 py-3">Make an appointment</a></p>
					</div>
					<div class="col-md-7">
						<div class="row pt-4">
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>30 Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Patients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Number of Doctors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Number of Staffs</span>
		              </div>
		            </div>
		          </div>
	          </div>
					</div>
				</div>
			</div>
		</section>


    <section class="ftco-section bg-light" id="blog-section">
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

    <section class="ftco-section testimony-section img" style="background-image: url(images/bg_3.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Read testimonials</span>
            <h2 class="mb-4">Our Patient Says</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/p5.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4"> This medical center has excellent staff!"My nurse helped me when I had an emotional day breastfeeding. She was amazing. She helped me calm down."</p>
                    <p class="name">yasii dias</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/n.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">"Very good surgeon, very nice and attentive, explained all the process of my operation and even showed me a drawing of my operation."</p>
                    <p class="name">namal perera</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/p2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">"The nurses and doctor were helpful and concerned about my health and well-being all of the time I was in the Emergency Department."</p>
                    <p class="name">shyama raz</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/p3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">"Very grateful for your services for me and the community. Thank you for your time, effort and consideration for my health and well-being."</p>
                    <p class="name">shriya darsa</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/p6.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4">
                    <p class="mb-4">"The staff that drew blood from me was excellent. I never felt a thing or was scared, even though I have a phobia of needles. I informed them of this and they were awesome." i reccomened this center it's like ahospital.</p>
                    <p class="name">dilantha kasun</p>
                    <span class="position">Patients</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Contact Us</h2>
            <p>Health is better than nothing . Your hospital in Your words.best life</p>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p><address>224/b, Seethawaka road, Awissawella, Sri Lanaka</address></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+036 2266578</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="http://gomez+@gmail.com">gomez+@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="http://127.0.0.1:8000/home">www.Gomez+.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="contact" method="post" class="bg-light p-5 contact-form">
				@csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
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
