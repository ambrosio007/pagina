<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="stylle.css">
</head>
<body>

<main>
    <div class="imc_cal">
       
        <form method="post" action="">

            <h2>Calculadora de IMC</h2>

            <div class="inp-single">

            <input type="number" class="inp" id="id-peso" name="peso" step="any" required>
            <label for="id-peso">peso</label>

            </div>

            <div class="inp-single">

            <input type="number" class="inp" id="id-altura" name="altura" step="any" required>
            <label for="id-altura">altura</label>

            </div>
           
            <div class="inp-single">

            <input type="submit" name="calcular" value="Calcular IMC">

            </div>
            <br> <br>
            <?php
        if (isset($_POST['calcular'])) {
            $peso = floatval($_POST['peso']);
            $altura = floatval($_POST['altura']);
            $imc = $peso / ($altura * $altura);
            echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";
        }
        ?>

        </form>


    </div>
</main>

</body>
</html>