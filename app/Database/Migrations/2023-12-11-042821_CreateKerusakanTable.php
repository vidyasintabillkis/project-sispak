<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKerusakanTable extends Migration
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

            'kodeKerusakan' => [
                'type'              => 'VARCHAR',
                'constraint'        => '10',
                'unique'            => true,
            ],

            'namaKerusakan' => [
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
        $this->forge->createTable('kerusakan', true);
    }

    public function down()
    {
        $this->forge->dropTable('kerusakan', true);
    }
}