$(document).ready(function(){
    $.ajax({
        url:"ajax/obtener-subcategoria.php",
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);
            for(var i=0;i<respuesta.lenght;i++){
                $("#list-ul").append(`<li>
                <div class="input-checkbox">
                <a href="#"><span>${respuesta[i].nombre}</span></a>
                </div>
                </li>`);
            };
           },
        error:function(error){
            console.log(error);
            $("#list-ul").append(error.responseText);
        }
    });

    $.ajax({
        url:"ajax/articulos.php?accion=listar",
        dataType:"json",
        success:function(res){
            console.log(res);
        },
        error:function(error){
            console.log(error);
        }
    });
});