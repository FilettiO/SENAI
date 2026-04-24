<?php
    class selecionaEstados extends conexao{
        function __construct(){
            parent:: conection();
            $this -> sql = "SELECT * FROM estados_brasil";
            $this -> executa = mysqli_query($this -> conectar, $this -> sql);
        }
    }
?>