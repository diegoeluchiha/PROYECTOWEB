<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Controllers\BaseController;

class Cliente extends BaseController
{
    public function index(){
        
        $user=new UserModel();
        $data=[
            'users'=>$user->asObject()
            ->paginate(5),
            'pager' => $user->pager
        ];
        $this->_loadDefaultView('Listado de usuarios',$data,'index');
    }

    // public function test(){
    //     echo "Hola mundo codeigniter 4";
    // }

    public function new(){
        $user=new UserModel();
        $validation =  \Config\Services::validation();
        $this->_loadDefaultView('Crear usuario',['validation'=>$validation,'user'=>new UserModel()],'new');

    }

    public function create(){
        helper('user');
        $user= new UserModel();
       if( $this->validate('users')){

            $id = $user->insert([
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'type' => $this->request->getPost('rol'),
                'password' =>hashPassword($this->request->getPost('password')),
            ]);
            // $this->_upload();
            return redirect()->to("/cliente/$id/edit")->with('message', 'Usuario creado con exito');
        }
        return redirect()->back()->withInput();
        // else{
       
        // }
        //      // echo "error";
        //      $validation =  \Config\Services::validation();
        //      $this->_loadDefaultView('Crear pelicula',['validation'=>$validation],'new');
    }


   // edicion
    public function edit($id=null){
        // helper('user');

        // //echo hashPassword('hola');
        // echo password_verify('hola','$2y$10$NM3.iBJq9k1wzFRCil7V.ORzUec8/gvGuoWY/P92F6/nk2QtYBzc.');

        
        $user=new UserModel();

        if ($user->find($id)==null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        // echo 'sesion: '.session('message');
        $validation =  \Config\Services::validation();
        $this->_loadDefaultView('Actualizar contraseña',
        ['validation'=>$validation,'user'=>$user->asObject()->find($id),],'edit');

    }


    public function update($id=null){
        helper('user');
        $user= new UserModel();

        if ($user->find($id)==null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

       if( $this->validate('usersUpdate')){
            // echo "Datos: ";
            // echo $this->request->getPost('title');
            // echo $this->request->getPost('description');

            $user->update($id,[
                'password' =>hashPassword( $this->request->getPost('password')),
            ]);
            
            return redirect()->to('/cliente')->with('message', 'Contraseña editada con exito.');
        }
        return redirect()->back()->withInput();
    }
// edicion fin
    
    
    public function delete($id = null){
        $user= new UserModel();

        if ($user->find($id)==null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $user->delete($id);

        return redirect()->to('cliente')->with('message', 'Usuario eliminado');

    }


    private function _loadDefaultView($title , $data, $v){


        $dataHeader=[
            'title'=>$title
           // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
            ];

        echo view("template/header",$dataHeader);
        echo view("dashboard/user/$v", $data);
        echo view("template/footer");
    }


}