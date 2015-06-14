<!--
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
-->
		<section class="content" id="contenido">
			<div class="container">
				<div class="row">
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
						<div id="usuario_contrasena">
							<div id="alert" class="alert alert-info fade in">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h3 id="titulo_alert"></h3>
                                <div id="text_alert"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
						<fieldset class="panel">
							<legend>Petición</legend>
                            <form class="form-vertical" id="frmpet" name="frmpet"
                            action="index.php/colono/registrar_peticion" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                  <div class="form-group">
									<label for="asunto">
										<spam class="glyphicon glyphicon-asterisk requerido"></spam>Asunto
									</label>
									<input type="text" id="asunto" name="asunto"/>
                                  </div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                  <div class="form-group">
									<label for="categoria">
										<spam class="glyphicon glyphicon-asterisk requerido"></spam>Categoría
									</label>
									<select id="categoria" name="categoria">
                                        <option value="">Selecciona Categoría</option>
                                        <?php foreach($categorias as $row){ ?>
                                        <option value="<?php echo $row->Id; ?>"><?php echo $row->Nombre; ?></option>
                                        <?php } ?>
									</select>
                                  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                  <div class="form-group">
									<label for="descripcion">
										<spam class="glyphicon glyphicon-asterisk requerido"></spam>Descripción
									</label>
                                    <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
                                  </div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                  <div class="form-group">
									<label for="direccion">
										<spam class="glyphicon glyphicon-asterisk requerido"></spam>Dirección
									</label>
                                    <textarea id="direccion" name="direccion" class="form-control"></textarea>
                                  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                  <div class="form-group">
									<label for="imagen">Imagen</label>
									<input type="file" id="imagen"/>
                                  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4 col-xs-offset-8 col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 col-lg-4 col-lg-offset-8">
									<label>
										<button type="button" class="btn-lg btn-azul derecha" id="enviar_datos">Registrar</button>
								</div>
							</div>
                            </form>
						</fieldset>
					</div>
				</div>
			</div>
		</section>
<!--
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
-->
		<script type="text/javascript" src="js/datepicker.js"></script>
		<script type="text/javascript" src="js/datepicker.es.js"></script>
		<script type="text/javascript" src="js/formatter.js"></script>
		<script type="text/javascript" src="js/registrar_peticion.js"></script>