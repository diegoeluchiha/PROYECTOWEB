<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use App\Controllers\BaseController;

class CrudController extends BaseController
{
    public function index()
    {
        $dataHeader=[
            'title'=>'Listado de productos'
           // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
            ];
        $dat=new ProductoModel();
        $data['nombre']=$dat->findAll();
        echo view('template/header',$dataHeader);
        echo view('vista',$data);
        echo view('template/footer');
    }

    public function crear(){
        $dataHeader=[
            'title'=>'Agregar producto'
           // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
            ];
        $validation =  \Config\Services::validation();
        echo view('template/header',$dataHeader);
        echo view('crud/crear',['validation'=>$validation]);
        echo view('template/footer');

    }

    public function guardar(){
        $dataHeader=[
            'title'=>'Agregar producto'
           // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
            ];
        $bd=new ProductoModel();
        if ($this->validate('productos')) {
            $id = $bd->insert([
                'nombre' => $this->request->getPost('nombre'),
                'descripcion' => $this->request->getPost('descripcion'),
                'cantidad' => $this->request->getPost('cantidad'),
            ]);
            return redirect()->to('/');
        }else {
            $validation =  \Config\Services::validation();
            echo view('template/header',$dataHeader);
            echo view('crud/crear',['validation'=>$validation]);
            echo view('template/footer');
    
        }
        //  return redirect()->to('/');
    }
    public function borrar($id=null){
        $nombre=new ProductoModel();
        $nombre->where('id',$id)->delete($id);
        return redirect()->to('/');
        
    }

    public function editar($id=null){
        $dataHeader=[
            'title'=>'Editar producto'
           // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
            ];
        $bd=new ProductoModel();
        $datos['informacion']=$bd->where('id',$id)->first();
        echo view('template/header',$dataHeader);
        echo view('crud/editar',$datos);
        echo view('template/footer');

    }

    public function actualizar(){
        $bd=new ProductoModel();
        $datos =[
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'cantidad' => $this->request->getPost('cantidad'),
        ];
        $id=$this->request->getPost('id');
        $bd->update($id,$datos);
        return redirect()->to('/');

    }

 
}
