$(document).ready(function(){
    $.ajax({
        url:"ajax/articulos.php?accion=listar",
        dataType:"json",
        success:function(res){
            console.log('el arreglo es:')
            console.log(res);
        },
        error:function(error){
            console.log(error);
        }
    });
});