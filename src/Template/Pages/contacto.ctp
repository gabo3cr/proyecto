<?php
$this->layout('default');
$this->assign('title', 'Contacto :: Gruas Tagar');
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- Breadcrumbs -->
<div class="pi-section-w pi-shadow-inside-top pi-section-parallax" style="background-image: url(img_external/gallery/team-smiling.jpg);">
	<div class="pi-texture" style="background: rgba(24, 28, 32, 0.8);"></div>
	<div class="pi-section pi-section-md pi-titlebar pi-titlebar-breadcrumb-right pi-titlebar-small">
		<h1>Contacto</h1>

		<div class="pi-breadcrumb">Seccion:
			<ul>
				<li ><?=  $this->Html->link( 'Inicio', '/pages/home',['class' => '', 'target' => '']); ?></li>  
				<li><?=  $this->Html->link( 'Contacto', '/pages/contacto',['class' => '', 'target' => '']); ?></li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white piICheck piStylishSelect piSocials">
	<div class="pi-section">

		<div class="pi-row">
			<div class="pi-col-sm-8">
				<h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
					Contactenos a traves de:
				</h2>

				<!-- Contact form -->
				<form role="form" action="" class="pi-contact-form">
					<div class="pi-error-container"></div>
					<div class="pi-row pi-grid-small-margins">
						<div class="pi-col-sm-6">
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputName1">Nombre *</label>
								<input type="text" class="form-control form-control-name" id="exampleInputName1"
									   placeholder="e.g. Adam Smith">
							</div>
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputEmail1">Correo electronico *</label>
								<input type="email" class="form-control form-control-email" id="exampleInputEmail1"
									   placeholder="contacto@example.com">
							</div>
						</div>
						<div class="pi-col-sm-6">
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputCompany">Nombre de la compania</label>
								<input type="text" class="form-control form-control-company-name" id="exampleInputCompany"
									   placeholder="e.g. PI Studio">
							</div>
							<div class="form-group pi-padding-bottom-10">
								<label for="exampleInputPhone">Telefono</label>
								<input type="text" class="form-control form-control-phone" id="exampleInputPhone"
									   placeholder="e.g. +11111111">
							</div>
						</div>
					</div>
				
					<div class="form-group pi-padding-bottom-10">
						<label for="exampleInputMessage1">Menesaje *</label>
						<textarea class="form-control form-control-comments" id="exampleInputMessage1" placeholder="Descripcion del mensaje" rows="3"></textarea>
					</div>
					
					<p>
						<button class="btn pi-btn-base">
							Enviar Mensaje<i class="icon-paper-plane pi-icon-right"></i>
						</button>
					</p>
				</form>
				<!-- End contact form -->

			</div>
			<div class="pi-col-sm-4">

				<h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
					Contactenos
				</h2>
				
				<ul class="pi-list-with-icons pi-list-big-margins pi-padding-bottom-10">
					<li>
						<span class="pi-bullet-icon">
							<i class="icon-location"></i>
						</span>Direccion <br><?=$tblsistema_base[7]['txtValor']?><br>
					
					<li>
						<span class="pi-bullet-icon">
							<i class="icon-mail"></i></span>
							<?=$tblsistema_base[10]['txtValor']?><br>
                            <?=$tblsistema_base[11]['txtValor']?>
                    </li>
					
					<li><span class="pi-bullet-icon">
						<i class="icon-phone"></i></span>
						<strong><?=$tblsistema_base[8]['txtValor']?></strong>,<br>
						<strong><?=$tblsistema_base[9]['txtValor']?></strong>
					</li>


					<li>
						<span class="pi-bullet-icon">
							<i class="icon-clock"></i>
						</span><strong><?=$tblsistema_base[12]['txtValor']?></strong>
					</li>
				</ul>
				<ul class="pi-social-icons pi-small pi-jump pi-colored-bg pi-round pi-padding-bottom-10">
					<li>
						<a href="<?= $tblsistema_base[2]['txtValor']?>" class="pi-social-icon-facebook">
							<i class="icon-facebook"></i>
						</a>
					</li>
					<li>
						<a href="<?= $tblsistema_base[3]['txtValor']?>" class="pi-social-icon-twitter">
							<i class="icon-twitter"></i>
						</a>
					</li>
					<li>
						<a href="<?= $tblsistema_base[5]['txtValor']?>" class="pi-social-icon-dribbble">
							<i class="icon-instagram"></i>
						</a>
					</li>
					<li>
						<a href="<?= $tblsistema_base[4]['txtValor']?>" class="pi-social-icon-instagram">
							<i class="icon-youtube"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>

</body>
</html>
