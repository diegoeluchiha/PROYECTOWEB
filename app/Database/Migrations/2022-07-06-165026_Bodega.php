<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bodega extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'int',
                'constraint'     => 5,
                'auto_increment' => true,
            ],
            'tipo_producto'          => [
                'type'           => 'varchar',
                'constraint'     => '255',
                
            ],
            'estado'          => [
                'type'           => 'varchar',
                'constraint'     => '255',
                
            ],
            'cantidad'          => [
                'type'           => 'int',
                'constraint'     => 5,
                
            ],
       
       
        ]);
        $this->forge->addKey('id', true);//este define la priamry key es decir la clave principal de mi tabla
        $this->forge->createTable('bodega');
    }

    public function down()
    {
        $this->forge->dropTable('bodega');
    }
}
