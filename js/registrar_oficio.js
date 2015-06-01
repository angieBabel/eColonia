$('#usuario_contrasena').hide();

$('#enviar_oficio').click(function(){
	$.ajax({
        type: "POST",
        url: $("#frmofc").attr("action"),
        data: $("#frmofc").serialize(),
        success: function(data){
            $("#asunto").val("");
            $('#dependencia').val("");
            $('#descripcion').val("");
            alert(data);

            $('#usuario_contrasena').show();
            $('#titulo_alert').html("AVISO");
            $('#texto_alert').html("LOS DATOS SE GUARDARON CON EXITO");
            $('#alert').modal('show');
        },
        error: function(){
            $('#usuario_contrasena').show();
            $('#titulo_alert').html("!ATENCION¡");
            $('#texto_alert').html("ERROR AL GUARDAR LOS DATOS");
            $('#alert').modal('show');
        }
      });
});