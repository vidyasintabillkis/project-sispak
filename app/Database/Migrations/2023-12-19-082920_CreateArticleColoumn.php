<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArticleColoumn extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
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
        $this->forge->addKey('id', true);
        $this->forge->createTable('artikel');
    }

    public function down()
    {
        $this->forge->dropTable('artikel');
    }
}
