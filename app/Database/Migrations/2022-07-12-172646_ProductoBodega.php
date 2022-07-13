<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductoBodega extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'int',
                'constraint'     => 5,
                'auto_increment' => true,
            ],
            'id_bodega'          => [
                'type'           => 'int',
                'constraint'     => 5,
            ],
            'id_producto_bodega'          => [
                'type'           => 'int',
                'constraint'     => 5,
            ],


        ]);    
        $this->forge->addKey('id', true);//este define la priamry key es decir la clave principal de mi tabla
/*         $this->forge->addField('CONSTRAINT FOREIGN KEY (id_bodega) REFERENCES bodega(id)');
        $this->forge->addField('CONSTRAINT FOREIGN KEY (id_producto_bodega) REFERENCES producto(id)'); */
        $this->forge->addForeignKey('id_bodega', 'bodega', 'id');
        $this->forge->addForeignKey('id_producto_bodega', 'producto', 'id');
        $this->forge->createTable('productobodega');
    }

    public function down()
    {
        $this->forge->dropTable('productobodega');
    }
}
