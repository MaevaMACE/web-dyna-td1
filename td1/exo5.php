<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
			<form method='POST'>
				<label for($l=1;$l<$nbLignes;$l++)>lignes</label>
				<input id="nbLignes" name="nbLignes"></input>
				<label for($c=1;$c<$nbColonnes;$c++){>colonnes</label>
				<input id="nbColonnes" name="nbColonnes"></input>
				<input type="submit" value="Valider">
			</form>
	<?php
		include('function.php');
		echo createHtmlTable($_POST['nbLignes'],$_POST['nbColonnes']);
	?>
</body>
</html>