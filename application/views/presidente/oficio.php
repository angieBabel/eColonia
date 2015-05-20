		<nav>
			<div class="container">
				<ul class="navbar izquierda">
 					<li><a href="<?php echo site_url('presidente'); ?>">Menú</a></li>
 					<li><a href="<?php echo site_url('presidente/gestion'); ?>">Gestión</a></li>
 				</ul>
 				<ul class="navbar derecha">
					<a href="<?php echo site_url('presidente/logout'); ?>" class="btn btn-rojo">
						Cerrar Sesión
					</a>
 				</ul>
			</div>
		</nav>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<fieldset>
							<legend>Oficio</legend>
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<label for="">Asunto</label>
									<input name="asunto" type="text" class="form-control" placeholder="Asunto">
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<label for="">Dependencia</label>
									<input name="dependencia" type="text" class="form-control" placeholder="Dependencias">
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<label for="">Descripción</label>
									<textarea name="desc" type="text" class="form-control" placeholder="Descripción"></textarea>
								</div>
							</div>							
						</fieldset>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-xs-offset-8 col-sm-4 col-sm-offset-8 col-md-2 col-md-offset-10 col-lg-3 col-lg-offset-9">
						<a href="<?php echo site_url('presidente/mandar_oficio'); ?>" class="btn btn-lg btn-azul derecha">Crear Oficio</a>
					</div>
				</div>
			</div>
		</section>
		<script type="text/javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
<!--		<script type="text/javascript" src="js/registrar_colonia.js"></script> -->
	<!--	<script>
			$(document).ready(function() {
			    $('#example').dataTable();
			} );

			$('#municipio').change(function(){
				var id = $('#municipio').val();
				if(id != ""){
					$.ajax({
						type: "POST",
						url: "http://localhost/php/ecolonia/index.php/administrador/get_colonias",
						data:{municipio_id:id},
						success: function(msg){
							var datos = jQuery.parseJSON(msg);
							var cadena = "";
							var fecha;
							cadena += "<table id='"+id+"' class='table table-hover'><thead><tr><th>Nombre</th><th>Fecha Fundación</th><th>No. Habitantes</th><th>Diagnostico Inicial</th><th>Acciones</th></tr></thead><tbody>";
							for(var i = 0; i < datos.length; i++){
								fecha = datos[i].FechaFun.split("-");
								cadena += "<tr><td>"+datos[i].Nombre+"</td><td>"+fecha[2]+"-"+fecha[1]+"-"+fecha[0]+"</td><td>"+datos[i].NumeroHabitantes+"</td><td>"+datos[i].Diagnostico_inicial+"</td><td><form action='<?php echo site_url('administrador/detalle_colonia');?>' method='post'><input type='hidden' name='colonia' value="+datos[i].Id+"><center><span class='detalles'><button type='submit' class='btn btn-success view'><i class='fa fa-pencil'></i></button></span></center></form></td></tr>"
							}
							cadena += "</tbody></table>";
							$('#tabla').html(cadena);
							$('#'+id).dataTable();
						}
					});
				}
			});
		</script>-->
		<div class="modal dialogo fade" id="alert">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="titulo_alert"></h4>
					</div>
					<div class="modal-body">
						<p id="texto_alert"></p>
						<input type="button" value="Aceptar" data-dismiss="modal">
					</div>
				</div>
			</div>
		</div>