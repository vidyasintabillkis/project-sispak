<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddAuthGroups extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'admin',
            'description'    => 'administrator',
        ];
        $this->db->table('auth_groups')->insert($data);
        $data = [
            'name' => 'user',
            'description'    => 'user',
        ];
        $this->db->table('auth_groups')->insert($data);
    }
}
