$('#btn-continuar').click(function(){
    console.log('Ejecutar peticion asincronakkkkk');
    $("#respuesta").html("Cargando...");
    var parametros = 
        'pais='+$("#pais").val()+"&"+
        'direccion='+$("#direccion").val()+"&"+
        'adicional='+$("#adicional").val()+"&"+
        'ciudad='+$("#ciudad").val()+"&"+
        'estado='+$("#estado").val()+"&"+
        'codigo='+$("#codigo").val()+"&"+
        'email='+$("#email").val()+"&"+
        'celular='+$("#celular").val();

    console.log("Esto se enviará al servidor: "+parametros);

    //Funcion de jquery para peticiones asincronas.
    $.ajax({
        url:"ajax/informacion.php?accion=guardar",
        method:"POST",
        data:parametros, //La información en formato URLEncoded
        dataType: 'json', //tipo de dato de retorno, por defecto es html
        success:function(respuesta){
            //Se ejecutara cuando sea exitoso
            //console.log("Respuesta del servidor: " + JSON.stringify(respuesta));
            console.log(respuesta);
            $("#respuesta").html("Se guardo el registro de " + respuesta.nombre);
            $("#usuarios").append(`<tr>
                <td>${respuesta.direccion}</td>
                <td>${respuesta.apellido}</td>
                <td>${respuesta.email}</td>
                <td>${respuesta.usuario}</td>
                <td>${respuesta.pais}</td>
                <td>${respuesta.password}</td>
            </tr>`);
        },
        error:function(error){
            //Se ejecutara cuando sea erroneo
            console.error(error);
        }
    });
});
$(document).ready(function(){
    //Aquí el DOM ha sido cargado..
    console.log('Obtener lista de informacion');
    $.ajax({
        url:"ajax/informacion.php?accion=listar",
        dataType:"json",
        success:function(respuesta){
            console.log("La respuesta del servidor es: ");
            console.log(respuesta);
            /*for(var i=0;i<respuesta.length;i++){
                $("#usuarios").append(`<tr>
                    <td>${respuesta[i].direccion}</td>
                    <td>${respuesta[i].direccion}</td>
                    <td>${respuesta[i].email}</td>
                    <td>${respuesta[i].usuario}</td>
                    <td>${respuesta[i].pais}</td>
                    <td>${respuesta[i].password}</td>
                </tr>`);
            } */
        },
        error:function(error){
            console.log(error);
        }
    });
});