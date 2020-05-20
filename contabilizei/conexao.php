<?php
class conexao{
    public function conectaDB()
    {
        $Servidor = "localhost";
        $Usuario = "root";
        $Senha = "";
        $DBName = "CONTABILIZEI";
        try{
            $Con = mysqli_connect("$Servidor", "$Usuario", "$Senha", "$DBName");
            return $Con;
        }catch (Exception $Erro){
            return $Erro->getMessage();
        }
    }
}