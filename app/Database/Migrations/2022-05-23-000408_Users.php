<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
            'username'          => [
                'type'           => 'varchar',
                'constraint'     => '20',//unsigned se usa para manejar solo valores positivos
                'unique'        =>true,
            ],
            'email'          => [
                'type'           => 'varchar',
                'constraint'     => '100',//unsigned se usa para manejar solo valores positivos
                'unique'        =>true,
            ],
            'password'          => [
                'type'           => 'varchar',
                'constraint'     => '255',//unsigned se usa para manejar solo valores positivos
            
            ],
            'type'      => [
                'type'           => 'ENUM',
                'constraint'     => ['admin', 'regular'],
                'default'        => 'regular',
            ],
       
       
       
        ]);
        $this->forge->addKey('id', true);//este define la priamry key es decir la clave principal de mi tabla
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
