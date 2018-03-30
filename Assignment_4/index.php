<!DOCTYPE html>
<html lang="en-US">
	<!--The gameplan for this webpage is to fork the previous teams content, add a fourth financial economics student, and have the coder implement the html form asked for in the assignment.-->

<div class="container">
<head>
  <?php 
 	include'includes/links.php';
 	?>
	<meta charset="utf-8">


	<title>Computer Science Majors and a Financial Econ in CSC174</title>
</head>

<body id="body1">
	<!--Done--><!--TO CODER: Please implement php code to create a menu highlighter for the current page-->
	<!--TO Design Artist: Make the navbar look better and easier to use. Maybe have them be horizontal, right aligned, with the city name left aligned. The city name can act as a logo, and also linked to the home page. Also please add css for when hovering over nav elements.-->
	<?php include 'includes/navigation.php';?>
	
	<?php include 'includes/script.php';?>
	
	<h1>Computer Science (And a Fin Econ) Students in CSC174</h1>
	<div class="top">
	<div>
		<p>This page is dedicated to three students that all study Computer Science at the University of Rochester, one Financial Economics Major, and the fact that they all ended up in CSC 174!</p>
	</div>
</div>
	<!--Done--><!-- TO CODER: Please make sure the flexslider is implemented correctly and works-->
	<!-- TO Design Artist: Please make the flexslider make better. Maybe make it smaller instead of fullscreen so that the images are not distorted. Place a nice frame around the images that fit well with the rest of the color scheme of your choice-->
	
			
  		<div class="slides">
  		<ul class="rslides">
		<li> <img src="images/kyle.jpg" alt="Kyle"> </li>
		<li><img src="images/sid.jpg" alt="Sid"></li>
		<li><img src="images/xiao.png" alt="Xiao"> </li>
		<li><img src="images/oliver.png" alt="Oliver"> </li>
		
		</ul>
		</div>
	
   
	<h2>Kyle Pollock</h2> 
	<div class="wrap">
	<p>My name is Kyle Pollock. I am a Computer Science student of Class '18. I am also minoring in Chinese Language and Culture.</p>
</div>

	<h2>Sidhant Ahluwalia</h2>
	<div class="one">
	<p>I'm a computer science major at the University of Rochester. My area of study is focused in Human-computer Interaction, ties in my interest in learning how design can make or break a product.</p>
</div>
	<h2>Xiao Cheng</h2>
	<div class="two">
	<p>My name is Xiao Cheng, and my friends all call me Katherine/Kat. I am currently studying at the University of Rochester, majoring in Computer Science and minoring in Philosophy. </p>
</div>
<h2>Oliver Ostriker</h2>
	<div class="one">
	<p>My name is Oliver Ostriker and I am a junior at the University of Rochester majoring in Financial Economics with minors in both Business and Computer Science. </p>
</div>

</body>
<footer>
    <p>Copyright @ Information Architect: Matt Resnikoff, Coder: Albert Nissim, Designer: Oliver Ostriker</p>
</footer>
</div>
</html>