<?php
$this->layout('default');
$this->assign('title', 'Inicio :: Gruas Tagar');
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body class="">
    <div class="tp-banner-container">
            <div class="tp-banner pi-revolution-slider" >
                <ul class="">   

                    <!-- SLIDE -->
                    <?php foreach ($tblslider_home as $image): ?>
                   
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        
                            <?= $this->Html->image('slider_home/'.$image['txtImagen']); ?> 


                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption sfl str"
                             data-x="45" data-hoffset="0"
                             data-y="236"
                             data-speed="500"
                             data-start="2600"
                             data-easing="Back.easeInOut"
                             data-endspeed="300"
                             style="z-index: 6; font-size: 20px; color: #fff; font-weight: 300; line-height: 28px; background: rgba(33, 37, 43, 0.8); padding: 12px 16px; border-radius: 3px;">
                             <?=$image['strTitulo']?>
                        </div>
                     <?php endforeach; ?>
                      

                    </li>
                </ul>
            </div>
        </div>

        <span class="revolution-slider"></span>

        <!-- - - - - - - - - - END SECTION - - - - - - - - - -->

        <!-- - - - - - - - - - SECTION - - - - - - - - - -->

        <div class="pi-section-w pi-shadow-inside-top pi-section-dark">
            <div class="pi-texture" style="background: url(img/hexagon.png) repeat;"></div>
            <div class="pi-section pi-padding-top-50 pi-padding-bottom-30">
                
                <!-- Row -->
                <div class="pi-row">
                    
                    <!-- Col 9 -->
                    <div class="pi-col-sm-9 pi-center-text-xs">
                        <h3 class="pi-weight-300">
                            ¿Deseas saber mas sobre nuestros servicios?
                        </h3>
                        
                        <p class="lead-16">
                            Contactenos a traves de nuestros telefonos, redes sociales o en via online.
                        </p>
                    </div>
                    <!-- End col 9 -->

                    <div class="pi-clearfix pi-visible-xs"></div>

                    <!-- Col 3 -->
                    <div class="pi-col-sm-3 pi-text-right pi-center-text-xs">
                        <p class="pi-margin-top-5">                       
                         <?=  $this->Html->link( 'Ver mas..', '/pages/servicios',['class' => 'btn pi-btn-base pi-btn-no-border pi-btn-big', 'target' => 'blank']); ?>  
                        </p>
                    </div>
                    <!-- End col 3 -->
                    
                </div>
                <!-- End row -->

            </div>
        </div>

        <!-- - - - - - - - - - END SECTION - - - - - - - - - -->

        <!-- - - - - - - - - - SECTION - - - - - - - - - -->

        <div class="pi-section-w pi-section-white piCounter">
            <div class="pi-section pi-padding-bottom-30">
                
                <h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-25">
                    Trabajos Recientes
                </h2>
               
        <?php foreach ($tbltrabajos_recientes as $trabajo): ?>
                <!-- Portfolio gallery -->
                <div class="pi-row pi-liquid-col-xs-3 pi-gallery pi-padding-bottom-20">
                    
                    <!-- Portfolio item -->
                    <div class="pi-gallery-item pi-padding-bottom-40">
                        <div class="pi-img-w pi-img-round-corners pi-img-shadow">       
                         <a href="servicios"><?= $this->Html->image( 'trabajos_recientes/'.$trabajo['txtImagen']); ?></a>
                        </div>
                        <h3 class="h6 pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-5"><a href="pages/servicios" class="pi-link-dark"><?=$trabajo['strTitulo']?></a></h3>
                    </div>
                    <!-- End portfolio item -->
        <?php endforeach; ?>
                </div>
                <!-- End portfolio gallery -->
            <hr class="pi-divider-gap-60">

        <h2 class="h4 pi-weight-700 pi-uppercase pi-letter-spacing pi-has-bg pi-margin-bottom-30">
            Marcas 
        </h2>
    </div>
        <!-- Logos gallery -->
        <div class="pi-row pi-liquid-col-2xs-2 pi-liquid-col-sm-5 pi-gallery pi-gallery-small-margins">

            <!-- Logo -->
     <?php foreach ($tblmarcas as $image): ?>

            <div class="pi-gallery-item">
                    <span class="pi-img-border-double pi-img-opacity-30" style="background: #f8fafa;">
                        <?= $this->Html->image('marcas/'.$image['txtImagen']) ?> 
                    </span>
                    </a>
                </div>
            </div>
            <!-- End logo -->
        </div>
        <!-- End logos gallery -->
    <?php endforeach; ?>    
                
        <!-- - - - - - - - - - END SECTION - - - - - - - - - -->
    </div>

</body>
</html>
