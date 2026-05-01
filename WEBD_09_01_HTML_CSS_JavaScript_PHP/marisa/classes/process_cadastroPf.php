<?php
    $nome = $_POST['nome'];
    $nasc = $_POST['nasc'];
    $cpf = $_POST['cpf'];
    $genero = $_POST['genero'];
    $ddd_cel = $_POST['ddd_cel'];
    $cel = $_POST['cel'];
    $ddd_tel = $_POST['ddd_tel'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $token = $_POST['token'];
    $senha = $_POST['senha'];
    echo $nome."/".$nasc."/".$cpf."/".$genero."/".$ddd_cel."/".$cel."/".$ddd_tel."/".$tel."/".$email."/".$token."/".$senha;
?>