<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Resume Page with Portfolio">
		<meta name="author" content="Ben Roberts">

		<title>Resume</title>

		<!-- Bootstrap core CSS -->
		<link href="/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link rel="stylesheet" type="text/css" href="/css/welcome.css">
		<link href="/css/resume.css" rel="stylesheet">   
		
		<!-- Fonts -->
		<link rel="stylesheet" href="/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
		
		<!--JS-->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/Chart.js"></script>
	</head>
	<body data-spy="scroll" data-offset="0" data-target="#nav">
		<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
			<div class="container topnav">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand topnav" href="/welcome.php"><strong>Home</strong></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#work"><b>Portfolio</b></a>
						</li>
						<li>
							<a href="/resume.html"><b>Resume</b></a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		
		<!-- Header -->
		<div id="headerwrap">
			<iframe class="banner-video"src="https://player.vimeo.com/video/156296154?api=1&autoplay=1&loop=1&byline=0&portrait=0&background=1"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<div class="container" id="top-banner">
				<div class="row centered">
					<div class="col-lg-12 intro-message">
						<h1><strong>M. Benjamin Roberts</strong></h1>
						<h3><strong>Web Designer | <a href="emailto:mikebenroberts@gmail.com">mikebenroberts@gmail.com</a></strong></h3>

						<img id="profilepic" src="/img/profile.png">
					</div><!-- /.col-lg-12 -->
				</div><!-- /.row  -->
			</div><!--/.container  -->
		</div><!--/.#headerwrap -->

		<section id="about" name="about"></section>
		<div id="intro">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>ABOUT</h5>
					</div>
					<div class="col-lg-6">
						<p>I'm a web designer & front-end developer. My major focus is on designing web, mobile & tablet interfaces. I also have skills in other fields like management, sales and web development.</p>
					</div>
					<div class="col-lg-3">
						<p><a href="/img/ben_resume.pdf" target="_blank"><i class="fa file"></i><sm>PDF RESUME</sm></a></p>
					</div><!--/.col-lg-3 -->
				</div><!--/.row -->
			</div><!--/.container -->
		</div><!--/ #intro -->

		<section id="resume" name="resume"></section>
		<!--EDUCATION DESCRIPTION -->
		<div class="container desc">
			<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Web Developement</t><br/>
						Codeup<br/>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>GRADUATING IN November 2016</sm><br/>
					<imp><sm>IN PROGRESS</sm></imp>
					</p>
				</div>
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>North Quincy High School</t><br/>
						<i>4 Years</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>JUNE 2000</sm></p>
				</div>
			</div><!--/.row -->
			<br>
			<hr>
		</div><!--/.container -->
		
		<!--WORK DESCRIPTION -->
		<div class="container desc">
			<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>WORK</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Bartender</t><br/>
						Tapatio Springs<br/>
					</p>
					<p><more>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>AUGUST 2015 - DECEMBER 2015</sm></p>
				</div>
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>G-Force Shipping</t><br/>
						Logistics Consultant <br/>
					</p>
					<p><more>Responsible for using the administrative backend of a Transportation Management System for customer service and sales.  </more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>JANUARY 2014 - SEPTEMBER 2014</sm></p>
				</div>
			</div><!--/.row -->
			<br>
		</div><!--/.container -->
		
		<!--SKILLS DESCRIPTION -->
		<div id="skillswrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>SKILLS</h5>
					</div>
					<div class="col-lg-3 centered skills-canvas">
						<canvas id="javascript" height="130" width="130"></canvas>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
						</script>
						<img src="/img/javascript.png" id="js-position">
					</div>
					<div class="col-lg-3 centered skills-canvas">
						<canvas id="bootstrap" height="130" width="130"></canvas>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
						</script>
						<img src="/img/bootstrap.png" id="bootstrap-position">
					</div>
					<div class="col-lg-3 centered skills-canvas">
						<canvas id="jquery" height="130" width="130"></canvas>
						<script>
							var doughnutData = [
									{
										value: 90,
										color:"#1abc9c"
									},
									{
										value : 10,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("jquery").getContext("2d")).Doughnut(doughnutData);
						</script>
						<img src="/img/jquery.png" id="jquery-position">

					</div>
					<div class="col-lg-3 col-lg-offset-3 centered skills-canvas">
						<canvas id="html" height="130" width="130"></canvas>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("html").getContext("2d")).Doughnut(doughnutData);
						</script>
						<img src="/img/html5.png" id='html-position'>

					</div>
					<div class="col-lg-3 centered skills-canvas">
						<canvas id="css" height="130" width="130"></canvas>
						<script>
							var doughnutData = [
									{
										value: 70,
										color:"#1abc9c"
									},
									{
										value : 30,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("css").getContext("2d")).Doughnut(doughnutData);
						</script>
						<img src="/img/css3.png" id="css-position">

					</div>
					<div class="col-lg-3 centered skills-canvas">
						<canvas id="php" height="130" width="130"></canvas>
						<img src="/img/php.png" id="php-position">
						<script>
							var doughnutData = [
									{
										value: 5,
										color:"#1abc9c"
									},
									{
										value : 95,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("php").getContext("2d")).Doughnut(doughnutData);
						</script>

					</div>
				</div><!--/.row -->
				<br>
			</div><!--/.container -->
		</div><!--/ #skillswrap -->

		<section id="work" name="work"></section>
		<!--PORTFOLIO DESCRIPTION -->
		<div class="container desc">
			<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h4>PORTFOLIO</h4>
				</div>

				<div class="col-lg-6 portfolio">
					<div class="hovereffect">
						<p>
							<img class="gif-image img-responsive img-shadow" src="/img/calculator.gif">
						</p>
						<div class="overlay img-responsive">
							<h2><strong><a href="#">JavaScript Calculator</a></strong></h2>
							<p>
								<more>I finished rather quickly so I went on to add extra features such as a conversion calculator, a graphing calculator, and button animations.</more> 
							</p>
							<a href="/calculator.html">View Here</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<p><strong><a href="#">Codeup Project</a></strong></p>
					<p>
						<more>Our project was to create a basic, functioning calculator running off vanilla JavaScript.<br/><br/>
						<sm><i class="icon-tag"></i> design</sm></more> 
					</p>
				</div>

				<div class="col-lg-6 col-lg-offset-3 portfolio">
					<div class="hovereffect-two">
						<p>
							<a href="#"><img class="gif-image img-responsive img-shadow"src="/img/simon.gif"></a><!-- <video class="" autoplay loop width="555" height="308" name="simon" src="/img/simon.mov"></video> -->
						</p>
						<div class='overlay-two img-responsive'>
							<h2><strong><a href="#">Simple Simon</a></strong></h2>
							<p>
								<more>I included light animations as well as background music and a moving background. Both the animations and music speed up with game progress.</more> 
							</p>
							<a class="info"href="#">View Here</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3">
					<p><strong><a href="#">Codeup Project</a></strong></p>
					<p>
						<more>The assignment was to create a Simple Simon game that had the same functionality as the classic 80s game.<br/><br/>
						<sm><i class="icon-tag"></i> front-end</sm></more>
					</p>
				</div>
			</div><!--/.row -->
			<br>
			<br>
		</div><!--/.container -->
		
		<section id="contact" name="contact"></section>
		<!--FOOTER DESCRIPTION -->
		<div id="footwrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>CONTACT</h5>
					</div>
					<div class="col-lg-6">
						<p><t>Email</t><br/>
							<a href="mailto:mikebenroberts@gmail.com">mikebenroberts@gmail.com</a><br/>
						</p>
						<p><t>Address</t><br/>
							7929 Mystic Chase <br/>
							Boerne, TX 78015 <br/>
						</p>
						<p><t>Phone</t><br/>
							<a href="tel:617-721-5645"></a>(617)721-5645</a><br/>
						</p>
					</div>
					<div class="col-lg-3">
						<p><sm>SOCIAL LINKS</sm></p>
						<p>
							<a href="https://twitter.com/mikebenroberts"><i class="icon-twitter"></i></a>
							<a href="https://www.facebook.com/mbenroberts"><i class="icon-facebook"></i></a>
							<a href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a>
							<a href="https://github.com/MBRoberts"><i class="icon-github-alt"></i></a>
						</p>
					</div>
				</div><!--/.row -->
			</div><!--/.container -->
		</div><!--/ #footer -->
		
		<div id="c">
			<div class="container">
				<p>Created by <a href="/welcome.php"> Ben Roberts</a></p>
			</div>
		</div>
		

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/js/resume.js"></script>
</body>
</html>
