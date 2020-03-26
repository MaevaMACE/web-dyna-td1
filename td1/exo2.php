<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
<a href="exo2.php?size=15&color=red&message=je m'appelle maeva">Message 1</a>
<a href="exo2.php?size=30&color=green&message=je m'appelle maeva">Message 2</a>
<a href="exo2.php?size=45&color=blue&message=je m'appelle maeva">Message 3</a>

<?php
if(!isset($_GET['size']) AND !isset($_GET['color'])){
		$_GET['size']=17;
		$_GET['color']="black";
}

?>
<div style="font-size: <?php echo $_GET["size"]; ?>px; color: <?php echo $_GET["color"]; ?>"><?php echo $_GET["message"]; ?></div>

</body>
</html>