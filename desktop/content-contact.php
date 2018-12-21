<?php 
	include_once('../header-desktop.php');
 ?>


<!-- main continer -->
<div id="wrapper">
	<div id="content">
		<!-- sub-banner -->
		<div class="container-fluid sub-banner">
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">	
		    	<div class="item banner-img">
		    		<div class="gradientb" ></div>
		        	<img src="<?php echo $BATH_URL;?>assets/images/OMB-Advertising-Cambodia-CONTACT-OMB-banner-01 (1).jpg" alt="OMB-Advertising-Cambodia">
			        <div class="carousel-caption">
			            <div class="box-text">
			          		<h1>FEEL FREE TO CONTACT US</h1>
			          		<!-- <ul class="click-home">
			          			<li><a href="index.html">HOME</a></li>
			          			<li class="active"><a href="About.html">CONTACT OMB</a></li>
			          		</ul> -->
			          	</div>			          	
			         </div>
			    </div>
		    </div>
		</div>
<style type="text/css">
	#content .targert{}
	#content .targert .group-targert{padding-top: 40px;padding-bottom: 40px;}
	#content .targert .group-title h3{color: #EC1F27;}
	#content .targert .group-title h2{padding-top: 25px;padding-left: 25%;padding-right: 25%;}
	#content .targert .group-title .box-underline .underline{margin-bottom: 50px;}

	#content .targert ul{padding: 0;margin: 0;list-style: none;padding-top: 30px;}
	#content .targert ul li{float: left;width: 100%;margin-bottom: 30px;}
	#content .targert ul li span:first-child{display: block;height: 28px;width: 28px;border-radius: 50%;overflow: hidden;float: left;}
	#content .targert ul li a{color: #333;}
	#content .targert ul li span:first-child img{height: 100%;width: 100%;}
	#content .targert ul li span:last-child{display: block;width: 90%;padding-left: 17px;float: left;line-height: 25px;}

	#content .targert .box-img-text{padding-top: 30px;}
	/*#content .targert .box-form{padding-top: 30px;}*/
	#content .targert .box-form .form-inline{padding-top: 30px;}
	#content .targert .box-form .form-inline .box-input input{width: 370px;height: 40px;box-shadow: none;outline: none;border: 1px solid #e0e0e0;}
	#content .targert .box-form .form-inline textarea{width: 755px;height: 276px;box-shadow: none;outline: none;border: 1px solid #e0e0e0;}
</style>
		<!-- TELL US YOUR TARGET. WE'LL GROW YOUR BUSINESS. -->
		<div class="container-fluid targert">
			<div class="container group-targert">
				<div class="group-title text-center">
					<h3>Start a project with us right now!</h3>
					<h2>TELL US YOUR TARGET. WE'LL GROW YOUR BUSINESS.</h2>
					<div class="box-underline">
						<div class="underline"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="box-img-text">
							<div class="box-text">
								<p>Please submit your enquirer message in the contact form below. Our team will be in touch soon and contact you back. Thank You!</p>
							</div>
							<ul>
								<li><a href="#" title=""><span><img src="<?php echo $BATH_URL;?>assets/images/icon-map.svg" alt=""></span><span>45Z, 371, Trapeang Chhuk, Teuk Thla, Sen Sok, Phnom Penh, Cambodia</span></a></li>
								<li><a href="#" title="">
									<span><img src="<?php echo $BATH_URL;?>assets/images/icon-phone.svg" alt=""></span>
									<span>+855 23 424 165<br> +855 89 888 168 / +855 77 777 678</span>
								</a></li>
								<li><a href="#" title=""><span><img src="<?php echo $BATH_URL;?>assets/images/icon-mail.svg" alt=""></span><span>sales@omb-advertsining.com<br>www.omb-advertising.com</span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<div class="box-form">
							<div class="col-sm-6">
								<form class="form-inline">
								    <div class="box-input">
								      <input type="Name" class="form-control media-width" id="name" placeholder="Name*">	
								    </div>					      
								</form>
							</div>

							<div class="col-sm-6">
								<form class="form-inline">
								    <div class="box-input" style="">
								      <input type="Phone" class="form-control media-width" id="phone" placeholder="Phone*">	
								    </div>					      
								</form>
							</div>

							<div class="col-sm-6">
								<form class="form-inline">
								    <div class="box-input">
								      <input type="Email" class="form-control media-width" id="email" placeholder="Email*">	
								    </div>					      
								</form>
							</div>

							<div class="col-sm-6">
								<form class="form-inline">
								    <div class="box-input">
								      <input type="Subject" class="form-control media-width" id="subject" placeholder="Subject*">	
								    </div>					      
								</form>
							</div>

							<div class="col-sm-12">
	    						<form class="form-inline">
								     <textarea class="form-control" placeholder="Message*"></textarea>				      
								</form>
	    					</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>



  <?php 
	include_once('../footer-desktop.php');
 ?>