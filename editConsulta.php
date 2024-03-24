<?php
    require_once("Controle/DadosUsuario.php");
    require_once("Controle/Agenda.php");
    //echo $agenda[intval($_GET['idAgenda'])-1]['medico'];
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style_formulario_medico.css" />
  </head>
  <body>
    <header>
      <div class="container-header">
        <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="Logo Vitalis" /></a>
          <h1 class="titulo-website">Vitalis</h1>
        </div>
      </div>
    </header>

    <div class="titulo-form">
      <h1>Formulário de Agendamento</h1>
    </div>

    <div class="container">
      <form action="Controle/EditConsulta.php" method="POST" class="container-form">
        <span id="data">Informações da consulta</span>

        <div class="form">
          <label for="">Medico(a):</label>
          <input type="text" name="medico" value="<?php echo $agenda[$_GET['idAgenda']]['medico'];?>" class="size-input" required />
        </div>

        <div class="form">
          <label for="">Especialidade:</label>
          <input type="text" name="especialidade" value="<?php echo $agenda[$_GET['idAgenda']]['especialidade'];?>" class="size-input" required />
        </div>

        <div class="form">
          <label for="">Data da consulta:</label>
          <input
            type="date"
            name="data_da_consulta"
            class="size-input"
            placeholder="(dd/mm/aaaa)"
            value="<?php echo $agenda[$_GET['idAgenda']]['data_da_consulta'];?>"
            required
          />
        </div>

        <div class="form">
          <label for="">Forma de consulta:</label>
          <select name="forma_de_consulta">
            <option value="masculino">Presencial</option>
            <option value="feminino">Remota</option>
          </select>
        </div>

        <div class="form-motivo">
          <label for="">Motivo da consulta:</label>
          <textarea 
          name="motivo" 
          class="size-input-motive" 
          value="<?php echo $agenda[$_GET['idAgenda']]['motivo'];?>"
          ></textarea>
          
        </div>

        <div class="buttons">
          <a href="minhasConsultas.php" class="button" id="button-canc">Cancelar</a>

          <input type="hidden" name="id" value="<?php echo $agenda[$_GET['idAgenda']]['idAgenda']; ?>">
          <input type='submit' class="button" id="button-prox" value="Alterar">
        </div>

      </form>
    </div>

    

  </body>
</html>
