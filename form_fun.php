<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">

    <?php

    echo date("d/m/y"); 
 
    ?>
  
    <div class="imc_cal">
                <input type="text" class="inp" name="peso" id="id_peso">
                <label for="id_peso">Peso em Kg</label>
                <br><br>
                <input type="text" class="inp" name="altura" id="id_altura">
                <label for="id_altura">Altura em M</label>
                <br><br>
                <input type="submit" value="calcular IMC">
    </div>



</form>
</body>
</html>