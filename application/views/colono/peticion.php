		<nav>
			<div class="container">
				<ul class="navbar izquierda">
 					<li><a href="<?php echo site_url('colono'); ?>">Menú</a></li>
 					<li><a href="<?php echo site_url('colono/gestion'); ?>">Gestión</a></li>
 				</ul>
 				<ul class="navbar derecha">
					<a href="<?php echo site_url('colono/logout'); ?>" class="btn btn-rojo">
						Cerrar Sesión
					</a>
 				</ul>
			</div>
		</nav>
		<section>
			<div class="container">
<!--
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="usuario_contrasena">
							<div id="mensaje" class="alert alert-info fade in">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<div id="text_usuario_contrasena"></div>
							</div>
						</div>
					</div>
				</div>
-->
              <form class="form-vertical" id="frmpet" name="frmpet" action="" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
						<fieldset class="panel">
							<legend>Petición</legend>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<label for="asunto">
										<spam class="glyphicon glyphicon-asterisk requerido"></spam>Asunto
									</label>
									<input type="text" id="asunto"/>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<label for="categoria">
										<spam class="glyphicon glyphicon-asterisk requerido"></spam>Categoría
									</label>
									<input type="text" id="categoria"/>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<label for="descripcion">
										<spam class="glyphicon glyphicon-asterisk requerido"></spam>Descripción
									</label>
                                    <textarea id="descripcion" class="form-control"></textarea>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h1>Mapa</h1>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<label for="imagen">Imagen</label>
									<input type="file" id="imagen"/>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-xs-offset-8 col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 col-lg-4 col-lg-offset-8">
									<label>
										<input type="submit" class="btn-lg btn-azul derecha" id="copia_datos"/>
                                        <label>
                                            <a href="<?php echo site_url('colono/gestion'); ?>" class="btn btn-lg btn-block btn-azul">
                                            Cancelar</a>
                                        </label>
									</label>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
              </form>
			</div>
		</section>
		<div class="modal dialogo fade" id="alert">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="titulo_alert"></h4>
					</div>
					<div class="modal-body">
						<p id="texto_alert"></p>
						<input type="button" value="Aceptar" data-dismiss="modal" class="btn-lg btn-block btn-azul">
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/datepicker.js"></script>
		<script type="text/javascript" src="js/datepicker.es.js"></script>
		<script type="text/javascript" src="js/formatter.js"></script>
		<script type="text/javascript" src="js/registrar_miembros.js"></script>