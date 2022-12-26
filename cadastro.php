<?php 
include('conexao.php');
if(isset($_POST['email']) == 0){
    echo '';
}else if(strlen($_POST['firstsenha']) <= 8){
    echo '';
}else if(strlen($_POST['nome']) <= 2){
    echo '';
}else if($_POST['firstsenha'] != $_POST['secondsenha'] ){
    echo '';
}else{
    $email = $mysqli->real_escape_string($_POST['email']);
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " .$mysqli->error); 
    $quantidade = $sql_query->num_rows;
    if($quantidade == 0){
        $email = $_POST['email'];
        function valida_email($email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
        if(valida_email($email)){
            $nome = $mysqli->real_escape_string($_POST['nome']);
            $nome = ucwords($nome);
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['firstsenha']);
            $sql_code = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha')";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " .$mysqli->error);
            header('Location: index.php');
        }else{
            echo '';
        }
    }else{
        header('Location: erro.php');
    }  
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" href="img/login.png" type="image/x-icon">
    <title>Acesse sua conta</title>
</head>
<body>
    <form class="box" action="" method="POST">
        <h1>Cadastro</h1>
        <input type="text" name="nome" placeholder="Seu nome" class="nomeInput">
        <p class="warning nomeWarning"></p>
        <input type="email" name="email" placeholder="E-mail" class="emailInput">
        <p class="warning emailWarning"></p>
        <input type="password" name="firstsenha" placeholder="Senha (mínimo 9 caracteres)" class="passInput">
        <p class="warning senhaVaziaWarning"></p>
        <input type="password" name="secondsenha" placeholder="Repita a senha" class="secondPassInput">
        <p class="warning senhasDiferentesWarning"></p>
        <button type="submit" class="submit">Cadastrar</button>
    </form>
    <script src="javascript/script.js" type="module"></script>
</body>
</html>