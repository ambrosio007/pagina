<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="stylle.css"></script>
    <link rel="stylesheet" href="stylle.css">
    <title>Document</title>

    <style>

    </style>

</head>
<body>

<main>

<form>

    <?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
    $nome = htmlspecialchars($_POST['nome']);
    $num_tel = htmlspecialchars($_POST['num_tel']);
    $date = htmlspecialchars($_POST['dma']);
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);

    echo "<p><strong>Nome completo:</strong> $nome</p>";
    echo "<p><strong>Número para contato:</strong> $num_tel</p>";
    echo "<p><strong>Data de nascimento:</strong> $date</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Senha:</strong> $senha</p>";

    }else {
        header("Location: page.php");
        exit();
    }
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

    </main>

    

</form>
</body>
</html>