<?php
$this->layout('default');
$this->assign('title', '¿Quienes Somos? :: Gruas Tagar');
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
	<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- Breadcrumbs -->
<div class="pi-section-w pi-shadow-inside-top pi-section-parallax" style="background-image: url(img_external/gallery/team-smiling.jpg);">
	<div class="pi-texture" style="background: rgba(24, 28, 32, 0.8);"></div>
	<div class="pi-section pi-section-md pi-titlebar pi-titlebar-breadcrumb-right pi-titlebar-small">
		<h1>¿Quienes Somos?</h1>

		<div class="pi-breadcrumb">Seccion:
			<ul>
				<li><?=  $this->Html->link( 'Inicio', '/pages/home',['class' => '']); ?> </li>
				<li><?=  $this->Html->link( '¿Quienes Somos?', '/pages/empresa',['class' => '']); ?></li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white pi-slider-enabled">
	<div class="pi-section pi-padding-top-bottom-80">

		<div class="pi-row pi-padding-bottom-20">
			<div class="pi-col-sm-6 pi-padding-bottom-40">

			   <?php foreach ($tblquienes_somos as $nosotros): ?>

				<!-- Slider -->
				<div class="pi-slider-wrapper pi-slider-arrows-inside pi-slider-show-arrow-hover">
					<div class="pi-slider pi-slider-animate-opacity">

						<!-- Slide -->
						<div class="pi-slide">
							<div class="pi-img-w pi-img-round-corners pi-img-shadow pi-img-with-overlay">
								<?= $this->Html->image('quienes_somos/'.$nosotros['txtImagen01']) ?> 
							</div>
						</div>
						<!-- End slide -->

						<!-- Slide -->
						<div class="pi-slide">
							<div class="pi-img-w pi-img-round-corners pi-img-shadow pi-img-with-overlay">
								<?= $this->Html->image('quienes_somos/'.$nosotros['txtImagen02']) ?> 
							</div>
						</div>
						<!-- End slide -->

					</div>
				</div>
				<!-- End slider -->

			</div>
			<div class="pi-col-sm-6 pi-padding-bottom-40">

				<h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-20 pi-margin-top-minus-5">
					<?=$nosotros['strTitulo01']?>
				</h2>

				<p class="lead-24 pi-weight-300">
					<em><?=$nosotros['strSubtitulo01']?></em>
				</p>

				<p><?=$nosotros['txtTexto01']?></p>
			</div>
		</div>

		<div class="pi-row">
			<div class="pi-col-sm-12">

				<!-- Tabs -->
				<ul class="pi-tabs-navigation pi-tabs-navigation-justified pi-tabs-navigation-transparent pi-responsive-sm" id="myTabs1">
					<li class="pi-active">
						<?=  $this->Html->link( $nosotros['strTitulo02'], '#history',['class' => 'icon-book-open', 'target' => '']); ?>  
					</li>
					<li>
						<?=  $this->Html->link( $nosotros['strTitulo03'], '#vision',['class' => 'icon-eye', 'target' => '']); ?>  
					</li>
					<li>
						<?=  $this->Html->link( $nosotros['strTitulo04'], '#phylosophy',['class' => 'icon-flash', 'target' => '']); ?>  
					</li>
				</ul>
				<!-- End tabs -->


				<!-- Tabs content -->
				<div class="pi-tabs-content pi-tabs-content-transparent">

					<!-- Tab content item -->
					<div class="pi-tab-pane pi-active" id="history">
						<p>
							<?=$nosotros['txtTexto02']?>
						</p>
					</div>
					<!-- End tab content item -->

					<!-- Tab content item -->
					<div class="pi-tab-pane" id="vision">
						<p>
							<?=$nosotros['txtTexto03']?>
						</p>
					</div>
					<!-- End tab content item -->

					<!-- Tab content item -->
					<div class="pi-tab-pane" id="phylosophy">
						<p>
							<?=$nosotros['txtTexto04']?>
						</p>
					</div>
					<!-- End tab content item -->

				</div>
				<!-- End tabs content -->
			</div>
		</div>
		
		<hr class="pi-divider-gap-30">

		    <?php endforeach; ?>   
		<!-- End openings -->
	</div>
</div>


<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

</body>
</html>
