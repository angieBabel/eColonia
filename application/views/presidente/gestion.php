        <nav>
			<div class="container">
				<ul class="navbar izquierda">
 					<li><a href="<?php echo site_url('presidente'); ?>">Menú</a></li>
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
				<article>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<article>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<fieldset>
											<legend>Menú</legend>
											<label>
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<label>
                                                    <a href="<?php echo site_url('presidente/oficio'); ?>" class="btn btn-lg btn-block btn-azul">
                                                    Realizar oficio</a>
                                                </label>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                  <table id="tpeticiones" class="table table-hover">
                                                      <thead>
                                                          <tr>
                                                              <th>Folio</th>
                                                              <th>Asunto</th>
                                                              <th>Fecha de Elaboración</th>
                                                              <th>Fecha de Atención</th>
                                                              <th>Categoría</th>
                                                              <th>Colono</th>
                                                          </tr>
                                                      </thead>
<!--
                                                      <tbody>
                                                          <?php foreach($integrantes as $row){ ?>
                                                          <tr>
                                                              <td><?php echo $row->Nombre." ".$row->ApellidoPaterno." ".$row->ApellidoMaterno; ?></td>
                                                              <td><?php echo $row->FechaNacimiento; ?></td>
                                                              <td><?php echo $row->Sexo; ?></td>
                                                              <td><?php echo $row->Estatura; ?></td>
                                                              <td><?php echo $row->Peso; ?></td>
                                                              <td><?php echo $row->Email; ?></td>
                                                              <td><?php echo $row->Tel_celular; ?></td>
                                                          </tr>
                                                          <?php } ?>
                                                      </tbody>
-->
                                                  </table>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<label>
                                                    <a href="<?php echo site_url('presidente/tabla_peticion'); ?>" class="btn btn-lg btn-block btn-azul">
                                                    Peticiones realizadas</a>
                                                </label>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                  <table id="toficios" class="table table-hover">
                                                      <thead>
                                                          <tr>
                                                              <th>Folio</th>
                                                              <th>Asunto</th>
                                                              <th>Fecha de Envío</th>
                                                              <th>Fecha de Respuesta</th>
                                                              <th>Estado</th>
                                                          </tr>
                                                      </thead>
<!--
                                                      <tbody>
                                                          <?php foreach($integrantes as $row){ ?>
                                                          <tr>
                                                              <td><?php echo $row->Nombre." ".$row->ApellidoPaterno." ".$row->ApellidoMaterno; ?></td>
                                                              <td><?php echo $row->FechaNacimiento; ?></td>
                                                              <td><?php echo $row->Sexo; ?></td>
                                                              <td><?php echo $row->Estatura; ?></td>
                                                              <td><?php echo $row->Peso; ?></td>
                                                              <td><?php echo $row->Email; ?></td>
                                                              <td><?php echo $row->Tel_celular; ?></td>
                                                          </tr>
                                                          <?php } ?>
                                                      </tbody>
-->
                                                  </table>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<label>
                                                    <a href="<?php echo site_url('presidente/tabla_oficio'); ?>" class="btn btn-lg btn-block btn-azul">
                                                    Oficios realizados</a>
                                                </label>
                                                </div>
											</label>
										</fieldset>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
								</div>
							</article>					
						</div>
					</div>
				</article>
			</div>
		</section>