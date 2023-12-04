<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddAdminAccount extends Seeder
{
    public function run()
    {
        $data = [
            'id' => 1,
            'email' => 'admin@gmail.com',
            'username'    => 'admin',
            'jenis_kelamin' => 'Laki-laki',
            'password_hash' => '$2y$10$AB.V5BMP4b1DVuaEF7mdWuQR22aCi6FM6c0TtapApDPRh6gFSLiuy',
            'active' => 1
        ];
        $this->db->table('users')->insert($data);
    }
}
