<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSolusiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],

            'kodeSolusi' => [
                'type'              => 'VARCHAR',
                'constraint'        => '10',
                'unique'            => true,
            ],

            'namaSolusi' => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
            ],

            'created_at' => [
                'type' => "DATETIME",
                'null' => true,
            ],
            'updated_at' => [
                'type' =>'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' =>'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('solusi', true);
    }

    public function down()
    {
        $this->forge->dropTable('solusi', true);
    }
}
