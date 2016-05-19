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

use Cake\Core\Exception\Exception;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;


class CotizacionesController extends AppController
{


    public function registroCotizacion()
    {


        $user = $_POST['users'];
        $correo = $_POST['correo'];
        $empresa = $_POST['empresa'];
//
//         $cotizacionToSave->telescopica_peso = $_POST['gt_peso'];
//         $cotizacionToSave->telescopica_carga = $_POST['gt_descripcion'];
//         $cotizacionToSave->telescopica_lugar = $_POST['gt_lugar'];
//         $cotizacionToSave->telescopica_altura = $_POST['gt_altura'];
//         $cotizacionToSave->telescopica_distancia = $_POST['gt_distancia'];
//         $cotizacionToSave->telescopica_descripcion = $_POST['gt_mensaje'];
//
//         $cotizacionToSave->torre_capacidad = $_POST['torre_capacidad'];
//         $cotizacionToSave->torre_descripcion = $_POST['torre_mensaje'];
//
//         $cotizacionToSave->planta_capacidad = $_POST['planta_capacidad'];
//         $cotizacionToSave->planta_descripcion = $_POST['planta_mensaje'];
//
//         $cotizacionToSave->plataforma_descripcion = $_POST['plataforma_descripcion'];
//         $cotizacionToSave->plataforma_origen = $_POST['plataforma_origen'];
//         $cotizacionToSave->plataforma_destino = $_POST['plataforma_destino'];
//         $cotizacionToSave->plataforma_descripcion = $_POST['plataforma_mensaje'];
//
//         $cotizacionToSave->camionArticulado_peso = $_POST['brazo_peso'];
//         $cotizacionToSave->camionArticulado_carga = $_POST['brazo_descripcion'];
//         $cotizacionToSave->camionArticulado_lugar = $_POST['brazo_lugar'];
//         $cotizacionToSave->camionArticulado_descripcion = $_POST['brazo_mensaje'];
//
//         $cotizacionToSave->montajeDesmontaje_modelo = $_POST['montaje_modelo'];
//         $cotizacionToSave->montajeDesmontaje_altura = $_POST['montaje_altura'];
//         $cotizacionToSave->montajeDesmontaje_descripcion = $_POST['montaje_mensaje'];
//
//         $cotizacionToSave->servicioTecnico =

        Log::info("En cotizaciones");
        Log::info(json_encode($_POST));
        Log::info(json_encode($_GET));
        try {
            $varToSend = array('users' => $user, 'correo' => $correo, 'empresa' => $empresa);
            $this->sendMail('luttingere@gmail.com', 'Cotizacion', 'cotizaciones', $varToSend);
        } catch (Exception $e) {
            Log::info("Error: " . $e->getMessage());
        }
        Log::info("Antes e renderizar");
        $this->redirect('/pages/cotizaciones');
    }


    function sendMail($to, $subject, $template, $params)
    {
        $email = new Email('default');
        $email->emailFormat('html');
        $email->template($template);
        $email->viewVars($params);
        $email->from(array('gabo3gr@gmail.com' => 'Gruas'));
        $email->to($to);
        $email->subject($subject);
        $email->send();
        Log::info("Email sent to: " . $to);
    }


    private function printServiceData($cotizacion)

    {
        LOG::info('Service Named Invoked: ' . $cotizacion);
        LOG::info('GET_INFO: ' . json_encode($_GET));
        LOG::info('POST_INFO: ' . json_encode($_POST));
    }


}
