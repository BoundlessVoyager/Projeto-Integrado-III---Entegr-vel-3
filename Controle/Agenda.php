<?php
    $controle = new ControleUsuario();
    $agenda = $controle->agenda($dados['idUser']);

    $cnt = count($agenda);
?>