$("#del").click(function(){
    swal({
        title:"Atenção",
        text:"Você tem certeza que deseja apagar sua conta?",
        icon:"warning",
        buttons:['Cancelar','Sim'],
        dangerMode:true
    }).then(function(isConfirm){
        if(isConfirm){
            window.location.href="../controle/deletarU.php";
        }
    });
});