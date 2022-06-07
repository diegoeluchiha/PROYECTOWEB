<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\NombreModel;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username','email', 'password','type'];


 }