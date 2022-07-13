<?php

namespace App\Models;

use CodeIgniter\Model;

class ProyectoModel extends Model
{
    protected $table            = 'proyectos';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nombre_proyecto','descripcion','fecha_inicio','fecha_fin'];

}
