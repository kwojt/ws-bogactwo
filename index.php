<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Informacje o projekcie &quote;Odkryjmy bogactwo w nas drzemiące w Szkole Podstawowej nr 128 i Publicznym Gimnazjum nr 58 w Łodzi&quote; współfinansowanego ze środków Europejskiego Funduszu Społecznego w ramach Regionalnego Programu Operacyjnego Województwa Łódzkiego na lata 2014-2020.">
		<meta name="keywords" content="Szkoła podstawowa 128 w Łodzi, Gimnazjum 58 w Łodzi, projekt, odkryjmy bogactwo, fundusz europejski">
		<meta name="author" content="Krzysztof Wójt">
		<title>Odkryjmy bogactwo w nas drzemiące</title>
		<!-- Bootstrap core CSS -->
		<link href="misc/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- Własne style -->
		<link href="css/custom.css" rel="stylesheet">
	</head>
	<body>
		<div class="container" id="top-container">
			<img src="img/logotypy.jpg" id="top-logotypy">
			<div id="top-title">
				<span id="biger">Odkryjmy bogactwo w nas drzemiące </span><br>w Szkole Podstawowej nr 128 i Publicznym Gimnazjum nr 58 w Łodzi
			</div>
		</div>
		<nav class="container-fluid hidden-xs">
			<ul>
				<a href="?"><li <?php if(empty($_GET) || isset($_GET["glowna"])) echo 'class="active"'; ?>>GŁÓWNA</li></a>
				<a href="?harmonogram"><li <?php if(isset($_GET["harmonogram"])) echo 'class="active"'; ?>>HARMONOGRAM</li></a>
				<a href="?personel"><li <?php if(isset($_GET["personel"])) echo 'class="active"'; ?>>PERSONEL</li></a>
				<a href="?informacje"><li <?php if(isset($_GET["informacje"])) echo 'class="active"'; ?>>INFORMACJE</li></a>
			</ul>
		</nav>
		<nav id ="mobile-nav" class="container-fluid visible-xs">
			<ul>
				<a href="?"><li <?php if(empty($_GET) || isset($_GET["glowna"])) echo 'class="active"'; ?>>GŁÓWNA</li></a>
				<a href="?harmonogram"><li <?php if(isset($_GET["harmonogram"])) echo 'class="active"'; ?>>HARMONOGRAM</li></a>
				<a href="?personel"><li <?php if(isset($_GET["personel"])) echo 'class="active"'; ?>>PERSONEL</li></a>
				<a href="?informacje"><li <?php if(isset($_GET["informacje"])) echo 'class="active"'; ?>>INFORMACJE</li></a>
			</ul>
		</nav>
		<main class="container">
			<?php
			if(empty($_GET) || isset($_GET["glowna"])) {
				include("glowna.html");
			}

			else if(isset($_GET["personel"])) {
				include "personel.html";
			}
			
			else if(isset($_GET["informacje"])) {
				include "informacje.html";
			}
			?>
		</main>
		<footer class="container">
			<hr>
			Site by kwojt 2017
		</footer>
		<!-- Bootstrap and jQuery scrpit files -->
		<script src="misc/jquery/dist/jquery.min.js"></script>
		<script src="misc/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>
