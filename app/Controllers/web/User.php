<?php
namespace App\Controllers\web;
use App\Models\UserModel;
use App\Controllers\BaseController;

class User extends BaseController
{
    public function login(){
        // $session = \Config\Services::session()
        $this->_loadDefaultView([],'login');
         return $this->_redirectAuth();
    }

    public function login_post(){
        helper('user');
        $userModel=new UserModel();
        $email_username=$this->request->getPost('email');
        $password=$this->request->getPost('password');

        $user=$userModel->select('id,username,email,password,type')->orwhere('username', $email_username)->orwhere('email', $email_username)->first();
        
        if (!$user) {
            return redirect()->to('/login')->with('message', 'Usuario y/o contaseña incorrectos.');
            return;
        }
        if (verifyPassword($password,$user['password'])) {
            unset($user['password']);
            $session = session();
            $session->set($user);
            return $this->_redirectAuth();
           
        }
        return redirect()->to('/login')->with('message', 'Usuario y/o contaseña incorrectos.');
    }

    public function logout(){
        $session = session();
        // $session->set($array);
         echo $session->username;
         session_destroy();
         return redirect()->to("/login");
        
    }

    // public function test(){
    //     echo "Hola mundo codeigniter 4";
    // }
    private function _redirectAuth(){
        $session = session();

        if ($session->type=='admin') {
            return redirect()->to("/")->with('message', 'Bienvenido '.$session->username);
        }elseif($session->type=='regular'){
            return redirect()->to("/")->with('message', 'Bienvenido '.$session->username);

        }
    }
    private function _loadDefaultView( $data, $view){
        
        echo view("template_login/header");
        echo view("user/control/$view");
        echo view("template_login/footer");
    
    }

    

}