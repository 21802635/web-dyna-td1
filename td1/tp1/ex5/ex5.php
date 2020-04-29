<<<<<<< HEAD
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercice 5</title>
	</head>
	<body>
	<?php
	include("fontions.php");
	?>
	
	<h1> Créer un tableau :</h1>
	
	<form method="POST" >
		<label for="l">Lignes : </label>
		<input type="number" value="" name="l">
		<label for="c">Colonnes : </label>
		<input type="number" value="" name="c">
		<input type="submit" value="Création du tableau">
	</form>
	<br>
	  
	<?php
		$nbLignes=$_POST["l"]??10;
		$nbColonnes=$_POST["c"]??10;
		createHtmlTables($nbLignes,$nbColonnes);
	?>
	
	
	
	</body>
=======
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Exercice 5</title>
	</head>
	<body>
	<?php
	include("fontions.php");
	?>
	
	<h1> Créer un tableau :</h1>
	
	<form method="POST" >
		<label for="l">Lignes : </label>
		<input type="number" value="" name="l">
		<label for="c">Colonnes : </label>
		<input type="number" value="" name="c">
		<input type="submit" value="Création du tableau">
	</form>
	<br>
	  
	<?php
		$nbLignes=$_POST["l"]??10;
		$nbColonnes=$_POST["c"]??10;
		createHtmlTables($nbLignes,$nbColonnes);
	?>
	
	
	
	</body>
>>>>>>> 36b12ee9b2df88d7d14d08c119071c9c6ed7b82a
</html>