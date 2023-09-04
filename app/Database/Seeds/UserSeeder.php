<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'      => 'Administrator',
            'email'     => 'adminsmk17@gmail.com',
            'telephone' => null,
            'image'     => 'default.png',
            'role'      => 'ADMIN',
            'password'  => password_hash('AdminSMK17', PASSWORD_DEFAULT)
        ];

        $this->db->table('users')->insert($data);
    }
}
