<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Intranet</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="icon" type="favicon" href="images/ludus.png">
</head>
<body>
	<?php
		// Echo session variables 
		if(isset($_SESSION['nom']))
			if(isset($_SESSION['prenom']))
			{
				{
					echo "Nom: " . $_SESSION["nom"] . ".<br>";
					echo "Prénom: " . $_SESSION["prenom"] . "<br>";
					include('PHP/date.php');
				}
			}
	?>
	<h1>Intranet</h1>
	<h2>Veuillez choisir la classe</h2>
	<form method="GET" action="#">
	<select name="classes" id="classes">
		<?php $liste= array('F11','F12','F13','F14','F21','F22','F31','F32','M1','M2');

		foreach ($liste as $key){

				echo "<option value=$key>$key</option>";
			} 
		?>
	</select> </br> </br>
	<input type="submit" value="Afficher classe" id="affiche_classe"> </br>
	</br>
	 
		<?php 

		$F11 = array("ACKER" =>"Arnaud","ANDRIOLO"=>"Caroline","AYDIN"=>"Kadir","BALSON"=>"Yann","BITON"=>"Joselyn","CRAGNOLINI"=>"Julien","ESCHEKE"=>"Thomas","FERNANDES"=>"Yoann","FREYMANN"=>"Ludwig","HOEL"=>"Julien","LASKOWSKI"=>"Axel","NOYON"=>"Natan","PROB"=>"Bastien","UBRIG"=>"Joric","VIRION"=>"Louis");

		$F12 = array("ANDRIAMIANDRARIVO" =>"Hubert Bryan","AULEN" =>"Lucas","BUTTANI" =>"Justine","DEVEZE" =>"Kilian","DIETSCHIN" =>"Valentin","GERGES" =>"Celine","GRIMAZ" =>"Jeremie","HAAS" =>"Mathieu","LORANGE" =>"Pauline","MADER" =>"Maxime","MATHIEU" =>"Tristan","MOCK" =>"Romain","NOIRET-LEMAIRE" =>"Lenny","ROUX" =>"Anthony","SAINT JULIEN" =>"Joffrey");

		$F13 =  array("BOULAAJOUL" =>"Badr","FUCHS" =>"Emilien","GALATI" =>"Gaetan","HAJNAL" =>"Florian","ISS" =>"Fiona","KAYSER" =>"Matthieu","MAGGAY" =>"Cedric","ROCHAS" =>"Valentin","SCHEER-ALM" =>"Benjamin Claude","SIMON" =>"Pierre-Andre","VIE" =>"Loic","WALLISCH" =>"Alexis","WERLY" =>"Tomeline","ZIMMER" =>"Noe");

		$F14 = array("BORGONSO" =>"David","CLAUDE" =>"Leo","DE CHENERILLES" =>"Pablo","FACHE" =>"Bruno","GAU" =>"Pierre-Alain","GAWLIK" =>"Alexis","Goetz" =>"Thibaud","HELFER" =>"Antoine","HOSSANN" =>"Vincent","LAMARRE" =>"Benoit","QUENET" =>"Raphael","SCHNEE" => "Louis","VELTZ" =>"Quentin","VINDIGNI" =>"Fabio","WILHELM" =>"Stephane");

		$F21 = array("BAZIN" =>"Maxime","GIOVINAZZO" =>"Alexis","GUERRERO" =>"Maxime","HERRMANN" =>"Florian","KERGROHEN" =>"Pierre-Yves","LAMOUR" =>"Anthony","Martin" =>"Alexandre","ROCHE" =>"Charles","ANALAN" =>"Gokhan","WEILER" =>"William","WENDLING" =>"Bruno");

		$F22 = array("ALVES" =>"Guillaume","BARTHLEN" =>"Arthur","DENNY" =>"Thubaut","ELBERTSE" =>"Alexy","HERNANDEZ" =>"Alexis","MONNIER" =>"Laetitia","MORRICONI" =>"Lenny","PIN" =>"Kilian","RINCK" =>"Adrien","TRICHET" =>"Florentin","WAHLER" =>"Adrian");

		$F31 = array("ACKERMANN" =>"Pierre","BOURGUIGNON" =>"Kevin","BRIOT" =>"Anthony","BRIOTTET" =>"Antoine","CHEUNG" =>"TEVA","CHOUFFERT" =>"Tristant","FELLRATH" =>"Jonathan","FOUBERT" =>"Guillaume","JUNG" =>"Lucas","KRETZ" =>"Teo","RENNER" =>"Julien","STADELMANN" =>"Louis");

		$F32 = array("BALTA" =>"Cindy","CAILLAUD" =>"Jean-Baptiste","KLEINCLAUS" =>"Florent","MURE" =>"Lucas","RENCUREL" =>"Pierre","RIETSCH" =>"Virgile","SCHMIDT" =>"Arnaud","SUTTERLIN" =>"Sebastien","TAUPENOT" =>"Flavien","WEBER" =>"Max");

		$M1 = array("DOMINGO" =>"Alice","GAMPER" =>"Rebecca");

		$M2 = array("GRASSET" =>"Jordan","HAEHNEL" =>"Valentin","JEHL" =>"Regis","PALMITESSA" =>"Lucas","SANCHEZ" =>"Ines","STEPHAN" =>"Paul");

		if (isset($_GET['classes'])) {

			
			switch ($_GET['classes']) {
				case 'F11':
					echo(" <table>
							<caption>Présence des élèves (F11)</caption>
							</br>
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Statut Lundi</th>
									<th>Statut Mardi</th>
									<th>Commentaire</th>
								</tr>
							</thead>
							<tbody>
									");
										foreach ($F11 as $key => $value){

											echo "<tr>";
											echo "<td>";
											echo "$key";
											echo "</td>";
											echo "<td>";
											echo "$value";
											echo "</td>";
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F11_J1\"></br> 
													<input type=\"radio\" name=\"presence_F11\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F11\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F11\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F11_J2\"></br> 
													<input type=\"radio\" name=\"presence_F11\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F11\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F11\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo "<td> <input type=\"textarea\" placeholder=\"Commentaires\" rows=\"2\" cols=\"200\" style=\"width:500px\" </td>";
											echo "</tr>";
										}
										("
							</tbody>
							</table>
						");
					
					break;

				case 'F12':
					echo(" <table>
							<caption>Présence des élèves (F12)</caption>
							</br>
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Statut Lundi</th>
									<th>Statut Mardi</th>
									<th>Commentaire</th>
								</tr>
							</thead>
							<tbody>
									");
										foreach ($F12 as $key => $value){

											echo "<tr>";
											echo "<td>";
											echo "$key";
											echo "</td>";
											echo "<td>";
											echo "$value";
											echo "</td>";
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F12_J1\"></br> 
													<input type=\"radio\" name=\"presence_F12\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F12\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F12\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F12_J2\"></br> 
													<input type=\"radio\" name=\"presence_F12\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F12\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F12\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo "<td> <input type=\"textarea\" placeholder=\"Commentaires\" rows=\"2\" cols=\"200\" style=\"width:500px\" </td>";
											echo "</tr>";
										}
										("
							</tbody>
							</table>
						");
					break;

				case 'F13':
					echo(" <table>
							<caption>Présence des élèves (F13)</caption>
							</br>
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Statut Lundi</th>
									<th>Statut Mardi</th>
									<th>Commentaire</th>
								</tr>
							</thead>
							<tbody>
									");
										foreach ($F13 as $key => $value){

											echo "<tr>";
											echo "<td>";
											echo "$key";
											echo "</td>";
											echo "<td>";
											echo "$value";
											echo "</td>";
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F13_J1\"></br> 
													<input type=\"radio\" name=\"presence_F13\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F13\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F13\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F13_J2\"></br> 
													<input type=\"radio\" name=\"presence_F13\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F13\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F13\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo "<td> <input type=\"textarea\" placeholder=\"Commentaires\" rows=\"2\" cols=\"200\" style=\"width:500px\" </td>";
											echo "</tr>";
										}
										("
							</tbody>
							</table>
						");
					break;

				case 'F14':
					echo(" <table>
							<caption>Présence des élèves (F14)</caption>
							</br>
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Statut Lundi</th>
									<th>Statut Mardi</th>
									<th>Commentaire</th>
								</tr>
							</thead>
							<tbody>
									");
										foreach ($F14 as $key => $value){

											echo "<tr>";
											echo "<td>";
											echo "$key";
											echo "</td>";
											echo "<td>";
											echo "$value";
											echo "</td>";
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F14_J1\"></br> 
													<input type=\"radio\" name=\"presence_F14\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F14\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F14\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F14_J2\"></br> 
													<input type=\"radio\" name=\"presence_F14\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F14\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F14\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo "<td> <input type=\"textarea\" placeholder=\"Commentaires\" rows=\"2\" cols=\"200\" style=\"width:500px\" </td>";
											echo "</tr>";
										}
										("
							</tbody>
							</table>
						");
					break;

				case 'F21':
					echo(" <table>
							<caption>Présence des élèves (F21)</caption>
							</br>
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Statut Lundi</th>
									<th>Statut Mardi</th>
									<th>Commentaire</th>
								</tr>
							</thead>
							<tbody>
									");
										foreach ($F21 as $key => $value){

											echo "<tr>";
											echo "<td>";
											echo "$key";
											echo "</td>";
											echo "<td>";
											echo "$value";
											echo "</td>";
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F21_J1\"></br> 
													<input type=\"radio\" name=\"presence_F21\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F21\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F21\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F21_J2\"></br> 
													<input type=\"radio\" name=\"presence_F21\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F21\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F21\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo "<td> <input type=\"textarea\" placeholder=\"Commentaires\" rows=\"2\" cols=\"200\" style=\"width:500px\" </td>";
											echo "</tr>";
										}
										("
							</tbody>
							</table>
						");
					break;

				case 'F22':
					echo(" <table>
							<caption>Présence des élèves (F22)</caption>
							</br>
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Statut Lundi</th>
									<th>Statut Mardi</th>
									<th>Commentaire</th>
								</tr>
							</thead>
							<tbody>
									");
										foreach ($F22 as $key => $value){

											echo "<tr>";
											echo "<td>";
											echo "$key";
											echo "</td>";
											echo "<td>";
											echo "$value";
											echo "</td>";
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F22_J1\"></br> 
													<input type=\"radio\" name=\"presence_F22\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F22\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F22\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F22_J2\"></br> 
													<input type=\"radio\" name=\"presence_F22\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F22\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F22\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo "<td> <input type=\"textarea\" placeholder=\"Commentaires\" rows=\"2\" cols=\"200\" style=\"width:500px\" </td>";
											echo "</tr>";
										}
										("
							</tbody>
							</table>
						");
					break;

				case 'F31':
					echo(" <table>
							<caption>Présence des élèves (F31)</caption>
							</br>
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Statut Lundi</th>
									<th>Statut Mardi</th>
									<th>Commentaire</th>
								</tr>
							</thead>
							<tbody>
									");
										foreach ($F31 as $key => $value){

											echo "<tr>";
											echo "<td>";
											echo "$key";
											echo "</td>";
											echo "<td>";
											echo "$value";
											echo "</td>";
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F31_J1\"></br> 
													<input type=\"radio\" name=\"presence_F31\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F31\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F31\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F31_J2\"></br> 
													<input type=\"radio\" name=\"presence_F31\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F31\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F31\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo "<td> <input type=\"textarea\" placeholder=\"Commentaires\" rows=\"2\" cols=\"200\" style=\"width:500px\" </td>";
											echo "</tr>";
										}
										("
							</tbody>
							</table>
						");
					break;

				case 'F32':
					echo(" <table>
							<caption>Présence des élèves (F32)</caption>
							</br>
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Statut Lundi</th>
									<th>Statut Mardi</th>
									<th>Commentaire</th>
								</tr>
							</thead>
							<tbody>
									");
										foreach ($F32 as $key => $value){

											echo "<tr>";
											echo "<td>";
											echo "$key";
											echo "</td>";
											echo "<td>";
											echo "$value";
											echo "</td>";
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F32_J1\"></br> 
													<input type=\"radio\" name=\"presence_F32\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F32\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F32\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F32_J2\"></br> 
													<input type=\"radio\" name=\"presence_F32\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_F32\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_F32\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo "<td> <input type=\"textarea\" placeholder=\"Commentaires\" rows=\"2\" cols=\"200\" style=\"width:500px\" </td>";
											echo "</tr>";
										}
										("
							</tbody>
							</table>
						");
					break;

				case 'M1':
					echo(" <table>
							<caption>Présence des élèves (M1)</caption>
							</br>
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Statut Lundi</th>
									<th>Statut Mardi</th>
									<th>Commentaire</th>
								</tr>
							</thead>
							<tbody>
									");
										foreach ($M1 as $key => $value){

											echo "<tr>";
											echo "<td>";
											echo "$key";
											echo "</td>";
											echo "<td>";
											echo "$value";
											echo "</td>";
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"M1_J1\"></br> 
													<input type=\"radio\" name=\"presence_M1\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_M1\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_M1\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"M1_J2\"></br> 
													<input type=\"radio\" name=\"presence_M1\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_M1\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_M1\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo "<td> <input type=\"textarea\" placeholder=\"Commentaires\" rows=\"2\" cols=\"200\" style=\"width:500px\" </td>";
											echo "</tr>";
										}
										("
							</tbody>
							</table>
						");
					break;

				case 'M2':
					echo(" <table>
							<caption>Présence des élèves (M2)</caption>
							</br>
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Statut Lundi</th>
									<th>Statut Mardi</th>
									<th>Commentaire</th>
								</tr>
							</thead>
							<tbody>
									");
										foreach ($M2 as $key => $value){

											echo "<tr>";
											echo "<td>";
											echo "$key";
											echo "</td>";
											echo "<td>";
											echo "$value";
											echo "</td>";
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"M2_J1\"></br> 
													<input type=\"radio\" name=\"presence_M2\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_M2\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_M2\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo ("<td>
												<form method=\"GET\" action=\"\">
												<radiogroup name=\"F12_J2\"></br> 
													<input type=\"radio\" name=\"presence_M2\" value=\"present\" />Présent 
													<input type=\"radio\" name=\"presence_M2\" value=\"retard\" />Retard
													<input type=\"radio\" name=\"presence_M2\" value=\"absent\" checked />Absent </br>
												</radiogroup>
												</form>
												</td>");
											echo "<td> <input type=\"textarea\" placeholder=\"Commentaires\" rows=\"2\" cols=\"200\" style=\"width:500px\" </td>";
											echo "</tr>";
										}
										("
							</tbody>
							</table>

						");
					break;
			}
		}

		?>		

		</form>					
</body>
</html>