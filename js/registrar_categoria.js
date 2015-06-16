$('#usuario_contrasena').hide();

$('#enviar_categoria').click(function(){
	$.ajax({
		type: "POST",
		url: $("#frmcat").attr("action"),
		data: $("#frmcat").serialize(),
		success: function(data){
			$("#nombre").val("");

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

$('#cancelar').click(function(){
	window.location.href = "index.php/administrador/gestion";
});