<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetalleProyecto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'int',
                'constraint'     => 5,
                'auto_increment' => true,
            ],
            'id_proyecto'          => [
                'type'           => 'int',
                'constraint'     => 5,
               
            ]
            ,
            'id_producto'          => [
                'type'           => 'int',
                'constraint'     => 5,
               
            ],
            'cantidad_producto_proyecto'   => [
                'type'           => 'int',
                'constraint'     => 5,
                
            ]
       
       
        ]);
        $this->forge->addKey('id', true);//este define la priamry key es decir la clave principal de mi tabla
        $this->forge->addForeignKey('id_proyecto', 'proyectos', 'id');
        $this->forge->addForeignKey('id_producto', 'producto', 'id');
        $this->forge->addForeignKey('cantidad_producto_proyecto', 'producto', 'id');
        $this->forge->createTable('detalle_proyecto');
        
    }

    public function down()
    {
        $this->forge->dropTable('detalle_proyecto');
    }
}
