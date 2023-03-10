<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){ // inicio processo de login e verifica se existe email e senha 

    if(strlen($_POST['email']) == 0){ // verifica se a qtd de caracteres é igual a zero 
        echo "preencha seu email";
    }else if(strlen($_POST['senha']) == 0) {
        echo "preencha sua senha";
    }else{
        $email =  $mysqli->real_escape_string($_POST['email']);  // limpa os campos com a função real_scape_string
        $senha =  $mysqli->real_escape_string($_POST['senha']);  
       
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha ='$senha'"; // faz a consulta para listar email e senha 
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows; // retorna quantas linhas a consulta retornou

        if($quantidade ==1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header('Location: index.php');
        }else {
            echo "Falha ao logar";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anamnese Projeto</title>
    <link rel="stylesheet" href="login.css">
</head>
<body style="background-color: #ebeff3;">
    <!-- cabecalho  -->
        <header>
            <h1>ficha de anamnese</h1>
        </header>
        <!-- conteudo principal -->
        
        <form class="box" action="" method="POST">
               <h1>Login</h1>
               <div class="neighbor">
                   <p> <b>Email</b> </p>
                   <input type="text" name="email" placeholder="" id="text1">
               </div>
               <div class="neighbor">
                <p> <b>Senha</b> </p>
                <input type="password" name="senha" placeholder="" id="text1">
            </div>
               <!-- <input type="submit" name="" value="ACESSAR">        -->
               <div> <br>
                            <button class="btn" type="submit"><b> Enviar</b> </button>
                        </div>
       </form><br>
        <!-- Rodapé  -->
        <footer>
            <p>Site criado por <a href="https://github.com/JoaoSald" target="_blank">João Saldanha</a></p>
        </footer>
</body>
</html>