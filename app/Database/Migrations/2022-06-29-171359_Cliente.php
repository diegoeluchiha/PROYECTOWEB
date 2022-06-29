<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cliente extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cliente'          => [
                'type'           => 'int',
                'constraint'     => 5,
                'unsigned'       => true,//unsigned se usa para manejar solo valores positivos
                'auto_increment' => true,
            ],
            'nombre_cliente'          => [
                'type'           => 'varchar',
                'constraint'     => '20',//unsigned se usa para manejar solo valores positivos
                'unique'        =>true,
            ],
            'rut'          => [
                'type'           => 'int',
                'constraint'     => '13',//unsigned se usa para manejar solo valores positivos
            
            ],
            'telefono'          => [
                'type'           => 'varchar',
                'constraint'     => '12',//unsigned se usa para manejar solo valores positivos
                'unique'        =>true,
            ],       
       
        ]);
        $this->forge->addKey('id_cliente', true);//este define la priamry key es decir la clave principal de mi tabla
        $this->forge->createTable('cliente');
    }

    public function down()
    {
        $this->forge->dropTable('cliente');
    }
}
