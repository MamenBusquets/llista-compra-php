<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Llista_Compra.css">
    <title>Llista de la compra </title>
</head>
<body>
    <h2> Llista de la compra</h2>
    <form method="post" action=" ">
        <label>
            <input type="checkbox" name="productes[]" value="Pa"> Pa <img src="..\llista_compra\pan1.jpg">
        </label> <br>

        <label>
            <input type="checkbox" name="productes[]" value="Ous"> Ous <img src="..\llista_compra\huevos.jpg">
        </label> <br>

        <label>
            <input type="checkbox" name="productes[]" value="Formatge"> Formatge <img src="..\llista_compra\queso.jpg">
        </label> <br>

        <label>
            <input type="checkbox" name="productes[]" value="Sucre"> Sucre <img src="..\llista_compra\azucar.jpg">
        </label> <br>

        <label>
            <input type="checkbox" name="productes[]" value="Detergent"> Detergent <img src="..\llista_compra\detergente.jpg">
        </label> <br>

        <label>
            <input type="checkbox" name="productes[]" value="Sabó"> Sabó <img src="..\llista_compra\jabon.jpg">
        </label> <br>

        <label>
            <input type="checkbox" name="productes[]" value="Dentrífic"> Dentífric <img src="..\llista_compra\dentifrico.jpg">
        </label> <br>

        <label>
            <input type="checkbox" name="productes[]" value="Carn"> Carn <img src="..\llista_compra\carne.jpg">
        </label> <br>

        <label>
            <input type="checkbox" name="productes[]" value="Maduixa"> Maduixa <img src="..\llista_compra\fresa.jpg">
        </label> <br>

        <label>
            <input type="checkbox" name="productes[]" value="Plàtan"> Plàtan <img src="..\llista_compra\platano.jpg">
        </label> <br>

        <button type="submit">Afegir a la llista</button> <br>

       </form>

<?php
    if (isset($_POST['productes'])) {
        echo "<ul>";
        foreach ($_POST['productes'] as $prod) {
        echo "<li>$prod</li>";
        echo "<hr>";
    }
        echo "</ul>";
    } else {
        echo "<p>No has seleccionat cap producte.</p>";
}
?>
</body>
</html>