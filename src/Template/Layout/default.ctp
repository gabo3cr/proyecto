<!DOCTYPE html>
<html>
<head>
    <title>
        <?= h($this->fetch('title')) ?>
    </title>
    <?= $this->Html->charset() ?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

    <!-- CSS -->
    <?= $this->Html->css('3dParty/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('global.css') ?>
    <?= $this->Html->css('3dParty/rs-plugin/css/pi.settings.css') ?>
    <?= $this->Html->css('3dParty/colorbox/colorbox.css') ?>
    <?= $this->Html->css('typo.css') ?>
     <?= $this->Html->css('portfolio.css') ?>
     <?= $this->Html->css('page-nav.css') ?>
    <?= $this->Html->css('testimonials.css') ?>
    <?= $this->Html->css('slider.css') ?>
    <?= $this->Html->css('counters.css') ?>
    <?= $this->Html->css('social.css') ?>
    <?= $this->Html->css('tooltips.css') ?>
    <?= $this->Html->css('tabs.css') ?>
    <?= $this->Html->css('shadows.css') ?>
    <?= $this->Html->css('accordion.css') ?>

    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic'
          rel='stylesheet' type='text/css'/>
    <?= $this->Html->css('3dParty/fontello/css/fontello.css') ?>
</head>




<!-- Header -->
<div class="pi-header">

<!-- Header row -->
<div class="pi-section-w pi-section-dark">
    <div class="pi-section pi-row-sm">
  
        <!-- Phone -->
        <div class="pi-row-block pi-row-block-txt">
            <i class="pi-row-block-icon icon-phone pi-icon-base pi-icon-square"></i>Telefonos:
            <strong><?=$tblsistema_base[8]['txtValor']?></strong>


        </div>
        <!-- End phone -->
        <!-- Email -->    
        <!-- Phone -->
  
        <div class="pi-row-block pi-row-block-txt pi-hidden-xs"><i
                class="pi-row-block-icon icon-mail pi-icon-base pi-icon-square"></i>Email:
                <strong><?=$tblsistema_base[10]['txtValor']?></strong>  
        </div>
        <!-- End email -->
        <!-- Social icons -->
        <div class="pi-row-block pi-pull-right pi-hidden-2xs">
            <ul class="pi-social-icons pi-stacked pi-jump pi-full-height pi-bordered pi-small pi-colored-bg clearFix">
                <li><a href="<?= $tblsistema_base[3]['txtValor']?>" class="pi-social-icon-twitter"><i class="icon-twitter"></i></a></li>
                <li><a href="<?= $tblsistema_base[2]['txtValor']?>" class="pi-social-icon-facebook"><i class="icon-facebook"></i></a></li>
                <li><a href="<?= $tblsistema_base[5]['txtValor']?>" class="pi-social-icon-dribbble"><i class="icon-instagram"></i></a></li>
                 <li><a href="<?= $tblsistema_base[4]['txtValor']?>" class="pi-social-icon-instagram"><i class="icon-youtube"></i></a></li>
            </ul>
        </div>
        <!-- End social icons -->

        <!-- Text -->
        <div class="pi-row-block pi-row-block-txt pi-pull-right pi-hidden-xs">Siguenos en:</div>
        <!-- End text -->

    </div>
</div>
<!-- End header row -->

<div class="pi-header-sticky">
<!-- Header row -->
<div class="pi-section-w pi-section-white pi-shadow-bottom pi-row-reducible">
<div class="pi-section pi-row-lg">

<!-- Logo -->

<div class="pi-row-block pi-row-block-logo">
       <?= $this->Html->image('logo/'.$tblsistema_base[1]['txtValor']); ?> 
</div>
<!-- End logo -->


<!-- Menu -->
<div class="pi-row-block pi-pull-right">
    <ul class="pi-simple-menu pi-has-hover-border pi-full-height pi-hidden-sm">
        <li>
            <?= $this->Html->link('Inicio', '/pages/home', ['class' => 'active']); ?>
        </li>
        
        <li>
            <?= $this->Html->link('¿Quienes Somos?', '/pages/empresa'); ?>
        </li>

        <li>
            <?= $this->Html->link('Servicios', '/pages/servicios'); ?>
        </li>
        
        <li>
            <?= $this->Html->link('Cotizaciones', '/pages/cotizaciones'); ?>
        </li>
        
        <li>
            <?= $this->Html->link('Contacto', '/pages/contacto'); ?>
        </li>
    </ul>
</div>
<!-- End menu -->

<!-- Mobile menu button -->
<div class="pi-row-block pi-pull-right pi-hidden-lg-only pi-hidden-md-only">
    <button class="btn pi-btn pi-mobile-menu-toggler" data-target="#pi-main-mobile-menu">
        <i class="icon-menu pi-text-center"></i>
    </button>
</div>
<!-- End mobile menu button -->

        <!-- Mobile menu -->
        <div id="pi-main-mobile-menu" class="pi-section-menu-mobile-w pi-section-dark">
            <div class="pi-section-menu-mobile">

                <!-- Search form -->
            
                <!-- End search form -->

                <ul class="pi-menu-mobile pi-items-have-borders pi-menu-mobile-dark">
                    <li class="active">
                   
                        <span><?= $this->Html->link('Inicio', '/pages/home', ['class' => 'active']); ?></span>

                    </li>    
                    
                    <li>
                        
                         <span><?= $this->Html->link('¿Quienes Somos?', '/pages/empresa'); ?></span>
                           
                    </li>

                    <li>    
                      
                        <span> <?= $this->Html->link('Servicios', '/pages/servicios'); ?></span>

                    </li>

                    <li>
                        
                        <span>  <?= $this->Html->link('Cotizaciones', '/pages/cotizaciones'); ?></span>

                    </li>

                    <li>
                       
                        <span>  <?= $this->Html->link('Contacto', '/pages/contacto'); ?></span>

                    </li>
                </ul>

            </div>
        </div>
        <!-- End mobile menu -->

</div>
</div>
<!-- End header row -->
</div>

</div>
<!-- End header -->

    <?= $this->fetch('content') ?>




<!--==============================footer=================================-->
<!-- Footer -->
    <!-- Widget area -->
    <div class="pi-section-w pi-border-bottom pi-border-top-light pi-section-dark">
        <div class="pi-section pi-padding-bottom-10">

            <!-- Row -->
            <div class="pi-row">

                <!-- Col 4 -->
                <div class="pi-col-md-4 pi-padding-bottom-30">

                    <h6 class="pi-margin-bottom-25 pi-weight-700 pi-uppercase pi-letter-spacing">
                        Latest Tweet
                    </h6>

                    <!-- Twitter -->
                    <div class="pi-footer-tweets">
                        <ul class="pi-bullets-circle pi-bullets-base pi-bullets pi-list-big-margins">
                            <li>
                                <span class="pi-bullet-icon">
                            <i class="icon-twitter"></i></span>
                            <?=  $this->Html->link( '', '#',['class' => 'PIthemess on Twitter', 'target' => '_blank']); ?> Meet Aura 1.6 version. A lot of new things are coming soon. <br>
                            <span class="pi-smaller-text pi-italic pi-text-opacity-50">Jun. 29, 2014</span></li>
                            <li>
                                <span class="pi-bullet-icon">
                                    <i class="icon-twitter"></i>
                                </span>
                                <?=  $this->Html->link( '', '#',['class' => 'PIthemess on Twitter', 'target' => '_blank']); ?>@PIthemess</a> Hey, this is PI Themes twitter account! <br>
                                <span class="pi-smaller-text pi-italic pi-text-opacity-50">Jun. 29, 2014</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End twitter -->
                    
                </div>
                <!-- End col 4 -->

                <div class="pi-clearfix pi-hidden-lg-only pi-hidden-md-only"></div>

                <!-- Col 4 -->
                <div class="pi-col-md-4 pi-col-sm-6 pi-padding-bottom-30" style=" background-position: 50% 55px; background-repeat: no-repeat;">                         
                    <h6 class="pi-margin-bottom-25 pi-weight-700 pi-uppercase pi-letter-spacing">
                        Contactenos
                    </h6>

                    <!-- Contact info -->
                    <ul class="pi-list-with-icons pi-list-big-margins">

                        <li>
                            <span class="pi-bullet-icon"><i class="icon-location"></i></span>
                            <strong>Direccion:</strong> <?=$tblsistema_base[7]['txtValor']?> <br>
                        </li>

                        <li>
                            <span class="pi-bullet-icon"><i class="icon-phone"></i></span>
                            <strong>Telefonos:</strong> <?=$tblsistema_base[8]['txtValor']?>,<br>
                                                        <?=$tblsistema_base[9]['txtValor']?>
                        </li>

                        <li>
                            <span class="pi-bullet-icon"><i class="icon-mail"></i></span>
                            <strong>Email:</strong><?=$tblsistema_base[10]['txtValor']?><br>
                                                    <?=$tblsistema_base[11]['txtValor']?>
                        </li>

                        <li>
                            <span class="pi-bullet-icon"><i class="icon-clock"></i></span>
                            <strong><?=$tblsistema_base[12]['txtValor']?></strong>
                            <br>

                        </li>

                    </ul>
                    <!-- End contact info -->

                </div>
                <!-- End col 4 -->

                <!-- Col 4 -->
                <div class="pi-col-md-4 pi-col-sm-6 pi-padding-bottom-30">

                    <h6 class="pi-margin-bottom-25 pi-weight-700 pi-uppercase pi-letter-spacing">
                        Gruas Tagar
                    </h6>
                    <ul class="pi-list-with-icons pi-list-big-margins">

                        <li>
                            <span class="pi-bullet-icon"><i class="icon-cog pi-icon-left"></i></span>
                            <?= $this->Html->link('¿Quienes Somos?', '/pages/empresa'); ?>
                        <li>
                            <span class="pi-bullet-icon"><i class="icon-cog pi-icon-left"></i></span>
                            <?= $this->Html->link('Servicios', '/pages/servicios'); ?>

                        <li>
                            <span class="pi-bullet-icon"><i class="icon-cog pi-icon-left"></i></span>
                             <?= $this->Html->link('Cotizaciones', '/pages/cotizaciones'); ?>
                        </li>

                        <li>
                            <span class="pi-bullet-icon"><i class="icon-cog pi-icon-left"></i></span>
                             <?= $this->Html->link('Contacto', '/pages/contacto'); ?>
                        </li>

                    </ul>
                    <!-- End contact form -->

                </div>
                <!-- End col 4 -->

            </div>
            <!-- End row -->

        </div>
    </div>
    <!-- End widget area -->

    <!-- Copyright area -->
    <div class="pi-section-w pi-section-dark pi-border-top-light pi-border-bottom-strong-base">
        <div class="pi-section pi-row-lg pi-center-text-2xs pi-clearfix">

            <!-- Social icons -->
            <div class="pi-row-block pi-pull-right pi-hidden-2xs">
                <ul class="pi-social-icons-simple pi-small clearFix">
                    <li>  <?=  $this->Html->link( '', $tblsistema_base[2]['txtValor'],['class' => 'pi-social-icon-facebook icon-facebook', 'target' => '_blank']); ?>
                    </li>
                    <li>  <?=  $this->Html->link( '', $tblsistema_base[3]['txtValor'],['class' => 'pi-social-icon-twitter icon-twitter', 'target' => '_blank']); ?>
                    </li>
                     <li>  <?=  $this->Html->link( '', $tblsistema_base[4]['txtValor'],['class' => 'pi-social-icon-dribbble icon-youtube', 'target' => '_blank']); ?>
                    </li>
                    <li>  <?=  $this->Html->link( '', $tblsistema_base[5]['txtValor'],['class' => 'pi-social-icon-dribbble icon-instagram', 'target' => '_blank']); ?>
                    </li>                
                </ul>
            </div>
            <!-- End social icons -->

            <!-- Footer logo -->
            <div class="pi-row-block pi-row-block-logo pi-row-block-bordered"><a href="#"><img src="" alt=""></a></div>
            <!-- End footer logo -->

            <!-- Text -->
            <span class="pi-row-block pi-row-block-txt pi-hidden-xs">Gruas Tagar&copy; 2016. &laquo;&raquo;.
                All right reserved.
            </span>
            <!-- End text -->

        </div>
    </div>
    <!-- End copyright area -->
    <!-- End footer -->

</div>

<div class="pi-scroll-top-arrow" data-scroll-to="0"></div>
        
             <!-- JS -->

    <?= $this->Html->script('3dParty/jquery-1.11.0.min.js') ?>
    <?= $this->Html->script('3dParty/bootstrap/js/bootstrap.min.js') ?>
    <?= $this->Html->script('3dParty/isotope/isotope.js') ?>
    <?= $this->Html->script('3dParty/colorbox/jquery.colorbox-min.js') ?>
    <?= $this->Html->script('3dParty/requestAnimationFramePolyfill.min.js') ?>
    <?= $this->Html->script('3dParty/jquery.easing.1.3.js') ?>
    <?= $this->Html->script('3dParty/jquery.scrollTo.min.js') ?>
    <?= $this->Html->script('pi.global.js') ?>
    <?= $this->Html->script('pi.init.isotope.js') ?>
    <?= $this->Html->script('3dParty/jquery.touchSwipe.min.js') ?>
    <?= $this->Html->script('pi.init.colorbox.min.js') ?>
    <?= $this->Html->script('3dParty/rs-plugin/js/jquery.themepunch.tools.min.js') ?>
    <?= $this->Html->script('3dParty/rs-plugin/js/jquery.themepunch.revolution.min.js') ?>
    <?= $this->Html->script('3dParty/inview.js') ?>
    <?= $this->Html->script('3dParty/gauge.min.js') ?>
    <?= $this->Html->script('pi.slider.js') ?>
    <?= $this->Html->script('pi.init.slider.js') ?>
    <?= $this->Html->script('pi.tooltip.js') ?>
    <?= $this->Html->script('pi.init.tooltip.js') ?>
    <?= $this->Html->script('3dParty/jquery.easing.1.3.js') ?>
    <?= $this->Html->script('pi.counter.js') ?>
    <?= $this->Html->script('pi.init.counter.js') ?>
    <?= $this->Html->script('pi.tab.js') ?>
    <?= $this->Html->script('pi.init.tab.js') ?>
    <?= $this->Html->script('pi.init.colorbox.js') ?>
    <?= $this->Html->script('pi.parallax.js') ?>
    <?= $this->Html->script('pi.init.parallax.js') ?>
    <?= $this->Html->script('pi.init.revolutionSlider.js') ?>
    <?= $this->Html->script('pi.accordion.js') ?>



</body>
</html>