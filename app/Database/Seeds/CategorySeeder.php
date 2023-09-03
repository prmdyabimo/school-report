<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'name'  => 'Pembullyan'
            ],
            [
                'name'  => 'Kerusakan Fasilitas'
            ]
        ];

        $this->db->table('categorys')->insertBatch($datas);
    }
}
