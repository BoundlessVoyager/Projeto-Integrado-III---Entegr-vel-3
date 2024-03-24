<?php
	require_once('Controle.php');
	require_once('../Modelo/Agenda.php');
        
	try{
        $agenda = new Agenda();
        $agenda->setMedico($_POST['medico']);
        $agenda->setEspecialidade($_POST['especialidade']);
        $agenda->setData_da_consulta($_POST['data_da_consulta']);
        $agenda->setForma_de_consulta($_POST['forma_de_consulta']);
        $agenda->setMotivo($_POST['motivo']);
        $agenda->setIdUser($_POST['id']);
        
        $control = new ControleUsuario();
        if($control->agendar($agenda)){
            header("Location: ../formulario_dadospessoais.php");
        }else{
            echo "<h1>Error</h1>";
        }
        

    }catch(Exception $e){
        echo "Erro: $e->getMessage()";
    }
?>