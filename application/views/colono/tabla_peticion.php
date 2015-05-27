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
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<fieldset>
							<legend>Peticiones enviadas</legend>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div id="tabla">
										<table id="example" class="table table-hover">
									        <thead>
									            <tr>
													<th>Folio</th>
													<th>Asunto</th>
													<th>Fecha de Elaboración</th>
                                                    <th>Atendido</th>
													<th>Fecha de Atención</th>
													<th>Categoría</th>
									            </tr>
									        </thead>
									        <tbody>
                                                <?php foreach($peticiones as $row){ ?>
                                                <tr>
                                                    <td><?php echo $row->Folio; ?></td>
                                                    <td><?php echo $row->Asunto; ?></td>
                                                    <td><?php echo $row->Elab; ?></td>
                                                    <?php if ($row->Aten != NULL) {?>
                                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                                    <?php } else { ?>
                                                    <td><span class="glyphicon glyphicon-remove"></span></td>
                                                    <?php } ?>
                                                    <td><?php echo $row->Aten; ?></td>
                                                    <td><?php echo $row->Categoria; ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
									    </table>
									</div>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
<!--
				<div class="row">
					<div class="col-xs-4 col-xs-offset-8 col-sm-4 col-sm-offset-8 col-md-2 col-md-offset-10 col-lg-3 col-lg-offset-9">
						<a href="<?php echo site_url('presidente/registrar_representantes'); ?>" class="btn btn-lg btn-azul derecha">Registrar Representantes de Calle</a>
					</div>
				</div>
-->
			</div>
		</section>
		<script type="text/javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
		<script>
			$(document).ready(function() {
			    $('#example').dataTable();
			} );
		</script>