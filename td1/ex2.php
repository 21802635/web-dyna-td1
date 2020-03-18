<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
<a href="?Color=%2300FF00&size=15&message=Message">Message 1</a>
<a href="?Color=%23ff0000&size=30&message=Message">Message 2</a>
<a href="?Color=%230000FF&size=45&message=Message">Message 3</a>
    <?php
    echo "<div style='font-size: {$_GET["size"]}px; color: {$_GET["Color"]}'>{$_GET["message"]}</div>";
    ?>
</body>
</html>