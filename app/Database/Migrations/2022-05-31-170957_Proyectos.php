<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Proyectos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'int',
                'constraint'     => 5,
                'auto_increment' => true,
            ],
            'nombre_proyecto'          => [
                'type'           => 'varchar',
                'constraint'     => '255',
               
            ],
          
            'descripcion'          => [
                'type'           => 'varchar',
                'constraint'     => '255',
            
            ],
            'cantidad_producto'          => [
                'type'           => 'int',
                'constraint'     => 5,
            
            ],

            'fecha_inicio'      => [
                'type'           => 'datetime',
                'constraint'     =>6,
             
            ],
            'fecha_fin'      => [
                'type'           => 'datetime',
                'constraint'     => 6,
         
            ],
       
       
       
        ]);
        $this->forge->addKey('id', true);//este define la priamry key es decir la clave principal de mi tabla
        // $this->forge->addForeignKey('cantidad_producto', 'detalle_proyecto', 'cantidad_producto_proyecto');
        $this->forge->createTable('proyectos');
    }

    public function down()
    {
        $this->forge->dropTable('proyectos');
    }
}
