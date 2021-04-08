<?php

session_start();

// // Check if page has been accessed directly
// $direct_message = "<h4>It seems you are trying to access this page through this link, or maybe you're refreshing the page at a bad time.</h4><p><a href='index.html'>Click here</a> to go back to the main page</p>";
// if(empty($_POST["ValidateDirect"])) die($direct_message);

echo "yo";

// require 'PHPMailer/PHPMailerAutoload.php';
// // $_SESSION['verify'] = 'done';

// // Collect data
// $name=$_POST['name'];
// $email=$_POST['email'];
// $p1="Photography Team";

// // $addr is the eb's address
// $addr = 'photography.ismun2019@gmail.com';

// // Increase counters
// $handle = fopen("counter-photos.txt", "r");
// $counter = (int) fread($handle,20);
// fclose ($handle);
// $counter++ ;
// $handle = fopen("counter-photos.txt", "w" );
// fwrite($handle,$counter);
// fclose ($handle);

// // Create UID
// $delNum = sprintf("%04d", $counter);
// $uid = 'photography/'.$delNum.'';

// //email_body is the file containing the template shown in 'email_eb.html' sent to the photographers after form submission
// $email_body =file_get_contents("email_photography.html");
// $email_body = str_replace("#name", $name, $email_body);
// $email_body = str_replace("#email", $email, $email_body);
// $email_body = str_replace("#phone", $_POST['phone'], $email_body);
// $email_body = str_replace("#dob", $_POST['dob'], $email_body);
// $email_body = str_replace("#school", "Singhania School", $email_body);
// $email_body = str_replace("#about", $_POST['about-self'], $email_body);
// $email_body = str_replace("#ip", $_SERVER['REMOTE_ADDR'] , $email_body);
// $email_body = str_replace("#uid", $uid, $email_body);
// $email_body = str_replace("#food", $_POST['food'], $email_body);
// $email_body = str_replace("#awards", $_POST['awards'], $email_body);

// // Copy for the user
// $email_body2 = file_get_contents("email_user.html");
// $email_body2 = str_replace("#name", $name, $email_body2);
// $email_body2 = str_replace("#uid", $uid, $email_body2);
// $email_body2 = str_replace("#com", $p1, $email_body2);

// // Set up mailing for letters to eb
// $mail = new PHPMailer;
// $mail->isSMTP();
// // $mail->Host = 'mail.singhaniaschool.org';
// $mail->Host = 'files.000webhost.com';
// $mail->SMTPAuth = true;
// // $mail->Username = 'smtp@singhaniaschool.org';
// $mail->Username = 'ismunofficialtrial';
// // $mail->Password = 'Inf8f65f';
// $mail->Password = 'Dovahk11n';
// $mail->setFrom('info@singhaniaschool.org', 'ISMUN 2019 Registrations');
// $mail->addReplyTo('tech.ismun2019@gmail.com', 'Aryan Pingle');
// $mail->addAddress($addr, $p1);
// $mail->addBCC('forms.ismun2019@gmail.com', 'Aryan Pingle');
// $mail->isHTML(true);
// $mail->Subject = '' . $uid. ' | '. $name.' ';
// $mail->Body = $email_body;

// if(!$mail->send())
// {
// 	echo 'Registration Failed \n Go back and try again or contact tech.ismun@gmail.com \n Mailer Error : ' . $mail->ErrorInfo;
// }
// else
// {
// 	// Send copy to user
// 	$mail->clearAllRecipients();
// 	$mail->setFrom('info@singhaniaschool.org', 'ISMUN 2019');
// 	$mail->addReplyTo('tech.ismun2019@gmail.com', 'Aryan Pingle');
// 	$mail->addAddress($email, $name);
// 	$mail->addBCC('forms.ismun2019@gmail.com', 'ISMUN Confirmation Mail');
// 	$mail->isHTML(true);
// 	$mail->Subject = 'ISMUN 2019 | '. $uid. ' | Confirmation Mail ';
// 	$mail->Body = $email_body2;
// 	$mail->send();
// }

?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<title>ISMUN 2019 | Form Submission</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/main.css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- SCRIPTS -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="landing">
	<div id="page-wrapper">
		<header id="header">
			<h1 id="logo"><a href="index.html">ISMUN 2019</a></h1>
			<a href="index.html"><img src="images/ISMUN Title.svg" id="logoimg" /></a>
			<nav id="nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="committees.html">Committees</a></li>
					<li><a href="resources.html">Resources</a></li>
					<li class="current-page"><a href="register.html" style="font-weight: 700;">Register</a></li>
				</ul>
			</nav>
		</header>

		<section id="banner" class="comban">
			<img src="images/verified.png" />
		</section>

		<style type="text/css">
			.cominfo {
				padding: 100px;
			}

			@media(max-width: 700px) {
				.cominfo {
					padding: 20px;
				}
			}
		</style>

		<section class="main wrapper style1 cominfo" style="padding: 100px;">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<header>
								<h2>You have submitted your application form for ISMUN 2019!</h2>
							</header>
							<p>
								You will be receiving a confirmation mail soon, and if you have any technical queries, please send them to <accent2>tech.ismun2019@gmail.com</accent2>.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<header>
								<img src="images/ISMUN Title.svg" />
							</header>
						</div>
					</div>
					<div class="row">
						<div class="col-4 col-12-small">
							<header>
								<h2>Quick Links</h2>
							</header>
							<ul>
								<a href="index.html"><li>Home Page</li></a>
								<a href="committees.html"><li>Committees</li></a>
								<a href="resources.html"><li>Resources</li></a>
								<a href="contact-us.html"><li>Contact Us</li></a>
								<a href="Editorials.html"><li>Editorials</li></a>
							</ul>
						</div>
						<div class="col-4 col-12-small" id="side-by-side">
							<header>
								<h2>Committees</h2>
							</header>
							<ul>
								<a href="AIPPM.html"><li>AIPPM</li></a>
								<a href="DISEC.html"><li>DISEC</li></a>
								<a href="ECOSOC.html"><li>ECOSOC</li></a>
								<a href="FSC.html"><li>FSC</li></a>
								<a href="UNEP.html"><li>UNEP</li></a>
							</ul>
							<ul>
								<a href="UNGA.html"><li>UNGA</li></a>
								<a href="UNHCR.html"><li>UNHCR</li></a>
								<a href="UNODC.html"><li>UNODC</li></a>
								<a href="UNSC.html"><li>UNSC</li></a>
								<a href="WHO.html"><li>WHO</li></a>
							</ul>
							<ul>
								<a href="Logistics.html"><li>Logistics</li></a>
								<a href="Press.html"><li>Press</li></a>
								<a href="Photography.html"><li>Photography</li></a>
								<a href="Marketing.html"><li>Marketing</li></a>
								<a href="Design.html"><li>Design</li></a>
							</ul>
						</div>
						<div class="col-4 col-12-small">
							<header>
								<h2>Registration</h2>
							</header>
							<ul>
								<a href="register.html"><li>For Delegates</li></a>
								<a href="register-logi.html"><li>For Logistics</li></a>
								<a href="register-press.html"><li>For Press</li></a>
								<a href="register-photography.html"><li>For Photography</li></a>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-12" style="margin-top: 15px;">
							<header>
								<h2 style="font-size: 19px;">
									<accent>Designed by <accent2 style="color: #2274fb;">Aryan Pingle</accent2></accent>
								</h2>
								<p style="font-size: 16px; font-weight: 400;">&copy; ISMUN 2019<br>All rights reserved</p>
							</header>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

