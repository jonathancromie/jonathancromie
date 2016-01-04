<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	@section('header')
	@show

		@yield('content')

		<!-- Footer -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<section class="4u 6u(medium) 12u$(small)">
						<h3>Testimonial</h3>
						<p>
							I found Jonathan's coding ability to be above what I would normally expect from a university graduate 
							and he displayed to me his ability to resolve issues by utilising all available resources. 
							In the instances where there was a problem he was unable to solve, he was able to bring up all relevant
							work on his screen and was very attentive while I walked him through the steps to fixing the issue and 
							asked very relevant and intelligent questions when he didn’t understand something.
						</p>
					</section>
					<section class="4u 6u$(medium) 12u$(small)">
						<h3>Favourite Quote</h3>
						<p><i>"We can only see a short distance ahead, but we can see plenty there that needs to be done."</i> - Alan Turing</p>

					</section>
					<section class="4u$ 12u$(medium) 12u$(small)">
						<h3>Contact Me</h3>
						<ul class="icons">
							<li><a target="_blank" href="https://twitter.com/joncromie" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a target="_blank" href="https://www.facebook.com/JonathanCromie" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a target="_blank" href="https://plus.google.com/u/0/+JonathanCromie" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
							<li><a target="_blank" href="https://www.linkedin.com/profile/view?id=AAIAAA2lZ2MBgPNRAIUIsQWpyGwQI3NJML3dPYE&trk=nav_responsive_tab_profile" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a target="_blank" href="https://github.com/jonathancromie" class="icon rounded fa-github"><span class="label">GitHub</span></a></li>
						</ul>
						<ul class="tabular">
							<li>
								<h3>Email</h3>
								<a href="#">joncromie@gmail.com</a>
							</li>
							<li>
								<h3>Phone</h3>
								0447 193 506
							</li>
						</ul>
					</section>
				</div>
				<ul class="copyright">
					<li>&copy; Jonathan Cromie. All rights reserved.</li>
					<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
					<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
				</ul>
			</div>
		</footer>
	</body>
</html>