<!DOCTYPE html>
<html>
<head>
    <title>ex4</title>
</head>
<body>
    <a href="?ligne=2&Colonne=2">2x2</a>
    <a href="?ligne=5&Colonne=5">5x5</a>
    <a href="?ligne=10&Colonne=8">10x8</a>

    <?php
    echo "<table border='1'>
    <tbody>";
    for($l=0;$l<=$_GET["ligne"];$l++){
       if (($l % 2) == 0){
            $gras = "bold";
        }
       echo "<tr>"; 
    for($c=0;$c<=$_GET["Colonne"];$c++){ 
        echo "<td align='center'><p style='font-weight: bold;'>$l-$c</p></td>"; 
        } 
       echo "</tr>"; 
    } 
		echo "</tbody>
			</table>";
    ?>
</body>
</html>