<?php
$error="";
foreach ($_POST as $campo => $valor) {
    if(empty($valor)) $error=$error . "el campo: $campo no tiene valor <br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$error?></p>
</body>
</html>

