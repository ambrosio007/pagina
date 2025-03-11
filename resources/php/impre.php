<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style-i.css">
    <title>Dados do cadastro</title>
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

    <div class="container">
        <form class="form">
                <div class="box_inf">            
                
                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nome = htmlspecialchars($_POST['nome']);
                    $num = htmlspecialchars($_POST['num_tel']);
                    $date = htmlspecialchars($_POST['dma']);
                    $email = htmlspecialchars($_POST['email']);
                    $senha = htmlspecialchars($_POST['senha']);

                    echo "<h2>Dados Enviados</h2>";
                    echo "<p><strong>Nome :</strong>$nome</p>";
                    echo "<p><strong>Número de Tel :</strong>$num</p>";
                    echo "<p><strong>Data de Nascimento : </strong>$date</p>";
                    echo "<p><strong>E-mail :</strong>$email</p>";
                    echo "<p><strong>Senha :</strong>$senha</p>";
                } else {
                    header("Location : cadastre.html");
                    exit();
                }


                ?>

                <?php
                    
                $folder = __DIR__ ."/uploads/";

                if(!file_exists($folder) || !is_dir($folder)){
                    mkdir($folder, 0755);
                }
                
                $getPost = filter_input(INPUT_GET, "post", FILTER_VALIDATE_BOOLEAN);
                    

                if($_FILES && !empty($_FILES['file']['name'])){
                    $fileUpload = $_FILES['file'];
                        
                    $allowebTypes = [
                        "image/jpeg",
                        "image/png",
                        "application/pdf"
                    ];
                    
                }elseif ( $getPost){
                    echo "<p class='trigger waring'>Não temte eviar o Examon</p>";
                } else{
                    if($_FILES){
                        echo "<p class='trigger waring'>Selecione um arquivo para ser enviado!</p>";
                    }
                };
                    
                ?>

            </div>
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
                <p> <i class="fas fa-map"></i> Florianópolis, Brazil</p>
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

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="fun.js"></script>

</html>