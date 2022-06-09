<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmailController extends BaseController
{

    public function index(){
        // $dataHeader=[
        //     'title'=>'Contacto'
        //    // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
        //     ];
        echo view('template/header');
        echo view('email/contacto');
        echo view('template/footer');
    }
    public function email()
    {

        $datos =[
            'email' => $this->request->getPost('email'),
            'asunto' => $this->request->getPost('asunto'),
            'mensaje' => $this->request->getPost('mensaje'),
        ];
        $email = \Config\Services::email();

        $config['protocol'] = 'smtp';
        $config['SMTPHost'] =  'smtp.mailtrap.io';
        $config['SMTPPort']  = 2525;
        $config['SMTPUser'] = 'd7e106815799e5';
        $config['SMTPPass'] =  '077bc9a5bfb011';
        $config['CRLF'] =  "\r\n";
        $config['newline'] = "\r\n";

        $email->initialize($config);
        
    $email->setFrom($datos['email']);
    $email->setTo('correoempresa@gmail.com');
    // $email->setCC('another@another-example.com');
    // $email->setBCC('them@their-example.com');

    $email->setSubject($datos['asunto']);
    $email->setMessage($datos['mensaje']);

    $email->send();
        echo "mensaje enviado con exito";
  
    }  
}
