<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmailController extends BaseController
{

    public function index(){
     $dataHeader=[
            'title'=>'Contacto'
        //    // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
            ];
        echo view('template/header',$dataHeader);
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
        $config['SMTPUser'] = '878f160823cedd';
        $config['SMTPPass'] =  '9baa93af1fb47a';
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
    return redirect()->to("/cliente")->with('message','correo enviado con exito.');
  
    }  
}
