<?php
session_start();
if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
	unset($_SESSION['usuario']);
	unset($_SESSION['senha']);
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BARBEARIA</title>
    <link rel="stylesheet" href="aba_adm.css">
</head>
<body>
    <img src="./logo.png"></img>
    <div class="botoes">
        <a href="login.php">CANCELAR AGENDAMENTO</a>
        <br><br>
        <a href="cadastro.php">CADASTRAR BARBEIRO</a>
        <br><br>
        <a href="login.php">VER AGENDAMENTOS</a>
        <br><br>
        <a href="login.php">AGENDAR</a>
        <br><br>
        <a href="sair.php">sair</a>
    </div>
</body>
</html>