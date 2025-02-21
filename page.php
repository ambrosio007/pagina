<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="stylle.css"></script>
    <link rel="stylesheet" href="stylle.css">
    <title>Document</title>
</head>
<body>
    <div class="container_resul">
        <form action="form_fun.php" method="$_POST">
            <h1>Cadastre-se</h1>
            <p>Preencha todos os campos</p>

            <div class="inp-single">
                <input type="text" class="inp" name="nombre" id="id_name" autocomplete="off" required>
                <label for="id_name">Nome completo</label>
                </div>

            <div class="inp-single">
                <input type="number" class="inp" name="num_tel" id="id_num" autocomplete="off" required>
                <label for="id_num">Número para contato</label>
            </div>

            <input type="date" class="inp_dma" name="dma" id="id_dma" required>
            
            <div class="inp-single">
                <input type="email" class="inp" name="email" id="id_email" autocomplete="off" required>
                <label for="id_email">E-mail</label>
            </div>

            <div class="inp-single">
                <input type="password" class="inp" name="senha" id="id_senha" autocomplete="off" required>
                <label for="id_senha">Senha</label>
            </div> 

                <input type="file" name="file" class="btn_arq" >
                <br><br>
                <input type="submit" class="btn_sub" name="sub_env">
            </div>

        </form>
    </div>

    <div class="data_h">
            <?php

            date_default_timezone_set('America/Sao_Paulo');
            echo date('d/m/Y H:i'); 
         
            ?>
        </div>

</body>
</html>