<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page d'accueil</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="icon" type="favicon" href="images/ludus.png">
</head>
<body>
	<nav>
			<div id="menu"></div>
				<ul>
					<li><a href="index.php">Accueil</a></li>
				</ul>
			</div>
	<section>
		<h1>Page D'Accueil</h1>
		<p>Ceci est la page d'accueil du site</p>
		<form id="connexion" name="connexion" action="interface2.php" method="get">
			<input type="submit" value="Connexion">
		</form>
	</section>
</body>
<footer>
	</br>Copyright © </br>
	Florian Herrmann </br>
	<?php 
		include('PHP/date.php')
	 ?>
</footer>
</html>