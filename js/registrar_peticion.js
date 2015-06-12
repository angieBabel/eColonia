$('#usuario_contrasena').hide();

$('#enviar_datos').click(function(){
	$.ajax({
        type: "POST",
        url: $("#frmpet").attr("action"),
        data: $("#frmpet").serialize(),
//        success: function(data){
//            $("#asunto").val("");
//            $('#categoria').val("");
//            $('#descripcion').val("");
//            $('#direccion').val("");
//            $('#imagen').val("");
//            alert(data);
//
//            $('#usuario_contrasena').show();
//            $('#titulo_alert').html("AVISO");
//            $('#texto_alert').html("LOS DATOS SE GUARDARON CON EXITO");
//            $('#alert').modal('show');
//        },
//        error: function(){
//            $('#usuario_contrasena').show();
//            $('#titulo_alert').html("!ATENCION¡");
//            $('#texto_alert').html("ERROR AL GUARDAR LOS DATOS");
//            $('#alert').modal('show');
//        }
      });
});