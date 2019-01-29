<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Strung Jewelry Designs</title>

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
				<li class="active"><a href="#">Home</a>
				</li>
				<li><a href="events.html">Events & Stores</a>
				</li>
				<li><a href="media_archive.php">Media Archive</a>
				</li>
				<li><a href="https://www.etsy.com/shop/ChristinaLambStrung?ref=l2-shopheader-name" target='new'>Shop on Etsy</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- CAROUSEL -->
	<div class="container-fluid">
		<div class="logo_bit"><img class="img-responsive logo_bit" src="images/Strung_logo_white_withtag_260x120.png" /></div>

		<a id='top_button' href="#" class="back-to-top">TOP</a>

		<div class="gallery js-flickity main_images" data-flickity-options='{ "imagesLoaded": true, "percentPosition": true, "autoPlay": false, "pageDots": false,"lazyload":true, "wrapAround": false}'>

			<div class='gallery-cell'>
				<img src="images/carousel/main_1.jpg" alt="" />
				<p class="image_caption">Jewelry modeled by collage artist Vanessa Compton of <a href="http://www.krinshawstudios.com" target="_blank">Krinshaw Studios</a></p>

			</div>

			<div class='gallery-cell'>
				<img src="images/carousel/main_2.jpg" alt="" />
				<p class="image_caption">Jewelry modeled by collage artist Vanessa Compton of <a href="http://www.krinshawstudios.com" target="_blank">Krinshaw Studios</a></p>
			</div>

			<div class='gallery-cell'>
				<img src="images/carousel/main_3.jpg" alt="" />
				<p class="image_caption">Jewelry modeled by collage artist Vanessa Compton of <a href="http://www.krinshawstudios.com" target="_blank">Krinshaw Studios</a></p>
			</div>

			<div class='gallery-cell'>
				<img src="images/carousel/main_4.jpg" alt="" />
				<p class="image_caption">Jewelry modeled by collage artist Vanessa Compton of <a href="http://www.krinshawstudios.com" target="_blank">Krinshaw Studios</a></p>
			</div>

		</div>
	</div>
	<!-- END CAROUSEL -->
	<!-- ETSY LINK -->
	<div class="container-fluid etsy_button">
		<div class="text-center">Purchase my jewelry on Etsy
			<a href='https://www.etsy.com/shop/ChristinaLambStrung?ref=l2-shopheader-name' target="_blank"><img src="images/button_shop_2.png"></a>
		</div>
	</div>
	<div class="container-fluid">
		<div class="col-lg-12 col-md-12 col-sm-12 etsy_callout opening_text">
			Nothing starts a conversation like a beautiful and unusual necklace. Whether it's bold or reserved, you make a statement wearing Strung Jewelry Designs. Emerge and express yourself according to your mood and palette. Small-scale necklaces contain intricate beads and fascinating material/texture combinations. Vivid necklaces delight and add melody to your appearance, a lift of color, a stunning fabrication. I design and hand make one piece at a time. Materials are high quality pressed and blown glass beads from around the world, sterling silver and silverplate, semi-precious stones, ceramics, pearls and castings, to name a few. Fine jewelry-making techniques are used for polish, balance, and durability.
			<br>
			<br>
			<!--<a href='https://www.etsy.com/shop/ChristinaLambStrung?ref=l2-shopheader-name' target="_blank"><img src="images/button_shop_2.png"></a><br><br>-->
		</div>
	</div>


	<!-- SIDE animations -->

	<div id='side_1'><img src="images/swirl.png"></div>
	<div id='side_1b'><img src="images/swirl.png"></div>
	<div id='side_2'><img src="images/swirl.png"></div>
	<div id='side_2b'><img src="images/swirl.png"></div>




	<!-- SIDE animations END-->



	<!-- MAIN JEWELRY GRID -->
	<div class="container-fluid">

		<ul class="grid effect-6" id="grid">
			<?php
			
					$dir  = "images/frontpage_jewelry/"; // your folder name ex: image
    				$imgs = glob($dir ."/*.jpg"); // get your image files with .jpg 
			
						foreach ($imgs AS $i) {
							
							//echo "<script>console.log( 'Debug Objects: " . $i . "' );</script>";
							echo "<li><img  onmouseover = 'showTitle($i)'  src='" . $i . "' alt='$i' /></li>";
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
			<p class="body_copy white_text">Check out my <a href='https://www.facebook.com/strungbychristinalamb' target='new' class="social_media_links">facebook</a> or <a href="https://www.instagram.com/StrungJewelryDesigns/" target="new" class="social_media_links">instagram</a> page to see what is coming next to the <a href='https://www.etsy.com/shop/ChristinaLambStrung?ref=l2-shopheader-name' target='_blank' class="social_media_links">Etsy shop</a>!</p>
			<p>
				<a href='https://www.etsy.com/shop/ChristinaLambStrung?ref=l2-shopheader-name' target="_blank">
					<span class="contact_icons"><img src='images/icons/footer_button_etsy.png' target="_blank"></span>
				</a>

				<a href='https://www.facebook.com/strungbychristinalamb' target="_blank">
					<span class="contact_icons"><img src='images/icons/footer_button_facebook.png' ></span>
				</a>

				<a href='https://www.instagram.com/StrungJewelryDesigns/' target="_blank">
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
	<!--<script src="js/jquery-3.1.1.slim.min.js"></script>-->
	<script src="js/jquery-3.2.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<!--<script src="js/imagesloaded.js"></script>-->
	<script src="js/classie.js"></script>
	<script src="js/AnimOnScroll.js"></script>


	<!-- CONTROLS THE ANIMATION OF THE JEWELRY TILES -->
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


	<script>
		$(window).resize(function() {

			console.log('WINDOW WIDTH: ' + $(window).width())

			if ($(window).width() < 960) {

				$('#side_1').css('display', 'none');
				$('#side_2').css('display', 'none');


			} else {

				$('#side_1').css('display', 'block');
				$('#side_2').css('display', 'block');
			}
		});

	</script>

	<script>
		function showTitle(image_name) {


			console.log('THIS IS IMAGE TITLE: ' + image_name[0]);

		}

	</script>


	<script>
		var amountScrolled = 600;

		$(window).scroll(function() {

			var scrolling_amt = 1 - ($(window).scrollTop() * .001);

			console.log('scrolling_amt: ' + scrolling_amt)

			$('#side_1').css('opacity', scrolling_amt);
			$('#side_2').css('opacity', scrolling_amt);

			$('#side_1b').css('opacity', -scrolling_amt);
			$('#side_2b').css('opacity', -scrolling_amt);

			if ($(window).scrollTop() > amountScrolled) {
				$("#top_button").fadeIn(300);
			} else {
				$("#top_button").fadeOut(300);
			}
		});

		$('a.back-to-top').click(function() {
			$('html, body').animate({
				scrollTop: 0
			}, 400)
		});

	</script>
</body>

</html>
