$(".del").click(function(){
    var id = $(this).val(); // Pegue o valor aqui
    swal({
        title:"Atenção",
        text:"Você tem certeza que deseja cancelar essa consulta?",
        icon:"warning",
        buttons:['Cancelar','Sim'],
        dangerMode:true
    }).then(function(isConfirm){
        if(isConfirm){
            window.location.href="Controle/delConsulta.php?idAgenda="+id;
        }
    });
});

$(".btn-agendar-consulta").click(function(){
    var medico = $(this).val(); // Pegue o valor aqui
    window.location.href="formulario_medico.php?"+medico;
        
});

$("#sair").click(function(){
    swal({
        title:"Logout",
        text:"Você deseja sair de sua conta?",
        icon:"warning",
        buttons:['Cancelar','Sim'],
        dangerMode:true
    }).then(function(isConfirm){
        if(isConfirm){
            window.location.href="Controle/Sair.php";
        }
    });
});