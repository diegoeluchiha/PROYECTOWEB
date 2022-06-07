<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Producto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'int',
                'constraint'     => 5,
                'unsigned'       => true,//unsigned se usa para manejar solo valores positivos
                'auto_increment' => true,
            ],
            'nombre'          => [
                'type'           => 'varchar',
                'constraint'     => '255',//unsigned se usa para manejar solo valores positivos
                
            ],
            'descripcion'          => [
                'type'           => 'varchar',
                'constraint'     => '255',//unsigned se usa para manejar solo valores positivos
                
            ],
            'cantidad'          => [
                'type'           => 'int',
                'constraint'     => 5,//unsigned se usa para manejar solo valores positivos
                
            ],
       
       
       
        ]);
        $this->forge->addKey('id', true);//este define la priamry key es decir la clave principal de mi tabla
        $this->forge->createTable('producto');
    }

    public function down()
    {
        $this->forge->dropTable('producto');
    }
}
