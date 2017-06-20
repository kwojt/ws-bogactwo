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
		<!-- Custom styles -->
		<link href="css/custom.css" rel="stylesheet">
		<?php
		if(isset($_GET["album"])) {
			echo ('
		   <!-- Lightbox stylesheet -->
		   <link href="misc/lightbox2/src/css/lightbox.css" rel="stylesheet">
				');
		}
		?>
	</head>
	<body>
		<nav id ="mobile-nav" class="visible-xs">
			<ul class="list-unstyled">
				<a href="?"><li <?php if(empty($_GET) || isset($_GET["glowna"])) echo 'class="active"'; ?>><br><br><span class="glyphicon glyphicon-home nav-glyph" aria-hidden="true"></span><br><br>GŁÓWNA</li></a>
				<a href="?harmonogram"><li <?php if(isset($_GET["harmonogram"])) echo 'class="active"'; ?>><br><br><span class="glyphicon glyphicon-calendar nav-glyph" aria-hidden="true"></span><br><br>HARMONOGRAM</li></a>
				<a href="?galeria"><li <?php if(isset($_GET["galeria"])) echo 'class="active"'; ?>><br><br><span class="glyphicon glyphicon-picture nav-glyph" aria-hidden="true"></span><br><br>GALERIA</li></a>
				<a href="?informacje"><li <?php if(isset($_GET["informacje"])) echo 'class="active"'; ?>><br><br><span class="glyphicon glyphicon-info-sign nav-glyph" aria-hidden="true"></span><br><br>INFORMACJE</li></a>
			</ul>
		</nav>
		<div id="mobile-nav-spacer" class="visible-xs"></div>
		<div class="container" id="top-container">
			<img src="img/logotypy.png" id="top-logotypy">
			<div id="top-title">
				<span id="biger">Odkryjmy bogactwo w nas drzemiące </span><br>w Szkole Podstawowej nr 128 i Publicznym Gimnazjum nr 58 w Łodzi
			</div>
		</div>
		<nav id="desktop-nav" class="container-fluid hidden-xs">
			<ul>
				<a href="?"><li <?php if(empty($_GET) || isset($_GET["glowna"])) echo 'class="active"'; ?>>GŁÓWNA</li></a>
				<a href="?harmonogram"><li <?php if(isset($_GET["harmonogram"])) echo 'class="active"'; ?>>HARMONOGRAM</li></a>
				<a href="?galeria"><li <?php if(isset($_GET["galeria"])) echo 'class="active"'; ?>>GALERIA</li></a>
				<a href="?informacje"><li <?php if(isset($_GET["informacje"])) echo 'class="active"'; ?>>INFORMACJE</li></a>
			</ul>
		</nav>
		<div id="mobile-nav-spacer-bottom" class="visible-xs"></div>
		<main class="container">
			<?php
			if(empty($_GET) || isset($_GET["glowna"])) {
				include("glowna.html");
			}

			else if(isset($_GET["harmonogram"])) {
				include "harmonogram.html";
			}
			
			else if(isset($_GET["galeria"])) {
				include "galeria.php";
			}

			else if(isset($_GET["album"])) {
				include "album.php";
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
		<?php
		if(isset($_GET["album"])) {
			echo ('
		   <!-- Gallery script -->
		   <link href="misc/lightbox2/src/css/lightbox.css">
                <script src="misc/lightbox2/src/js/lightbox.js"></script>
				<script src="misc/imagesloaded.pkgd.min.js"></script>
				<script src="misc/masonry.pkgd.min.js"></script>
				<script>

				// init Masonry
				var $grid = $(".album-grid").masonry({
					// options
					itemSelector: ".album-grid-item",
                fitWidth: true
				});
				
				// layout Masonry after each image loads
				$grid.imagesLoaded().progress( function() {
			 $grid.masonry("layout");
				});
				</script>');
		}
		?>
	</body>
</html>
