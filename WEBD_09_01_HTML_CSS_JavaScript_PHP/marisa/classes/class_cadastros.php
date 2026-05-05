<?php
    class cadastraUsuarioPf extends conexao{
        function __construct($nome, $nasc, $cpf, $genero, $ddd_cel, $cel, $ddd_tel, $tel, $email, $token, $senha){
            parent:: conection();
            $this -> sql ="INSERT INTO usuario_pf(nome, dtnasc, cpf, genero, dd1, cel, dd2, tel, email, token, senha) VALUES('$nome', '$nasc', '$cpf', '$genero', '$ddd_cel', '$cel', '$ddd_tel', '$tel', '$email', '$token', '$senha')";
            $this -> executa = mysqli_query($this -> conectar, $this -> sql);
            $this -> error = mysqli_error($this -> conectar);
        }
    }
?>