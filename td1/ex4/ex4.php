<!DOCTYPE html>
<html>
<head>
    <title>exercice 4</title>
</head>
<body>
    <a href="?nblignes=2&Colonnes=2">2x2</a>
    <a href="?nblignes=5&Colonnes=5">5x5</a>
    <a href="?nblignes=10&Colonnes=8">10x8</a>
    <?php
    echo "<table border='1'>
    <tbody>";
    for($l=0;$l<=$_GET["nblignes"];$l++){

        if (($l % 2) == 0){
            $gras = "bold";
        }
        echo "<tr>"; 
        for($c=0;$c<=$_GET["nbColonnes"];$c++){ 
            echo "<td align='center'><p style='font-weight: bold;'>$l-$c</p></td>"; 
        } 
        echo "</tr>"; 
    } 
    echo "</tbody>
    </table>";
    ?>
</body>
</html>