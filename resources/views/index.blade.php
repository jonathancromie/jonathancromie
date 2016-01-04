@extends('layouts.master')

@section('title', 'Jonathan Cromie')

@section('content')
	@parent

	@section('header')
		<body class="landing">

		<!-- Header -->
		<header id="header">
			<h1><a href="#">Jonathan Cromie</a></h1>
			<nav id="nav">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#one">About Me</a></li>
					<li><a target="_blank" href="https://github.com/jonathancromie">Portfolio</a></li>
					<!-- <li><a href="{{ asset('blog') }}">Blog</a></li> -->
					<li><a target="_blank" href="{{ asset('files/CurriculumVitae.pdf') }}">Resume</a></li>
					<li><a href="#footer">Contact</a></li>
				</ul>
			</nav>
		</header>
	@endsection

	<!-- Banner -->
	<section id="banner">
		<h2>Hi, I'm Jonathan Cromie</h2>
		<p>Software Developer</p>
		<ul class="actions">
			<li>
				<a href="#one" class="button big">Learn More</a>
			</li>
		</ul>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style2 align-center">
		<div class="container">
			<header>
				<h2>About Me</h2>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, autem.</p> -->
			</header>
			<div class="row">
				<section class="feature 6u 12u$(small)">
					<img class="image fit" src="images/pic01.jpg" alt="" />
					<h3 class="title">Bio</h3>
					<p>
						I'm a recent graduate of Information Technology living in Brisbane, Australia. 
						I have a passion for developing websites and mobile applications, however I also have a flair for design.
					</p>
				</section>
				<section class="feature 6u$ 12u$(small)">
					<img class="image fit" src="images/pic02.jpg" alt="" />
					<h3 class="title">Experience</h3>
					<p>
						For the past 3 years I have been studying Information Technology full time. During my studies, many assignments and projects
						have provided me with relevant experience in Software Development. Last year I graduated my Bacheler of Information Technology with a Distinction.
					</p>
				</section>
				<section class="feature 6u 12u$(small)">
					<img class="image fit" src="images/pic03.jpg" alt="" />
					<h3 class="title">Interests</h3>
					<p>
						In my spare time I like to play guitar and listen to music. My favourite genre to listen to is Alternative. I also enjoy cooking, reading and gaming on my PC.
					</p>
				</section>
				<section class="feature 6u$ 12u$(small)">
					<img class="image fit" src="images/pic04.jpg" alt="" />
					<h3 class="title">Last Project</h3>
					<p>
						Last semester I worked with a team to design and develop a website which allowed students at QUT to hire and share textbooks.
						As the lead programmer, I was responsible for implementing the functions to	share, hire, search and sort textbooks 
						as well as the functions to login and register.	I also designed the database to hold the textbook, review and user information. 
						The development process gave me a stronger understanding of Laravel, and also scrum methodology. 
					</p>
				</section>
			</div>
		</div>
	</section>
@endsection