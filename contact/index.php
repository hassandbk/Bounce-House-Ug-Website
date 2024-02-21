<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

// Check if the form is submitted
if (isset($_POST['form_submitted'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $message = $_POST['message'];

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Set mailer to use SMTP
        $mail->isSMTP();

        // Enable SMTP debugging (0 = no debugging, 2 = detailed debugging)
        $mail->SMTPDebug = 0;

        // Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        // Use SMTP authentication
        $mail->SMTPAuth = true;

        // Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        // Set the SMTP port number - 587 for authenticated TLS, 465 for SSL
        $mail->Port = 587;

        // Set the sender's and recipient's email addresses
        $mail->setFrom($email, $name);
        $mail->addAddress('globalcastlesandevents@gmail.com', 'Global Castles and Events');

        // Set app password for Gmail
        $mail->Username = 'globalcastlesandevents@gmail.com';
        $mail->Password = 'oize eorv yxov jasr';

        // Set email subject and body
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\n\nMessage:\n$message";

        // Send the email
        $mail->send();

        // Display success message
        echo '<div id="form-message-success">Your message was sent, thank you!</div>';
    } catch (Exception $e) {
        // Display error message
        echo '<div id="form-message-warning">Error sending message. Please try again later.</div>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<!-- Ensure compatibility with modern browsers -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Set character encoding for the document -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Page title and meta information -->
	<title>BounceUg - Your Source for Bouncing Fun in Uganda</title>

	<link rel="shortcut icon" href="../assets/img/logo.png" type="image/png" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icomoon@2.5.0/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">


	<link rel="stylesheet" href="./css/style.css">

	<!--=============== REMIXICONS ===============-->
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

	<!--=============== SWIPER CSS ===============-->
	<link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />

	<!--=============== CSS ===============-->
	<link rel="stylesheet" href="../assets/css/styles.css" />

	<!-- Additional styles and scripts for better performance -->
	<link rel="stylesheet" type="text/css" href="../assets/css/media.css" id="css-fb-visibility" />
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css" id="hustle-module-1-0-styles" />

	<!-- Shortlink and canonical link for SEO -->
	<link rel="shortlink" href="../index.html" />
	<link rel="canonical" href="../index.html" />




	<!-- Meta description for search engines -->
	<meta name="description"
		content="Discover the joy of bouncing fun in Uganda with Indy Bounce! We offer a variety of options, from traditional bounce houses to exciting inflatable water slides. Experience high-quality, clean, and safe entertainment for any event or occasion. Rent one of our inflatable bounce houses today! Dial +(your Uganda phone number)." />

	<!-- Google verification code -->
	<meta name="google-site-verification" content="" />

	<!-- Open Graph meta tags for social media sharing -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.your-uganda-website.com/" />
	<meta property="og:title" content="Discover Bouncing Fun in Uganda with Indy Bounce!" />
	<meta property="og:description"
		content="Experience bouncing fun in Uganda with a variety of options, from traditional bounce houses to inflatable water slides. We offer high-quality, clean, safe, and stress-free entertainment for any event or occasion. Rent one of our inflatable bounce houses today! Dial (Replace with your Uganda phone number)." />
	<meta property="og:image" content="https://your-uganda-website.com/path-to-your-image.jpg" />
	<meta property="og:image:width" content="952" />
	<meta property="og:image:height" content="624" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Discover Bouncing Fun in Uganda with Indy Bounce!" />
	<meta name="twitter:description"
		content="Experience bouncing fun in Uganda with a variety of options, from traditional bounce houses to inflatable water slides. We offer high-quality, clean, safe, and stress-free entertainment for any event or occasion. Rent one of our inflatable bounce houses today! Dial (Replace with your Uganda phone number)." />
	<meta name="twitter:image" content="https://your-uganda-website.com/path-to-your-image.jpg" />


	<!-- 
    - google font link
  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
		rel="stylesheet">

</head>

<body>



	<div id="boxed-wrapper">

		<div id="wrapper" class="fusion-wrapper">
			<div id="home" style="position:relative;top:-1px;"></div>

			<header class="header" id="header">
				<nav class="nav container">
					<a href="#" class="nav__logo"><img src="../assets/img/logo.png" width="103" height="88"
							alt="BounceUg Logo" class="fusion-standard-logo"
							style="border-radius: 50%; object-fit: cover;"></a>


					<div class="nav__menu" id="nav-menu">
						<ul class="nav__list">
						<li class="nav__item">
              <a href="../index.html" class="nav__link active-link">Home</a>
              </li>
              <li class="nav__item">
              <a href="../about/index.html" class="nav__link">About</a>
              </li>
              <li class="nav__item">
              <a href="../contact/index.php" class="nav__link">Reserve</a>
              </li>
              <li class="nav__item">
              <a href="../services/index.html" class="nav__link">Services</a>
              </li>
              <li class="nav__item">
              <a href="../faq/index.html" class="nav__link">FAQs</a>
              </li>
						</ul>

						<div class="nav__dark">
							<!-- Theme change button -->
							<span class="change-theme-name">Dark mode</span>
							<i class="ri-moon-line change-theme" id="theme-button"></i>
						</div>

						<i class="ri-close-line nav__close" id="nav-close"></i>
					</div>

					<div class="nav__toggle" id="nav-toggle">
						<i class="ri-function-line"></i>
					</div>
				</nav>
			</header>


			<div id="sliders-container" class="fusion-slider-visibility">
			</div>




			<main>
				<section
					style="max-width: 100%; text-align: center; padding: 10% 10% 0; background: url('../wp-content/uploads/2019/02/child-laughing-in-bounce-house.jpg') center; background-size: cover;">
					<h1 style="color: #ffffff;">Contact Bounce House Uganda </h1>
				</section>

				<section
					style="background-color: #f7f7f7; padding: 55px 15%; text-align: left; line-height: 1.8; font-size: 18px;">
					<h1 class="section-subtitle" style="text-align: center; color: #FFA500; margin-bottom: 20px;">Best
						Bounce Houses in Uganda</h1>



					<div class="fusion-fullwidth fullwidth-box fusion-builder-row-2 nonhundred-percent-fullwidth non-hundred-percent-height-scrolling fusion-no-small-visibility lazyload"
						style="--awb-background-position:center top;--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:55px;--awb-padding-bottom:55px;--awb-background-size:cover;"
						data-bg="../wp-content/uploads/2019/02/colorful-dots.png">
						<div class="fusion-builder-row fusion-row">
							<div class="fusion-layout-column fusion_builder_column fusion-builder-column-3 fusion_builder_column_1_1 1_1 fusion-one-full fusion-column-first fusion-column-last"
								style="--awb-bg-size:cover;">
								<div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy">
									<div class="fusion-column-content-centered">
										<div class="fusion-column-content">
											<div class="fusion-text fusion-text-2">
												<h2 align="center">Don't be afraid to jump in.<br /> Contact us today!
												</h2>
												<p align="center">We would love to be at your next party or event! Fill
													out the form to get a quote or if you have questions, visit our <a
														href="../faq/">FAQ</a> page or simply fill out the form on this
													page, and we will reach out within 24 hours</p>
											</div>
											<div class="fusion-sep-clear"></div>
											<div class="fusion-separator fusion-full-width-sep"
												style="margin-left: auto; margin-right: auto; margin-top: 25px; width: 100%;">
											</div>
											<div class="fusion-sep-clear"></div>

											<!-- Your Contact Form Goes Here -->
											<div class="gf_browser_chrome gform_wrapper gform_legacy_markup_wrapper gform-theme--no-framework"
												data-form-theme="legacy" data-form-index="0" id="gform_wrapper_1">
												<div class="content">
													<div class="container">
														<div class="row align-items-stretch no-gutters contact-wrap">
															<div class="col-md-6">
																<div class="form h-100">
																	<h3>Send us a message</h3>
																	<form class="mb-5" method="post" id="contactForm" name="contactForm" action="index.php">
																		<div class="row">
																		<input type="hidden" name="form_submitted" value="1">

																			<div class="col-md-6 form-group mb-5">
																				<label for class="col-form-label">Name
																					*</label>
																				<input type="text" class="form-control"
																					name="name" id="name"
																					placeholder="Your name">
																			</div>
																			<div class="col-md-6 form-group mb-5">
																				<label for class="col-form-label">Email
																					*</label>
																				<input type="text" class="form-control"
																					name="email" id="email"
																					placeholder="Your email">
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6 form-group mb-5">
																				<label for
																					class="col-form-label">Phone</label>
																				<input type="text" class="form-control"
																					name="phone" id="phone"
																					placeholder="Phone #">
																			</div>
																			<div class="col-md-6 form-group mb-5">
																				<label for
																					class="col-form-label">Company</label>
																				<input type="text" class="form-control"
																					name="company" id="company"
																					placeholder="Company  name">
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-12 form-group mb-5">
																				<label for="message"
																					class="col-form-label">Message
																					*</label>
																				<textarea class="form-control"
																					name="message" id="message"
																					cols="30" rows="4"
																					placeholder="Write your message"></textarea>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-12 form-group">
																				<input type="submit"
																					value="Send Message"
																					class="btn btn-primary rounded-0 py-2 px-4">
																				<span class="submitting"></span>
																			</div>
																		</div>
																	</form>
																	<div id="form-message-warning mt-4"></div>
																	<!-- Add an ID to the success message for easy manipulation -->
																	<div id="form-message-success" class="hidden">
																		Your message was sent, thank you!
																	</div>

																</div>
															</div>
															<div class="col-md-6">
																<iframe
																	src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.759421213896!2d32.515599151032156!3d0.3113264658430914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177da35dc75b566b%3A0x9ba23160a267b278!2s1a%20Kizito%20Dan%20Rd%2C%20Kampala!5e0!3m2!1sen!2sug!4v1704696784620!5m2!1sen!2sug"
																	width="600" height="800" style="border:0;"
																	allowfullscreen="" loading="lazy"
																	referrerpolicy="no-referrer-when-downgrade"></iframe>

															</div>
														</div>
													</div>
												</div>

											</div>

											<div class="fusion-text fusion-text-3">
												<h2 align="center"><a href="#">Or Reserve Now →</a></h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>






				</section>
			</main>





			<!--==================== FOOTER ====================-->
			<footer class="footer section">
				<div class="footer__container container grid">
					<div class="footer__content grid">
						<div class="footer__data">
							<h3 class="footer__title">BounceUg</h3>
							<p class="footer__description">
								At Bounce UG <br />
								destination, we offer you the <br />
								experience.
							</p>
							<div>
								<a href="https://www.facebook.com/" target="_blank" class="footer__social">
									<i class="ri-facebook-box-fill"></i>
								</a>
								<a href="https://twitter.com/" target="_blank" class="footer__social">
									<i class="ri-twitter-fill"></i>
								</a>
								<a href="https://www.instagram.com/" target="_blank" class="footer__social">
									<i class="ri-instagram-fill"></i>
								</a>
								<a href="https://www.youtube.com/" target="_blank" class="footer__social">
									<i class="ri-youtube-fill"></i>
								</a>
							</div>
						</div>

						<div class="footer__data">
							<h3 class="footer__subtitle">About</h3>
							<ul>
								<li class="footer__item">
									<a href="../about/index.html" class="footer__link">About Us</a>
								</li>
								<li class="footer__item">
									<a href="" class="footer__link">Features</a>
								</li>
								<li class="footer__item">
									<a href="" class="footer__link">New & Blog</a>
								</li>
							</ul>
						</div>

						<div class="footer__data">
							<h3 class="footer__subtitle">Company</h3>
							<ul>
								<li class="footer__item">
									<a href="" class="footer__link">Team</a>
								</li>
								<li class="footer__item">
									<a href="" class="footer__link">Plan y Pricing</a>
								</li>
								<li class="footer__item">
									<a href="" class="footer__link">Become a member</a>
								</li>
							</ul>
						</div>

						<div class="footer__data">
							<h3 class="footer__subtitle">Support</h3>
							<ul>
								<li class="footer__item">
									<a href="" class="footer__link">FAQs</a>
								</li>
								<li class="footer__item">
									<a href="../feed/index.html" class="footer__link">Support Center</a>
								</li>
								<li class="footer__item">
									<a href="../contact/index.html" class="footer__link">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="footer__rights">
						<p class="footer__copy">
							&#169; 2023 BounceUg. All rigths reserved.
						</p>
						<div class="footer__terms">
							<a href="#" class="footer__terms-link">Terms & Agreements</a>
							<a href="#" class="footer__terms-link">Privacy Policy</a>
						</div>
					</div>
				</div>
			</footer>




		</div>
	</div>





	<!--========== SCROLL UP ==========-->
	<a href="#" class="scrollup" id="scroll-up">
		<i class="ri-arrow-up-line scrollup__icon"></i>
	</a>

	<!--=============== SCROLL REVEAL===============-->
	<script src="../assets/js/scrollreveal.min.js"></script>

	<!--=============== SWIPER JS ===============-->
	<script src="../assets/js/swiper-bundle.min.js"></script>

	<!--=============== MAIN JS ===============-->
	<script src="../assets/js/main.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>













</body>


</html>