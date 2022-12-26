<?php 
include('conexao.php');
$loginError = '';
if(isset($_POST['email']) == 0){
    echo '';
}else if(strlen($_POST['senha']) == 0){
    echo '';
}else{
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " .$mysqli->error);
    $quantidade = $sql_query->num_rows;
    if($quantidade == 1){
        $usuario = $sql_query->fetch_assoc();
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['email'] = $usuario['email'];
        header("Location: painel.php");
    }else{
        $loginError = 'Falha ao logar! E-mail ou senha incorretos';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/login.png" type="image/x-icon">
    <title>Acesse sua conta</title>
</head>
<body>
    <form class="box" action="" method="POST">
        <h1>Login</h1>
        <input type="email" name="email" placeholder="E-mail" class="emailInput">
        <p class="warning mail"></p>
        <input type="password" name="senha" placeholder="Senha" class="passInput">
        <p class="warning pass"></p>
        <button type="submit" class="submit">Login</button>
        <p class="warning"><?=$loginError;?></p>
        <p class="cadastro">Não possui uma conta? <a href="cadastro.php">Cadastre-se</a></p>
    </form>
    <script src="javascript/script.js" type="module"></script>
</body>
</html>