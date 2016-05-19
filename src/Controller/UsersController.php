<?php
/**
 * Created by PhpStorm.
 * User: SinAsignari54GB1TB
 * Date: 18/01/2016
 * Time: 03:50 PM
 */

namespace App\Controller;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;

class UsersController extends AppController {


    public function save()
    {
      $this->printServiceData("Registro de usuarios");
         $this->loadModel('Users');
         $registrationToSave = $this->Users->newEntity();
         $registrationToSave->users = $_POST['users'];
         $registrationToSave->correo = $_POST['correo'];
         $registrationToSave->empresa = $_POST['empresa'];
         $cotizacionToSave->telescopica_peso = $_POST['gt_peso'];
         $cotizacionToSave->telescopica_carga = $_POST['gt_descripcion'];
         $cotizacionToSave->telescopica_lugar = $_POST['gt_lugar'];
         $cotizacionToSave->telescopica_altura = $_POST['gt_altura'];
         $cotizacionToSave->telescopica_distancia = $_POST['gt_distancia'];
         $cotizacionToSave->telescopica_descripcion = $_POST['gt_mensaje'];

         $cotizacionToSave->torre_capacidad = $_POST['torre_capacidad'];
         $cotizacionToSave->torre_descripcion = $_POST['torre_mensaje'];

         $cotizacionToSave->planta_capacidad = $_POST['planta_capacidad'];
         $cotizacionToSave->planta_descripcion = $_POST['planta_mensaje'];

         $cotizacionToSave->plataforma_descripcion = $_POST['plataforma_descripcion'];
         $cotizacionToSave->plataforma_origen = $_POST['plataforma_origen'];
         $cotizacionToSave->plataforma_destino = $_POST['plataforma_destino'];
         $cotizacionToSave->plataforma_descripcion = $_POST['plataforma_mensaje'];
         
         $cotizacionToSave->camionArticulado_peso = $_POST['brazo_peso'];
         $cotizacionToSave->camionArticulado_carga = $_POST['brazo_descripcion'];
         $cotizacionToSave->camionArticulado_lugar = $_POST['brazo_lugar'];
         $cotizacionToSave->camionArticulado_descripcion = $_POST['brazo_mensaje'];

         $cotizacionToSave->montajeDesmontaje_modelo = $_POST['montaje_modelo'];
         $cotizacionToSave->montajeDesmontaje_altura = $_POST['montaje_altura'];
         $cotizacionToSave->montajeDesmontaje_descripcion = $_POST['montaje_mensaje'];
         
         $cotizacionToSave->servicioTecnico = $_POST['servicio_mensaje'];
         $registrationToSave->id_users = $this->request->session()->read('User.sessionId');
         $result = $this->Users->save($registrationToSave); 

    }

        public function sendPlainMail()
    {
      $this->printServiceData("Registro de email");
         $this->sendPlainMail('gabo3cr@gmail.com', 'gruas', $_POST['empresa']);
         $this->render('/Pages/cotizaciones');
           
    }
    
     private function printServiceData($serviceName)

     {
       LOG::info('Service Named Invoked: ' . $serviceName);
       LOG::info('POST_INFO: ' . json_encode($_POST));
     }
}

   


