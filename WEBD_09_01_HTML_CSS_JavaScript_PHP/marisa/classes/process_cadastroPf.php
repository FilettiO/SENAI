<?php
    require_once("../conexao/conexao.php");
    require_once("../classes/class_cadastros.php");
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
    
    $cadastra = new cadastraUsuarioPf($nome, $nasc, $cpf, $genero, $ddd_cel, $cel, $ddd_tel, $tel, $email, $token, $senha);

    if($cadastra->error){
        echo "Ocorreu um erro ao cadastrar o usuário! ERRO: ".$cadastra->error;
    }else{
        echo "Cadastro realizado com sucesso!";
    }
    
    //echo $nome."/".$nasc."/".$cpf."/".$genero."/".$ddd_cel."/".$cel."/".$ddd_tel."/".$tel."/".$email."/".$token."/".$senha;
?>