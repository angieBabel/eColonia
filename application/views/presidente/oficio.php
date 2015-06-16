<!--
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
-->
		<section class="content" id="contenido">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
						<fieldset>
							<legend>Atender</legend>
							<form class="form-vertical" id="frmofc" name="frmofc" action="index.php/presidente/registrar_oficio" method="POST" enctype="multipart/form-data">
								<div class="row">
<!--
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group">
											<label for="asunto">
											<spam class="glyphicon glyphicon-asterisk requerido"></spam>Asunto
											</label>
											<input type="text" id="asunto" name="asunto"/>
										</div>
									</div>
-->
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                      <div class="form-group">
                                        <label for="dependencia">
                                            <spam class="glyphicon glyphicon-asterisk requerido"></spam>Dependencia
                                        </label>
                                        <select id="dependencia" name="dependencia">
                                            <option value="">Selecciona Dependencia</option>
                                            <?php foreach($dependencias as $row){ ?>
                                            <option value="<?php echo $row->Id; ?>"><?php echo $row->Nombre; ?></option>
                                            <?php } ?>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                      <div class="form-group">
                                        <label for="peticion">
                                            <spam class="glyphicon glyphicon-asterisk requerido"></spam>Petición
                                        </label>
                                        <select id="peticion" name="peticion">
                                            <option value="">Selecciona Petición</option>
                                            <?php foreach($peticiones as $row){ ?>
                                            <option value="<?php echo $row->Folio; ?>"><?php echo $row->Asunto; ?></option>
                                            <?php } ?>
                                        </select>
                                      </div>
                                    </div>
								</div>
<!--
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label for="">Descripción</label>
											<textarea id="descripcion" name="descripcion" type="text" class="form-control" placeholder="Descripción"></textarea>
										</div>
									</div>
								</div>
-->
                              <div class="row"><br></div>
                                <div class="row">
								<div class="col-xs-6 col-xs-offset-6 col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
									<label>
										<button type="button" class="btn-lg btn-azul izquierda" id="enviar_oficio">Atender Petición</button>
										<button type="button" class="btn-lg btn-rojo derecha" id="cancelar">Cancelar</button>
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
		<script type="text/javascript" src="js/registrar_oficio.js"></script>

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