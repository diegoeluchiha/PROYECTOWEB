<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\ProductoModel;

class ProductoModel extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','descripcion', 'cantidad'];


 }