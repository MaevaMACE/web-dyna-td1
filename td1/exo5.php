<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
			<form method='POST'>
				<label for="ligne">lignes</label>
				<input id="nbLignes" name="nbLignes"></input>
				<label for="contenue">colonnes</label>
				<input id="nbColonnes" name="nbColonnes"></input>
				<input type="submit" value="Valider">
			</form>
	<?php
		include('function.php');
		echo createHtmlTable($_POST['nbColonnes']-1,$_POST['nbLignes']-1);
	?>
</body>
</html>