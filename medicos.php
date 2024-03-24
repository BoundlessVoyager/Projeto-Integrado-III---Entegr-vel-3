<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./css/style_medicos.css">
    <link rel="stylesheet" href="./css/main.css">
    <script type="text/javascript" src="./js/index.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médicos</title>
</head>
<body>
    <?php
        require_once('header.php');
    ?>

    <main>

        <div class="medicos-primeira-parte">
            <div class="conheca-nossos-medicos">
                <p id="texto-conheca-nossos-medicos">Conheça Nossos Médicos</p>
                <p id="texto-vitalis-equipe">Na Vitalis, contamos com uma equipe médica excepcional dedicada ao seu bem-estar.</p>
            </div>

            <div class="texto-esquerda-primeira-parte"> 
                <p id="mais-10">+10</p>
                <p id="especialidades-disponiveis">Especialidades Disponíveis</p>
            </div>

            <div class="linha-pequena-vertical"></div>

            <div class="texto-direita-primeira-parte"> 
                <p id="mais-20">+20</p>
                <p id="medicos-atender">Médicos para lhe atender</p>
            </div>
        </div>

        <div class="medicos-segunda-parte">

            <div class="busca">
                <form action="" method="post">
                    <label for="txtBusca"></label>
                    <input type="text" id="txtBusca" placeholder="O que você procura?"/>
                    <img src="./img/pesquisa_icon.png" id="btnBusca" alt="Buscar"/>
                </form>
            </div>

            <div class="lista-selecao">
                <div class="especialidade-selecao">
                    <select name="especialidades" id="selecao-especialidades">
                        <option value="especialidade">Especialidade</option>
                        <option value="dermatologista">Dermatologista</option>
                        <option value="psicologo">Psicológo(a)</option>
                        <option value="cardiologista">Cardiologista</option>
                    </select>
                    <img src="./img/estetoscopio.png" alt="Estetoscopio Ícone">
                </div>

                <div class="datas-disponiveis">
                    <form action="" method="post" id="form-datas"> 
                        <label for="data-disponibilidade"></label>
                        <input type="date" id="data-disponibilidade">
                    </form>
                    <img src="./img/calendario.png" alt="Calendário Ícone">
                </div>

                <div class="forma-atendimento">
                    <select name="forma-atendimento-lista" id="selecao-atendimento">
                        <option value="prensencial">Presencial</option>
                        <option value="remoto">Remoto</option>
                    </select>
                    <img src="./img/presencial.png" alt="Tipo atendimento">
                </div>
            </div>


        </div>

        <div class="medicos-terceira-parte">
            <div class="medico1">
                
                <img id="imagem-psicologa" src="./img/psicologa.png" alt="Psicóloga">

                <p id="texto-nome-medico1">Dra. Camila Silva</p>

                <p id="texto-especialidade-medico1">Psicóloga</p>
                
                <button id="btn-agendar-consulta1"> Agendar Consulta</button>

                <p id="texto-mais-informacoes-medico1"><a href=""> Mais informações</a></p>

            </div>

            <div class="medico2">

                <img id="imagem-cardiologista" src="./img/cardiologista.png" alt="Cardiologista">

                <p id="texto-nome-medico2">Dr. Lucas Mendes</p>

                <p id="texto-especialidade-medico2">Cardiologista</p>
                
                <button id="btn-agendar-consulta2"> Agendar Consulta</button>

                <p id="texto-mais-informacoes-medico2"><a href=""> Mais informações</a></p>
            </div>

            <div class="medico3">
                <img id="imagem-dermatologista" src="./img/dermatologista.png" alt="Dermatologista">

                <p id="texto-nome-medico3">Dra. Sofia Oliveira</p>

                <p id="texto-especialidade-medico3">Dermatologista</p>
                
                <button id="btn-agendar-consulta3"> Agendar Consulta</button>

                <p id="texto-mais-informacoes-medico3"><a href=""> Mais informações</a></p>

            </div>


        </div>


    </main>

    
</body>
</html>