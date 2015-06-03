		<nav>
			<div class="container">
				<ul class="navbar izquierda">
 					<li><a href="<?php echo site_url('administrador'); ?>">Menú</a></li>
 					<li><a href="<?php echo site_url('administrador/gestion'); ?>">Gestión</a></li>
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
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
						<fieldset>
							<legend>Dependencias</legend>
							<form class="form-vertical" id="frmdep" name="frmofc" action="index.php/administrador/registrar_dependencia" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group">
											<label for="nombre">
											<spam class="glyphicon glyphicon-asterisk requerido"></spam>Nombre
											</label>
											<input type="text" id="nombre" name="nombre"/>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group">
											<label for="autoridad">
											<spam class="glyphicon glyphicon-asterisk requerido"></spam>Autoridad(ID)
											</label>
											<input type="text" id="autoridad" name="autoridad"/>
										</div>
									</div>
								</div>
								<div class="row">
								<div class="col-xs-4 col-xs-offset-8 col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 col-lg-4 col-lg-offset-8">
									<label>
										<button type="button" class="btn-lg btn-azul derecha" id="enviar_dependencia">Registrar Dependencia</button>
								</div>
							</div>
							</form>							
						</fieldset>
					</div>
				</div>
			</div>
		</section>
		<script type="text/javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
		<script type="text/javascript" src="js/formatter.js"></script>
		<script type="text/javascript" src="js/registrar_dependencia.js"></script>

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