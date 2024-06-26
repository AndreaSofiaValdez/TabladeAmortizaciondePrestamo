<?php
require_once "lib.php";
$txtTexto = '';

if (isset($_POST["btnAnalizar"])) {
    $txtTexto = $_POST["txtTexto"];
    echo $txtTexto;
    echo '<hr/>';
    echo "<h2>Números de cuenta analizados en el texto:</h2>";
    $numCuenta = (extraernumerodecuentaporExpresionRegular($txtTexto));
    print_r($numCuenta);
    echo "<ul>";
    foreach ($numCuenta as $numCuenta) {
        echo "<li>$numCuenta</li>";
    }
    echo "</ul>";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Cuentas</title>
</head>

<body>
    <h1>Analizador de Cuentas</h1>
    <form action="form.php" method="post">
        <label for="txtTexto">Ingrese el texto a analizar</label>
        <textarea name="txtTexto" id="txtTexto"><?php echo $txtTexto; ?></textarea><br>
        <br />
        <button type="submit" name="btnAnalizar">Analizar</button>
    </form>
</body>

</html>