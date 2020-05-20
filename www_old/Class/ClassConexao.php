<?php

    public class ClassConexao {

        #Realizará a conexão com o banco de dados
        protected function conectaDB()
        {
            try{                
                $Con=new PDO("mysql:host=localhost;dbname=phpbotstrap","root", "")
            }catch (PDOException $Erro) {
                return $Erro->getMessage();
            }
        }





    }


    ?>