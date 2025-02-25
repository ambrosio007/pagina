<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-imc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script defer src="fun.js"></script>
    <title>Calculadora de IMC</title>

</head>
<body>

<header class="nav-bar">
        <div id="mobile-btn" class="fas fa-bar"> </div>

        <a href="home.html" class="logo"><i class="fa-solid fa-dumbbell" id="nav-log" href="home.html"></i>Lab 7</a>
        
        <nav class="nav">
                

                    <a href="home.html">Inicio</a>                           
                    <a href="IMC.php">IMC</a>                          
                    <a href="cadastre.html">Cadastre-se</a>             
                    <a href="#projetos">Projetos</a>

        </nav>

</header>


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