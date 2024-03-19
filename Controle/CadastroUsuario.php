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
            //$_SESSION['Pdo'] = $control->buscarDados($usuario);
            //$_SESSION['login'] = $_POST['usuario'];
            //header("Location: ../Pdo_aqui.php");
            $_SESSION['cadastro'] = "Cadastro realizado com sucesso!!!";
            header("Location: ../cadastro.php");
        }else{
            $_SESSION['cadastro'] = "Usuário já existe na base de dados.";
            header("Location: ../cadastro.php");
        }
        
    }catch(Exception $e){
        echo "Erro: $e->getMessage()";
    }
?>