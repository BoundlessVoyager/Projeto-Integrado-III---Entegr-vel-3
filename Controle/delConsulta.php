<?php
	session_start();
    
    require_once("Controle.php");
    $controle = new ControleUsuario();

    $idAgenda = intval($_GET['idAgenda']);

    if($controle->deletarConsulta($idAgenda)){
        $_SESSION['deletou'] = "Consulta cancelada com sucesso!";
        header("Location: ../minhasConsultas.php");
    }else{
        //die();
        echo "ERRoR";
    }
?>