<?php
    session_start();

	require_once('Controle.php');
	require_once('../Modelo/Usuario.php');
	try{
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha($_POST['senha']);
        
        $control = new ControleUsuario();
        if($control->cadastrarPessoa($usuario)){
            $_SESSION['cadastro'] = "Cadastro realizado com sucesso!!!";
            header("Location: ../login.html");
        }else{
            $_SESSION['cadastro'] = "Usuário já existe na base de dados.";
            header("Location: ../cadastro.html");
        }
        

    }catch(Exception $e){
        echo "Erro: $e->getMessage()";
    }
?>