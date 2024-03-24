<?php
    require_once("Controle/DadosUsuario.php");
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

        <div class="progress-bar">
          <div class="progress" id="progress">
            <p id="stepText">1/2</p>
          </div>
        </div>
      </div>
    </header>

    <div class="titulo-form">
      <h1>Formulário de Agendamento</h1>
    </div>

    <div class="container">
      <form action="Controle/DadosAgendamento2.php" method="POST" class="container-form">
        <span id="data">Informações da consulta</span>

        <div class="form">
          <label for="">*Medico(a):</label>
          <input type="text" name="medico" value="<?php if(isset($_GET['medico'])){ echo $_GET['medico']; }?>" class="size-input" required />
        </div>

        <div class="form">
          <label for="">*Especialidade:</label>
          <input type="text" name="especialidade" value="<?php if(isset($_GET['especialidade'])){ echo $_GET['especialidade']; }?>" class="size-input" required />
        </div>

        <div class="form">
          <label for="">*Data da consulta:</label>
          <input
            type="date"
            name="data_da_consulta"
            class="size-input"
            placeholder="(dd/mm/aaaa)"
            required
          />
        </div>

        <div class="form">
          <label for="">*Forma de consulta:</label>
          <select name="forma_de_consulta">
            <option value="masculino">Presencial</option>
            <option value="feminino">Remota</option>
          </select>
        </div>

        <div class="form-motivo">
          <label for="">Motivo da consulta:</label>
          <input type="text" name="motivo" class="size-input-motive" placeholder="" />
          
        </div>

        <div class="buttons">
          <a href="medicos.php" class="button" id="button-canc">Cancelar</a>

          <input type="hidden" name="id" value="<?php echo $dados["idUser"]; ?>">
          <input type='submit' class="button" id="button-prox" value="Próximo">
        </div>

      </form>
    </div>

    

  </body>
</html>
