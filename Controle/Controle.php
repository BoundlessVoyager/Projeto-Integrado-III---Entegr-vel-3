<?php
    require_once("Conect.php");
    
    class ControleUsuario{
        
        //Seleciona uma pessoa específica

        function dados($email){
            try{
                $conexao = new Conexao();   
                $cmd = $conexao->getConexao()->prepare("SELECT idUser, nome, data_de_nascimento, genero, telefone, email FROM usuarios WHERE email=:e;");
                $cmd->bindParam(":e", $email);
                $cmd->execute();
                $resultado = $cmd->fetch(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }

        
        //Atualiza a tabela

        function atualizar($usuario){
            try{
                $conexao = new Conexao();
                $id = $usuario->getId();
                $nome = $usuario->getNome();
                $data_de_nascimento = $usuario->getData_de_nascimento();
                $genero = $usuario->getGenero();
                $telefone = $usuario->getTelefone();
                $email = $usuario->getEmail();
                $cmd = $conexao->getConexao()->prepare("UPDATE usuarios SET nome = :n, data_de_nascimento = :d, genero = :g, telefone = :t, email = :e WHERE idUser=:id;");
                $cmd->bindParam("id", $id);
                $cmd->bindParam("n", $nome);
                $cmd->bindParam("d", $data_de_nascimento);
                $cmd->bindParam("g", $genero);
                $cmd->bindParam("t", $telefone);   
                $cmd->bindParam("e", $email);           
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
        }


        //Verifica se existe na tabela

        function verificar($usuario){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM usuarios WHERE email = :e && senha = :s;");
                $email = $usuario->getEmail();
                $senha = hash("sha512", $usuario->getSenha());
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


        // Função para apagar sessões
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


        // Agendar consulta
        function agendar($agenda){
            try{
                $con = new Conexao();   
                $cmd = $con->getConexao()->prepare("INSERT INTO agenda (idUser, medico, especialidade, data_da_consulta, forma_de_consulta, motivo) VALUES(:iu, :md, :e, :d, :f, :mt);");

                $idUser = $agenda->getIdUser();
                $medico = $agenda->getMedico();
                $especialidade = $agenda->getEspecialidade();
                $data_da_consulta = $agenda->getData_da_consulta();
                $forma_de_consulta = $agenda->getForma_de_consulta();
                $motivo = $agenda->getMotivo();

                $cmd->bindParam("iu", $idUser);
                $cmd->bindParam("md", $medico);
                $cmd->bindParam("e", $especialidade);
                $cmd->bindParam("d", $data_da_consulta);
                $cmd->bindParam("f", $forma_de_consulta);
                $cmd->bindParam("mt", $motivo);
                if($cmd->execute()){
                    $con->fecharConexao();
                    return true;
                }else{
                    $con->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }

        //Seleciona toda tabela

        function agenda($idUser){
            try{
                $con = new Conexao();
                $cmd = $con->getConexao()->prepare("SELECT * FROM agenda WHERE idUser=:iu;");
                $cmd->bindParam("ui", $idUser);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }


    }
?>
