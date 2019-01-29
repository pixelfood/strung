<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Strung Jewelry Designs Ar</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/flickity.min.css" media="screen">
	<link rel="stylesheet" href="css/strung_style.css" media="screen">
	<link rel='stylesheet' type='text/css' href='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/css/signup-form.css'>

	<!-- stylesheets for scrolling effects-->
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- PUSH NAVIGATION -->
	<nav class="navbar navbar-default navbar-fixed-top navbar-header" role="navigation">
		<div class="navbar-header">
			<button type="" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<img src="images/button_menu.png" />
			</button>
		</div>

		<!--<div class="collapse navbar-collapse  navbar-ex1-collapse ">-->
		<div class="collapse navbar-collapse navbar-ex1-collapse ">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a>
				</li>
				<li><a href="events.html">Events & Stores</a>
				</li>
				<li class="active"><a href="">Media Archive</a>
				</li>
				<li><a href="https://www.etsy.com/shop/ChristinaLambStrung?ref=l2-shopheader-name" target='new'>Shop on Etsy</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- MAIN IMAGE -->
	<div class="container-fluid">
		<div class="logo_bit"><img class="img-responsive logo_bit" src="images/Strung_logo_white_withtag_260x120.png" /></div>
		<div class='main_images'><img class="img-responsive" src="images/media_main.jpg" /></div>
	</div>
	<!-- END MAIN IMAGE -->
	<!-- ETSY LINK -->
	<div class="container-fluid etsy_button">
		<div class="text-center">Purchase my jewelry on Etsy
			<a href='https://www.etsy.com/shop/ChristinaLambStrung?ref=l2-shopheader-name' target="_blank"><img src="images/button_shop_2.png"></a>
		</div>
	</div>

	<!-- MAIN JEWELRY GRID -->
	<div class="container-fluid">

		<ul class="grid effect-6" id="grid">
			<?php
			
					$dir  = "images/postcards/"; // your folder name ex: image
    				$imgs = glob($dir ."/*.jpg"); // get your image files with .jpg 

						foreach (array_reverse($imgs) AS $i) {
													
						echo "<li><img src='" . $i . "' alt='' /></li>";

						}
				?>

		</ul>

	</div>
	<!-- END MAIN JEWELRY GRID -->

	<footer class="footer">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pr_left_footer_col">
			<img src="images/Strung_logo_188x66.png">
			<br>
			<h3 class="grey_text">about me</h3>
			<p class="body_copy">After decades of non-commercial jewelry design and fabrication, I launched Strung Jewelry Designs in March 2002. Collecting lovely rare glass, stone, metal and ceramic beads from my travels around the world, I form these into a palette of color and texture.</p>
			<blockquote>"When I am making jewelry, I feel as close to perfectly happy as I believe it is possible to be. I hope the joy of its creation infuses each piece I make and imparts itself to the person who wears it."</blockquote>
			<img src="images/signature.png">
		</div>

		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pr_right_footer_col">
			<p class="body_copy white_text">Check out my <a href='https://www.facebook.com/strungbychristinalamb' target='new' class="social_media_links">facebook</a> or <a href="https://www.instagram.com/lambkin33/" target="new" class="social_media_links">instagram</a> page to see what is coming next to the <a href='https://www.etsy.com/shop/ChristinaLambStrung?ref=l2-shopheader-name' target='_blank' class="social_media_links">Etsy shop</a>!</p>
			<p>
				<a href='https://www.etsy.com/shop/ChristinaLambStrung?ref=l2-shopheader-name' target="_blank">
					<span class="contact_icons"><img src='images/icons/footer_button_etsy.png' target="_blank"></span>
				</a>

				<a href='https://www.facebook.com/strungbychristinalamb' target="_blank">
					<span class="contact_icons"><img src='images/icons/footer_button_facebook.png' ></span>
				</a>

				<a href='https://www.instagram.com/lambkin33/' target="_blank">
					<span class="contact_icons"><img src='images/icons/footer_button_instagram.png' ></span>
				</a>
			</p>

			<!--Begin CTCT Sign-Up Form-->
			<!-- EFD 1.0.0 [Fri Mar 10 11:36:22 EST 2017] -->

			<div class="ctct-embed-signup" style="font: 16px Helvetica Neue, Arial, sans-serif; font: 1rem Helvetica Neue, Arial, sans-serif; background-color:##2c2020; line-height: 1.5; -webkit-font-smoothing: antialiased;">

				<!--background-color:#e8e8e8;-->


				<div class="sign_up_form">
					<span id="success_message" style="display:none;">
           <div class="thankyou_text">Thanks for signing up!</div>
       </span>
					<form data-id="embedded_signup:form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
						<h3>Strung Mailing List</h3>
						<p class="white_text footer_body">Join my email list to get updates from the studio and to be notified when new pieces are going to be listed.</p>
						<!-- The following code must be included to ensure your sign-up form works properly. -->
						<input data-id="ca:input" type="hidden" name="ca" value="d2360277-aebf-4015-8ebe-08d65a71eba4">
						<input data-id="list:input" type="hidden" name="list" value="1">
						<input data-id="source:input" type="hidden" name="source" value="EFD">
						<input data-id="required:input" type="hidden" name="required" value="list,email">
						<input data-id="url:input" type="hidden" name="url" value="">
						<p data-id="Email Address:p">
							<label data-id="Email Address:label" data-name="email" class="ctct-form-required white_text">EMAIL </label>
							<br>
							<input data-id="Email Address:input" type="text" name="email" value="" class="input_field" maxlength="80">
						</p>

						<button type="submit" class="submit_button" data-enabled="enabled">Sign Up</button>
						<div>
							<br>
							<p class="ctct-form-footer white_text"><i>By submitting this form, you are granting: Strung Jewelry permission to email you. You may unsubscribe via the link found at the bottom of every email. (See our <a href="http://www.constantcontact.com/legal/privacy-statement" target="_blank">Email Privacy Policy</a> for details.) Emails are serviced by Constant Contact.</i></p>
						</div>
					</form>
				</div>
			</div>
			<script type='text/javascript'>
				var localizedErrMap = {};
				localizedErrMap['required'] = 'This field is required.';
				localizedErrMap['ca'] = 'An unexpected error occurred while attempting to send email.';
				localizedErrMap['email'] = 'Please enter your email address in name@email.com format.';
				localizedErrMap['birthday'] = 'Please enter birthday in MM/DD format.';
				localizedErrMap['anniversary'] = 'Please enter anniversary in MM/DD/YYYY format.';
				localizedErrMap['custom_date'] = 'Please enter this date in MM/DD/YYYY format.';
				localizedErrMap['list'] = 'Please select at least one email list.';
				localizedErrMap['generic'] = 'This field is invalid.';
				localizedErrMap['shared'] = 'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
				localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
				localizedErrMap['state_province'] = 'Select a state/province';
				localizedErrMap['selectcountry'] = 'Select a country';
				var postURL = 'https://visitor2.constantcontact.com/api/signup';

			</script>
			<script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
			<!--End CTCT Sign-Up Form-->
		</div>
	</footer>

	<script src="js/jquery-3.1.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<!--<script src="js/imagesloaded.js"></script>-->
	<script src="js/classie.js"></script>
	<script src="js/AnimOnScroll.js"></script>

	<script>
		new AnimOnScroll(document.getElementById('grid'), {
			minDuration: 0.4,
			maxDuration: 0.7,
			viewportFactor: 0.2

		});

	</script>

	<script>
		$(document).ready(function() {

			console.log("READY")

			//var $container = document.getElementById('grid')

			/*$container.imagesLoaded(function() {
				$container.masonry({
					itemSelector: '.post-box',
					isAnimated: true
					//transitionDuration: 0
				});
			});*/
		});

	</script>
</body>

</html>
