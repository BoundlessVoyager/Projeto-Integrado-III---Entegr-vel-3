<?php
    session_start();

	require_once('Controle.php');
	require_once('../Modelo/Usuario.php');
    //require_once('DadosUsuario.php');
        
	try{
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setData_de_nascimento($_POST['data_de_nascimento']);
        $usuario->setGenero($_POST['genero']);
        $usuario->setTelefone($_POST['telefone']);
        $usuario->setEmail($_POST['email']);
        $usuario->setId($_POST['id']);
        
        
        $control = new ControleUsuario();
        if($control->atualizar($usuario)){
            $_SESSION['login'] = $_POST['email'];
            header("Location: ../agendamento2.php");
        }else{
            echo "<h1>Error</h1>";
        }
        

    }catch(Exception $e){
        echo "Erro: $e->getMessage()";
    }
?>