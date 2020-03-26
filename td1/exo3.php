<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>

<body>
	<form method="POST">
		<label for="color">Color :</label>
		<input type="color" id="color" onchange="ClickColor(0, -1, -1, 5)" value="black" name="color">
		<label for="size">Size :</label>
		<input type="number" value="" name="size" id="size">
		<label for="message">message :</label>
		<input type="text" value="" name="message" id="message">
		<input type="submit" value="valider">
	</form>
	
<a href="?size=15&color=red&message=je m'appelle maeva">Message1</a>
<a href="?size=30&color=green&message=je m'appelle maeva">Message 2</a>
<a href="?size=45&color=blue&message=je m'appelle maeva">Message 3</a>

<?php
	if (empty($_POST)) {
		echo "Il y a une erreur dans les paramètres";
	}
	if (empty($_POST["size"] and $_POST["color"])) {
		echo "<div style='font-size': 12px; color: black'>{$_GET["message"]}</div>";
	}
	else{
		echo "<div style='font-size: {$_POST["size"]}px, color: {$_POST["color"]}'>{$_POST["message"]}</div>";
	} 
?>
<div style="font-size: <?php echo $_POST["size"]; ?>px; color: <?php echo $_POST["color"]; ?>"><?php echo $_POST["message"]; ?></div>

</body>
</html>