<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddAuthPermissions extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'manage-users',
            'description'    => 'manage all users',
        ];
        $this->db->table('auth_permissions')->insert($data);
        $data = [
            'name' => 'regular-user',
            'description'    => 'regular user',
        ];
        $this->db->table('auth_permissions')->insert($data);
    }
}
