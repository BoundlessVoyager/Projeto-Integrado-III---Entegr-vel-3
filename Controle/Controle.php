<?php
    require_once("Conect.php");
    //require_once("Modelo/Usuario.php");
    class ControleUsuario{

        //Seleciona toda tabela

        /*function selecionarTodos(){
            try{
                $con = new Conexao();
                $cmd = $con->getConexao()->prepare("SELECT * FROM usuarios;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }*/

        //Seleciona uma pessoa específica

        /*function selecionarPid($id){
            try{
                $conexao = new Conexao();   
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuario WHERE id=:id;");
                $cmd->bindParam("id", $id);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }*/

        
        //Atualiza a tabela

        /*function atualizar($id, $usuario){
            try{
                $conexao = new Conexao();
                $nome = $usuario->getNome();
                $user = $usuario->getUsuario();
                $email = $usuario->getEmail();
                $telefone = $usuario->getTelefone();
                $senha = $usuario->getSenha();
                $cmd = $conexao->getConexao()->prepare("UPDATE usuario SET nome = :n, usuario = :u, email = :e, telefone = :t,senha = :s WHERE id=:id;");
                $cmd->bindParam("id", $id);
                $cmd->bindParam("n", $nome);
                $cmd->bindParam("u", $user);
                $cmd->bindParam("e", $email);
                $cmd->bindParam("t", $telefone);
                $cmd->bindParam("s", md5($senha));              
                if($cmd->execute()){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
	            }
        }*/


        //Retorna a tabela em array

        /*function buscarDados($usuario) {
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT id FROM usuarios WHERE usuario=:usuario;");
                $cmd->bindParam(":usuario",$usuario->getUsuario());
                $cmd->execute();
                $res = $cmd->fetch(PDO::FETCH_ASSOC);
                return $res;
                $conexao->fecharConexao();
            }catch(PDOException $e){
                echo "ERRO do (buscarDados do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (buscarDados) geral:{$e->getMessage()}";
            }
        }*/

        //Verifica se existe na tabela

        function verificar($usuario){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuarios WHERE email = :e && senha = :s;");
                $email = $usuario->getEmail();
                $senha = hash("sha512",$usuario->getSenha());
                $cmd->bindParam(":e", $email);
                $cmd->bindParam(":s", $senha);
                $cmd->execute();
                if($cmd->rowCount() == 1){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "ERRO do (verificar do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (verificar) geral:{$e->getMessage()}";
            }
        }

        //Cadastra pessoas

        function cadastrarPessoa($usuario){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuarios WHERE email = :e;");
                $email = $usuario->getEmail();
                $cmd->bindParam(":e", $email);
                $cmd->execute();
                if($cmd->rowCount() >0 ){
                    $conexao->fecharConexao();
                    return false;
                }else{
                    $cmd = $conexao->getConexao()->prepare("INSERT INTO usuarios (nome,email,senha) VALUES(:n,:e,:s);");
                    $nome = $usuario->getNome();
                    $senha = hash("sha512", $usuario->getSenha());
                    $cmd->bindParam("n", $nome);
                    $cmd->bindParam("e", $email);
                    $cmd->bindParam("s", $senha);
                    if($cmd->execute()){
                            $conexao->fecharConexao();
                            return true;
                    }else{
                            $conexao->fecharConexao();
                            return false;
                    }
                }
            }catch(PDOException $e){
                echo "ERRO do (cadastrarPessoa do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (cadastrarPessoa) geral:{$e->getMessage()}";
            }
        }


        function sair(){
            try{
                session_destroy();
                header("Location: ../Login.php");
            }catch(PDOException $e){
                echo "ERRO do (cadastrarPessoa do) banco:{$e->getMessage()}";
            }catch(Exception $e){
                echo "ERRO (cadastrarPessoa) geral:{$e->getMessage()}";
            }
        }
        /*function agenda($id){
            try{
                $con = new Conexao();   
                $cmd = $con->getConexao()->prepare("SELECT historico.id,livros.nome,livros.genero,livros.valor, pag.pag FROM usuario join historico on usuario.id=historico.idUsuario join livros on livros.id=historico.idlivro join pag on pag.id=historico.idPag WHERE idUsuario=:id;");
                $cmd->bindParam("id", $id);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }*/

    }
?>
