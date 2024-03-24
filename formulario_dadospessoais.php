<?php
    require_once("Controle/DadosUsuario.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style_formulario_dadospessoais.css" />
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
            <p id="stepText">2/2</p>
          </div>
        </div>
      </div>
    </header>

    <div class="titulo-form">
      <h1>Formulário de Agendamento</h1>
    </div>

    <div class="container">
      <form action="Controle/DadosAgendamento1.php" method="POST" class="container-form">
        <span id="data">Confirmação dos Dados Pessoais</span>

        <div class="form">
          <label for="">Nome completo:</label>
          <input
            type="text"
            name="nome"
            class="size-input"
            value="<?php echo $dados["nome"]; ?>"
          />
        </div>

        <!--<div class="form">
          <label for="">Sobrenome:</label>
          <input
            type="text"
            name=""
            id=""
            class="size-input"
            placeholder="Ex: Pereira"
          />
        </div>-->

        <div class="form">
          <label for="">Data de nascimento:</label>
          <input
            type="date"
            name="data_de_nascimento"
            id=""
            class="size-input"
            placeholder="(dd/mm/aaaa)"
            value="<?php echo $dados["data_de_nascimento"]; ?>"
          />
        </div>

        <div class="form">
          <label for="">Gênero:</label>
          <select name="genero" id="">
            <option value=""></option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
          </select>
        </div>

        <div class="form">
          <label for="">Telefone:</label>
          <input
            type="tel"
            name="telefone"
            id=""
            class="size-input"
            placeholder="(dd) (xxxxx-xxxx)"
            value="<?php echo $dados["telefone"]; ?>"
          />
        </div>

        <div class="form">
          <label for="">E-mail:</label>
          <input
            type="email"
            name="email"
            id=""
            class="size-input"
            placeholder="exemplo@gmail.com"
            value="<?php echo $dados["email"]; ?>"
          />
          <p id="notification">
            <input type="checkbox" name="notificacao" />Receber notificação no email
          </p>
        </div>

        <div class="buttons">
          <!--<a href="formulario_medico.php?medico=<?php// echo $_SESSION['medico'];?>&especialidade=<?php// echo $_SESSION['especialidade'];?>" class="button" id="button-voltar">Voltar</a>-->

          <input type="hidden" name="id" value="<?php echo $dados["idUser"]; ?>">
          <input type='submit' class="button" id="button-prox" value="Próximo">
        </div>

      </form>
    </div>

  </body>
</html>
