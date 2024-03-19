<?php
    //session_start();
	require_once('Controle.php');
	require_once('../Modelo/Usuario.php');
	try{
        $usuario = new Usuario();
        $usuario->setUsuario($_POST['usuario']);
        $usuario->setSenha($_POST['senha']);
        $control = new ControleUsuario();
        if($control->verificar($usuario)){
            $_SESSION['Pdo'] = $control->buscarDados($usuario);
            $_SESSION['login'] = $_POST['usuario'];
            header("Location: ../Pdo_aqui.php");
        }else{
        	echo "<script>alert('Erro na verificação!'); history.back();</script>";
        }
    }catch(Exception $e){
        echo "Erro: $e->getMessage()";
    }
?>