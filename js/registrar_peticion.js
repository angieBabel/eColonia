$('#usuario_contrasena').hide();
//var array_datos = [];

//function concat(){
//}

$('#enviar_datos').click(function(){
	$.ajax({
        type: "POST",
        url: $("#frmpet").attr("action"),
        data: $("#frmpet").serialize(),
        success: function(data){
            $("#asunto").val("");
            $('#categoria').val("");
            $('#descripcion').val("");
            $('#direccion').val("");
            $('#imagen').val("");
            alert(data);
            //array_datos = [];

//            $('#titulo_alert').html("AVISO");
//            $('#texto_alert').html("LOS DATOS SE GUARDARON CON EXITO");
//            $('#alert').modal('show');
//            var cadena = "";
        },
        error: function(){
          alert("?");
        }
      });
});
  
//    $.ajax({
//		type: "POST",
//		url: "http://localhost/ecolonia/index.php/colono/registrar_peticion",
//		data: {peticion:array_datos},
//		success: function(msg){
//			var datos = jQuery.parseJSON(msg);
//			if(datos.resp == true){
//				$("#asunto").val("");
//                $('#categoria').val("");
//                $('#descripcion').val("");
//                $('#direccion').val("");
//                $('#imagen').val("");
//				array_datos = [];
//	
//				$('#titulo_alert').html("AVISO");
//				$('#texto_alert').html("LOS DATOS SE GUARDARON CON EXITO");
//				$('#alert').modal('show');
//				var cadena = "";
//			} else{
//				$('#titulo_alert').html("!ATENCION¡");
//				$('#texto_alert').html("ERROR AL GUARDAR LOS DATOS");
//				$('#alert').modal('show');
//			}
//		}
//	});