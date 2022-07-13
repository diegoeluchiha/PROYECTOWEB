<?php

namespace App\Controllers;

use App\Models\ProyectoModel;
use App\Controllers\BaseController;

class crud_proyecto_controller extends BaseController
{
    public function index()
    {
        $dataHeader=[
            'title'=>'Listado de Proyectos'
           // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
            ];
        $dat=new ProyectoModel();
        $data['nombre']=$dat->findAll();
        echo view('template/header',$dataHeader);
        echo view('proyectos',$data);
        echo view('template/footer');
    }

    public function crear(){
        $dataHeader=[
            'title'=>'Agregar Proyecto'
           // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
            ];
        $validation =  \Config\Services::validation();
        echo view('template/header',$dataHeader);
        echo view('crud_proyecto/crear',['validation'=>$validation]);
        echo view('template/footer');

    }

    public function guardar(){
        $dataHeader=[
            'title'=>'Agregar producto'
           // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
            ];
        $bd=new ProyectoModel();
            $id = $bd->insert([
                'nombre_proyecto' => $this->request->getPost('nombre_proyecto'),
                'descripcion' => $this->request->getPost('descripcion'),
                'fecha_inicio' => $this->request->getPost('fecha_inicio'),
                'fecha_fin' => $this->request->getPost('fecha_fin'),
            ]);
            return redirect()->to('/proyecto');
        
        //  return redirect()->to('/');
    }
    public function borrar($id=null){
        $nombre=new ProyectoModel();
        $nombre->where('id',$id)->delete($id);
        return redirect()->to('/proyecto');
        
    }

    public function editar($id=null){
        $dataHeader=[
            'title'=>'Editar proyecto'
           // 'title2'=>'listado de bromas', //puedes pasar otro dato,ademas del primero
    
            ];
        $bd=new ProyectoModel();
        $datos['informacion']=$bd->where('id',$id)->first();
        echo view('template/header',$dataHeader);
        echo view('crud_proyecto/editar',$datos);
        echo view('template/footer');

    }

    public function actualizar(){
        $bd=new ProyectoModel();
        $datos =[
            'nombre_proyecto' => $this->request->getPost('nombre_proyecto'),
            'descripcion' => $this->request->getPost('descripcion'),
            'fecha_inicio' => $this->request->getPost('fecha_inicio'),
            'fecha_fin' => $this->request->getPost('fecha_fin'),
        ];
        $id=$this->request->getPost('id');
        $bd->update($id,$datos);
        return redirect()->to('/proyecto');

    }

 
}
