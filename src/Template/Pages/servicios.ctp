<?php
$this->layout('default');
$this->assign('title', 'Servicios :: Gruas Tagar');
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body class="">


<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- Breadcrumbs -->
<div class="pi-section-w pi-shadow-inside-top pi-section-parallax">
    <div class="pi-texture" style="background: rgba(24, 28, 32, 0.8);"></div>
    <div class="pi-section pi-section-md pi-titlebar pi-titlebar-breadcrumb-right pi-titlebar-small">
        <h1>Servicios</h1>

        <div class="pi-breadcrumb">Seccion:
            <ul>
               <li><?=  $this->Html->link( 'Inicio', '/pages/home',['class' => '', 'target' => '']); ?></li>
                <li><?=  $this->Html->link( 'Servicios', '/pages/servicios',['class' => '', 'target' => '']); ?>
            </ul>
        </div>
    </div>
</div>
<!-- End breadcrumbs -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white">
    <div class="pi-section pi-padding-bottom-10">
    
        <!-- Row -->
        <div class="pi-row">
          
     
            <!-- Col 10 -->
            <div class="pi-col-sm-10 pi-col-sm-offset-1 pi-padding-bottom-60">
                <p class="lead-30 pi-text-dark pi-text-center">
                   <?=$tblsistema_base[13]['strTitulo']?>
                </p>
            </div>
            <!-- End col 10 -->
        </div>
        <!-- End row -->


    <div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->
<div class="pi-section-w pi-section-white">
    <div class="pi-section pi-padding-bottom-80">

<?php foreach ($tblservicios as $servicios): ?>   
       
        <!-- Left alignment -->
        <h4 class="pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-25">
            <?=$servicios['strTitulo']?>
        </h4>

        <div class="pi-img-w pi-img-round-corners pi-img-left" style="width: 240px;">
            <?= $this->Html->image('servicios/'.$servicios['txtImagen']) ?> 
        </div>

        <p><?=$servicios['txtTexto']?></p>

        <br /><br /><br /><br />
        <!-- End left alignment -->
   
    <?php endforeach; ?>   

        <hr class="pi-divider-big">   
        </div>
        <!-- End row -->       
    </div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - --></div>

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-text-center">
     <h1 class="pi-uppercase pi-weight-400 pi-has-border pi-has-tall-border pi-has-short-border pi-margin-bottom-50">
        Galeria
    </h1>
</div>

 
<div class="pi-section-w pi-section-white">
    <div class="pi-section pi-padding-bottom-60">
        
        <!-- Filter -->
        <div class="pi-pagenav pi-padding-bottom-20 pi-big pi-text-center" data-isotope-nav="isotope">
    <?php foreach ($tblgaleria_categoria as $categoria): ?> 
            <ul>
                <li><?=  $this->Html->link( 'Todos', '#',['class' => 'pi-active', 'data-filter' => '*', 'target' => '']); ?>
                </li>

                <li><a href="#" ><?=$categoria['strTitulo']?></a></li>

            </ul>
        </div>

    <?php endforeach; ?>  
        <!-- End filter -->
        
        <!-- Portfolio gallery -->
        <div id="isotope" class="pi-row pi-liquid-col-xs-2 pi-liquid-col-sm-3 pi-gallery pi-gallery-small-margins pi-text-center isotope">
            
            <!-- Portfolio item -->
        <?php foreach ($tblgaleria as $galeria): ?> 
            <!-- Portfolio item -->
            <div class="Beautiful Morning pi-gallery-item isotope-item"><!--aki va el titulo de la categoria-->
                <div class="pi-img-w pi-img-round-corners pi-img-shadow">
                    <a href="<?=  $galeria['txtImagen'] ?>" class="pi-colorbox">
                       <?= $this->Html->image('galeria/'.$galeria['txtImagen']) ?> 
                        <div class="pi-img-overlay pi-no-padding pi-img-overlay-darker">
                            <div class="pi-caption-centered">
                                <div>
                                    <span class="pi-caption-icon pi-caption-scale icon-search"></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <h3 class="h6 pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-5"><?=$categoria['strTitulo']?></h3>
            </div>
            <!-- End portfolio item -->
        <?php endforeach; ?>  
            <!-- End portfolio item -->
            
        </div>
        <!-- End portfolio gallery -->
        
    </div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

</body>
</html>
