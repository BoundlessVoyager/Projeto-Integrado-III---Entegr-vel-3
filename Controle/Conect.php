<?php
class Conexao{
    private $conexao;
    function __construct(){
        $host = "localhost"; // Onde o SGBD está?
        $user =  "root"; // Quem irá conectar?
        $pwd = ""; // Senha do usuário
        $bd = "consultorio"; // Base de dados usada
        try{
            $this->setConexao(new PDO("mysql:host={$host};dbname={$bd}",$user,$pwd));
            $this->getConexao()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            echo "<p>Erro em PDO: {$ex->getMessage()}</p>";
        }catch(Exception $ex){
            echo "<p>Erro geral do sistema: {$ex->getMessage()}</p>";
        }
    }
    function fecharConexao(){
        $this->conexao = NULL;
    }
    function getConexao(){ // Retorna conexão ativa
       return $this->conexao;
    }
    function setConexao($data){ // Define a conexão
        $this->conexao = $data;
    }
}
?>
