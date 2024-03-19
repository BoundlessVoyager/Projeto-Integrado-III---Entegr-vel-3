<?php
	session_start();
	require_once('Controle.php');
	$c = new ControleUsuario;
	if(!$c->sair()) echo "Erro";
?>