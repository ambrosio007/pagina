<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/IMC.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <title>Calculadora de IMC</title>

</head>
<body>

<header class="header">

    <a href="home.html" class="logo"><i class="fa-solid fa-dumbbell"></i>LAB 7</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="home.html">Início</a>
        <a href="#about">Sobre</a>
        <a href="#features">Nossos Serviços</a>
        <a href="IMC.php">IMC</a>
        <a href="#trainers">Treinadores</a>
        <a href="cadastre.html">Cadastre-se</a>
        <a class="date-h" id="data_hora"></a>
    </nav>

</header>

<main>
    <div class="imc_cal">

        <form method="post" class="form">

            <h2>Calculadora de IMC</h2>
            <br>
            <div class="inp-single">

            <input type="number" class="inp" id="id-peso" name="peso" step="any" required>
            <label for="id-peso">peso</label>

            </div>
            <br><br>
            <div class="inp-single">

            <input type="number" class="inp" id="id-altura" name="altura" step="any" required>
            <label for="id-altura">altura</label>

            </div>

            <div class="inp-single">
            <br><br>
            <input class="btn-cal" type="submit" name="calcular" value="Calcular IMC">

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

<footer class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Links rápidos</h3>
                <a class="links" href="#home">Início</a>
                <a class="links" href="#about">Sobre</a>
                <a class="links" href="#features">Características</a>
                <a class="links" href="#pricing">Valores</a>
                <a class="links" href="#trainers">Treinadores</a>
                <a class="links" href="#blogs">blogs</a>
            </div>
            <div class="box">
                <h3>Horário de Funcionamento</h3>
                <p> Segunda : <i> 7:00 - 22:00 </i> </p>
                <p> Terça : <i> 7:00 - 22:00 </i> </p>
                <p> Quarta : <i> 7:00 - 22:00 </i> </p>
                <p> Quinta : <i> 7:00 - 22:00 </i> </p>
                <p> Sexta : <i> 7:00 - 22:00 </i> </p>
                <p> Sábado : <i> 7:00am - 10:30 </i> </p>
                <p> Domingo : <i> Fechado </i> </p>
            </div>
            <div class="box">
                <h3>Nossos Contatos</h3>
                <p> <i class="fas fa-phone"></i> +11 8222-3333 </p>
                <p> <i class="fas fa-envelope"></i> sejafit@gmail.com </p>
                <p> <a href="map.html"><i class="fas fa-map"></i></a> </i> Maceió, Brazil</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                </div>
            </div>
            <div class="box">
                <h3>Novidades</h3>
                <p>Se inscreva para receber as novidades</p>
                <form action="cadastre.html">
                    <input type="submit" value="Cadastre-se" class="btn">
                </form>
                <br>
                <h1 class="date-h" id="data_hora"></h1>
            </div>
        </div>

    </footer>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="fun.js"></script>

</body>

</html>
