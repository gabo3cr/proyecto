<?php
$this->layout('default');
$this->assign('title', 'Solicitar Presupuesto :: Gruas Tagar');
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
	<body>
			<!-- - - - - - - - - - SECTION - - - - - - - - - -->

	<!-- Breadcrumbs -->
			<div class="pi-section-w pi-shadow-inside-top pi-section-parallax">
				<div class="pi-texture" style="background: rgba(24, 28, 32, 0.8);"></div>
				<div class="pi-section pi-section-md pi-titlebar pi-titlebar-breadcrumb-right pi-titlebar-small">
					<h1>Cotizaciones</h1>

					<div class="pi-breadcrumb">Seccion:
						<ul>
							<li><?=  $this->Html->link( 'Inicio', 'pages/home',['class' => '']); ?> </li>
							<li><?=  $this->Html->link( 'Paso 2', 'pages/presupuesto',['class' => '']); ?>
							<li><?=  $this->Html->link( 'Volver al menu anterior', 'pages/cotizaciones',['class' => '']); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End breadcrumbs -->

	<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

		<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->
	<div class="pi-section-w pi-section-white piICheck piStylishSelect">
		<div class="pi-section pi-padding-bottom-80">
			
			<!-- Row -->
			<div class="pi-row">
				
				<!-- Col 6 -->
				<div class="pi-col-xs-6">
					
					<h2 class="pi-has-bg pi-weight-200 pi-uppercase pi-letter-spacing pi-margin-bottom-25">
						Solicitar Presupuesto
					</h2>
					
					<p>
						Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
					</p>
					
					<hr class="pi-divider-gap-10">
					
					<!-- Forms -->
		<form role="form" action="registroCotizacion" method="POST">
			<!-- Col 6 -->
			<div class="pi-col-sm-12">
				
				<!-- Accordion -->
				<div class="pi-accordion">
					
					<!-- Accordion item -->
					<div class="pi-accordion-item">
						<h5 class="pi-accordion-title">
							<a href="#">
								<span class="pi-accordion-toggle"></span>
								Gruas Telescópica
							</a>
						</h5>

						<div class="pi-accordion-content">
							<div>
						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="gt_peso" class="form-control" id="exampleInputName-1" placeholder="Peso de la Carga">
							</div>
						</div>
						<!-- End first name form -->
						
						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="gt_descripcion" class="form-control" id="exampleInputName-1" placeholder="Descripción de la Carga">
							</div>
						</div>
						<!-- End first name form -->

						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="gt_lugar" class="form-control" id="exampleInputName-1" placeholder="Lugar donde se Realizara el Izamiento">
							</div>
						</div>
						<!-- End first name form -->

						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="gt_altura" class="form-control" id="exampleInputName-1" placeholder="Altura">
							</div>
						</div>
						<!-- End first name form -->

							<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="gt_distancia" class="form-control" id="exampleInputName-1" placeholder="Distancia o Radio de Trabajo">
							</div>
						</div>
						<!-- End first name form -->

						<!-- Message -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-pencil"></i>
								</div>
								<textarea class="form-control" name="gt_mensaje" id="exampleInputMessage-1" placeholder="Comentarios (Indicar si requiere algún tipo de traslado sobre plataformas o algún otro servicio)" rows="4">
								</textarea>
							</div>
						</div>
						<!-- End message form -->
						
						
						
							</div>
						</div>
					</div>
					<!-- End accordion item -->					
				</div>
				<!-- End accordion -->
				
			</div>
			<!-- End col 6 -->

				<!-- Col 6 -->
			<div class="pi-col-sm-12">
				
				<!-- Accordion -->
				<div class="pi-accordion">
					
					<!-- Accordion item -->
					<div class="pi-accordion-item">
						<h5 class="pi-accordion-title">
							<a href="#">
								<span class="pi-accordion-toggle"></span>
								Alquiler de Grúa Torre
							</a>
						</h5>

						<div class="pi-accordion-content">
							<div>
						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="torre_altura" class="form-control" id="exampleInputName-1" placeholder="Altura">
							</div>
						</div>
						<!-- End first name form -->
						
						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="torre_capacidad" class="form-control" id="exampleInputName-1" placeholder="Capacidad de la Grúa">
							</div>
						</div>
						<!-- End first name form -->

						<!-- Message -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-pencil"></i>
								</div>
								<textarea class="form-control" name="torre_mensaje" id="exampleInputMessage-1" placeholder="Comentarios" rows="4">
								</textarea>
							</div>
						</div>
						<!-- End message form -->
						
						
						
							</div>
						</div>
					</div>
					<!-- End accordion item -->					
				</div>
				<!-- End accordion -->
				
			</div>
			<!-- End col 6 -->

					<!-- Col 6 -->
			<div class="pi-col-sm-12">
				
				<!-- Accordion -->
				<div class="pi-accordion">
					
					<!-- Accordion item -->
					<div class="pi-accordion-item">
						<h5 class="pi-accordion-title">
							<a href="#">
								<span class="pi-accordion-toggle"></span>
								Alquiler de Plantas Eléctricas
							</a>
						</h5>

						<div class="pi-accordion-content">
							<div>
						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="planta_capacidad" class="form-control" id="exampleInputName-1" placeholder="Capacidad de la Planta">
							</div>
						</div>
						<!-- End first name form -->

						<!-- Message -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-pencil"></i>
								</div>
								<textarea class="form-control" name="planta_mensaje" id="exampleInputMessage-1" placeholder="Comentarios" rows="4">
								</textarea>
							</div>
						</div>
						<!-- End message form -->
						
						
						
							</div>
						</div>
					</div>
					<!-- End accordion item -->

					
				</div>
				<!-- End accordion -->
				
			</div>
			<!-- End col 6 -->

					<!-- Col 6 -->
			<div class="pi-col-sm-12">
				
				<!-- Accordion -->
				<div class="pi-accordion">
					
					<!-- Accordion item -->
					<div class="pi-accordion-item">
						<h5 class="pi-accordion-title">
							<a href="#">
								<span class="pi-accordion-toggle"></span>
								Alquiler de Plataforma
							</a>
						</h5>

						<div class="pi-accordion-content">
							<div>
						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="plataforma_descripcion" class="form-control" id="exampleInputName-1" placeholder="Descripción de la Carga">
							</div>
						</div>
						<!-- End first name form -->

						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="plataforma_origen" class="form-control" id="exampleInputName-1" placeholder="Origen">
							</div>
						</div>
						<!-- End first name form -->

							<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="plataforma_destino" class="form-control" id="exampleInputName-1" placeholder="Destino">
							</div>
						</div>
						<!-- End first name form -->

						<!-- Message -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-pencil"></i>
								</div>
								<textarea class="form-control" name="plataforma_mensaje" id="exampleInputMessage-1" placeholder="Comentarios" rows="4">
								</textarea>
							</div>
						</div>
						<!-- End message form -->
						
						
						
							</div>
						</div>
					</div>
					<!-- End accordion item -->

					
				</div>
				<!-- End accordion -->
				
			</div>
			<!-- End col 6 -->

					<!-- Col 6 -->
			<div class="pi-col-sm-12">
				
				<!-- Accordion -->
				<div class="pi-accordion">
					
					<!-- Accordion item -->
					<div class="pi-accordion-item">
						<h5 class="pi-accordion-title">
							<a href="#">
								<span class="pi-accordion-toggle"></span>
								Alquiler Camión con Brazo Articulado
							</a>
						</h5>

						<div class="pi-accordion-content">
							<div>
						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="brazo_peso" class="form-control" id="exampleInputName-1" placeholder="Peso de la Carga">
							</div>
						</div>
						<!-- End first name form -->

						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="brazo_descripcion" class="form-control" id="exampleInputName-1" placeholder="Descripción de la Carga">
							</div>
						</div>
						<!-- End first name form -->

							<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="brazo_lugar" class="form-control" id="exampleInputName-1" placeholder="Lugar donde se Realizara el Izamiento">
							</div>
						</div>
						<!-- End first name form -->

						<!-- Message -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-pencil"></i>
								</div>
								<textarea class="form-control" name="brazo_mensaje" id="exampleInputMessage-1" placeholder="Comentarios" rows="4"></textarea>
							</div>
						</div>
						<!-- End message form -->
						
						
						
							</div>
						</div>
					</div>
					<!-- End accordion item -->

					
				</div>
				<!-- End accordion -->
				
			</div>
			<!-- End col 6 -->

					<!-- Col 6 -->
			<div class="pi-col-sm-12">
				
				<!-- Accordion -->
				<div class="pi-accordion">
					
					<!-- Accordion item -->
					<div class="pi-accordion-item">
						<h5 class="pi-accordion-title">
							<a href="#">
								<span class="pi-accordion-toggle"></span>
								Montaje y Desmontaje de Grúa Torre
							</a>
						</h5>

						<div class="pi-accordion-content">
							<div>
						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="montaje_modelo" class="form-control" id="exampleInputName-1" placeholder="Modelo de la Grúa">
							</div>
						</div>
						<!-- End first name form -->

						<!-- First name form -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-cog"></i>
								</div>
								<input type="text" name="montaje_altura" class="form-control" id="exampleInputName-1" placeholder="Altura (A la cual montara la Grúa o Desde la Cual Desmontara la Grúa)">
							</div>
						</div>
						<!-- End first name form -->

						<!-- Message -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-pencil"></i>
								</div>
								<textarea class="form-control" name="montaje_mensaje" id="exampleInputMessage-1" placeholder="Comentarios" rows="4"></textarea>
							</div>
						</div>
						<!-- End message form -->
						
						
						
							</div>
						</div>
					</div>
					<!-- End accordion item -->

					
				</div>
				<!-- End accordion -->
				
			</div>
			<!-- End col 6 -->

					<!-- Col 6 -->
			<div class="pi-col-sm-12">
				
				<!-- Accordion -->
				<div class="pi-accordion">
					
					<!-- Accordion item -->
					<div class="pi-accordion-item">
						<h5 class="pi-accordion-title">
							<a href="#">
								<span class="pi-accordion-toggle"></span>
								Contratación de servicio Técnico, Compra de Equipos u otros
							</a>
						</h5>

						<div class="pi-accordion-content">
							<div>

						<!-- Message -->
						<div class="form-group">
							<div class="pi-input-with-icon">
								<div class="pi-input-icon">
									<i class="icon-pencil"></i>
								</div>
								<textarea class="form-control" name="servicio_mensaje" id="exampleInputMessage-1" placeholder="Describa Brevemente su requerimiento" rows="4">
								</textarea>
							</div>
						</div>
						<!-- End message form -->

						<p>
						Dependiendo de la complejidad del trabajo se acordaran visitas técnicas previas antes de presentar una cotización formal.
						</p>
					
						
							</div>
						</div>
					</div>
					<!-- End accordion item -->

					
				</div>
				<!-- End accordion -->
				
			</div>
			<!-- End col 6 -->
			<hr class="pi-divider-gap-10">
							
						<!-- Submit button -->
						<p>
							<button type="submit" class="btn pi-btn-base pi-uppercase pi-weight-200 pi-letter-spacing">
								<i class="icon-check pi-icon-left"></i>Enviar Solicitud
							</button>
						</p>
						<!-- End submit button -->
						
					</form>
					<!-- End forms -->
					
				</div>
				<!-- End col 6 -->	
		</div>
	</div>
			
		</div>
		<!-- End row -->
		
	</div>
</div>
	
<!-- - - - - - - - - - END SECTION - - - - - - - - - --></div>


</body>
</html>