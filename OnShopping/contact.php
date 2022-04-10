<?php

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme dot com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>


<!DOCTYPE html>

<head>

	<meta charset="utf-8">
	<title>OnlineShopping</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="css/menu.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/script.js"></script>

    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
	
</head>

<body>
	<div class="wrap-body">
		
		<header class="main-header">
			<div class="zerogrid">
				<div class="row">
					<div class="col-1-3">
						<a class="site-branding" href="index.html">
	
						</a>
					</div>
					<div class="col-2-3">
						
						<div id='cssmenu' class="align-right">
							<ul>
							   <li><a href='index.html'><span>Home</span></a></li>
							   <li><a href='archive.html'><span>Blog</span></a></li>
							   <li class="active"><a href='contact.html'><span>Contacts</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>

		<section id="container" class="zerogrid">
			<div class="wrap-container">

				<section class="content-box">
					<div class="row wrap-box">

						<div id="map" style="height: 450px;"></div>
		
						<div class="contact-form">
							<h3 class="t-center">Contact Form</h3>
							
							
							<center><?php echo $text;?></center>

							<div id="contact_form">
								<form name="form1" id="ff" method="post" action="contact.php">
									<label class="row">
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
											</div>
										</div>
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
											</div>
										</div>
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
											</div>
										</div>
									</label>
									<label class="row">
										<div class="wrap-col">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message"></textarea>
										</div>
									</label>
									<center><input class="button button-skin" type="submit" name="Submit" value="Submit"></center>
								</form>
							</div>
						</div>
					</div>
				</section>
				
			</div>
		</section>
		
		<footer>
			<div class="zerogrid">
				<div class="wrap-footer">
					<div class="row">
						<div class="col-1-3 col-footer-1">
							<div class="wrap-col">
								<h3 class="widget-title">About Us</h3>
								<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
							</div>
						</div>
						<div class="col-1-3 col-footer-2">
							<div class="wrap-col">
								<h3 class="widget-title">Recent Post</h3>
								<ul>
									<li><a href="#">MOST VISITED COUNTRIES</a></li>
									<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
									<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
									<li><a href="#">STARTUP COMPANY’S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
								</ul>
							</div>
						</div>
						<div class="col-1-3 col-footer-3">
							<div class="wrap-col">
								<h3 class="widget-title">Where to Find Us</h3>
								<div class="row">
									<address>
										<strong>AUBERGE LONDON</strong>
										<br>
										Ut wisi enim
										<br>
										Minim veniam 12345
										<br>
										Exerci Tation
									</address><br>
									<p>
										<strong>Opening Hours:</strong>
										<br>
										Mon - Fri: 9:00 - 21:00
										<br>
										Sat - Sun: 9:00 - 2:00
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom-footer">
					<div class="bottom-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-vimeo"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
					
				</div>
			</div>
		</footer>

	<script>
	  var marker;
	  var image = 'images/map-marker.png';
      function initMap() {
        var myLatLng = {lat: 39.79, lng: -86.14};

        var styleArray = [
          {
            featureType: "all",
            stylers: [
             { saturation: -80 }
            ]
          },{
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              { hue: "#000000" },
              { saturation: 50 }
            ]
          },{
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ];
		
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,

          styles: styleArray,
          zoom: 7
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
          map: map
        });

        marker = new google.maps.Marker({
          map: map,
		  icon: image,
		  draggable: true,
          animation: google.maps.Animation.DROP,
          position: myLatLng
        });
		marker.addListener('click', toggleBounce);
      }
	  
	  function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
	</div>
</body>
</html>