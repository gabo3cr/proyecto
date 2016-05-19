<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Log\Log;



/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }

        $this->set(compact('page', 'subpage'));

        log::info('Mostrando las imagenes slider home');
        $this->loadModel('tblslider_home');
        $tblslider_home = $this->tblslider_home->find();
        $tblslider_home = $tblslider_home->toArray();
        Log::info(json_encode($tblslider_home));
        $this->set('tblslider_home',$tblslider_home);

        log::info('Mostrando las imagenes marcas ');
        $this->loadModel('tblmarcas');
        $tblmarcas = $this->tblmarcas->find()->order(array('idMarcas'));
        $tblmarcas = $tblmarcas->toArray();
        Log::info(json_encode($tblmarcas));
         $this->set('tblmarcas',$tblmarcas);

        log::info('Mostrando registro de empresa ');
        $this->loadModel('tblquienes_somos');
        $tblquienes_somos = $this->tblquienes_somos->find();
        $tblQuienesSomos = $tblquienes_somos->toArray();
        Log::info(json_encode($tblquienes_somos));
        $this->set('tblquienes_somos',$tblquienes_somos);

        log::info('Mostrando registro de servicios ');
        $this->loadModel('tblservicios');
        $tblservicios = $this->tblservicios->find();
        $tblQuienesSomos = $tblservicios->toArray();
        Log::info(json_encode($tblservicios));
        $this->set('tblservicios',$tblservicios);

        log::info('Mostrando titulo servicios');
        $this->loadModel('tblsistema_base');
        $tblsistema_base = $this->tblsistema_base->find('all');
        $tblsistema_base = $tblsistema_base->toArray();
        Log::info(json_encode($tblsistema_base));
        $this->set('tblsistema_base',$tblsistema_base);

        log::info('Mostrando categoria de galeria');
        $this->loadModel('tblgaleria_categoria');
        $tblgaleria_categoria = $this->tblgaleria_categoria->find();
        $tblgaleria_categoria = $tblgaleria_categoria->toArray();
        Log::info(json_encode($tblgaleria_categoria));
        $this->set('tblgaleria_categoria',$tblgaleria_categoria);

        log::info('Mostrando galeria');
        $this->loadModel('tblgaleria');
        $tblgaleria = $this->tblgaleria->find();
        $tblgaleria = $tblgaleria->toArray();
        Log::info(json_encode($tblgaleria));
        $this->set('tblgaleria',$tblgaleria);

        log::info('Mostrando trabajos recientes');
        $this->loadModel('tbltrabajos_recientes');
        $tbltrabajos_recientes = $this->tbltrabajos_recientes->find();
        $tbltrabajos_recientes = $tbltrabajos_recientes->toArray();
        Log::info(json_encode($tbltrabajos_recientes));
        $this->set('tbltrabajos_recientes',$tbltrabajos_recientes);


        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }

    public function sendMail(){

    }

    public function home()
    {
        
    }

     public function empresa()
    {
      
    }

      public function servicios()
    {
        
    }

       public function cotizaciones()
    {
        
    }

       public function contacto()
    {
        
    }

      public function presupuesto()

      {
        
      }
}
