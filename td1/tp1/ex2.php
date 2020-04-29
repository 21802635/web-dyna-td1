<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ex3</title>
</head>

<form method="GET">
<label for="color">Color :</label>
<input type="color" id="colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" name="Color">
<label for="size">Size :</label>
<input type="number" value="" name="size" id="size">
<label for="contenue">Contenu du message :</label>
<input type="text" value="" name="message" id="message">
<input type="submit" value="Valider">
</form>

<body>
  <a href="?Color=%23ff0000&size=15&message=Message1">Message 1</a>
  <a href="?Color=%2300ff00&size=30&message=Message2">Message 2</a>
  <a href="?Color=%230000ff&size=45&message=Message3">Message 3</a>
  <a href="?&message=Sans couleurs">Sans couleur sans size</a>
  <?php
  if (empty($_GET)) {
    echo "Erreur ! Veuillez entrer des paramètres";
  }
  if (empty($_GET["size"] and $_GET["Color"])) {
    echo "<div style='font-size: 12px; color: black'>{$_GET["message"]}</div>";
  }
  else {
    echo "<div style='font-size: {$_GET["size"]}px; color: {$_GET["Color"]}'>{$_GET["message"]}</div>";
  }
  ?>
</body>
=======
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ex2</title>
</head>

<form method="GET">
<label for="color">Color :</label>
<input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="#ff0000" name="Color">
<label for="size">Size :</label>
<input type="number" value="" name="size" id="size">
<label for="contenue">Contenue du message</label>
<input type="text" value="" name="message" id="message">
<input type="submit" value="Valider">
</form>

<body>
  <a href="?Color=%23ff0000&size=15&message=Message1">Message 1</a>
  <a href="?Color=%2300ff00&size=30&message=Message2">Message 2</a>
  <a href="?Color=%230000ff&size=45&message=Message3">Message 3</a>
  <a href="?&message=Sans couleurs">Sans couleur sans size</a>
  <?php
  if (empty($_GET)) {
    echo "Erreur ! Veuillez entrer des paramètres";
  }
  if (empty($_GET["size"] and $_GET["Color"])) {
    echo "<div style='font-size: 12px; color: black'>{$_GET["message"]}</div>";
  }
  else {
    echo "<div style='font-size: {$_GET["size"]}px; color: {$_GET["Color"]}'>{$_GET["message"]}</div>";
  }
  ?>
</body>
>>>>>>> 36b12ee9b2df88d7d14d08c119071c9c6ed7b82a
</html>